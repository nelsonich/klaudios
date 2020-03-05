<div class="gameComplexity">
    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
        <div class="row justify-content-center w-100">
            @foreach($complexity as $item)
                <div class="col-md-4 col-sm-6 col-12 mb-1">
                    <li class="nav-item">
                        <a class="nav-link {{ $item->isSelected == true ? "active" : "" }}" id="pills-{{ $item->name }}-tab" href="{{ url('home/games', ['complexity_id' => $item->id]) }}" aria-controls="pills-{{ $item->name }}" aria-selected="{{ $item->isSelected }}">
                            <img src="{{ asset('images/Games/complexity/' . $item->image) }}" alt="{{ $item->name }}" style="width: 30px">
                            {{ mb_convert_case($item->name, MB_CASE_TITLE, "UTF-8") }}
                        </a>
                    </li>
                </div>
            @endforeach
        </div>
    </ul>
</div>
