<div class="row mt-3 contactSection">
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/' . $staticInformation->logo) }}" alt="Logo" />
        <p>{!! $staticInformation->description !!}</p>
    </div>
    <div class="col-md-4 text-center">
        <h1 class="mt-5">Contact Us</h1>
        <ul class="pr-5 mb-4">
            <li>
                <i class="fas fa-map-marker-alt"></i>
                {{ $staticInformation->place }}
            </li>
            <li>
                <i class="fas fa-phone-volume"></i>
                {{ $staticInformation->phone }}
            </li>
            <li>
                <i class="far fa-envelope"></i>
                {{ $staticInformation->email }}
            </li>
        </ul>
        <ul class="pr-5 contactSocSites">
            <li>
                <a href="{{ $staticInformation->instagram_link }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="{{ $staticInformation->facebook_link }}" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="{{ $staticInformation->twitter_link }}" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-4 text-center">
        <h1 class="mt-5">Request Quote</h1>
        <form class="text-left requestQuote">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="firstname">
                        First Name
                        <input type="text" name="firstName" id="firstname" autocomplete="off" />
                    </label>
                </div>
                <div class="col-md-6">
                    <label for="lastname">
                        Last Name
                        <input type="text" name="lastName" id="lastname" autocomplete="off" />
                    </label>
                </div>
            </div>
            <div class="row pl-3 pr-3">
                <label for="subject">
                    Subject
                    <input type="text" name="subject" id="subject" autocomplete="off" />
                </label>
            </div>
            <div class="row pl-3 pr-3">
                <label for="message">
                    Message
                    <textarea name="message" id="message" rows="3"></textarea>
                </label>
            </div>
            <div class="row pl-3 pr-3">
                <input type="submit" value="Submit" />
            </div>
        </form>
    </div>
</div>
