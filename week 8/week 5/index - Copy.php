<!Doctype HTML>
<html>
	<head>
		<title> Website </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<header>
		<a href="#" class="logo">About Me</a>
		<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Work</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</header>
		<section>
		<img src="bgbg.png" id="bg">
		<h2 id="text"> Personal Portfolio</h2>
		<a href="#" id="btn">Portfolio</a>
		<img src="front2.png" id="front2">
	</section>
	<div class="sec" id="sec">
		<h2>Hello</h2>
		<img src="me.png" id="me">
		<br>
		<br>
		<br>
		<p> Name : Althea Noelle Sarmiento <br>
		Nickname : Thea / Noelle <br>
		Age : 20 Years Old <br>
		Hobbies : Drawing / Writing <br>
		<br>
		Senior Highschool : Pasay City National Science Highschool <br>
		Course : Bachelor of Science in Computer Science Specialization in Cybersecurity and Forensics <br>
		Scholarship : 50% <br>
		IT experience / Others : Robotics <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		</p>
		
	</div>
	<script>
	let bg = document.getElementById('bg');
	let text = document.getElementById('text');
	let btn = document.getElementById('btn');
	let front2 = document.getElementById('front2');
	
	window.addEventListener('scroll', function(){
		let value = window.scrollY;
		text.style.marginRight = value * 3.5 + 'px';
	})
	</script>
	</body>
</html>
