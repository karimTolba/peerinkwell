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

            background-color: blueviolet;
            font-weight : bold;
            width : 100%;

        }
        #information_form{

            width : 70%;
            margin : 50px auto;
            background-color : white;
            padding : 20px;
            border-radius : 10px;

        }
        #password_form{

            width : 70%;
            margin : 50px auto;
            background-color : white;
            padding : 20px;
            border-radius : 10px;

        }
        #image_form{

            width : 70%;
            margin : 50px auto;
            background-color : white;
            padding : 20px;
            border-radius : 10px;

        }
        .btn{

            width : 200px;
            text-align : center;
            font-size: 20px;

        }
        #updated , #not_updated{

            color : white;

        }
        #updated{

            background-color : green;
            padding : 10px;
            border-radius : 20px;
            width : 30%;
            margin : 50px auto;
            border: none;
            text-align : center;

        }
        #back{

            width : 50%;
            margin : 50px auto 0px auto;
            text-align : center;
        }
        #file_btn{

            display : block;
            margin : 20px auto;
            width : 100%;

        }
    </style>
</head>
<body>
    <div id="back">
        <a href="{{route('user_profile')}}"><button class="btn btn-primary"> < back to profile</button></a>
    </div>

    @if(session()->has('updated'))
        <div id="updated">
            {{session()->get('updated')}}
        </div>
    @endif
    <div id="information_form">
        <form action="{{url('user_information/'.Auth::user()->id)}}" method="POST">
            @method('PUT')
            @csrf

            <div>Edit Information</div><br><br>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{Auth::user()->name}}"><br><br>
                @foreach ($errors->get('name') as $error)

                    <p>{{$error}}</p>

                @endforeach
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control" name="email" value="{{Auth::user()->email}}"><br><br>
            <div>
                @foreach ($errors->get('email') as $error)

                    <p>{{$error}}</p>

                @endforeach
            </div>
            <div>
                <button class="btn btn-danger">edit</button>
            </div>
        </form>
    </div>
    @if(session()->has('password_edited'))
        <div id="updated">
            {{session()->get('password_edited')}}
        </div>
    @endif
    <div id="password_form">
        <div>Edit Password</div><br><br>
        <form action="{{url('edit_password/'.Auth::user()->id)}}" method="POST">
            @method('PUT')
            @csrf
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password"><br><br>
                @foreach ($errors->get('password') as $error)

                    <p>{{$error}}</p>

                @endforeach
            <label for="confirm">Confirm</label>
            <input id="confirm" type="password" class="form-control" name="confirm"><br><br>
                @foreach ($errors->get('confirm') as $error)

                    <p>{{$error}}</p>

                @endforeach
            <div>
                <button class="btn btn-danger">edit password</button>
            </div>
        </form>
    </div>
    @if(session()->has('image_edited'))
        <div id="updated">
            {{session()->get('image_edited')}}
        </div>
    @endif
    <div id="image_form">
        <div>Edit Image</div>
        <form action="{{url('edit_image/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label id="file_btn" class="btn btn-primary btn-lg btn-block">
                Browse.... <input type="file" name="image" style="display: none;">
            </label>
                @foreach ($errors->get('confirm') as $error)

                    <p>{{$error}}</p>

                @endforeach
            <div>
                <button class="btn btn-danger">edit image</button>
            </div>
        </form>
    </div>
</body>
</html>
