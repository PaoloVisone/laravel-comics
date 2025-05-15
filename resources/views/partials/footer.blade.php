<footer>
    <!-- Background Image -->
    <div class="position-relative" style="background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg') }}'); background-size: cover; background-position: top; height: auto; width: 100%;">
        <div class="container d-flex justify-content-between align-items-start py-5">
            <!-- Left: Foot Lists -->
            <div class="text-white d-flex gap-5">
                <div class="d-flex flex-column gap-5">
                    <!-- DC COMICS and Shop lists -->
                    <ul class="list-unstyled">
                        <li><a class="text-light text-decoration-none" href="#">DC COMICS</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Character</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Comics</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Movies</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">TV</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Games</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Videos</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">News</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li><a class="text-light text-decoration-none" href="#">Shop</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Shop DC</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <!-- Other lists side by side -->
                <div class="d-flex gap-5 ">
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a class="text-light text-decoration-none" href="#">DC</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Terms Of Use</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Privacy policy(New)</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Ad Choices</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Advertising</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Jobs</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Subscriptions</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Talent Workshops</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">CPSC Certificates</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Ratings</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Shop Help</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Contact Us</a></li>
                    </ul>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a class="text-light text-decoration-none" href="#">SITES</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">DC</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">MAD Magazine</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">DC Kids</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">DC Universe</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>

            <!-- Right: Logo -->
            
                <figure>
                    <img class="position-absolute opacity-25" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="LOGO-BG" style="width: 600px; bottom: -50px; right: 150px;">
                </figure>
            
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="navbar navbar-expand-lg px-5 bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="btn btn-outline-primary text-light" tabindex="-1" role="button">SIGN-UP NOW!</a>
            <div>
                <span class="text-primary me-3 fw-bold">FOLLOW US</span>
                <img class="p-1" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
                <img class="p-1" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                <img class="p-1" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
                <img class="p-1" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                <img class="p-1" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
            </div>
        </div>
    </div>
</footer>