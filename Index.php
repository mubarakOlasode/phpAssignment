<!DOCTYPE html>
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
    <div class="data_view">
      <a href="./view.php"><input type="button" value="view details"/></a>
    </div>
    <form method="POST">
      <h1>Sign up</h1>
      <p>Do you have an account? click to sign in<a href="signIn.php">sign in</a></p>
      <div class="fname">
        <label for="fname">
          First Name:
        </label>
        <input type="text"  name="fname" id="fname"/>
      </div>
      <div class="lname">
        <label for="lname">
          Last Name:
        </label>
        <input type="text" name="lname" id="lname"/></div>
      <div class="email">
        <label for="email">
          Email:
        </label>
        <input type="text"  name="email" id="email" maxlength="50"/></div>
      <div class="password">
        <label for="password">
          Password:
        </label>
        <input type="password" name="password" id="password" />
      </div>
        <button type="submit" class="btn">Submit</button>
    </form>
  </div>
        <?php
        require_once("./connection.php");
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