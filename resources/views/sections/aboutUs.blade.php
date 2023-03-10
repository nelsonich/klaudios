<div class="row mt-3 mb-5 aboutSection">
    <div class="sectionTitle m-2 text-center w-100">
        <h1 title="{{ $about->title }}">{{ $about->title }}</h1>
    </div>
    <div class="col-md-6 mt-2">
        <p>{!! $about->description !!}</p>
    </div>
    <div class="col-md-6 mt-2">
        <div class="aboutImage" style="background-image: url('{{ asset('images/' . $about->image) }}');"></div>
    </div>
</div>
