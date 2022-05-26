<html>
  <head>
    <title>Worlds Smallest Handler</title>
  </head>
  <body>
    <h1>Worlds Smallest Handler!</h1>
    <?php 
  if(isset($_POST["FirstName"])){//show data
    echo $_POST["FirstName"];
  }else{//show form
    echo '
          <form method="post" action="">
          <p>First Name: <input type="text" name="FirstName"/>           </p>
          <p><input type="submit" /></p>
          </form>

         ';
  }




    ?>

  
  </body>
</html>
