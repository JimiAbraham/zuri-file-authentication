<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 200px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
	</style>
</head>
<body>

<form action="" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="text"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>


    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="reg" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>



<?php

// PHP code comes here

if(isset($_POST['reg']))
{

$name=$_POST['user'];

$email=$_POST['email'];

$psw=$_POST['psw'];




// echo $name; echo $email; echo $psw;
// $data = $_POST["user"] . $_POST["email"] . $_POST["psw"];
// $fp = fopen('reg.txt', 'a');
// fwrite($fp, $data );
// fclose($fp);
// }
//  $data = file_get_contents("reg.txt");

// // print_r($data);

// echo $data[0];
// echo $data[1];
// echo $data[2];


    $filename = "reg.txt";
    $myarray[] = $_POST["user"];
    $myarray[] = $_POST["email"];
    $myarray[] = $_POST["psw"];
    $mystring = implode("\n", $myarray);
    $numbytes = file_put_contents($filename, $mystring);

  }
    print "$numbytes bytes written\n";
?>