<!DOCTYPE html>
<html>
<head>
	<title>BANK</title>
</head>
<body>
      	<center>
      		
          <h1>Account Details</h1>
      	<form action="bank.php" method="post">
      	  <label>ACCOUNTER NAME : </label>
      	  <input type="text" name="name"  required />
      	  <br>

      	  <label>ACCOUNT NUMBER : </label>
      	  <input type="number" name="number"  required />
      	  <br>

      	  <label>IFSC CODE : </label>
      	  <input type="text" name="ifsc"  required />
      	  <br>

      	  <label>DATE: </label>
      	  <input type="date" name="date"  required />
      	  <br>

           <label>PHONE NUMBER: </label>
          <input type="number" name="phonenumber"  required  />
          <br>

      	  <label>ADDRESS : </label>
      	  <textarea  rows="5" cols="50" name="address" required></textarea> 
      	  <br>
      	  <input type="submit" value="submit" name="submit">
      	</form>

      	</center>

      <?php
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$number=$_POST["number"];
	$ifsc=$_POST["ifsc"];
	$date=$_POST["date"];
	$phonenumber=$_POST["phonenumber"];
	$address=$_POST["address"];

    echo "<center>";
	echo "Accountant Name : ${name} <br>";
	 echo "Accountant age: ${number} <br>";
    echo "Accountant IFSC Code: ${ifsc} <br>";
    echo "Date: ${date} <br>";
    echo "Accountant Phonenumber: ${phonenumber} <br>";
	echo "Accountant Address: ${address} <br>";
	echo "</center>";

}
	
?>
</body>
</html>