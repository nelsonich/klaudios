@push('css')
    <link rel="stylesheet" href="{{ asset('css/Games/acceptModal.css') }}">
@endpush
<div id="openModalGameAccept" class="modalbg">
    <div class="dialog">
{{--        <a href="#close" title="Close" class="close">X</a>--}}
        <h2>Привет {{ $user->user_name }} !!!</h2>
        <p>У клаудиос новая идея.</p>
        <p>клаудиос имеет раздел <strong>{{ "<< игры >>" }}</strong></p>
        <button class="btn btn-lg btn-success float-right" id="acceptNext">Next</button>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/Games/openModalGameAccept.js') }}"></script>
@endpush
