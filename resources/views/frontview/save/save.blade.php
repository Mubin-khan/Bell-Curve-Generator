<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>FORM</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">Give the class result </a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://localhost:8080/hello/public/">Home</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->
<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">


               <div class="col-md-12 col-sm-12">
                    <div>
<form action="{{ url('generate-save') }}" method="post">
	{{csrf_field()}} 
	<table align="center">
		<tr>
			<td>Reg_No:</td>
			<td><input type="text" name="reg_num" style="color: black"></td>
			<td><h6 style="color: red">{{$errors->first('reg_num')}}</h6></td>
		</tr>
		<tr>
			<td>Marks:</td>
			<td><input type="text" name="mark" style="color: black"></td>
			<td><h6 style="color: red">{{$errors->first('mark')}}</h6></td>
		</tr>
		
		<tr>
			<td><input class="smoothScroll btn btn-default" type="submit" value="Submit"></td>
		</tr>
	</table>
</form>

</div>

</section>


<!-- Footer Section -->

<footer>
	<table border="1"align="center">
	
	<tr>
		<th color = blue>Id</th>
		<th>regi_num</th>
		<th>marks</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	@foreach($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->registraion_num}}</td>
		<td>{{$student->marks}}</td>
		<td><a href="{{ url('generate/save/studentEdit/'.$student->id) }}" style="color: #009900"> Edit </a></td>
		<td><a href="{{ url('generate/save/studentDelete/'.$student->id) }}" style="color: red"> Delete </a></td>
	</tr>
	@endforeach

</table> <br>

	<h5> It will show you natural of distribution of a bell curve with your result</h5>
                    
                    <a href="{{ url('generate/save/go/') }}" class="smoothScroll btn btn-default">GENERATE NOW</a>
            		<h2><a href="{{ url('generate/save/clear/') }}" class="smoothScroll btn btn-default">Clear all</a></h2><br>

<h5> If you wants to give your own statistics of a bell curve then <a href="{{ url('generate/save/second/') }}" style="color: #009900"> Go </a></h5>

               </div>

          </div>
     </div>
     
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/particles.min.js') }}"></script>
<script src="{{ asset('frontend/js/app.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>
</html>

<!--
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>


	<title>Student Form</title>
	<style>
		h2{
			text-align: center;
		}
		h4{
			text-align: right;
		}
		body{
			background-color: #F5DEB3;
		}
	</style>
</head>

<h4><a href="http://localhost:8080/hello/public/">Home</a></h4>
	<h1 align="center"style="background-color: #F5DEB3	">Add Student Informatrion</h1>
<form action="{{ url('generate-save') }}" method="post">
	{{csrf_field()}} 
	<table align="center">
		<tr>
			<td>Reg_No:</td>
			<td><input type="text" name="reg_num"></td>
			<td><h6 style="color: red">{{$errors->first('reg_num')}}</h6></td>
		</tr>
		<tr>
			<td>Marks:</td>
			<td><input type="text" name="mark"></td>
			<td><h6 style="color: red">{{$errors->first('mark')}}</h6></td>
		</tr>
		
		<tr>
			<td><input background = #2EBC99 type="submit" value="Submit"></td>
		</tr>
	</table>
</form> <br>

	<table border="1"align="center">
	
	<tr>
		<th color = blue>Id</th>
		<th>regi_num</th>
		<th>marks</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	@foreach($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->registraion_num}}</td>
		<td>{{$student->marks}}</td>
		<td><a href="{{ url('generate/save/studentEdit/'.$student->id) }}"> Edit </a></td>
		<td><a href="{{ url('generate/save/studentDelete/'.$student->id) }}"> Delete </a></td>
	</tr>
	@endforeach

</table> <br>

<h2><a href="{{ url('generate/save/go/') }}"> Go for Curve</a></h2>
<h2><a href="{{ url('generate/save/clear/') }}">Clear all</a></h2><br>

<h3>If you like to give a marks of the class and  give different % of grade system, It will show you the comparison among the curves. <a href="{{ url('generate/save/second/') }}"> Go </a></h3>



</body>
</html>

-->
