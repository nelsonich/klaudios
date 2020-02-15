<div class="row mt-3 contactSection">
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/klaudios.png') }}" alt="Logo" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?</p>
    </div>
    <div class="col-md-4 text-center">
        <h1 class="mt-5">Contact Us</h1>
        <ul class="pr-5">
            <li>
                <i class="fas fa-map-marker-alt"></i>
                Lorem, ipsum dolor.
            </li>
            <li>
                <i class="fas fa-phone-volume"></i>
                Lorem, ipsum dolor.
            </li>
            <li>
                <i class="far fa-envelope"></i>
                Lorem, ipsum dolor.
            </li>
        </ul>
        <ul class="pr-5 contactSocSites">
            <li>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                    Facebook
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-4 text-center">
        <h1 class="mt-5">Request Quote</h1>
        <form action="" class="text-left requestQuote">
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