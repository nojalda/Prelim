<html>
<head>
<title>Prelim_Nojalda</title>
</head>
<body>
<form method=post action="Prelim_Nojalda.php">
<table border=2>
<tr>
<th colspan=2>
Customer Details
</th>
<th colspan=2>
Reservation Details
</th>
</tr>
<tr>
<th>
Fullname:
</th>
<td>
<input type=text name=lnfmen placeholder=Lastname size=35>
<input type=text name=fnfmen placeholder=Firstname size=35>
<input type=text name=mifmen placeholder=MI size=1>
</td>
<th>
Room Type
</th>
<td>
<select name=roomfmen>
<option>--Type--<option>
<option value="1000">Single(P1000)<option>
<option value="1500">Double(P1500)<option>
<option value="2000">Triple(P2000)<option>
<option value="2500">Queen(P2500)<option>
<option value="3000">King(P3000)<option>
</select>
<td>
</tr>
<tr>
<th>
Age:
</th>
<td>
<input type=text name=agefmen size=35>
</td>
<th>
Room Class
</th>
<td>
<input type=radio name=classfmen value="Standard">Standard
<input type=radio name=classfmen value="500">Deluxe(+500)
<input type=radio name=classfmen value="1000">Suite(+1000)
</td>
</tr>
<tr>
<th>
Gender
</th>
<td>
<input type=radio name=genfmen value="Male">Male
<input type=radio name=genfmen value="Female">Female
<input type=radio name=genfmen value="Others">Others
</td>
<th rowspan=2>
Number of Guest:
</th>
<td rowspan=2>
<input type=text name=adfmen placeholder=Adult>
<br>
<input type=text name=chifmen placeholder=Child>
</td>
</tr>
<tr>
<th rowspan=2>
Complete Adress:
</th>
<td>
<input type=text name=stfmen placeholder=Street size=35>
<input type=text name=ctfmen placeholder=City size=35>
</td>
</tr>
<tr>
<td>
<input type=text name=prfmen placeholder=Province size=35>
<select name=countryfmen >
<option>--country--</option>
<option>korea</option>
<option>japan</option>
<option>Vietnam</option>
<option>USA</option>
<option>Ukraine</option>
<option>Philippines</option>
<option>Kuwait</option>
<option>Italy</option>
<option>Turkey</option>
<option>Thailand</option>
</select>
<input type=text name=zipfmen size=4 placeholder=Zip>
</td>
<th>
Date Arrived
</th>
<td>
<input type=text name=mmfmen size=4 placeholder=MM>--
<input type=text name=ddfmen size=4 placeholder=DD>--
<select name=yearfmen>
<option>--Year--</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select>
</tr>
<tr>
<th>
Contact Number
</th>
<td>
<input type=text name=contactfmen value="+63" size=35>
</td>
<th>
Number of Days
</th>
<td>
<input type=text name=ndfmen >
</td>
</tr>
<tr>
<th>
Occupation
</th>
<td>
<input type=text name=occufmen size=35>
</td>
<th rowspan=3>
Choose Your Freebies
</th>
<td rowspan=3>
<input type=radio name=freefmen value="Free Breakfast">Free Breakfast
<br>
<input type=radio name=freefmen value="Free Lunch">Free Lunch
<br>
<input type=radio name=freegenfmen value="Free Dinner">Free Dinner
</td>
</tr>
<tr>
<th>
Work Number:
</th>
<td>
<input type=text name=workfmen size=35>
</td>
</tr>
<tr>
<th>
Email Adress:
</th>
<td>
<input type=text name=emfmen placeholder= "                                                 @gmail.com" size=35>
</td>
<tr>
<th colspan=4>
Special Request
</th>
</tr>
<tr>
<th colspan=4>
<textarea name=commfmen rows="10" cols="170"></textarea>
</th>
</tr>
<tr>
<th colspan=8>
<input type=submit name=subfmen value="reserve">
<input type=submit name=resfmen value="reset">
</th>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['subfmen'])){
$fmenln=$_POST['lnfmen'];
$fmenfn=$_POST['fnfmen'];
$fmenmi=$_POST['mifmen'];
$fmenage=$_POST['agefmen'];
$fmengender=$_POST['genfmen'];
$fmenst=$_POST['stfmen'];
$fmenct=$_POST['ctfmen'];
$fmenpr=$_POST['prfmen'];
$fmencntry=$_POST['countryfmen'];
$fmenzip=$_POST['zipfmen'];
$fmencon=$_POST['contactfmen'];
$fmenoccu=$_POST['occufmen'];
$fmenwork=$_POST['workfmen'];
$fmenem=$_POST['emfmen'];
$fmenroom=$_POST['roomfmen'];
$fmenclass=$_POST['classfmen'];
$fmenad=$_POST['adfmen'];
$fmenchi=$_POST['chifmen'];
$fmenmm=$_POST['mmfmen'];
$fmendd=$_POST['ddfmen'];
$fmenyear=$_POST['yearfmen'];
$fmennd=$_POST['ndfmen'];
$fmenfree=$_POST['freefmen'];
$fmencomm=$_POST['commfmen'];
$fmentotal;
$fmentotal=($fmenroom + $fmenclass)*$fmennd;

echo"<table border=2>";
echo"<tr><th colspan=4>WBDV Reservation form</th></tr>";
echo"<tr><th >Fullname:</th>";
echo"<td >$fmenfn $fmenln $fmenmi</tr>";
echo"<tr><th >Age:</th>";
echo"<td >$fmenage</tr>";
echo"<tr><th >Gender:</th>";
echo"<td >$fmengender</tr>";
echo"<tr><th rowspan=2>Complete Adress:</th>";
echo"<td >$fmenst, $fmenct</tr>";
echo"<td >$fmenpr, $fmencntry, $fmenzip</tr>";
echo"<tr><th >Contact Number:</th>";
echo"<td >$fmencon</tr>";
echo"<tr><th >Occupation:</th>";
echo"<td >$fmenoccu</tr>";
echo"<tr><th >Work Number:</th>";
echo"<td >$fmenwork</tr>";
echo"<tr><th >Email Adress:</th>";
echo"<td >$fmenem</tr>";
echo"<tr><th colspan=2>**Reservatin Details**</tr><th>";
echo"<tr><th >Room Type:</th>";
echo"<td >$fmenroom</tr>";
echo"<tr><th >Room Class:</th>";
echo"<td >$fmenclass</tr>";
echo"<tr><th  rowspan=2>Number of Guest:</th>";
echo"<td >$fmenad</tr>";
echo"<tr><td >$fmenad</tr>";
echo"<tr><th >Date Arrived:</th>";
echo"<td >$fmenmm--$fmendd--$fmenyear</td></tr>";
echo"<tr><th >Days:</th>";
echo"<td >$fmennd</td></tr>";
echo"<tr><th >Freebies:</th>";
echo"<td >$fmenfree</td></tr>";
echo"<tr><th colspan=2 >Total Reservation Fee: ",$fmentotal;
echo"</th></tr>";
echo"<tr><th colspan=2>**Special Request**</th></tr>";
echo"<tr><td colspan=2>$fmencomm</td></tr>";



echo"</table>";
}
?>