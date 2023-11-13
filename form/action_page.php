          <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['Name'];
  if (empty($name)) {
    echo "Name is required";
  } else {
    echo $name;
  }
  $name = $_REQUEST['Phone Number'];
  if (empty($name)) {
    echo "Phone Number is required";
  } else {
    echo $name;
  }
  $name = $_REQUEST['Email'];
  if (empty($name)) {
    echo "Email is required";
  } else {
    echo $name;
  }if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['Message Box'];
  if (empty($name)) {
    echo "Your message is required";
  } else {
    echo $name;
  }
}
?>
