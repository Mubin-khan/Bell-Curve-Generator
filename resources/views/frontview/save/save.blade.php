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


</body>
</html>
