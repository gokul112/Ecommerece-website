<html>
<head><title>Form</title>
<script>
function validate(form)
{
var pw1 = document.form1.pass.value;
var minLength = 6; 
var e=form.elements;
if(e['pass'].value!=e['repass'].value)
{
alert('Your Passwords do not match. ');
return false;
}
if (document.form1.pass.value.length < minLength) 
{
alert('Your password must be at least ' + minLength + ' characters long. Try again.');
return false;
}
return true;
}
</script>
<link href="head.css" rel="stylesheet" type="text/css"></head>
<link href="style.css" rel="stylesheet" type="text/css">
<body bgcolor="00aafe">
<div id="head"></div>
<div id="body">
</head>
<body>
<form action="forms.php" method="post" name="form1" onsubmit="return validate(this);">
  <table>
    <tr>
      <td align="right">First Name:</td>
      <td align="left"><input type="text" name="first" required/></td>
    </tr>
    <tr>
      <td align="right">Last Name:</td>
      <td align="left"><input type="text" name="last" /></td>
    </tr>
<tr>
      <td align="right">Username:</td>
      <td align="left"><input type="text" name="user" id="gtemail" required/></td>
    </tr>
    <tr>
      <td align="right">Password:</td>
      <td align="left"><input type="password" name="pass" value="" required /></td>
      </tr>
<tr>
      <td align="right">Retype your Password:</td>
      <td align="left"><input type="password" name="repass" value=""required/></td>
    </tr>
<tr>
      <td align="right">Email:</td>
      <td align="left"><input type="text" name="email" required/></td>
    </tr>

<tr>
      <td align="right">Contact no.:</td>
      <td align="left"><input type=number" name="number"required /></td>
    </tr>
</table>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
</body>
</html>