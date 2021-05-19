<!DOCTYPE html>
<html>
<head>
	<title>Peerinkwell</title>
	<link rel="icon" href="">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
	<style>
		body{

			margin:0px;
			padding:0px;
			display:flex;
			flex-flow : column nowrap; 
			align-items: space-between;
		}

		nav{

			display: flex;
			justify-content: space-between;
			align-items: baseline;
			background-color: grey;
			padding-left: 20px;
			font-weight: bold;
			font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

		}
		.a:hover {

			font-size: 22px;
			color:black;


		}
		.li{

			list-style : none;
			padding-right:20px;
		}

		.a{

			text-decoration: none;
			padding-right: 20px;
			border-right:2px solid blue;
			color:white;
			font-size: 20px;

		}
		.last{

			border:none;

		}
		.brand{

			display: flex;
			color:white;
			font-size: 25px;
		}
		.menu_1{

			display:none;


		}
		.menu_2{

			display:flex;

		}
		.menu_main{

			display:flex;

		}
		header{

			height:300px;

		}
		.second_item{

			padding-left:30px;

		}
		footer{

			background-color:grey; 
			width:100%;
			height:450px;
			margin-top:30px;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			font-weight:bold;
			position: relative;

		}
		.footer_content{
			
			display:flex;
			justify-content: space-around;
			padding:0px;
			letter-spacing: 5px;
		}
		.lists{

			margin-top:100px;
			color:white;
			font-size:20px;
			border:3px solid white;
			border-radius : 40px 20px 40px 20px;
			padding:20px;
			box-shadow: 5px 0px 8px 0px black;
			transition : all .25s;

		}

		.lists:hover{

			border:60px 40px 60px 40px;
			box-shadow: 10px 5px 10px 0px black;
			font-size:25px;

		}
		footer .lists ul{

			padding:10px;

		}
		footer .lists ul li{

			list-style: none;
			text-align:center;

		}
		.list_title{

			font-size: 30px;
			margin-bottom: 20px;
			color:black;

		}
		.copy_right{


			text-align:center;
			margin:50px auto 0px auto;
			font-size:20px;
			color:white;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			font-weight:bold;


		}
		@media (max-width : 1000px){

			header{

				height : 400px;

			}
			

			nav , .second_item , .third_item , .brand , .menu_main , .main_1 , .menu_2 , .li{

				width:100%;
			}

			nav{

				padding-left: 0px;

			}
			.second_item , .third_item , .menu_main , .main_1 , .menu_2{


				margin : 0px;
				padding : 0px;
				text-align:center;

			}
			nav , .brand , .menu_main , .main_1 , .menu_2 {

				flex-flow: column wrap;
				justify-content: stretch;
				align-items: center;
			}
			nav , .second_item , .third_item , .brand , .menu_main , .main_1 , .menu_2 , .li{


				animation-name: slow_show;
				animation-duration : 5s;

			}
			@keyframes slow_show {

				0% {

					width :0%;

				}

				100%{

					width:100%;	

				}

			}

			.a{


				border-right:none;
			}
			.li , .brand{
				padding-top : 20px;
				padding-bottom: 20px;	
				border-bottom: 2px solid blue;
			}
			.a{

				font-size: 30px;	

			}
			.a:hover{

				color:black;
				font-size : 32px;

			}
			.brand{

				font-size: 40px;

			}

			.last_li{

				border-bottom: none;
			}

			footer{

				display:flex;
				height:950px;
				flex-flow : column nowrap;
				justify-content: space-between;

			}
			.footer_content{

				flex-flow : column nowrap;
				height:400px;
				justify-content: flex-start;
				align-items: center;
			}

			.lists{

				margin-top:40px;	
				width:70%;
				height:200px;
				font-size: 20px;

			}
			.list_title , .list:hover{

				font-size: 20px;

			}

			.copy_right{

				margin-bottom : 50px;
				font-size:20px;
			}

		}
	</style>
</head>
<body>
	<header>
		<img src="{{asset('images/team.jpg')}}" alt="background" height="100%" width="100%">
	</header>
	<nav id="nav">
		<div class="brand">
			Peerinkwell
		</div>
		<div class="second_item">
			<ul class="menu_main">
				<li class="li"><a class="a" href="">Home</a></li>
				<li class="li"><a class="a" href="">Blog</a>
					<ul class="menu_1">
						<li class="li">karim</li>
						<li class="li">ahmed</li>
						<li class="li">mohamed</li>
					</ul>
				</li>
				<li class="li"><a class="a" href="">Contact</a></li>
				<li class="li"><a class="a last" href="{{route('about')}}">About</a></li>
			</ul>
		</div>
		<div class="third_item">
			<ul class="menu_2">
				<li class="li"><a class="a" href="">Login</a></li>
				<li class="li last_li"><a class="a last" href="">Sign Up</a></li>
			</ul>
		</div>
	</nav>
	<main>

		@yield('content')	

	</main>
	<footer>
		<div class="footer_content">
			<div class="lists">
				<ul>
					<li class="list_title">first list</li>
					<li>first my word</li>
					<li>second my word</li>
					<li>third my word</li>
				</ul>
			</div>
			<div class="lists">
				<ul>
					<li class="list_title">second list</li>
					<li>first my word</li>
					<li>second my word</li>
					<li>third my word</li>
				</ul>
			</div>
			<div class="lists">
				<ul>
					<li class="list_title">third list</li>
					<li>first my word</li>
					<li>second my word</li>
					<li>third my word</li>
				</ul>
			</div>
		</div>

			<div class="copy_right">
				<b>&copy;</b>2019 peerinkwell. All rights reserved
			</div>

	</footer>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>