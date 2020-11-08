<?php
session_start();
     if (isset($_GET["login"])){
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

    $name=$_REQUEST['name']; 
    $password=$_REQUEST['password']; 
    



      $sql ='SELECT * from SIGNUP where USERNAME="'.$_POST["name"].'";';
       $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id=$row['ID'];
      $username=$row["USERNAME"];
      $password=$row['PASSWORD'];
  }
    if ($id!=""){
        if ($password==$_POST["password"]){
           $_SESSION["login"]=$name;
         // header('Location: index.php');    
        }else{
          
          echo "Wrong Password";
        }
      }else{
       echo "User not exist, please register to continue!";
      }
   //echo "Operation done successfully\n";
   $db->close();
 }
?>

<center>
 
   <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
   
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Enter Password
      <input name="password" type="password" /><br>
   
    <input type="submit" value="Submit"/> 
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
</center>
