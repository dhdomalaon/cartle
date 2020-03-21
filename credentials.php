<html>
<body>


<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);
// define variables and set to empty values
$user = "dean1125";
$password = "hello";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (
  $user = test_input($_POST["user"]);
  $password = test_input($_POST["password"]);
)
 {
header("Location: http://cartle.glitch.me/indexuser.html", true, 301);
exit();
 }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  </body>
</html>