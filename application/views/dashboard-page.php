<!DOCTYPE html>
<html>
<head>
	<title>My First Website</title>
	<link rel="stylesheet" href="<?php echo base_url()?>libs/css/ad_style.css" type="text/css" />
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink"><?php echo $this->session->userdata('current_user_name');?></a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="#/about.html">About</a></li>
				<li><a href="#/contact.html">Contact</a></li>
				<li><a href="login/logout">Log Out</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Home</h2>
			<p>
				This is my first webpage! I was able to code all the HTML and CSS in order to make it. Watch out world of web design here I come!
			</p>
			<p> 
				I can use my skills here to create websites for my business, my friends and family, my C.V, blog or articles. As well as any games or more experiment stuff (which is what the web is really all about). 
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[your name]</a>
			</p>
		</div>
	</div>
</body>
</html>