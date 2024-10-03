<?php
require 'db_connection.php';

$sql = "SELECT * FROM news_items ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Full Service Digital Agency | Cambridgeshire &amp; Norfolk |
		Netmatters
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description"
		content="Netmatter's online website and support. Technology leaders and telecoms services" />
	<!-- importing Poppins from google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet" media="print" onload="this.media='all'" />
	<noscript>
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet" type="text/css" />
	</noscript>
	<!-- importing stylesheet -->
	<link rel="stylesheet" href="css/styles.css" />
</head>

<body>

	<?php include 'php/header.php'; ?>

	<main>
		<?php include 'php/menu.php'; ?>

		<!-- Slider -->
		<div id="slider">
			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider1.webp" />
					<img alt="netmatters building" src="img/slider1.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">
					The East of England's Leading Technology Company
				</h2>
				<p class="slider-p">
					Performance-driven digital and technology services with
					complete transparency
				</p>
				<button class="slider-btn purple">
					Why choose us?&nbsp;&nbsp;
				</button>
			</div>

			<!-- Slider items -->
			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider2.webp" />
					<img alt="happy worker" src="img/slider2.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">Bespoke Software</h2>
				<p class="slider-p">
					Delivering expert bespoke software solutions across a
					range of industries.
				</p>
				<button class="slider-btn grey">
					Find out more&nbsp;&nbsp;
				</button>
			</div>

			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider3.webp" />
					<img alt="fixing a computer" src="img/slider3.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">IT Support</h2>
				<p class="slider-p">
					Fast and cost-effective IT support services for your
					business.
				</p>
				<button class="slider-btn blue">
					Find out more&nbsp;&nbsp;
				</button>
			</div>

			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider4.webp" />
					<img alt="happy team" src="img/slider4.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">Digital Marketing</h2>
				<p class="slider-p">
					Generating your new business through results-driven
					marketing activities
				</p>
				<button class="slider-btn green">
					Find out more&nbsp;&nbsp;
				</button>
			</div>

			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider5.webp" />
					<img alt="phone system" src="img/slider5.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">Telecoms Services</h2>
				<p class="slider-p">
					A new approach to connectivity, see how we can help your
					business.
				</p>
				<button class="slider-btn red">
					Find out more&nbsp;&nbsp;
				</button>
			</div>

			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider6.webp" />
					<img alt="happy expert" src="img/slider6.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">Web Design</h2>
				<p class="slider-p">
					For businesses looking to make a strong and effective
					first impression.
				</p>
				<button class="slider-btn purple">
					Find out more&nbsp;&nbsp;
				</button>
			</div>

			<div class="slider-item">
				<picture>
					<source type="image/webp" srcset="img/webp/slider7.webp" />
					<img alt="secure network" src="img/slider7.jpg" width="1910" height="740" />
				</picture>
				<h2 class="header-slider">Cyber Security</h2>
				<p class="slider-p">
					Keeping businesses and their customers sensitive
					information protected.
				</p>
				<button class="slider-btn pink">
					Find out more&nbsp;&nbsp;
				</button>
			</div>
			<div>
				<span class="dot" onclick="changeSlide(1);"></span>
				<span class="dot" onclick="changeSlide(2);"></span>
				<span class="dot" onclick="changeSlide(3);"></span>
				<span class="dot" onclick="changeSlide(4);"></span>
				<span class="dot" onclick="changeSlide(5);"></span>
				<span class="dot" onclick="changeSlide(6);"></span>
				<span class="dot" onclick="changeSlide(7);"></span>
			</div>
		</div>

		<!-- Services grid -->
		<div id="grid">
			<div class="container">
				<h1>Our Services</h1>

				<div class="grid-item" id="grid-1">
					<span class="icon-grid-1"></span>
					<h2>Bespoke Software</h2>
					<p>
						Bespoke software solutions for all your business
						needs including integrations and reporting.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-2">
					<span class="icon-grid-2"></span>
					<h2>IT Support</h2>
					<p>
						Fully managed IT support and consultancy packages
						tailored to meet your exact business needs.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-3">
					<span class="icon-grid-3"></span>
					<h2>Digital Marketing</h2>
					<p>
						Driven brand awareness &amp; ROI through creative
						digital marketing campaigns.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-4">
					<span class="icon-grid-4"></span>
					<h2>Telecoms Services</h2>
					<p>
						Business telephony solutions including mobile &amp;
						connectivity solutions.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-5">
					<span class="icon-grid-5"></span>
					<h2>Web Design</h2>
					<p>
						User-centric design for businesses looking to make a
						lasting impression.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-6">
					<span class="icon-grid-6"></span>
					<h2>Cyber Security</h2>
					<p>
						Prevention, testing, consultancy &amp; breach
						management services.
					</p>
					<button>Read more</button>
				</div>

				<div class="grid-item" id="grid-7">
					<span class="icon-grid-7"></span>
					<h2>Developer Training</h2>
					<p>
						Web design &amp; software training courses designed
						to secure a job in tech.
					</p>
					<button>Read more</button>
				</div>

				<!-- View link. Sent to top with media queries -->
				<div class="view">
					<a href="#">View Our Work&nbsp;</a>
				</div>
			</div>
		</div>

		<!-- 1st client carousel -->
		<div class="carousel1">
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/google-partner.webp" />
				<img alt="Google partner" src="img/google-partner.jpg" width="169" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/living_wage.webp" />
				<img alt="Living wage employer" src="img/living_wage.jpg" width="88" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/norfolk_prohelp.webp" />
				<img alt="Norfolk ProHelp" src="img/norfolk_prohelp.png" width="171" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/investing-in-future-growth.webp" />
				<img alt="Investing in future growth winner" src="img/investing-in-future-growth.jpg" width="175"
					height="58" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/norfolk-carbon-charter.webp" />
				<img alt="Norfolk carbon charter gold" src="img/norfolk-carbon-charter.jpg" width="173" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/PPC_logo.webp" />
				<img alt="Prompt payment code" src="img/PPC_logo.jpg" width="174" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/princess-royal-training.webp" />
				<img alt="Princess royal training award" src="img/princess-royal-training.png" width="274"
					height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/future-50.webp" />
				<img alt="future 50 member" src="img/future-50.jpg" width="44" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/qms.webp" />
				<img alt="quality management" src="img/qms.png" width="142" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/iso_27001.webp" />
				<img alt="information security management" src="img/iso_27001.png" width="142" height="70" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/skills-of-tomorrow.webp" />
				<img alt="skills of tomorrow winner" src="img/skills-of-tomorrow.jpg" width="175" height="58" />
			</picture>
			<picture class="carousel-item1">
				<source type="image/webp" srcset="img/webp/cyber-essentials.webp" />
				<img alt="cyber essentials" src="img/cyber-essentials.jpg" width="149" height="70" />
			</picture>
		</div>

		<!-- Bio and review box -->
		<div id="bio">
			<div class="container">
				<div id="bio-one">
					<h2>Welcome To Netmatters</h2>
					<p>
						Netmatters is a leading
						<a href="#"> Bespoke Software</a>,
						<a href="#"> IT Support</a>, and
						<a href="#"> Digital Marketing</a> company based in
						the East of England with offices in
						<a href="#"> Cambridge</a>,
						<a href="#"> Wymondham</a>, and
						<a href="#"> Great Yarmouth</a>.
					</p>
					<p>
						We aren't tied into contracts with third-party
						providers, so you know that our recommendations for
						your business are based purely with one benefit in
						mind: to help improve your business with the most
						appropriate solutions.
					</p>
					<p>
						We pride ourselves on being an ethical business and
						have a unique business offering and cost model that
						ensures you get the most from our relationship in an
						upfront manner.
					</p>
					<button><span>Why choose us?&nbsp;&nbsp;</span></button>
					<button><span>Our culture&nbsp;&nbsp;</span></button>
				</div>

				<div id="bio-two">
					<h2>What Our Clients Think</h2>
					<p>
						Netmatters stood out from the start. Great guys and
						very easy to work with. Both the build and digital
						marketing teams are clearly skilled -they know their
						stuff! They delivered a website to our (high!)
						expectations and went over and above to ensure we
						were satisfied clients - and we are!
					</p>
					<p>
						Eleanor Bishop, Head of Marketing -
						<a href="#">Ashcroft Partnership LLP</a>
					</p>
					<div>
						<button class="blue">
							<span>Google reviews&nbsp;&nbsp;</span>
						</button>
						<button class="green">
							<span>Trustpilot reviews&nbsp;&nbsp;</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- News -->
		<div id="news">
			<div class="container">
				<h2>Latest News</h2>

				<?php
				if ($result->num_rows > 0) {
					$row_count = 0;
					while ($row = $result->fetch_assoc()) {
						$row_count++;
						$news_id = ($row_count == 1) ? 'news-1' : '';
						$news_id = ($row_count == 2) ? 'news-2' : '';
						$news_id = ($row_count == 3) ? 'news-3' : '';
						?>
						<div class="news-item" id="<?php echo $news_id; ?>">
							<a href="#"><?php echo $row['subject']; ?></a>
							<picture>
								<source type="image/webp" srcset="<?php echo $row['image']; ?>" />
								<img alt="<?php echo $row['subject']; ?> picture" src="<?php echo $row['image_png']; ?>"
									width="455" height="263" />
							</picture>
							<h2 class="newsheader">
								<?php echo $row['title']; ?>
							</h2>
							<h3>- <?php echo $row['reading_time']; ?></h3>
							<p>
								<?php echo $row['text']; ?>
							</p>
							<button>Read more</button>
							<div class="headshot-div">
								<hr />
								<picture>
									<source type="image/webp" srcset="<?php echo $row['author_img']; ?>" />
									<img alt="<?php echo $row['author']; ?> picture" src="<?php echo $row['author_img_png']; ?>"
										width="47" height="47" class="headshot-img" />
								</picture>
								<h2 class="headshot">Posted by <?php echo $row['author']; ?></h2>
								<p class="headshot"><?php echo date('jS F Y', strtotime($row['date'])); ?></p>
							</div>
						</div>
						<?php
						if ($row_count >= 3) {
							break;
						}
					}
				} else {
					echo "<p>Error: No news posts in database</p>";
				}
				?>

				<!-- View link. Sent to top with media queries -->
				<div class="view">
					<a href="#">View All&nbsp;</a>
				</div>
			</div>
		</div>

		<!-- 2nd client carousel -->
		<div class="carousel">
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Black Swan Care Group</h3>
						<p>
							Black Swan Care Group own and manage 21
							high-quality care and residential homes with a
							focus on putting the needs of their residents
							first.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_blackswan.webp" />
					<img alt="Blackswan care group" src="img/logo_blackswan.png" width="122" height="107" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Xupes</h3>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_xupes.webp" />
					<img alt="XUPES logo" src="img/logo_xupes.png" width="200" height="38" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>BEAT</h3>
						<p>
							The UK's eating disorder charity founded in
							1989.
						</p>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_beat.webp" />
					<img alt="Beat eating disorders" src="img/logo_beat.png" width="72" height="70" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Survey Solutions</h3>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_surveysolutions.webp" />
					<img alt="survey solutions" src="img/logo_surveysolutions.png" width="328" height="79" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Girl Guiding Anglia</h3>
						<p>
							Girl Guiding Anglia is part of Girlguiding, the
							UK's leading charity for girls and young women
							in the UK.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_girlguidesanglia.webp" />
					<img alt="girlguiding anglia" src="img/logo_girlguidesanglia.png" width="200" height="118" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Sweetzy</h3>
						<p>
							Sweetzy are an online sweets retailer, based in
							Wymondham.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_sweetzy.webp" />
					<img alt="Sweetzy" src="img/logo_sweetzy.png" width="200" height="58" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Howes Percival</h3>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_howespercival.webp" />
					<img alt="Howes Percival" src="img/logo_howespercival.png" width="200" height="61" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>GDST</h3>
						<p>
							The Girls' Day School Trust (GDST) is the UK's
							leading family of 25 independent girls' schools.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_girlsdayschooltrust.webp" />
					<img alt="girls day school trust" src="img/logo_girlsdayschooltrust.png" width="200" height="61" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Ashcroft Partnership LLP</h3>
						<p>
							Originally founded in 2006 as Ashcroft Anthony,
							they became Ashcroft Partnership LLP in 2020 and
							are one of the top chartered accountancy firms
							in Cambridge, advising entrepreneurs and
							families.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_ashcroft.webp" />
					<img alt="Ashcroft" src="img/logo_ashcroft.png" width="200" height="42" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>One Traveller</h3>
						<p>
							One Traveller, founded in 2007, is a leading
							provider of solo holidays for over 50s.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_onetraveller.webp" />
					<img alt="One Traveller" src="img/logo_onetraveller.png" width="43" height="75" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Searles Leisure Resort</h3>
						<p>
							Searles Leisure Resort, on the beautiful North
							Norfolk coast, is an award-winning UK holiday
							resort for families.
						</p>
						<button>View Our Case Study</button>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_searles.webp" />
					<img alt="Searles" src="img/logo_searles.png" width="200" height="78" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Busseys</h3>
						<p>One of the UK's leading Ford dealerships.</p>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_busseys.webp" />
					<img alt="Busseys" src="img/logo_busseys.png" width="188" height="70" />
				</picture>
			</div>
			<div class="carousel-item">
				<div class="carousel-box-cont">
					<div class="carousel-box">
						<h3>Crane Garden Buildings</h3>
						<p>
							Leading manufacturer and supplier of high-end
							garden rooms, summerhouses, workshops and sheds
							in the UK.
						</p>
					</div>
				</div>
				<picture>
					<source type="image/webp" srcset="img/webp/logo_crane.webp" />
					<img alt="Crane garden buildings" src="img/logo_crane.png" width="287" height="70" />
				</picture>
			</div>
		</div>

		<!-- Removed from site / Newsletter sign-up form -->
		<div hidden id="form">
			<div class="container">
				<h2>Email Newsletter Sign-Up</h2>
				<form>
					<label class="name">Your Name</label><br />
					<input class="name" type="text" /><br />

					<label class="email">Your Email</label><br />
					<input class="email" type="email" /><br />

					<aside>
						<!-- hidden in html for now -->
						<input hidden type="checkbox" />
						<label>Please tick this box if you wish to receive
							marketing information from us. Please see our
							<a href="#">Privacy Policy</a> for more
							information on how we keep your data
							safe.</label><br />
					</aside>

					<!-- Submit button -->
					<button id="subscribe" type="submit" class="subscribe">
						Subscribe
					</button>
				</form>
			</div>
		</div>
	</main>

	<?php include 'php/footer.php'; ?>
	<!-- importing javascript -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="./js/cookies.js"></script>
	<script src="./js/header.js"></script>
	<script src="./js/navbar.js"></script>
	<script src="./js/splash.js"></script>
	<script src="./js/clients.js"></script>
</body>

</html>