<div class="tab-content" id="pills-tabContent">
    <div class="spinner">
        <div class="spinner-a"></div>
        <div class="spinner-b"></div>
    </div>
    @foreach($complexity as $item)
        <div class="d-none tab-pane fade {{ $item->isSelected == true ? "show active" : "" }}" id="pills-{{ $item->name }}" role="tabpanel" aria-labelledby="pills-{{ $item->name }}-tab">
            @if(!$item['getGameCategories']->isEmpty())
                <div class="row justify-content-center">
                    @foreach($item['getGameCategories'] as $categoryGame)
                        <a href="{{ url('home/game-category', ['game_category_id' => $categoryGame->id]) }}" style="display:contents; text-decoration: none;">
                            <div class="col-md-4 col-sm-5 col-10 m-3 categoriesGame" style="background-image: url('{{ asset('images/Games/categories/' . $categoryGame->image) }}')">
                                <span class="finished {{ $categoryGame->finish ? "" : "d-none" }}">
                                    <i class="far fa-check-circle"></i>
                                </span>
                                <h1>{{ $categoryGame->name }}</h1>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</div>
