<div class="weatherLoading"></div>
<div class="weather d-none">
    <h1 class="country"></h1>
    <div class="temp d-flex">
        <img src="{{ asset('images/celsius-icon.svg') }}" alt="Celsius" style="width: 7%;position: relative;left: -10px;top: -15px;">
    </div>
    <div class="description text-right"></div>
</div>


@push('scripts')
    <script src="{{ asset('js/API/weather.js') }}"></script>
@endpush
