<header id="header">
    <div class="container" id="header-cont-1">
        <picture onclick="window.location.href='index.php'">
            <source type="image/webp" srcset="img/webp/logo_main.webp" />
            <img alt="netmatters logo" src="img/logo_main.png" width="402" height="70" />
        </picture>

        <!-- Support button -->
        <button class="blue hidden_button">
            <svg viewBox="0 0 1381 1075.597" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff"
                    d="M470 67v338H170q0-65 23-123t63.5-103.5Q297 133 352 104t118-37zM170 661V491h684v170q0 71-27 133t-73.5 108.5Q707 949 645 976t-133 27q-70 0-133-27-62-27-108.5-73.5T197 794q-27-62-27-133zM554 67q63 8 118 37 54 29 94.5 74.5T831 282q23 58 23 123H554V67z" />
            </svg>
            Support
        </button>

        <!-- Contact button -->
        <button class="grey hidden_button" onclick="location.href='contact-us.php'">
            <svg viewBox="0 0 1381 1075.597" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff"
                    d="M1009 5q-4-2-8-3.5T992 0q-5 0-9.5 1.5T974 5L14 645q-7 5-11 13t-3 17q1 9 6.5 16T20 702l250 100 118 206q4 7 11.5 11.5t16.5 4.5q8 0 15.5-4t11.5-12l67-110 310 124q3 1 6 1.5t6 .5q4 0 8-1t8-3q6-4 10-10t6-13l160-960q1-9-3-18t-12-14zM100 665l742-495-539 578q-2-2-4-3.5t-5-2.5l-194-77zm226 105l606-649-517 805-89-156zm481 177L534 838q-5-2-10-2.5t-10-1.5l421-652-128 765z" />
            </svg>
            Contact
        </button>

        <!-- Search box. Hidden/revealed by media queries -->
        <input type="search" placeholder="Search..." />

        <!-- Search button -->
        <button id="search" class="grey button-box">
            <span class="icon-search"></span>
        </button>

        <!-- Call link. Phone icon -->
        <a id="phone"></a>

        <!-- Nav button. Functionality requires js -->
        <nav>
            <button onclick="navbarToggle()" class="button-box">
                <span class="icon-nav" id="icon-nav"></span>
            </button>
        </nav>

        <!-- 2nd Search box. Hidden/revealed by media queries -->
        <form>
            <input type="search" placeholder="Search..." />
            <span class="icon-search2"></span>
        </form>
    </div>
    <!-- Banner element. Hidden/revealed by media queries -->
    <aside>
        <div class="container" id="header-cont-2">
            <div class="banner_item" id="banner-1">
                <span id="icon-banner-1"></span>
                <h3>Bespoke</h3>
                <h2>Software</h2>
            </div>

            <div class="banner_item" id="banner-2">
                <span id="icon-banner-2"></span>
                <h3>IT</h3>
                <h2>Support</h2>
            </div>

            <div class="banner_item" id="banner-3">
                <span id="icon-banner-3"></span>
                <h3>Digital</h3>
                <h2>Marketing</h2>
            </div>

            <div class="banner_item" id="banner-4">
                <span id="icon-banner-4"></span>
                <h3>Telecoms</h3>
                <h2>Services</h2>
            </div>

            <div class="banner_item" id="banner-5">
                <span id="icon-banner-5"></span>
                <h3>Web</h3>
                <h2>Design</h2>
            </div>

            <div class="banner_item" id="banner-6">
                <span id="icon-banner-6"></span>
                <h3>Cyber</h3>
                <h2>Security</h2>
            </div>

            <div class="banner_item" id="banner-7">
                <span id="icon-banner-7"></span>
                <h3>Developer</h3>
                <h2>Course</h2>
            </div>
        </div>

        <!-- Subheaders -->
        <div class="banner_hidden" id="banner-1b">
            <h2>Our Bespoke Software Services</h2>
            <span></span><a href="#">Bespoke CRM</a> <span></span><a href="#">Business Automation</a> <span></span><a
                href="#">Software Integrations</a> <span></span><a href="#">Mobile App Development</a> <span></span><a
                href="#">Bespoke Databases</a> <span></span><a href="#">Sharepoint Development</a> <span></span><a
                href="#">Operational Systems</a> <span></span><a href="#">Business Central Implementation</a>
            <span></span><a href="#">Internet of Things (IoT) Software</a>
            <span></span><a href="#">Intranet Development</a>
            <span></span><a href="#">Customer Portal Development</a>
            <span></span><a href="#">Reporting Hub</a>
        </div>

        <div class="banner_hidden" id="banner-2b">
            <h2>Our IT Support Services</h2>
            <span></span><a href="#">Managed IT Support</a> <span></span><a href="#">Business IT Support</a>
            <span></span><a href="#">Office 365 for Business</a> <span></span><a href="#">IT Consultancy</a>
            <span></span><a href="#">Cloud Service Provider</a> <span></span><a href="#">Data Backup & Disaster
                Recovery</a>
        </div>

        <div class="banner_hidden" id="banner-3b">
            <h2>Our Digital Marketing Services</h2>
            <span></span><a href="#">Search Engine Optimisation<br />(SEO)</a>
            <span></span><a href="#">Pay Per Click Advertising<br />(PPC)</a>
            <span></span><a href="#">Conversion Rate Optimisation<br />(CRO)</a>
            <span></span><a href="#">Email Marketing</a> <span></span><a href="#">Social Media Marketing</a>
            <span></span><a href="#">Content Marketing</a>
        </div>

        <div class="banner_hidden" id="banner-4b">
            <h2>Our Telecoms Services</h2>
            <span></span><a href="#">Business Mobile</a> <span></span><a href="#">Hosted VoIP Provider</a>
            <span></span><a href="#">Business VoIP Systems</a> <span></span><a href="#">Business Broadband</a>
            <span></span><a href="#">Leased Lines Provider</a> <span></span><a href="#">3CX Systems</a>
        </div>

        <div class="banner_hidden" id="banner-5b">
            <h2>Our Web Design Services</h2>
            <span></span><a href="#">Bespoke Website Design</a>
            <span></span><a href="#">eCommerce Website Design</a>
            <span></span><a href="#">Pay Monthly Websites</a>
            <span></span><a href="#">Branding & Design</a> <span></span><a href="#">Mobile App Development</a>
            <span></span><a href="#">Web Hosting</a>
        </div>

        <div class="banner_hidden" id="banner-6b">
            <h2>Our Cyber Security Services</h2>
            <span></span><a href="#">Cyber Security Assessment</a>
            <span></span><a href="#">Cyber Security Management</a>
            <span></span><a href="#">Cyber Penetration Testing</a>
            <span></span><a href="#">Cyber Essentials Certification</a>
            <span></span><a href="#">PCI Compliance</a> <span></span><a href="#">Hacking Prevention</a>
        </div>

        <div class="banner_hidden" id="banner-7b">
            <h2>Our Developer Course Services</h2>
            <span></span><a href="#">Train For A Career In Tech</a>
            <span></span><a href="#">Skills Bootcamp</a> <span></span><a href="#">Scion Scheme Frequently Asked
                Questions</a>
            <span></span><a href="#">Scion Collaborators</a>
        </div>
    </aside>
</header>