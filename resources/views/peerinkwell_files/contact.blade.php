@extends('peerinkwell_files.main')


@section('content')


	<style>
        main{

            background-image: url('{{asset("images/Contact_page.jpg")}}');

        }
        #parent_2{

            	background-color : black;
            	color: white;
		margin : 0px auto;
            	width : 70%;
            	border-radius : 50px 30px 50px 30px;
            	padding : 20px 30px;
            	box-shadow: 10px 10px 10px 0px blue;
		opacity : .5;
		animation-name : view;
		animation-duration : 20s;


        }

	@keyframes view {

		from {

			opacity : 0.0;

		}
		to{
			opacity : .5;

		}

		}



        .total {


            text-align : center;

        }
        input[type="text"] , input[type="submit"]{

            display : block;
            width : 70%;
            margin : 20px auto;
            border-radius : 20px;
            border : none;
            height : 25px;


        }
        input[type="text"] ,textarea{

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
            margin : 30px auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight :bold;
            color :white;
            font-size: 20px;
            border : 2px solid white;
            background-color : blueviolet;
            cursor: pointer;

        }
	#parent_2:hover input[type="submit"]{

		opacity : 1.0;


	}
        .title {

            font-size: 30px;
		letter-spacing : 5px;
            font-family: 'Dancing Script', cursive;
            font-weight :bold;

        }
        .note{

            font-size: 20px;
            width : 70%;
            margin : 30px auto;

        }
  	label{

            display : block;
            width : 0px auto;
            text-align : center;;

        }
        @media(max-width : 1070px){


            .note{


                width : 100%;

            }
            form{

                width : 100%;

            }

            input[type="text"] ,textarea{

                width : 90%;

            }
	#parent_2{

		width : 90%;

		}

        }
    </style>

    <div id="parent_2">
        <h3 class="title total">Contact Us</h3>
        <p class="note total">Got aquestion we would like to hear from you . Send amessage and we will respond as soon as possible</p>

        <form action="">

	<label for="name">*name</label>

            <input type="text" placeholder="name" id="name">

        <label for="email">*email</label>

            <input type="text" placeholder="email">

	<label for="message">*message</label>

            <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

            <input type="submit" value="send">
        </form>
    </div>

    <script>

        $(document).ready(function(){


            var name = $('#name');


            name.focus();

        });



    </script>


@stop
