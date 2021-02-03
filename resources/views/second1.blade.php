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
               <a href="index.html" class="navbar-brand">Give different percentages of 10 grades</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://localhost:8080/hello/public/">Home</a></li>
               </ul>
          </div>
          

  </div>
</div>

<!-- Home Section -->
<h4>You should give percentage of 10 grades followed by the serial from F to A+.</h4>
<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">


               <div class="col-md-12 col-sm-12">
                    <div>

<form action="{{ url('generate-save-second') }}" method="post">
    {{csrf_field()}}
    <table align="center">
        <tr >
        <td> Percentage: </td>
        <td> <input style="color: black" type="text" name="percentage"></td>
        <td><h2 style="color: red">{{$errors->first('percentage')}}</h2></td>
    </tr>
        <tr>
            <td><input class="smoothScroll btn btn-default" type="submit" value="Submit"></td>
            <td></td>
        </tr>
    </table>

</form>
</div>
<br>
<br>
<table BORDER=0 align="center">
    
    <tr>
        <th color = blue> ID </th>
        <th> . . . . </th>
        <th> Percentage </th>
    </tr>

    @foreach($std as $st)
    <tr>
        <td>{{$st->id}}</td>
        <th>  </th>
        <td>{{$st->percentage}}</td>
    </tr>
    @endforeach

</table> <br>
                    
                    <a href="{{ url('generate/save/go/') }}" class="smoothScroll btn btn-default">GENERATE NOW</a>
                    <a href="{{ url('generate/save/second/clear2/') }}" class="smoothScroll btn btn-default">Clear all</a>

               </div>

          </div>
     </div>
</section>


<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Bell Curve Generator</h3>
                    <p>The generator will fetch the registration number and marks of the students then it will generate a Bell Curve</p>
                    <div class="footer-copyright">
                         <p>Copyright &copy; 2019</p>
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Talk to us</h3>
                    <p><i class="fa fa-globe"></i> Sylhet Engineering College, Sylhet</p>
                    <p><i class="fa fa-envelope"></i> mubinkhan819@gmail.com</p>
                    <p><i class="fa fa-envelope"></i> muinahmed1234@gmail.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="https://www.facebook.com/mubin.khan.90038" target = "blank" class="fa fa-facebook"></a></li>
                         <li><a href="https://www.facebook.com/muin.opol" target = "blank" class="fa fa-facebook"></a></li>
                    </ul>
                    <h4>To get the departmental result of sec <a href = "https://sec.ac.bd/" target = "blank">Click here</a><h4>
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
        td{
            color: blue;
        }
        div{
            padding-top: 50px;
            padding-left: 50px;
            padding-bottom: 50px;
            padding-right: 50px;
        }
        h2{
            text-align: center;
        }
        body{
            background-color: #F5DEB3;
        }
    </style>
</head>
<body>
<div>

<h2> Give different percentages of 10 grades </h2>

<form action="{{ url('generate-save-second') }}" method="post">
    {{csrf_field()}}
    <table align="center">
        <tr >
        <td> Percentage: </td>
        <td> <input type="text" name="percentage"></td>
        <td><h6 style="color: red">{{$errors->first('percentage')}}</h6></td>

    </tr>

        <tr>
            <td><input background = #2EBC99 type="submit" value="Submit"></td>
        </tr>
    </table>

</form>


</div>

<table BORDER=10 BORDERCOLOR=black align="center">
    
    <tr>
        <th color = blue>Id</th>
        <th>Percentage</th>
    </tr>

    @foreach($std as $st)
    <tr>
        <td>{{$st->id}}</td>
        <td>{{$st->percentage}}</td>
    </tr>
    @endforeach

</table> <br>

<h2><a href="{{ url('generate/save/go/') }}"> Go for Curve</a></h2> 

<h2><a href="{{ url('generate/save/second/clear2/') }}">Clear all</a></h2><br>


</body>
</html>

-->

