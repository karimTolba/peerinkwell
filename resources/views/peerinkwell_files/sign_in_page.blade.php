@extends('peerinkwell_files.main')

@section('content')



    <style>
        #parent_2{

            background-color : black;
            color: white;
            margin : 100px auto 0px auto;
            width : 70%;
            border-radius : 50px 30px 50px 30px;
            padding : 20px 30px;
            box-shadow: 10px 10px 10px 0px blue;
            opacity : .5;
            animation-name : show_slow;
            animation-duration : 10s;

        }
	@keyframes show_slow{

		from{

			opacity : 0.0;

		}
		to{

			opacity : .5;

		}

	}


        .total {


            text-align : center;

        }
        input[type="text"] , input[type="submit"] , input[type="password"]{

            display : block;
            width : 70%;
            margin : 20px auto;
            border-radius : 20px;
            border : none;
            height : 25px;


        }
        input[type="text"] , input[type="password"]{

            height : 30px;

        }
        label{

            display : block;
            width : 0px auto;
            text-align : center;
            font-size : 20px;

        }
        input[type="text"] ,textarea , input[type="password"]{

            padding-left : 20px;

        }
        textarea {

            width : 70%;
            margin : 20px auto;
            display :block;
            border-radius : 20px;


        }
        input[type="submit"]{

            	width : 30%;
            	height: 50px;
            	border-radius :20px;
		border : 2px solid white;
            	margin : 50px auto 30px auto;
            	font-family: Verdana, Geneva, Tahoma, sans-serif;
            	font-weight :bold;
           	color :white;
            	font-size: 20px;
            	background-color : blueviolet;
            	cursor: pointer;

        }
        .title {

            font-size: 30px;
            font-weight :bold;
            font-family: 'Dancing Script', cursive;
            letter-spacing: 5px;
		margin : 50px 0px;
        }
        .note{

            font-size: 20px;
            width : 70%;
            margin : 30px auto;

        }
        #failed_message{


            text-align  : center;
            font-size : 30px ;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color : #e75480;
            color : white;
            border-radius : 20px;
            width : 50%;
            margin : 50px auto 0px auto;
            padding : 10px;
            opacity : .5;


        }
        #success_message{


            text-align  : center;
            font-size : 30px ;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color : green;
            color : white;
            border-radius : 20px;
            width : 50%;
            margin : 50px auto 0px auto;
            padding : 10px;
            opacity : .5;


        }
        @media(max-width : 1070px){

		#parent_2{

			width : 90%;

		}

            .note{


                width : 100%;

            }
            form{

                width : 100%;

            }
            .title{

                font-size: 30px;

            }
            input[type="submit"]{

                font-size: 17px;

            }
            label{

                font-size: 17px;

            }

            input[type="text"] ,textarea , input[type="password"]{

                width : 90%;

            }
            input[type="submit"]{

                width : 50%;

            }

        }
    </style>
    @if(session()->has('failed_message'))
        <div id="failed_message">
            {{session()->get('failed_message')}}
        </div>
    @endif
    @if(session()->has('success_message'))
        <div id="success_message">
            {{session()->get('success_message')}}
        </div>
    @endif
    @if(session()->has('message'))
        <div id="failed_message">
            {{session()->get('message')}}
        </div>
    @endif
    <div id="parent_2">
        <h3 class="title total">Sign In Form</h3>
        <form action="{{route('user_login')}}" method="POST">

            {{csrf_field()}}

            <label for="email">*email</label>
            <input type="text" placeholder="email" name="email" id="email">
            <div>
                @foreach ($errors->get('email') as $error)

                    <p>{{$error}}</p>

                @endforeach
            </div>
            <label for="email">*password</label>
            <input type="password" placeholder="password" name="password" id="password">
            <div>
                @foreach ($errors->get('password') as $error)

                    <p>{{$error}}</p>

                @endforeach
            </div>
            <input type="submit" value="Sign_In">
        </form>
    </div>

    <script>

        var email_input = document.getElementById('email');

        window.onload = function (){

            email_input.focus();

        }


    </script>


@stop
