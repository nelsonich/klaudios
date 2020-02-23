{{--<div class="row mt-5 featuresSection">
    <div class="offset-md-3 col-md-6">
        <div class="sectionTitle m-2 text-center">
            <p>{!! $features->description !!}</p>
        </div>
        <div>
            <img src="{{ asset('images/art-man-xs.png') }}" alt="Man" class="artMan" />
            <div class="oblako">
                <span>{{ $features->title }}</span>
            </div>
        </div>
    </div>
</div>--}}

<div class="row mt-5">
    <h1 class="w-100 text-center mb-5" title="{{ $features->title }}">{{ $features->title }}</h1>
    <div class="col-md-6 text-center">
        <img src="{{ asset('images/art-man-xs.png') }}" alt="{{ $features->title }}" class="w-25" />
    </div>
    <div class="col-md-6">
        <p>{!! $features->description !!}</p>
    </div>
</div>
