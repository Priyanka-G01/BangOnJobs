<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('signup.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "";
   }

 

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  * {box-sizing: border-box}

.signup{
  font-size: 2.6em;
}
form{
  font-size: 1.8em;
  padding-top: 30px;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=submit]{
  width: 15%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background-color: #00BFFF;
}

input[type=submit]:hover,input[type=submit]:focus {
  
  outline: solid black;
}


</style>
</head>
<body style="background-color: green">
   <center >
    <h1 class="signup">LOGIN</h1>
<form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
   
    Username:<br> 
    <input name="name" type="text" value="" size="30"/><br> 

      
     Password:<br> 
    <input  name="password" type="password" value="" size="30"><br> 
   
   <a href="codefurywebpage.php">
    <input type="submit" value="Submit"/> 
  </a>
    </form> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br><br>
    <br>
    <br>
    <br>
   </center> 
</body>
</html>
 <?php 

    $lname=$_REQUEST['name'];   
    $lpassword=$_REQUEST['password']; 

   $sql =<<<EOF
    SELECT * FROM USERDETAILS WHERE $lname=$_REQUEST ;
 EOF;  




   $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $lname=$_REQUEST["NAME"];
      $lpassword=$_REQUEST['PASSWORD'];
  }
  if($lname !=""){
    if($lpassword == $password && $lname == $name){
      echo "Successfully LoggedIn";
    }
    else{
      echo "Incorrect username and password";
  }
}
    else {
      echo "Username does not exist,Please register!!";
    }
  
?>