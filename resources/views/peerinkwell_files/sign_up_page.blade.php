@extends('peerinkwell_files.main')

@section('content')



    <style>
        #parent_2{

            background-color : black;
            color: white;
            margin : 0px auto;
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
        input[type="text"] ,input[type="password"] {

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

        #welcome_message{

            text-align  : center;
            font-size : 30px ;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color : #8cdd81;
            color : white;
            border-radius : 20px;
            width : 50%;
            margin : 20px auto 50px auto;
            padding :  10px;


        }

        #image{

            display : none;

        }

        #image_btn{

            border : none;
            width :40%;
            margin : 20px auto 20px auto;
            padding : 5px;
            background-color : white;
            border-radius : 20px;
            color : black;

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

    @if(session()->has('welcome_message'))
        <div id="welcome_message">
            {{session()->get('welcome_message')}}
        </div>
    @endif

    <div id="parent_2">
        <h3 class="title total">Sign Up Form</h3>
        <form action="{{route('user_information.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="name">*name</label>
            <input type="text" placeholder="name" name="name" id="name">
            <div>
                @foreach ($errors->get('name') as $error)

                    <p>{{$error}}</p>

                @endforeach
            </div>
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
            <label for="email">*confirm</label>
            <input type="password" placeholder="confirm" name="confirm" id="confirm_password">
            <div>
                @foreach ($errors->get('confirm') as $error)

                    <p>{{$error}}</p>

                @endforeach
            </div>
            <input type="submit" value="Sign_Up">
        </form>
    </div>

    <script>

        var name_input = document.getElementById('name');

        window.onload = function (){

            name_input.focus();

        }


    </script>


@stop
