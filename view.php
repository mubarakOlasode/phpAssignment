<?php
require_once("./connection.php");
$res = $database->read();
?>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>result page</title>
    <meta name="author" content="Mubarak"/>
    <meta name="description" content="display user's information"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
  <div class="container"> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $count=1;
     while($r=mysqli_fetch_assoc($res)){
       $count++;
        ?>
    <tr>
      <th scope="row"><?php echo $count?></th>
      <td><?php echo $r['fname']?></td>
      <td><?php echo $r['lname']?></td>
      <td><?php echo $r['email']?></td>
    </tr>
  </tbody>
<?php
     }
    ?> 
</table>
  </div>
  </body>
</html> 