<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Games\GameCategory;
use App\Models\Games\GameComplexity;
use App\Models\Games\RightAnswer;
use App\Models\Games\UserGameStar;
use App\Models\Games\UserRightAnswer;
use App\Models\Games\UserWrongAnswer;
use App\Models\NewIdea;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function acceptNextGameModal(Request $request)
    {
        $userId = Auth::id();

        $newIdea = NewIdea::query()
            ->where('user_id', $userId)
            ->first();

        $newIdea->is_game = 1;
        $newIdea->save();

        UserGameStar::create([
            "user_id" => $userId,
        ]);

        return response()->json('ok');
    }

    public function getGamesCategories(Request $request, $complexity_id)
    {
        $complexity = GameComplexity::query()
            ->with('getGameCategories')
            ->get();

        foreach ($complexity as $item) {
            $item->isSelected = false;
            if ($item->id == $complexity_id) {
                $item->isSelected = true;
                session()->put('complexity_id', $complexity_id);
            }

            foreach ($item['getGameCategories'] as $category) {
                $gameCounts = 0;
                foreach ($category['getCategoryGames'] as $game) {
                    if ($game['getUserGameRightAnswer']) {
                        $gameCounts++;
                    }
                }
                $category->finish = false;
                if (count($category['getCategoryGames']) == $gameCounts) {
                    $category->finish = true;
                }
            }
        }

        return view('Games.welcome', [
            'complexity' => $complexity
        ]);
    }

    public function getGames(Request $request, $category_id)
    {
        $games = GameCategory::query()
            ->where('id', $category_id)
            ->with('getCategoryGames')
            ->first();

        return view('Games.games', [
            'games' => $games
        ]);
    }

    public function selectAnswer(Request $request)
    {
        $userId = Auth::id();
        $answerId = $request->post('answerId');
        $gameId = $request->post('gameId');
        $starCount = $request->post('starCount');

        $isAnswerTrue = RightAnswer::query()
            ->where('game_id', $gameId)
            ->where('answer_id', $answerId)
            ->exists();

        if ($isAnswerTrue) {
            $isRightAnswer = UserRightAnswer::query()
                ->where('user_id', $userId)
                ->where('game_id', $gameId)
                ->exists();

            if (!$isRightAnswer) {
                UserRightAnswer::create([
                    "user_id" => $userId,
                    "game_id" => $gameId,
                    "answer_id" => $answerId,
                ]);

                $stars = UserGameStar::query()
                    ->where('user_id', $userId)
                    ->first();

                $stars->stars += $starCount;
                $stars->save();
            }
        } else {
            $isWrongAnswer = UserWrongAnswer::query()
                ->where('user_id', $userId)
                ->where('game_id', $gameId)
                ->where('answer_id', $answerId)
                ->exists();

            if (!$isWrongAnswer) {
                UserWrongAnswer::create([
                    "user_id" => $userId,
                    "game_id" => $gameId,
                    "answer_id" => $answerId,
                ]);
            }
        }

        return response()->json($isAnswerTrue);
    }

    public function getRating()
    {
        $users = User::with('getGameStars')->get();

        foreach ($users as $user) {
            if ($user['getGameStars']) {
                $gamers['user'] = $user;
                $gamers['starsCount'] = $user['getGameStars']['stars'];
                $sortGamers[] = $gamers;
            }
        }

        $sortByStarsCount = collect($sortGamers)->sortBy('starsCount')->reverse()->toArray();

        return view('Games.rating', [
            'sortByStarsCount' => $sortByStarsCount
        ]);
    }
}
