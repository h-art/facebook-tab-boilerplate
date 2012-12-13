<?php
include_once "include/request.php";

/**
 * Steps:
 *
 * 1) Registrazione dell'App : https://developers.facebook.com/apps
 * 2) Settare le variabili in accordo con le chiavi generate dell'app
 *    e impostare l'URL della tab (per la generazione della dialog)
 */
	$appId     = "12345678901234";
	$appSecret = "1234567890abcdef1234567890abcdef";
	$pageURL   = "";

 /**
 * 3) Pubblicare la tab nell'hosting ed inserire l'URL nelle impostazioni della tab
 * 4) Attivare la tab come amministratore, cliccando sul link che appare (solo da localhost)
 */
$data = getSignedRequest($appSecret);

?><!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7" lang="it"><![endif]-->
<!--[if lt IE 9]><html class="no-js lte-ie8" lang="it"><![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js gte-ie9" lang="it"><!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>titolo</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width">
    <meta name="author"      content="H-art 2012">

    <!-- ::CSS -->
    <link rel="stylesheet" href="css/common.css" />



    <!--[if lt IE 9]>
        <script src="js/html5-printshiv.js"></script>
    <![endif]-->

</head>
<body>

	<?php include "include/publish.php"; ?>

    <div id="tab">
        <?php if (!$data[page][liked]) : ?>
			<!-- prelike -->
			<section id="prelike">

			</section>

		<?php else : ?>
			<!-- postlike -->
			<section id="postlike">

			</section>

		<?php endif; ?>
    </div>

	<div id="fb-root"></div>

    <script src="http://connect.facebook.net/it_IT/all.js"></script>
    <script>
      	window.fbAsyncInit = function() {
			FB.init({
				appId  : "<?php echo $appId ?>",
				status : true, // check login status
				cookie : true, // enable cookies to allow the server to access the session
				xfbml  : true  // parse XFBML
			});
			//FB.Canvas.setSize({ height: 200, width: 810});
			FB.Canvas.setAutoResize();
		};
      	(function() {
      		var e = document.createElement('script'); e.async = true;
      		e.src = document.location.protocol + '//connect.facebook.net/it_IT/all.js';
      		document.getElementById('fb-root').appendChild(e);
      	}());

	/*
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXXX-X']);
		_gaq.push(['_trackPageview']);

		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
		'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();

	*/

    </script>
</body>
