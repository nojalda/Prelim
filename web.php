<html>
	<head>
		<title>Nojalda Activity 2</title>
	</head>
<body>
	<form method="post" action="Nojalda.php">
	<table border=2 id=form>
		<tr>
			<th colspan=5>WBDV Dental Clinic</th>
		</tr>
		<tr>
			<th colspan=5>Patient Record</th>
		</tr>
		<th>Fullname:</th>
		<td colspan=3><input type=text name=ln placeholder="Last Name">
		<input type=text name=fn placeholder="First Name">
		<input type=text name=mn placeholder="Middle Name">
		</td>
		<tr>
		<th>Age:</th>
		<td colspan=3>
		<input type="number" name=age>
		</td>
		</tr>
		<tr>
		<th>Gender:</th>
		<td coslpan=3>
		<input type="radio" id="Male" name="gender" value="Male">
		<label for="Male">Male</label>
		<input type="radio" id="Female" name="gender" value="Female">
		<label for="Female">Female</label>
		<input type="radio" id="Others" name="gender" value="Others">
		<label for="Others">Others</label>
		</td>
		</tr>
		<tr>
		<th>Complete Address</th>
		<td colspan=3>
		<input type="text" name="Street" placeholder="Street">
		<input type="text" name="City" placeholder="City">
		<input type="text" name="prov" placeholder="Province">
		<br>
		<select name="country">
		<option>--Country--</option>
		<option>Philippines</option>
		<option>Russia</option>
		<option>Korea</option>
		<option>Japan</option>
		<option>USA</option>
		</select>
		<input type="text" name="ZIP" placeholder="ZIP">
		</td>
		</tr>
		<tr>
		<th>Contact Number:</th>
		<td colspan=3>
		<input type="text" id="phone" name="phone" value="+63">
		</td>
		</tr>
		<tr>
		<th>Status</th>
		<td colspan=3>
		<input type="radio" id="Single" name="status" value="Single">
		<label for="Single">Single</label>
		<input type="radio" id="Married" name="status" value="Married">
		<label for="Married">Married</label>
		<input type="radio" id="Widowed" name="status" value="Widowed">
		<label for="Widowed">Widowed</label>
		<input type="radio" id="Separated" name="status" value="Separated">
		<label for="Separated">Separated</label>
		<input type="radio" id="Divorced" name="status" value="Divorced">
		<label for="Divorced">Divorced</label>
		</td>
		</tr>
		<tr>
		<th>Email Address</th>
		<td colspan=3>
		<input type="text" name="email" placeholder="username@gmail.com">
		</td>
		</tr>
		<tr>
		<th>Occupation</th>
		<td colspan=3>
		<input type="text" id="occupation" name="occupation">
		</td>
		</tr>
		<tr>
		<th>Reasons for Visiting:</th>
		<td colspan=3>
		<textarea name="comm"></textarea>
		</td>
		</tr>
		<tr>
		<th colspan=5>Dental History</th>
		</tr>
		<tr>
		<td colspan=5>Please choose either YES or NO to indicate if you have or had any of the following:
		</tr>
		
		<tr>
		<th>Bad Taste</th>
		<td>
		<input type="radio" id="badtaste" name="badtaste" value="Yes">YES
		<input type="radio" id="badtaste" name="badtaste" value="No">NO
		</td>
		<th>Jaw Pain or Tiredness</th>
		<td>
		<input type="radio" id="jawpain" name="jawpain" value="Yes">YES
		<input type="radio" id="jawpain" name="jawpain" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Bad Breathe</th>
		<td>
		<input type="radio" id="badbreathe" name="badbreathe" value="Yes">YES
		<input type="radio" id="badbreathe" name="badbreathe" value="No">NO
		</td>
		<th>Lip or Cheek Biting</th>
		<td>
		<input type="radio" id="cheekbite" name="cheekbite" value="Yes">YES
		<input type="radio" id="cheekbite" name="cheekbite" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Bleeding Gums</th>
		<td>
		<input type="radio" id="bleedgums" name="bleedgums" value="Yes">YES
		<input type="radio" id="bleedgums" name="bleedgums" value="No">NO
		</td>
		<th>Loose Teeth or Broken Filling</th>
		<td>
		<input type="radio" id="teeth" name="teeth" value="Yes">YES
		<input type="radio" id="teeth" name="teeth" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Blisters on Lips or Mouth</th>
		<td>
		<input type="radio" id="blisters" name="blisters" value="Yes">YES
		<input type="radio" id="blisters" name="blisters" value="No">NO
		</td>
		<th>Mouth Breathing</th>
		<td>
		<input type="radio" id="mouthbreath" name="mouthbreath" value="Yes">YES
		<input type="radio" id="mouthbreath" name="mouthbreath" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Cigarette, Pipe or Cigar Smoking</th>
		<td>
		<input type="radio" id="cigar" name="cigar" value="Yes">YES
		<input type="radio" id="cigar" name="cigar" value="No">NO
		</td>
		<th>Mouth, Pain, Brushing</th>
		<td>
		<input type="radio" id="painbrush" name="painbrush" value="Yes">YES
		<input type="radio" id="painbrush" name="painbrush" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Clicking or Popping Jaw</th>
		<td>
		<input type="radio" id="popjaw" name="popjaw" value="Yes">YES
		<input type="radio" id="popjaw" name="popjaw" value="No">NO
		</td>
		<th>Orthodontic Treatment</th>
		<td>
		<input type="radio" id="ortho" name="ortho" value="Yes">YES
		<input type="radio" id="ortho" name="ortho" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Dark Teeth</th>
		<td>
		<input type="radio" id="darkteeth" name="darkteeth" value="Yes">YES
		<input type="radio" id="darkteeth" name="darkteeth" value="No">NO
		</td>
		<th>Sensitive to Cold/Heat/Sweets</th>
		<td>
		<input type="radio" id="sensitive" name="sensitive" value="Yes">YES
		<input type="radio" id="sensitive" name="sensitive" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th>Fingernail Biting</th>
		<td>
		<input type="radio" id="nailbite" name="nailbite" value="Yes">YES
		<input type="radio" id="nailbite" name="nailbite" value="No">NO
		</td>
		<th>Sores or Growths in the Mouth</th>
		<td>
		<input type="radio" id="sores" name="sores" value="Yes">YES
		<input type="radio" id="sores" name="sores" value="No">NO
		</td>
		</tr>
		
		<tr>
		<th colspan=5>
		<input type="submit" value="Add Patient Record" name="sub">
		<input type="reset" value="Reset">
		</th>
		</tr>
	</table>
