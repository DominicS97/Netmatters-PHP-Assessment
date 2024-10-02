<footer>
    <div class="container" id="footer-cont-1">
        <!-- Div used to move elements on grid as needed -->
        <div>
            <picture>
                <source
                    type="image/webp"
                    srcset="img/webp/logo_main-white-med.webp"
                />
                <img
                    alt="netmatters logo"
                    src="img/logo_main-white-med.png"
                    width="400"
                    height="82"
                    id="logo"
                />
            </picture>

            <h2>Follow us on:</h2>

            <!-- Social buttons -->
            <div id="socials">
                <!-- Facebook -->
                <button class="social" id="fb">
                    <span class="icon-fb"></span>
                </button>

                <!-- LinkedIn -->
                <button class="social" id="linkedin">
                    <span class="icon-lin"></span>
                </button>

                <!-- Twitter -->
                <button class="social" id="twitter">
                    <span class="icon-twitter"></span>
                </button>

                <!-- Instagram -->
                <button class="social" id="insta">
                    <span class="icon-insta"></span>
                </button>
            </div>
        </div>

        <!-- Nested divs used to move elements on grid as needed -->
        <div id="footer-grid">
            <div>
                <h2>About Netmatters</h2>

                <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Our Careers</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li>
                        <a href="#">Data Retention & Disposal Policy</a>
                    </li>
                    <li><a href="#">CCTV Policy</a></li>
                    <li><a href="#">Environmental Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <div>
                <h2>Our services</h2>

                <ul>
                    <li><a href="#">Bespoke Software</a></li>
                    <li><a href="#">IT Support</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Telecoms Services</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Developer Training</a></li>
                </ul>
            </div>

            <div>
                <h2>Our industries</h2>

                <ul>
                    <li><a href="#">Financial Services</a></li>
                    <li><a href="#">Construction</a></li>
                    <li><a href="#">Retail & E-Commerce</a></li>
                    <li><a href="#">Non-Profits</a></li>
                    <li><a href="#">SME's</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Education & Training</a></li>
                    <li><a href="#">Travel & Leisure</a></li>
                </ul>
            </div>

            <div>
                <h2>Locations</h2>

                <ul>
                    <li><a href="#">Cambridge Office</a></li>
                    <li><a href="#">Wymondham Office</a></li>
                    <li><a href="#">Great Yarmouth Office</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright disclaimer -->
    <div id="copyright">
        <div class="container">
            <p>&copy; Copyright Netmatters 2024.</p>
            <p>All rights reserved.</p>
            <p hidden>-</p>
            <p>Sitemap</p>
        </div>
    </div>

    <!-- Cookies button -->
    <aside onclick="popupCookie();">
        <p>Manage Consent</p>
    </aside>

    <button id="chat"><span class="icon-chat"></span></button>
</footer>