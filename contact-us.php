<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$stmt = $conn->prepare("INSERT INTO messages (Name, Email, Telephone, Company, Message, Marketing) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $name, $email, $telephone, $company, $message, $marketing);

	$name = $_POST['full-name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$company = $_POST['company-name'];
	$message = $_POST['message'];
	$marketing = isset($_POST['marketing']) ? $_POST['marketing'] : 0;

	if ($stmt->execute()) {
		echo '<div class="success-message" style="color: green; font-weight: bold;">Message sent successfully!</div>';
	} else {
		echo '<div class="error-message" style="color: red; font-weight: bold;">Error: ' . $stmt->error . '</div>';
	}

	$stmt->close();
	$conn->close();
}
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

<body class="contact-pg">

	<?php include 'php/header.php'; ?>

	<main>
		<?php include 'php/menu.php'; ?>

		<div class="contact-main">

			<div class="contact-hdr">
				<p>Home</p>
				<p>/</p>
				<p>Our Offices</p>
			</div>

			<h1>Our Offices</h1>

			<div class="office-box">
				<h2>Cambridge Office</h2>
				<p>Unit 1.31,<br>
					St John's Innovation Centre,<br>
					Cowley Road, Milton,<br>
					Cambridge,<br>
					CB4 0WS</p>
				<h3>01223 37 57 72</h3>
				<button class="purple">View more</button>
			</div>
			<div class="office-box">
				<h2>Wymondham Office</h2>
				<p>Unit 15,<br>
					Penfold Drive,<br>
					Gateway 11 Business Park,<br>
					Wymondham, Norfolk,<br>
					NR18 0WZ</p>
				<h3>01603 70 40 20</h3>
				<button class="purple">View more</button>
			</div>
			<div class="office-box">
				<h2>Great Yarmouth Office</h2>
				<p>Suite F23,<br>
					Beacon Innovation Centre,<br>
					Beacon Park, Gorleston,<br>
					Great Yarmouth, Norfolk,<br>
					NR31 7RA</p>
				<h3>01493 60 32 04</h3>
				<button class="purple">View more</button>
			</div>

			<div class="info-box">
				<h2>Email us on:</h2>
				<h1>sales@netmatters.com</h1>
				<h2>Business hours:</h2>
				<h2>Monday - Friday 07:00 - 18:00</h2>
				<h2>Out of Hours IT Support</h2>
			</div>

			<div class="form-box">
				<form action="contact-us.php" method="POST">
					<div class="form-block">
						<div class="form-segment">
							<label for="full-name">Your Name</label>
							<input type="text" name="full-name" id="full-name" required>
						</div>
						<div class="form-segment">
							<label for="company-name">Company Name</label>
							<input type="text" name="company-name" id="company-name">
						</div>
					</div>
					<div class="form-block">
						<div class="form-segment">
							<label for="email">Your Email</label>
							<input type="text" name="email" id="email" required>
						</div>
						<div class="form-segment">
							<label for="telephone">Your Telephone Number</label>
							<input type="text" name="telephone" id="telephone" required>
						</div>
					</div>
					<div class="form-segment">
						<label for="message">Message</label>
						<textarea name="message" cols="50" rows="10" id="message"
							required>Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
					</div>
					<div class="form-segment">
						<label class="checkbox" for="input_checkbox">
							<input type="hidden" name="marketing" value="0">
							<input type="checkbox" class="checkbox-box" id="input_checkbox" name="marketing" value="1">
							<span class="checkbox-dummy"></span>
							<span class="checkbox-txt">
								Please tick this box if you wish to receive marketing information from us.
								Please see our
								<a href="#" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
								for more information on how we keep your data safe.
							</span>
						</label>
					</div>
					<div class="captcha">
						<span>
							This site is protected by reCAPTCHA and the Google
							<a href="#" target="_blank" rel="noopener noreferrer"><u>Privacy Policy</u></a> and
							<a href="#" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a> apply.
						</span>
					</div>
					<div class="form-send">
						<button>Send enquiry</button>
						<small class="helper-text">
							<span class="text-danger">*</span>
							Fields Required
						</small>
					</div>
					<div id="error-message" style="color: red; display: none;"></div>
					<div id="success-message" style="color: green; display: none;"></div>
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