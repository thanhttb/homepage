<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>2 Column Layout &mdash; Left Menu</title>
		<style type="text/css">
		
			body{
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			#nav {
				float: left;
				width: 230px;
				margin-left: -100%;
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				background: #eee;
			}
			
			#wrapper {
				overflow: hidden;
			}
			
			#content {
				margin-left: 230px; /* Same as 'nav' width */
			}
			
			.innertube{
				margin: 15px; /* Padding for content */
				margin-top: 0;
			}
			
			p {
				color: #555;
				text-align: center;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
	
		</style>

	
	</head>
	
	<body>
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1>About me</h1>
						<p>Họ tên: Trần Trịnh Bình Thành</p>
						<p>MSSV: 13020389</p>
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="innertube">
					<h3>Homework w2-3</h3>
					<ul>
						<li><a href="hw1.html">Javascript 1</a></li>
						<li><a href="2.jpg">Javascript 2</a></li>
					</ul>
					<h3>Homework w4</h3>
					<ul>
						<li><a href="https://express13020389.herokuapp.com/">Express.js</a></li>
							
						<li><a href="#">Restful | </a><a href="https://express13020389.herokuapp.com/">Heroku | </a><a href="https://github.com/thanhttb/Restful-web-app">Gihub</a>
						</li>

						<li><a href="#">MVC</a></li>
					</ul>
					<h3>Homework w9</h3>
					<ul>
						<li><a href="https://github.com/thanhttb/todo1-2">Todo 1 - 2</a></li>

					</ul>
				</div>
			</nav>
			
		</div>
	</body>
</html>
