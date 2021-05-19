<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peerinkwell</title>
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
        body {

            margin : 0px

        }
        main{
            height : 1000px;
            background-image : url('{{asset("images/Home_Page1.jpg")}}');
            background-size:100% 100%;
            background-repeat: no-repeat;
		    background-position : center;
		    padding-top : 50px;
           	text-align : center;
        }
        #parent {

            display : flex;
            align-items: baseline;
            justify-content: space-between;
            border-bottom : 1px solid;
            background-color: black;
            color: white;
            padding :10px 30px 0px 30px;
        }
        #brand {

            font-weight: bold;
            font-size : 25px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        #links_middle{

            margin-left : 100px;

        }
        #links_middle ul , #links_right ul{

            display :flex;
            list-style: none;
            font-size: 20px;
            font-weight : bold;
        }
        #links_middle ul li{

            margin-right :30px;

        }
        #links_right ul li{

            margin-left : 30px;

        }
      	a{

		text-decoration : none;
		color :white;

	}
	a:hover{

		text-decoration :none;
		color :white;

	}
        header{

            background-color: #8e94f2;
            color:white;
            height: 55px;
            border-bottom: 1px  solid white;
            display : flex;
            justify-content: space-between;
		    align-items : baseline;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            font-size: 17px;
            padding  :0px 30px 20px 30px;
        }
        #social_media ul{

            	list-style: none;
            	display: flex;

        }
	 #social_media ul li{

		background-color :black;
		width : 35px;
		height : 35px;
		text-align : center;
		border-radius : 50%;
		padding : 5px 0px;

	}
        #social_media ul li:nth-child(1) ,  #social_media ul li:nth-child(2) , #social_media ul li:nth-child(3){

            margin-right :20px;

        }
        #social_media , #links{

            padding-top : 10px;

        }
        #menu_btn{

            display : none;

        }
        .hide{

            display : none;

        }

        #user_image{

            width : 35px;
            height: 35px;
            border-radius : 50%;
            opacity : 1.0;
            border : 2px solid white;

        }

        @media(max-width : 1300px){


            #parent{

                display : block;
                padding : 0px;
                margin : 0px;

            }
            #links_middle, #links_right{

                margin : 0px;
                padding : 0px;
                display : none;

            }


            #links_middle ul , #links_right ul {

                display :block;
                padding: 0px;
                margin : 0px;


            }


            #links_middle ul li, #links_right ul li{

                border-bottom :1px solid white;
                text-align : center;
                margin-right :0px;
                margin-left :0px;
                padding : 5px 0px;

            }

            #brand{

                border-bottom: 1px solid white;
                padding : 10px 30px;
                display : flex;
                justify-content: space-between;

            }
            #menu_btn{

                display : block;
                border : 1px solid white;
                color : white;
                font-size : 17px;
                padding : 5px;
                border-radius : 5px ;
                cursor: pointer;

            }

        }
        @media(max-width : 850px){

		#brand{

			padding  : 10px;


		}
		header{

			padding : 0px 10px;

		}



            #links_middle ul li, #links_right ul li{

                text-align : start;
                padding-left : 10px;


            }

            #links_middle, #links_right{

                display : none;

            }
	#social_media ul li:nth-child(1) ,  #social_media ul li:nth-child(2) , #social_media ul li:nth-child(3){

            margin-right :5px;

        }


        }
    </style>
</head>
<body>
    <header>
        @if(!Auth::guest())
        <div id="links">
            <i class="fas fa-anchor"></i>&nbsp;links
        </div>
        @endif
        @if(!Auth::guest())
        <div id="social_media">
            <ul>
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
		        <li><i class="fab fa-youtube"></i></li>
            </ul>
        </div>
        @endif
    </header>
    <nav>

        <div id="parent">
            <div id="brand">
		<div id="brand_name">
                    Peerinkwell
                </div>
                <div id="menu_btn">
                    Menu
                </div>
            </div>
            <div id="links_middle">
                <ul>
                    	<li><i class="fas fa-home"></i>&nbsp;<a href="{{route('homepage')}}">Home</a></li>
                    	<li><i class="fas fa-blog"></i>&nbsp;<a href="{{route('blog')}}">Blog</a></li>
			<li><i class="fas fa-file-signature"></i>&nbsp;<a href="{{route('contact')}}">Contact</a></li>
                    	<li><i class="far fa-address-card"></i>&nbsp;<a href="{{route('about')}}">About Us</a></li>
                </ul>

            </div>
            <div id="links_right">
                <ul>
                    @if(Auth::guest())
                        <li><i class="fas fa-sign-in-alt"></i>&nbsp;<a href="{{route('sign_in')}}">Sign In</a></li>
                        <li><i class="fas fa-user-plus"></i>&nbsp;<a href="{{route('sign_up')}}">Sign Up</a></li>
                    @endif
                    @if(!Auth::guest())
                        <li><i class="fas fa-sign-out-alt"></i><a href="{{route('logOut')}}"> Log Out</a></li>
                        <li><a href=""><img id="user_image" src="{{asset('images/'.Auth::user()->image)}}" alt="user_pic"> {{Auth::user()->name}}</a></li>
                    @endif
                </ul>
            </div>
        </div>

    </nav>
    <main>
    @yield('content')
    </main>


     <script>

        var menu = $('#menu_btn');

        var links_m = $('#links_middle');

        var links_r = $('#links_right');

        menu.click(function(){

            if(menu.html() === 'Menu'){

                menu.text('Close');

                menu.css({

                    'color' : 'red' ,
                    'border-colro' : 'white'


                });

                links_m.show();

                links_r.show();


            }

            else{


                menu.text('Menu');

                menu.css('color'  , 'white');

                links_m.hide();

                links_r.hide();

            }

        });

     </script>
</body>
</html>
