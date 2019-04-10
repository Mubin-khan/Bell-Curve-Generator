<?php

$mysqli = new mysqli("localhost","root","","khan");
if($mysqli->connect_errno)
  die("Connection failed".$mysqli->connect_error);

$query = "SELECT marks FROM mubins";
$result = mysqli_query($mysqli ,$query);
$datas = array();
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $datas[] = $row;
  }
}


$mys = new mysqli("localhost","root","","khan");
if($mys->connect_errno)
  die("Connection failed".$mys->connect_error);

$quer = "SELECT percentage FROM opols";
$resul = mysqli_query($mys ,$quer);
$ff = array();
if(mysqli_num_rows($resul) > 0){
  while($ro = mysqli_fetch_assoc($resul)){
    $ff[] = $ro;
  }
}

$m=array();
$k=array();
$l=0;
$mu=array();

$w=0;
foreach ($datas as $data) {
  $m[$w++]=$data['marks'];
}

$li=array();
$ds=0;
foreach ($ff as $fi) {
   $li[$ds++] = $fi['percentage'];
}

$mi=sizeof($li);
for($i=0;$i<$w-1;$i++)
{
  for($j=0;$j<$w-1;$j++)
  {
    if($m[$j]>$m[$j+1])
    {
      $temp=$m[$j+1];
     $m[$j+1] =$m[$j];
      $m[$j]=$temp; 
    }
  }
}


$d=array();
$r=array();
$s=sizeof($m);
$cal=6;
if($mi==0)
{
for($i=0;$i<10;$i++)
{
  if($i<5)
{
  $mu[$i]=$s*($cal/100);
  $cal=$cal+2;
}
else if($i==5)
{
   $cal=$cal-2;
  $mu[$i]=$s*($cal/100);
}
else{

    $cal=$cal-2;
    $mu[$i]=$s*($cal/100);

}
} 
}
else
{
  for($i=0;$i<$mi;$i++)
  {
         $mu[$i]=$s*($li[$i]/100);
  
  }
  for($i=$mi;$i<10;$i++)
  {
     $mu[$i]=0;
  }

}

$di=(($m[$s-1]-$m[0])*10)/100;
$d[0]=$m[0]+$di;
for($i=1;$i<10;$i++)
{
       $d[$i]=$d[$i-1]+$di;
}
 $d[$i-1]=$d[$i-1]+1;

$n=0;
$c=0;
for($i=0;$i<10;$i++)
{
  for($j=$n;$j<$s;$j++)
  {
     if($d[$i]>$m[$j])
   {
       $c++;
     $n++;
     $r[$i]=$c;
   }
   else{
             if($c==0)
                {
        $r[$i]=0;
                }
                    break;        
              
      }
  
  }
  $c=0;
}

/*$max=0;
for($i=0;$i<10;$i++)
{
  if($max<$r[$i])
  {
    $max=$r[$i];

  }
}
$l=0;
for($i=0;$i<10;$i++)
{
  if($max==$r[$i])
  {
    $k[$l++]=$i;
  }
}*/
$rt=array('F','D','C','C+','B-',' B' ,'B+', 'A-', 'A', 'A+');
//echo sizeof($rt);

/*if($l==1)
{
 echo " too many ";
 for($i=0;$i<$l;$i++)
   {
   echo $rt[$k[$i]];
   }
}
else
{
  echo "same result ";
 for($i=0;$i<$l;$i++)
   {
   echo $rt[$k[$i]];
  if($i != $l-1)
    echo ", ";
}

}*/
$muina=0;
for($i=0;$i<10;$i++)
{
  if($mu[$i]<$r[$i])
  {
    if($muina==0)
    {
      $muina=1;
    echo "Too many : ";
  }
    echo $rt[$i];
    echo " ";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Curve</title>

    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <style>
    h4{
      text-align: right;
    }
   
  </style>

</head>
<body>

  <ul class="nav navbar-nav navbar-right">
                   <h4><a href="http://localhost:8080/hello/public/">Home</a></h4>

               </ul>

  <div class="chart-container">
    <canvas id="line-chartcanvas"></canvas>
  </div>

  <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js.js') }}"></script>

   
    <script type="text/javascript">
      $(document).ready(function() {

  //get canvas
  var ctx = $("#line-chartcanvas");
  var datas = [];
  var opus = [];
  @foreach($r as $d)
      datas.push(parseInt('{{$d}}'));
  @endforeach

   @foreach($mu as $dd)
      opus.push('{{$dd}}');
  @endforeach


  var data = {
    labels : ["f","D","C","C+","B-"," B" ,"B+", "A-", "A", "A+"],
    datasets : [
      {
        label : "Natural Distribution",
        data : datas,
        backgroundColor :"green",
        borderColor : "lightblue",
        fill : false,
        lineTension : .3,
        pointRadius : 5
      },
      {
        label : "Bell Curve",
        data : opus,
        backgroundColor :"red",
        borderColor : "red",
        fill : false,
        lineTension : .3,
        pointRadius : 5
      }
    ]
  };

  var options = {
    title : {
      display : true,
      position : "top",
      text : "Bell Curve",
      fontSize : 18,
      fontColor : "#111"
    },
    legend : {
      display : true,
      position : "bottom"
    }
  };

  var chart = new Chart( ctx, {
    type : "line",
    data : data,
    options : options
  } );

}); 
    </script>

</body>
</html>