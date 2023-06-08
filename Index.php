<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>signup page</title>
    <meta name="author" content="Mubarak"/>
    <meta name="description" content="sign in with database"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
  <div class="container">     
    <form method="POST">
      <h1>Sign up</h1>
      <p>Do you have an account? click to sign in<a href="signIn.php">sign in</a></p>
      <label for="fname">
        First Name:
      </label>
      <input type="text" id="fname" name="fname" /><br>
      <label for="lname">
        Last Name
      </label>
      <input type="text" id="lname" name="lname" /><br>
      <label for="email">
        Email
      </label>
      <input type="text" id="email" name="email" maxlength="50"/><br>
      <label for="password">
        Password
      </label>
      <input type="password" id="password" name="password" /><br>
        <button type="submit" class="btn"><a href="./view.php">Submit</a></button><br>
    </form>
  </div>
        <?php
        require_once("connection.php");
        if(isset($_POST) & !empty($_POST)){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password= $_POST['password'];
            $res = $database->create($fname,$lname,$email,$password);
        if($res){
            echo "<p>entry created</p>";
        }
        else{
            echo "<p> entry not created</p>";
        }
        }
        ?>
  </body>
</html>