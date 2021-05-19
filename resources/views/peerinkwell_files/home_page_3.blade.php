<!DOCTYPE html>
<html>
<head>
	<title>Templetes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
    	<script src="js/bootstrap.js"></script>
	<style>

		:root{

			--main--font--color : #9fbf45;

			--nav-bg--color :#bf459f ;

			--footer-bg--color : #bf459f;

			--ul-bg--color : #449fbf;
		}

		body{

			margin : 0px;
			
		}

		#parent{

			display : flex;
			justify-content : space-between;
			align-items : baseline;
			margin : 0px;
			padding : 10px 30px;
			font-weight: bold;
			background-color: var(--nav-bg--color);
			color : var(--main--font--color );						
		}
		#ul{

			padding :0px;
		}
		ul{

			list-style :none;
			padding :0px;
			margin : 0px;
			position : absolute;
			color: white;
			background-color: var(--ul-bg--color);
			padding:0px;
			width : 100%;
		}
		ul li{

			text-align :center;
			padding :20px;
			font-size: 20px;
			letter-spacing: 5px;
			border-bottom: 1px solid white;
			

		}

		#brand{

			font-size: 25px;

		}

		#menu_btn{

			font-size: 20px;
			border : 2px solid white;
			padding: 5px;
			border-radius : 5px;
			cursor: pointer;

		}
		.display{

			display : none;

		}

		footer{

			margin-top : 500px;	
			height : 400px;
			background-color : var(--footer-bg--color);
		}
	</style>
</head>
<body>
	<nav>
		<div id="parent">
			<div id="brand">Peerinkwell</div>
			<div id="menu_btn">
				Menu
			</div>	
		</div>

		<div id="ul" style="display : none">
			<ul>
				<li>Home</li>
				<li>Blog</li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</div>
	</nav>

	

	<footer>

	</footer>

	<script>
		$(document).ready(function(){


			var menu = $('#menu_btn');

			var ul = $('#ul');
	
			menu.click(function(){

				if(menu.html() === 'Menu'){

					menu.html('Close');
					ul.show();
				}
				else{
					
					menu.html('Menu');
					ul.hide();

				}

			});		

		});
	</script>
</body>
</html>
