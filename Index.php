<!DOCTYPE>
  <html lang="en-US">
    <head>
      <meta charset="utf-8"/>
      <title>signup page</title>
      <meta name="author" content="Mubarak"/>
      <meta name="description" content="sign in with database"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <header>
        <?php
      include("./global_header.php")
  
      ?>
      </header>
    <main>
<p>Already have an account?<a href="#" class="sign_in">sign in</a></p>
  <div class="container"> 
    <form class="row g-3" method="POST">
     <div class="col-md-6">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" id="inputEmail4">
  </div>
      <div class="col-md-6">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" id="inputEmail4">
  </div> 
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="inputEmail4" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="inputPassword4" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="inputCity" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Ontario</option>
      <option>Quebec</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="inputZip" id="inputZip">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign up</button>
  </div>
</form>
  </div>
    </main>
        <?php
        require_once("./connection.php");
        if(isset($_POST) & !empty($_POST)){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['inputEmail4'];
            $address= $_POST['inputAddress'];
            $password= $_POST['inputPassword4'];
            $city= $_POST['inputCity'];
            $zip= $_POST['inputZip'];
        
            $res = $database->create($fname,$lname,$email,$address,$city,$zip);
        if($res){
            echo "<p>entry created</p>";
        }
        else{
            echo "<p> entry not created</p>";
        }
        }
        ?>
  </body>
 <footer>
    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
  <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
  <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
</svg>
<p>let us make your look your price</p>
 </footer>
</html>