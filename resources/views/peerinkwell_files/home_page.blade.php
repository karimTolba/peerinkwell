<!DOCTYPE HTML>
<html>
    <head>
        <title>Peerinkwell</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <style>
            body{

                background-color:#f77062;

            }
            #first_container{

                width:80%;
                margin : 0px auto;

            }
            #container_1{

               margin-top:50px;
               margin-bottom:20px;
               text-align:center;
            }
            input{
                margin: 0px 20px;
            }
            .text{
                border-radius: 40px;
                width:300px;
                border:none;
                height:50px;
                padding:20px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-size: 15px;
            }
            #button{
                background-color: black;
                border:none;
                color:white;
                width:300px;
                border-radius:40px;
                font-size: 15px;
                padding:15px;
            }
            #title{
                margin: 100px 0px;
                text-align: center;
                color:white;
            }
            #title_h1{

                font-weight:bold;
                font-size:60px;
                font-family: 'Ubuntu', sans-serif;
            }
            #title_p{
                font-family:'Ubuntu', sans-serif;
                font-size:24px;
                width:50%;
                margin : 0px auto;
            }
            #copy-right{

                font-family:'Ubuntu', sans-serif;
                color:white;
                font-size: 14px;
                width:50%;
                margin-top:150px;
                margin-bottom:0px;
                margin-left:auto;
                margin-right:auto;

            }
            #counter{
		color:white;
                border-radius: 0px 0px 20px 20px;
                margin: 0px auto;
                width:40%;
            }
	    table ,th , td {
		border:none;
		font-size:30px;
		padding:20px;

		}
        .success_message{

            color:white;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight:bold;
            font-size:25px;
            margin-right: auto;
            margin-left: auto;
            margin-top:70px;
            width:50%;

    }
        .failed_message{

            text-align:center;
            color:white;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight:bold;
            font-size:20px;
            margin : 10px auto;
            width:90%;


    }
	@media(max-width : 1300px){

		.text , #button{

			margin-top : 30px;
			}
		#title_p , #copy-right{

			width:80%;
			}

		}
	@media(max-width : 615px){

			#title_p , #copy-right{

			width:100%;

			}
			#title_p{

			font-size:15px;

			}
			#title_h1{

			font-size:40px;
			}
            .success_message{

            font-size: 20px;
            width:90%;
            }
            .failed_message{

            font-size: 20px;
            width:100%;
            }

		}
	@media(max-width : 730px){

			#counter{

			width:80%;
			}
			table ,th , td {
			font-size:15px;
			padding:5px;

			}
            .success_message{

            font-size: 20px;
            width:90%;

            }
            .failed_message{

            font-size: 15px;
            width:100%;

            }


			}
		@media(max-width : 441px){

			table ,th , td {
			font-size:15px;
			padding:10px;

			}
		.text , #button{
			width:250px;
			}
        .success_message{

            font-size: 15px;
            width:90%;

        }

        .failed_message{

        font-size: 15px;
        width:100%;

        }


        }
        </style>
    </head>
    <body>
        <div id="first_container">
            <div id="title">
                <h1 id="title_h1">COMING SOON</h1>
                <p id="title_p">Peer inkwell is under construction, follow us for update now!</p>
            </div>
		<div class="container-fluid">
                    <table id="counter" class="text-center">
                      <thead>
                        <tr>
                          <th>Days</th>
                          <th>Hours</th>
                          <th>Minutes</th>
                          <th>Seconds</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td id="days"></td>
                          <td id="hours"></td>
                          <td id="minutes"></td>
                          <td id="seconds"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            @if(session()->has('success_message'))

                <div class="text-center success_message">
                    {{session()->get('success_message')}}
                </div>

            @endif
            <div id="container_1">
                <form action="{{route('get_updates')}}" method="post">
                {{csrf_field()}}
                    <input type="text" class="text" placeholder="name" name="name">
                    @if($errors->any())
                        @foreach($errors->get('name') as $name)
                            <div class="failed_message">
                                {{$name}}
                            </div>
                        @endforeach
                    @endif
                    <input type="text" class="text" placeholder="email" name="email">
                    @if($errors->any())
                        @foreach($errors->get('email') as $email)
                            <div class="failed_message">
                                {{$email}}
                            </div>
                        @endforeach
                    @endif
                    <input type="submit" value="Get Updates" id="button">
                </form>
            </div>
            <div class="container-fluid text-center">
                <p id="copy-right">
                    @ 2019 designed by Peer Inkwell
                </p>
            </div>
        </div>
        <script>

            function project_counter(){

                var now = new Date();

                var eventDate = new Date("February 22 2021");

                var currentTime = now.getTime();

                var eventTime = eventDate.getTime();

                var remTime = eventTime - currentTime;

                if(remTime <= 0){

                    return s , m , h , d = 0;

                }
                else{   

                    var s  = Math.floor(remTime / 1000);

                    var m = Math.floor(s / 60);

                    var h  = Math.floor(m / 60 );

                    var d  = Math.floor(h / 24);


                    h %=24;
                    m %=60;
                    s %=60;


                    h = (h < 10) ? "0" + h : h ;
                    m = (h < 10) ? "0" + m : m ;
                    s = (h < 10) ? "0" + s : s ;

                }

                document.getElementById("days").textContent = d;
                document.getElementById("hours").textContent = h;
                document.getElementById("minutes").textContent = m;
                document.getElementById("seconds").textContent = s;

                setTimeout(project_counter , 1000);


        }

project_counter();


        </script>
    </body>

</html>
