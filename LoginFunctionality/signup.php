<?php
	require "headerA.php";
?>
	<main>
    <h1>Signup</h1>
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error']== "emptyfields") {
        echo '<p>Fill in all fields!</p>';
      }
      else if ($_GET['error']== "invalidmailuid") {
        echo '<p>Please use a valid Username and Email</p>';
      }
      else if ($_GET['error']== "invaliduid") {
        echo '<p>Please use a valid Username</p>';
      }
      else if ($_GET['error']== "invalidmail") {
        echo '<p>Please use a valid Email</p>';
      }
      else if ($_GET['error']== "passwordcheck") {
        echo '<p>The passwords you typed do not match</p>';
      }
      else if ($_GET['error']== "usertaken") {
        echo '<p>That Username has already been taken. Please choose a different Username</p>';
      }
    }
    else if ($_GET['signup']== "success") {
      echo '<p>Signup success!</p>';
    }
     ?>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder=" Repeat Password">
      <button type="submit" name="signup-submit">Signup</button>
    </form>
	</main>
<?php
	require "footer.php";
 ?>
