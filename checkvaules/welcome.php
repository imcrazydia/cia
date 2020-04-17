<html>
<body>

<?php

// define variables and set to empty values
$name = $email = $telephone = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input_filter($_POST["name"]);
  $email = input_filter($_POST["email"]);
  $telephone = input_filter($_POST["telephone"]);
  $website = input_filter($_POST["website"]);
}

function input_filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

    <p>Welkom <?php echo $name; ?></p>
    <p>E-mail: <?php echo $email; ?></p>
    <p>Telefoon: <?php echo $telephone; ?></p>
    <p>Website: <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>

</body>
</html>