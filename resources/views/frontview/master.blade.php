<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
.dropbtn {
  background-color: white;
  color: ;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {display: block;}

</style>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Bell Curve Generator</title>
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
               <a href="index.html" class="navbar-brand">Bell Curve Generator</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://localhost:8080/hello/public/">Home</a></li>
                    <li><div class="dropdown">
  <button class="dropbtn">About</button>
  <div class="dropdown-content">
   <h5><i>If you give a marks of the class, it will show the curve. Again if you give different %, it will show you the comparison among the curves.</i></h5>
 
  </div>
</div></li>

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
                    <h1>Hello! This is Bell Curve Generator.</h1>
                    <h4>generate your curve</h4>
                    <a href="{{ url('/generate/save') }}" class="smoothScroll btn btn-default">GENERATE NOW</a>
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
