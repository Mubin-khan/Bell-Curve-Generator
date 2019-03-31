<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<body style="background-color: #f1f1f1;">
	<h1 align="center"style="background-color: white;">Edit Student Informatrion</h1>
<form action="{{ url('generate/save/studentEdit/studentUpdate/'.$students->id) }}" method="post">
	{{csrf_field()}} 
	<table align="center">
		<tr>
			<td>Reg_No:</td>
			<td><input type="text" name="reg_num" value="{{$students->reg_num}}"></td>
			<td><h6 style="color: red">{{$errors->first('reg_num')}}</h6></td>
		</tr>
		<tr>
			<td>Marks:</td>
			<td><input type="text" name="mark" value="{{$students->mark}}"></td>
			<td><h6 style="color: red">{{$errors->first('mark')}}</h6></td>
		</tr>
		
		<tr>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>