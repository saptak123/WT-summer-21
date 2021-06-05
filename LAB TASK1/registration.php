!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
<td> <label for="Full_Name ">Full Name : </label> </td>
<td><input type="text" id="Full_Name"></td>
</tr>


<tr>
<td> <label for="Email ">Email : </label> </td>
<td><input type="text" id="Email"></td>
</tr>


<tr>
<td> <label for="Pass ">Pass : </label> </td>
<td><input type="pass" id="Pass"></td>
</tr>

<tr>
<td> <label for="Comment ">Comment : </label> </td>
<td><textarea rows="10" cols="15" name="comment" form="Comment  Here "> </textarea></td>
</tr>


<tr>
<td> <label for="Gender ">Gender : </label> </td>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value=" or other">
  <label for="other"> or Other</label>
</td>
</tr>
<tr>
<td> <label for="Checkbox ">Please Choose a Hobby : </label> </td>
<td>
<input type="checkbox"  name="value1" value="Singing">
<label for="value1">Singing</label>
<input type="checkbox" name="value2" value="Dancing">
<label for="value2">Dancing</label>
<input type="checkbox"  name="value3" value="Swimming">
<label for="value3"> Swimming</label>
</td>
</tr>
<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"></td>
</tr>
<tr>
<td> <input type="reset" name="reset"> 
<input type="submit" name="submit">
</td>
</tr>
</form>
</table>
</body>
</html>

