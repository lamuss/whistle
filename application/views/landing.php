<?php
	$baseurl = "http://localhost/php-workspace/whistle/";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Whistle</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="http://localhost/php-workspace/whistle/assets/css/bootstrap.min.css" type="text/css">

	<!-- Custom Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=$baseurl;?>assets/font-awesome/css/font-awesome.min.css" type="text/css">

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="<?=$baseurl;?>assets/css/animate.min.css" type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=$baseurl;?>assets/css/creative.css" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">
				<img src="<?=$baseurl;?>assets/img/logo.png" class="logo">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="page-scroll" href="#page-top">Download</a>
				</li>
				<li>
					<a class="page-scroll" href="#portfolio">Cos'è</a>
				</li>
				<li>
					<a class="page-scroll" href="#contact">Chi siamo</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<header>
	<div class="header-content">
		<p>Conosci le persone che incontri ogni giorno</p>
		<a style="text-align: left; float: left; background: none; border: none;" href="#">
			<img src="<?=$baseurl;?>assets/img/icon_google.png" style="width: 30%; margin-top: 20px;">
		</a>
	</div>
</header>

<aside class="bg-dark" id="portfolio">
	<div class="container text-center">
		<div class="call-to-action">
			<h2>COS'È</h2>
			<p style="max-width: 650px;margin: auto;">
				La scienza ci ha rivelato che <strong>ci si innamora in un quinto di secondo</strong>. Spesso però ci accorgiamo di non aver colto l'attimo giusto. <strong>Whistle è nata per questo.</strong> Tornare indietro nel tempo per cogliere l'opportunità di conoscere la persona che ti ha colpito.<br><br>
				Quando due utenti <strong>Whistle</strong> si sfiorano per strada o in metropolitana, i loro profili appaiono nei rispettivi smartphone e, se il Whistle è reciproco, il <strong>Match</strong> li metterà in contatto tra loro.<br><br>
				Con <strong>Whistle</strong> potrai ritrovare le persone che hai incontrato durante i tuoi spostamenti quotidiani oppure passeggiando per il centro di una grande città.<br><br>
                <strong>Scopri come funziona!</strong><br>
			</p>
		</div>
	</div>
</aside>

<section id="start" class="bg-primary" style="padding-top: 60px;">
	<div class="container">
		<div class="row">
                <div class="screen"><div class="button-section"><a href="#start" class="active" role="button">1</a><a href="#services">2</a><a href="#carrellata">3</a><a href="#chat">4</a></div>
				<p style="width: 270px; text-align: center;margin-right:3%;">				<img src="<?=$baseurl;?>assets/img/icon_whistle.png" style="margin-bottom: 25px;"><br>Scorri sulla tua bacheca per vedere tutte le persone che hai incrociato. Whistle è una applicazione che ti permette automaticamente di memorizzare tutti i profili degli utenti nelle tue vicinanze e di poter interagire con loro.</p>
				<img src="<?=$baseurl;?>assets/img/screen/screen1.png" style="width: 250px;margin-left:4%;">
			</div>
		</div>
    </div>
</section>

<section id="services" style="background: #ffffff; padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="screen">
                <div class="button-section"><a href="#start">1</a><a href="#services" class="active">2</a><a href="#carrellata">3</a><a href="#chat">4</a></div>
				<p style="width: 270px; text-align: center;margin-right:3%;">
					<img src="<?=$baseurl;?>assets/img/icon_heart.png" style="margin-bottom: 25px;"><br>Scegli la tua prediletta e invia il tuo Whistle! Un Whistle è un apprezzamento virtuale, un gancio, che ti permetterà di suscitare l’interesse nelle persone che incontri.</p>
				<img src="<?=$baseurl;?>assets/img/screen/screen2.png" style="width: 250px;margin-left:4%;">
			</div>
		</div>
	</div>
</section>

<section id="carrellata" style="padding-top:60px;">
	<div class="container">
		<div class="row">
			<div class="screen">
                <div class="button-section"><a href="#start">1</a><a href="#services">2</a><a href="#carrellata" class="active" role="button">3</a><a href="#chat">4</a></div>
                <p style="width: 270px; text-align: center;margin-right:3%;color:#fff;">
				<img src="<?=$baseurl;?>assets/img/icon_page.png" style="margin-bottom: 25px;"><br>Un Whistle è anonimo. Ma non troppo. Quando ricevi un Whistle, dovrai indovinare chi tra 10 potenziali profili è quello che ti ha espresso l’apprezzamento, scegliendo a tua volta a chi inviare un 
Whistle.</p>
				<img src="<?=$baseurl;?>assets/img/screen/screen3.png" style="width: 250px;margin-left:4%;">
		  </div>
	   </div>
    </div>
</section>

