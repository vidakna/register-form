<!DOCTYPE html>
<html>
<title> Reg Form</title>
<head>
<style>
.error{color: #ed2939;}

#bg{   height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  left: 0;
 
background-color: Lavender; 
}
#vd{margin-left:100px ; }
#details{ 
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  right: 0; height: 100%;
  width: 50%;
  position: fixed;

  }
#head{text-decoration: dotted; text-align: center; color: #f50  ;}
form{margin-left: 100px; margin-top:40px ;}
</style>
</head>
<body>

<?php
$nameErr = $LnameErr = $Fname = $Lname = $GenErr = $gender ="";
$year = $UnameErr= $username= $pwd = $pwdErr= $Address ="";
$Email = array ("Email");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Fname"])) {
      $nameErr = "First Name is required";
    } else {
      $Fname = test_input($_POST["Fname"]);
    }


    if (empty($_POST["Lname"])) {
        $LnameErr = "Last Name is required";
      } else {
        $Lname = test_input($_POST["Lname"]);
      }

      if (empty($_POST["Lname"])) {
        $GenErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if (empty($_POST["Lname"])) {
        $UnameErr = "User Name is required";
      } else {
        $username = test_input($_POST["username"]);
      }

      if (empty($_POST["Lname"])) {
        $pwdErr = "Password is required";
      } else {
        $pwd = test_input($_POST["pwd"]);
      }
} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}  
?>  

<div id="bg"><br>
    <h3 id="head">Enter Your Details</h3>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" > 
First Name :  <input type="text" name="Fname"> 
<span class="error">* <?php echo $nameErr;?></span> <br><br><br>
Last  Name : <input type="text" name="Lname" >
<span class="error">* <?php echo $LnameErr;?></span> <br><br><br>
User Name  : <input type="text" name="username">
<span class="error">* <?php echo $UnameErr;?></span> <br><br> <br>
Password  &nbsp; : <input type="password" name="pwd">
<span class="error">* <?php echo $pwdErr;?></span> <br><br> <br>
Gender     : <input type="radio" name="gender" value="Male">Male
             <input type="radio" name="gender" value="Female">Female
             <span class="error">* <?php echo $GenErr;?></span><br><br><br>
Email      : <input type="email" name="Email" size="25" required > <br> <br><br>
Address <br>     <textarea name="Address"  cols="32" rows="5"></textarea><br><br><br>
Year :&nbsp; <select  name="year"  >
<option value="1st Year">1st Year</option>
    <option value="2nd Year">2nd Year </option>
    <option value="3rd Year">3rd Year </option>
    <option value="4th Year">4th Year </option>
    
</select> <br><br><br>
<p id="vd">    
<input type="submit" value="SUBMIT"   >
<input type="reset"  value="RESET">
</div> 
</form>
</p>
<br>
<div id="details">
 <div style="margin-top:40px;margin-left:35%;">   
<?php
echo " <h2> Check Your Details:</h2>";

if (isset($_POST["Email"])|| isset($_POST["Address"]) || isset($_POST["province"])) 
{
echo $Fname .' '. $Lname; 
echo "<br>";
echo $username;
echo "<br>";
echo $gender;
echo "<br>";
echo $pwd;
echo "<br>";
echo $_POST ["Email"];
echo "<br>";
echo $_POST ["Address"];
echo "<br>";
echo $_POST["year"];


}
?>
</div>
</div>


</body>

</html>


