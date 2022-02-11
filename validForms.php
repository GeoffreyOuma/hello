<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms php</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $courseErr = $genderErr = $commentErr = "";
$name = $email = $course = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "required";
    } else {
      $name = test_input($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "required";
    } else {
      $email = test_input($_POST["email"]);
    }
  
    if (empty($_POST["age"])) {
      $courseErr = "required";
    } else {
      $course = test_input($_POST["age"]);
    }
  
    if (empty($_POST["comment"])) {
      $commentErr = "required";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br><br>
<br><br>
<br><br>
<br><br>
<h1>welcome to eCode coding bootcamp</h1>
<h3>want to learn with the best? register today!</h3>br
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <!-- <br><br> -->
  E-mail: <input type="text" name="email">
  <!-- <br><br> -->
  Course: <input type="text" name="course">
  <br><br>
  Additional information: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">rather not say
  <br><br>
  <input type="submit" name="submit" value="register">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $course;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>