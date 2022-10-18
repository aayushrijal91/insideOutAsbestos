<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse1').value = token;
				document.getElementById('recaptchaResponse2').value = token;
			});
		});
	</script>
</head>

<body>

<div class="slide-navigation">
    <div class="container h-100">
        <div class="main-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="javascript:void(0)" id="hide-slide-nav">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 18.8086C16.1064 15.915 6.46099 6.26959 2 1.80859" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M19 1.80859C16.1064 4.70221 6.46099 14.3476 2 18.8086" stroke="white" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav-list">
                <li><a href="#services">Services</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <div class="row gy-4">
                <div class="col-12 text-center">
                    <a href="tel:<?= $phone_number ?>" class="btn d-inline-flex rounded-pill btn-secondary rounded-0 text-white px-5">
                        <?= $phone_number ?>
                    </a>
                </div>
                <div class="col-12 text-center">
                    <a href="#form" id="slide-nav-enquire" class="btn d-inline-flex rounded-pill border-white rounded-0 text-white px-5">
                        Enquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
	