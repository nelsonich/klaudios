<div class="row justify-content-center gameCategory">
    <div class="col-md-6">
        <h1 class="text-center text-white">
            <a href="{{ url('/home/games', ['complexity_id' => \Session::get('complexity_id')]) }}" class="text-white">
                <i class="far fa-hand-point-left"></i>
            </a>
            {{ $games->name }}
        </h1>
    </div>
</div>
