<html>
  <body>
    <form action="<?php echo htmlspecialchars('welcome.php');?>" method="POST">
      Name: <input type="text" name="name">
      <br><br>
      E-mail: <input type="text" name="email">
      <br><br>
      Telephone: <input type="text" name="telephone">
      <br><br>
      Website: <input type="text" name="website">
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>