<div class="row gameDaska">
    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
        @php
            $step = 0;
        @endphp
        @foreach($games['getCategoryGames'] as $key => $game)
            <li class="nav-item">
                @if($game['getUserGameRightAnswer'])
                    <a class="nav-link" id="game{{ $game->id }}-tab" data-toggle="tab" href="#game{{ $game->id }}" role="tab" aria-controls="game{{ $game->id }}" aria-selected="false">{{ $key+1 }}</a>
                    @php
                        $step++;
                    @endphp
                @else
                    <a class="nav-link {{ $key == $step ? "active" : "disabled" }}" id="game{{ $game->id }}-tab" data-toggle="tab" href="#game{{ $game->id }}" role="tab" aria-controls="game{{ $game->id }}" aria-selected="{{ $key == $step ? "true" : "false" }}">{{ $key+1 }}</a>
                @endif
            </li>
        @endforeach
    </ul>
    <div class="tab-content w-100 text-center position-relative" id="myTabContent">
        @foreach($games['getCategoryGames'] as $key => $game)
            @if($game['getUserGameRightAnswer'])
                <div class="tab-pane p-5 fade" id="game{{ $game->id }}" role="tabpanel" aria-labelledby="game{{ $game->id }}-tab">
                    @if($game['getUserGameWrongAnswer']->isEmpty())
                        <span class="counts">Вопрос решён сразу</span>
                    @else
                        <span class="counts">Вопрос решён с <strong>{{ count($game['getUserGameWrongAnswer']) }}</strong> попытки</span>
                    @endif
                    {!! $game->question !!}

                    <div class="row mt-5 justify-content-center">
                        @foreach($game['getGameAnswers'] as $answer)
                            <div class="col-md-2 answer m-2 {{ $answer->id == $game['getUserGameRightAnswer']['answer_id'] ? "selected rightAnswer" : "wrongAnswer" }}" style="pointer-events: none !important;" data-answerId="{{ $answer->id }}" data-gameId="{{ $game->id }}">
                                <p>{{ $answer->answer }}</p>
                                @if( $answer->image != null)
                                    <img src="{{ asset('images/Games/answers/'. $answer->image) }}" alt="Image" class="w-50" style="height: 70px;">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="tab-pane p-5 fade {{ $key == $step ? "show active" : "" }}" id="game{{ $game->id }}" role="tabpanel" aria-labelledby="game{{ $game->id }}-tab">
                    {!! $game->question !!}

                    <div class="row mt-5 justify-content-center">
                        @foreach($game['getGameAnswers'] as $answer)
                            <div class="col-md-2 answer m-2" data-answerId="{{ $answer->id }}" data-gameId="{{ $game->id }}">
                                <p>{{ $answer->answer }}</p>
                                @if( $answer->image != null)
                                    <img src="{{ asset('images/Games/answers/'. $answer->image) }}" alt="Image" class="w-50" style="height: 70px;">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
        <div class="row justify-content-center">
            <div class="col-md-6">
                <button class="btn btn-success btn-lg" id="selectAnswer" disabled>Принять ответ</button>
            </div>
        </div>
    </div>
</div>
<div id="finish">
    <h1>Конец!!!</h1>
    <p>Все задачи успешно решены.</p>
    <p>Вы прошли уровень.</p>
    <a href="{{ url('/home/games/1') }}" type="button" class="btn btn-success btn-lg float-right">OK!</a>
</div>
