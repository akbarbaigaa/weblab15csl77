<?php
if(isset($_POST['res'])){
$res=$_POST['display'];
$res=eval('return'.$res.';');
}
?>
<html>
<head>
<title>CALCULATOR</title>
</head>
<body>
<style>
input {
width:100%;
background-color:grey;
}
</style>
<form name ="cal">
<center>
<table>
<tr>
<td  colspan=4><input type="text" name="disp" disabled value="<?php
if(isset($res)){
echo $res;
}
?>">
</td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="1" onclick="cal.disp.value += '1' "></td>
<td><input style="color: white; background-color:black;"type="button"value="2" onclick="cal.disp.value += '2' "></td>
<td><input style="color: white; background-color:black;"type="button"value="3" onclick="cal.disp.value += '3' "></td>
<td><input style="color: white; background-color:black;"type="button"value="*" onclick="cal.disp.value += '*' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="4" onclick="cal.disp.value += '4' "></td>
<td><input style="color: white; background-color:black;"type="button"value="5" onclick="cal.disp.value += '5' "></td>
<td><input style="color: white; background-color:black;"type="button"value="6" onclick="cal.disp.value += '6' "></td>
<td><input style="color: white; background-color:black;"type="button"value="/" onclick="cal.disp.value += '/' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="7" onclick="cal.disp.value += '7' "></td>
<td><input style="color: white; background-color:black;"type="button"value="8" onclick="cal.disp.value += '8' "></td>
<td><input style="color: white; background-color:black;"type="button"value="9" onclick="cal.disp.value += '9' "></td>
<td><input style="color: white; background-color:black;"type="button"value="-" onclick="cal.disp.value += '-' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="c" onclick="cal.disp.value = ' ' "></td>
<td><input style="color: white; background-color:black;"type="button"value="0" onclick="cal.disp.value += '0' "></td>
<td><input style="color: white; background-color:black;"type="button"value="+" onclick="cal.disp.value += '+' "></ts>
<td><input style="color: white; background-color:black;"type="button"value="=" onclick="cal.disp.value = eval(cal.disp.value) "></td>
</tr>
</table>
</center>
</form>
</body>
</html>