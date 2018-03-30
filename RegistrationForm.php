<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script type="text/javascript">
    function validate()
    {   var get=0;
        function ValidateEmail(email_id)
        {
            if(/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(MyForm.email_id.value))
                {
                    return (true)
                }
                alert("You have entered an invalid email address!")
                
                get=1;
            }
        }
        if(document.MyForm.Name.value=="")
        {
            alert("Please enter your name");
            get=1;
        }
       if(document.MyForm.Age.value=="" || document.MyForm.Age.value>100 || document.MyForm.Age.value<0)
        {
            alert("Please enter a correct age");
           
            get=1;
        }
        if(document.MyForm.Address.value=="")
        {
            alert("Please enter your address");
           
            get=1;
        }
        if(document.MyForm.City.value=="")
        {
            alert("Please enter a city");
           
            get=1;
        }
        if(document.PIN.value=="" || document.MyForm.PIN.value.length!=6)
        {
            alert("Please enter a valid PIN code");
           
            get=1;
        }
        if(document.Mobile_Number.value=="" || document.MyForm.Contact_Number.value.length!=10)
        {
            alert("Please enter a valide mobile number");
           
            get=1;
        } 
        if(get==1){
            return false;
        }
        else
            location.href="home1.html";
</script>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="sg">
<form name="MyForm" onsubmit="return validate()" method="post">
    <p>Email ID:<br>
    <input type="text" name="email_id" pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/">
    </p>
    <p>Password:<br>
    <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </p>
    <p>Name:<br>
    <input type="text" name="Name">
    </p>
    <p>Age:<br>
    <input type="text" name="Age">
    </p>
    <p>Gender:
    <input type="radio" name="Gender" value="male">Male
    <input type="radio" name="Gender" value="female">Female
    </p>    
    <p>Address:<br>
    <input type="text" name="Address">
    </p>
    <p>City:<br>
    <input type="text" name="City">
    </p>
    <p>PIN Code:<br>
    <input type="text" name="PIN">
    </p>
    <p>Mobile Number:<br>
    <input type="text" name="Mobile_Number">
    </p>
    <input type="submit" value="Submit">
</form>
</div>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    $email = $_POST["email_id"];
    $pass= $_POST["password"];
    $name=$_POST["Name"];
    $age=$_POST["Age"];
    $address=$_POST["Address"];
    $city=$_POST["City"];
    $pin=$_POST["PIN"];
    $mob=$_POST["Mobile_Number"];
    $gender=$_POST["Gender"];

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO details(email, password, name, age, address, city, pin, mobile,gender)
VALUES ('$email', '$pass', '$name', '$age', '$address', '$city', '$pin', '$mob','$gender')";
if($conn->query($sql) === FALSE){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<script>validate();</script>
</body>
</html>