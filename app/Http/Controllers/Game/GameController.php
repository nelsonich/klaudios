<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Games\GameAnswer;
use App\Models\Games\GameCategory;
use App\Models\Games\GameComplexity;
use App\Models\Games\RightAnswer;
use App\Models\Games\UserRightAnswer;
use App\Models\Games\UserWrongAnswer;
use App\Models\NewIdea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function acceptNextGameModal(Request $request)
    {
        $userId = Auth::id();

        $newIdae = NewIdea::where('user_id', $userId)->first();
        $newIdae->is_game = 1;
        $newIdae->save();
        return response()->json('ok');
    }

    public function getGamesCategories(Request $request, $complexity_id)
    {
        $complexity = GameComplexity::with('getGameCategories')->get();
        foreach ($complexity as $item) {
            $item->isSelected = false;
            if ($item->id == $complexity_id) {
                $item->isSelected = true;
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

        return view('Games.welcome', ['complexity' => $complexity]);
    }

    public function getGames(Request $request, $category_id)
    {
        $games = GameCategory::where('id', $category_id)->with('getCategoryGames')->first();

        return view('Games.games', ['games' => $games]);
    }

    public function selectAnswer(Request $request)
    {
        $answerId = $request->post('answerId');
        $gameId = $request->post('gameId');
        $userId = Auth::id();
        $isAnswerTrue = RightAnswer::where('game_id', $gameId)->where('answer_id', $answerId)->exists();
        if ($isAnswerTrue) {
            $isRightAnswer = UserRightAnswer::where('user_id', $userId)->where('game_id', $gameId)->exists();
            if (!$isRightAnswer) {
                UserRightAnswer::create([
                    "user_id" => $userId,
                    "game_id" => $gameId,
                    "answer_id" => $answerId,
                ]);
            }
        } else {
            $isWrongAnswer = UserWrongAnswer::where('user_id', $userId)->where('game_id', $gameId)->where('answer_id', $answerId)->exists();

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
}