</body>

</html>
<?php
		if (isset($_POST['sub'])){
$lastname = $_POST['ln'];
$firstname = $_POST['fn'];
$middlename = $_POST['mn'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$street = $_POST['Street'];
$city = $_POST['City'];
$province = $_POST['prov'];
$zip = $_POST['ZIP'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$status = $_POST['status'];
$email = $_POST['email'];
$occupation = $_POST['occupation'];
$comm = $_POST['comm'];
$badtaste = $_POST['badtaste'];
$jawpain = $_POST['jawpain'];
$badbreathe = $_POST['badbreathe'];
$cheekbite = $_POST['cheekbite'];
$bleedgums = $_POST['bleedgums'];
$teeth = $_POST['teeth'];
$blisters = $_POST['blisters'];
$mouthbreath = $_POST['mouthbreath'];
$cigar = $_POST['cigar'];
$painbrush = $_POST['painbrush'];
$popjaw = $_POST['popjaw'];
$ortho = $_POST['ortho'];
$darkteeth = $_POST['darkteeth'];
$sensitive = $_POST['sensitive'];
$nailbite = $_POST['nailbite'];
$sores = $_POST['sores'];
			
echo "<br>";
echo "<table border=2>";
echo "<tr>";
echo "<th colspan=5> WBDV Dental Clinic</th>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=5>Patient record</th>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Full Name: </th>";
echo "<td colspan=3>";
echo "$lastname, ";
echo "$firstname ";
echo "$middlename";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Age:</th>";
echo "<td colspan=3>";
echo "$age";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Gender:</th>";
echo "<td colspan=3>";
echo "$gender";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Street:</th>";
echo "<td colspan=3>";
echo "$street, ";
echo "$city, ";
echo "$province";
echo "<br>";
echo "$country, ";
echo "$zip";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Contact Number:</th>";
echo "<td colspan=3>";
echo "$phone";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Status:</th>";
echo "<td colspan=3>";
echo "$status";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Email Address:</th>";
echo "<td colspan=3>";
echo "$email";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Occupation:</th>";
echo "<td colspan=3>";
echo "$occupation";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=2>Reasons for Visiting:</th>";
echo "<td colspan=3>";
echo "$comm";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=5>Dental History</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Bad Taste</th>";
echo "<td>";
echo "$badtaste";
echo "</td>";
echo "<th>Jaw Pain or Tiredness</th>";
echo "<td>";
echo "$jawpain";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Bad Breathe</th>";
echo "<td>";
echo "$badbreathe";
echo "</td>";
echo "<th>Lip or Cheek Biting</th>";
echo "<td>";
echo "$cheekbite";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Bleeding Gums</th>";
echo "<td>";
echo "$bleedgums";
echo "</td>";
echo "<th>Loose Teeth or Broken Filling</th>";
echo "<td>";
echo "$teeth";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Blisters on Lips or Mouth</th>";
echo "<td>";
echo "$blisters";
echo "</td>";
echo "<th>Mouth Breathing</th>";
echo "<td>";
echo "$mouthbreath";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Cigarette, Pipe or Cigar Smoking</th>";
echo "<td>";
echo "$cigar";
echo "</td>";
echo "<th>Mouth Pain, Brushing</th>";
echo "<td>";
echo "$painbrush";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Clicking or Popping Jaw</th>";
echo "<td>";
echo "$popjaw";
echo "</td>";
echo "<th>Orthodontic Treatment</th>";
echo "<td>";
echo "$ortho";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Dark Teeth</th>";
echo "<td>";
echo "$darkteeth";
echo "</td>";
echo "<th>Sensitive to Cold/Heat?Sweets</th>";
echo "<td>";
echo "$sensitive";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Fingernail Biting</th>";
echo "<td>";
echo "$nailbite";
echo "</td>";
echo "<th>Sores or Growths in the Mouth</th>";
echo "<td>";
echo "$sores";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</body>";			
}
?>