<section id="chat" style="background: #ffffff; padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="screen">
                <div class="button-section"><a href="#start">1</a><a href="#services">2</a><a href="#carrellata">3</a><a href="#chat" class="active" role="button">4</a></div>
                    <p style="width: 270px; text-align: center;margin-right:3%;">
					<img src="<?=$baseurl;?>assets/img/icon_chat.png" style="margin-bottom: 25px;"><br>Se 2 profili ricevono reciprocamente un Whistle, automaticamente si apre una chat. Chatta con chi risponde si tuoi Whistle!</p>
				<img src="<?=$baseurl;?>assets/img/screen/screen4.png" style="width: 250px;margin-left:4%;">
			</div>
		</div>
	</div>
</section>

<section id="contact" style="padding-top: 60px;">
	<div class="container">
		<h2 class="header-contact">CHI SIAMO</h2>
        
		<p class="title-contact" style="max-width:650px;margin:auto;">
            <strong>Neverland</strong> è il laboratorio R&D di <a href="http://www.lipariconsulting.com/"><strong>Lipari Consulting.</strong></a><br>
			Il laboratorio ha l’obiettivo di ideare e lanciare nel mercato prodotti e servizi innovativi dando particolare attenzione agli ambiti <strong>digital e social.</strong>
		</p>
		<p class="sub-title-contact">Il team è composto da:</p>

		<div class="row info">
			<div class="col-sm-4">
                    <div class="team-member">
				<img src="<?=$baseurl;?>assets/img/volti/Giovanni.jpg" alt="" class="img-circle">
				<h3>Giovanni Lipari</h3>
				<p>CEO Lipari Consulting</p>
                    </div>
			</div>
			<div class="col-sm-4">
                    <div class="team-member">
				<img src="<?=$baseurl;?>assets/img/volti/Salvo.png" alt="" class="img-circle">
				<h3>Salvatore Naous</h3>
				<p>Ricercatore</p>
                    </div>
			</div>
			<div class="col-sm-4">
                    <div class="team-member">
				<img src="<?=$baseurl;?>assets/img/volti/Alessio.jpg" alt="" class="img-circle">
				<h3>Alessio Vella</h3>
				<p>Ricercatore</p>
                    </div>
			</div>
		</div>

		<div class="row info">
			<div class="col-sm-4">
                    <div class="team-member">
				<img src="<?=$baseurl;?>assets/img/volti/Fasulo.png" alt="" class="img-circle">
				<h3>Giuseppe Fasulo</h3>
				<p>Ricercatore</p>
                    </div>
			</div>
			<div class="col-sm-4">
				    <div class="team-member">
                <img src="<?=$baseurl;?>assets/img/volti/Fede.jpg" alt="" class="img-circle">
				<h3>Federico Colletti</h3>
				<p>Ricercatore</p>
                    </div>
			</div>
			<div class="col-sm-4">
                    <div class="team-member">
				<img src="<?=$baseurl;?>assets/img/volti/Laura.jpg" alt="" class="img-circle">
				<h3>Laura Musso</h3>
				<p>Graphic Designer</p>
                    </div>
			</div>
		</div>
        
        
        <!--
        		<div class="row info">
				<img src="<?=$baseurl;?>assets/img/volti/Giovanni.jpg" alt="" class="img-circle">
				<h3>Giovanni Lipari</h3>
				<p>CEO Lipari Consulting</p>
				<img src="<?=$baseurl;?>assets/img/volti/Salvo.png" alt="" class="img-circle">
				<h3>Salvatore Naous</h3>
				<p>Ricercatore</p>
				<img src="<?=$baseurl;?>assets/img/volti/Alessio.jpg" alt="" class="img-circle">
				<h3>Alessio Vella</h3>
				<p>Ricercatore</p>
		</div>

		<div class="row info">
			<div class="col-md-4">
				<img src="<?=$baseurl;?>assets/img/volti/Fasulo.png" alt="" class="img-circle">
				<h3>Giuseppe Fasulo</h3>
				<p>Ricercatore</p>
			</div>
			<div class="col-md-4">
				<img src="<?=$baseurl;?>assets/img/volti/Fede.jpg" alt="" class="img-circle">
				<h3>Federico Colletti</h3>
				<p>Ricercatore</p>
			</div>
			<div class="col-md-4">
				<img src="<?=$baseurl;?>assets/img/volti/Laura.jpg" alt="" class="img-circle">
				<h3>Laura Musso</h3>
				<p>Graphic Designer</p>
			</div>
		</div>
        
        -->
        
        
        
	</div>
</section>

<footer>
	<p>© 2015 Whistle · All rights reserved.<img src="http://localhost/php-workspace/whistle/assets/img/logo_lc.png" style="width: 100px; margin-top: -21px;"></p>
</footer>

<!-- jQuery -->
<script src="<?=$baseurl;?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=$baseurl;?>assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?=$baseurl;?>assets/js/jquery.easing.min.js"></script>
<script src="<?=$baseurl;?>assets/js/jquery.fittext.js"></script>
<script src="<?=$baseurl;?>assets/js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=$baseurl;?>assets/js/creative.js"></script>

</body>

</html>
