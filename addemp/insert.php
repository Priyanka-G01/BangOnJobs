<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

 

?>

<center>
 
   <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
   
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 

    Your mobilenum:<br> 
    <input name="mobilenum" type="text" value="" size="30"/><br> 
   
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 

      
    Your interest:<br> 
    <input name="interest" type="text" rows="7" cols="30"></input><br><br> 
   
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

 <?php 

    $name=$_REQUEST['name']; 
    $mobilenum=$_REQUEST['mobilenum']; 
    $email=$_REQUEST['email']; 
    $interest=$_REQUEST['interest']; 


   $sql =<<<EOF
      INSERT INTO BUSINESSPART (NAME,EMAIL,MOBILENUM,INTEREST)
      VALUES ('$name', '$mobilenum', '$email', '$interest' );
    
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "Records created successfully\n";
   }
   $db->close();
?>