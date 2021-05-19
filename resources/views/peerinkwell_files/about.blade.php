@extends('peerinkwell_files.main')

@section('content')

<style>
	main{

		height : 1500px;

	}

	img{

		height : 300px;
		width : 70%;
		border-radius : 30px;
		opacity : .5;

	}
	img:hover{

		opacity : 1.0;

		}
	#content{

		background-color: purple;
		color :white;
		font-size : 20px;
		margin : 30px auto;
		width : 90%;
		font-family : verdene;
		font-weight :bold;
		padding : 20px;
		border-radius : 30px;
		opacity : .5;


	}
	#content:hover{

		opacity  :1.0;

	}
	#title{

		font-size : 25px;
		margin : 30px auto;
		width : 20%;
		color : white;
		background-color : purple;
		border-radius : 20px;
		opacity : .5;
		padding : 10px;

	}
	#title:hover{

		opacity  : 1.0;

	}

	#founder{

		display : flex;
		margin : 100px 0px 50px 0px;
		justify-content  : space-around;

	}

	.t{
		width : 30%;

	}
	span{

		display  : block;
		color : white;
		background-color : purple;
		border-radius : 20px;
		padding : 10px;
		margin : 30px auto;
		opacity : .5;
		width  : 50%;

	}
	span:hover {

		opacity : 1.0;

	}


	@media(max-width : 900px){

		main{

			height : 3000px;


		}
		#founder{

			flex-flow : column;
			align-items : center;

		}
		.t{
			width  :100%;

		}
		.total_pic{

			width : 90%;

		}
		#title{

			width  : 40%;

		}


	}
</style>


<div id="header">

	<img src="{{asset('images/natural.jpg')}}" alt="team_pic">
	<h3 id="title">About Us</h3>
		<p id="content">Marie Sklodowska Curie (/'kj??ri/ KEWR-ee,[3] French: [ky?i], Polish: [k?i'ri]; born Maria Salomea Sklodowska;[a] 7 November 1867 � 4 July 1934) was a Polish and naturalized-French physicist and chemist who conducted pioneering research on radioactivity. She was the first woman to win a Nobel Prize, is the only woman to win the Nobel prize twice, and is the only person to win the Nobel Prize in two different scientific fields. She was part of the Curie family legacy of five Nobel Prizes. She was also the first woman to become a professor at the University of Paris, and in 1995 became the first woman to be entombed on her own merits in the Panth�on in Paris.</p>

</div>

<div id="founder">

	<div class="first t">
		<img class="total_pic" src="{{asset('images/natural.jpg')}}" alt="first_pic">
		<span>Haben Jamal</span>
		<span>Co Founder</span>
		<span>Linked In</span>
	</div>
	<div class="second t">
		<img class="total_pic" src="{{asset('images/natural.jpg')}}" alt="second_pic">
		<span>Haben Jamal</span>
		<span>Co-Founder</span>
		<span>Linked In</span>
	</div>
	<div class="third t">

		<img class="total_pic" src="{{asset('images/natural.jpg')}}" alt="third_pic">
		<span>Haben Jamal</span>
		<span>Co-Founder</span>
		<span>Linked In</span>
	</div>

</div>



@stop
