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
        body{

            text-align: center;
            background-color : blueviolet;

        }
        #image{

            border-bottom: 1px solid;
            padding-bottom : 30px;

        }
        img{

            width : 200px;
            height : 200px;
            border-radius : 50%;

        }
        #name , #email{

            font-size: 30px;
            font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin : 30px 0px;

        }
        #edit{

            background-color :black;
            border : none;
            color: white;
            font-size : 20px;
            border-radius : 20px;
            width : 30%;
            padding: 5px;

        }
        #container{

            background-color : white;
            padding : 20px 0px;
            width  : 60%;
            margin : 50px auto;
            border-radius : 30px;

        }
        #title{

            font-size: 40px;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin : 30px auto;
            width :50%;

        }
        #name_title , #email_title{

            margin : 30px auto;
            width : 20%;
            border-radius : 20px;
            padding : 5px;
            font-size: 20px;
            font-weight: bold;
            font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color : black;
            color : white;

        }
        #back{

            width : 50%;
            margin : 50px auto 0px auto;
            text-align : center;
        }
    </style>
</head>
<body>

    <div id="back">
        <a href="{{route('homepage')}}"><button class="btn btn-primary btn-lg"> < back to homepage</button></a>
    </div>
    <div id="container">
        <div id="title">User Profile</div>
        <div id="image">
            <img src="{{asset('images/'.Auth::user()->image)}}" alt="user_profile">
        </div>
        <div id="name_title">
            Name
        </div>
        <div id="name">
            {{Auth::user()->name}}
        </div>
        <div id="email_title">
            Email
        </div>
        <div id="email">
            {{Auth::user()->email}}
        </div>
        <a href="{{route('edit_user_profile')}}"><button id="edit">edit</button></a>
        </div>
	<script>

	</script>
</body>
</html>
