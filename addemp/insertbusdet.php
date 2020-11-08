<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('company.db');
      }
   }
   $db = new MyDB();
   if(!$db){
    //  echo $db->lastErrorMsg();
   } else {
      echo "";
   }

 

?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Cardo&family=Cinzel:wght@500&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
  * {box-sizing: border-box}

.signup{
  font-size: 2.6em;
  font-family: 'Cardo', serif;
font-family: 'Cinzel', serif;
color: white;
position: relative;
left: 340px;
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
img{
  width: 100%;
 height: 100%;
}
#header-nav{
  background-color:rgb(0, 122, 165);
  border:2px solid black;
}

  .panel-footer{
  margin-top: 10px;
  padding-top: 45px;
  padding-bottom: 30px;
  background-color: #222;
  border-top: 0;
}



#a{
  font-size: 1.8em;
  font-family: 'Playfair Display', serif;
  color: green;
}

#b {
  color: white;
  font-size: 1.4em;
  line-height: 1.8;
  font-style: italic;
  color: white;
}
form{
  color: white;
}

</style>
</head>
<body style="background-color:rgb(0, 0, 54);">
   <center >
    <header>
  <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
      <h1 class="signup">REGISTER TO BUSINESS</h1>
</div>
</div>
</nav>
 </header>

 <form  action="" method="POST" enctype="multipart/form-data"> 

    
  
 
    <input type="hidden" name="action" value="submit"> 
   
     NAME:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
   
    MOBILE NUMBER:<br> 
    <input name="mobilenum" type="text" value="" size="30"/><br> 
   
    EMAIL:<br> 
    <input name="email" type="text" value="" size="30"/><br> 

      
    ENTER YOUR BODGET:<br> 
    <input  name="budget" type="text" value="" size="30"><br> 
   
   AREA OF INTEREST:<br> 
    <input  name="interest" type="text" value="" size="30"><br> 
   <input type="submit" value="Submit"/> 
    
    </form> 
   </center> 


<footer class="panel-footer"  style="background-color: #000;color: white;">
    <div class="container">
      <div class="row">
       
        <section id="address" class="col-sm-4">
          <span id="a">Address:</span><br>
          <span id="b">University Visvesvaraya College of Engineering<br>
          K.R.Circle,Bangalore</span>
          
        </section>
        
      </div>
      
    </div>
  </footer>
</body>
</html>
 <?php 

    $name=$_REQUEST['name'];  
    $email=$_REQUEST['email']; 
    $mobilenum=$_REQUEST['mobilenum']; 
    $budget=$_REQUEST['budget']; 
    $interest=$_REQUEST['interest'];

   $sql =<<<EOF
    INSERT INTO COMPANY2 (NAME,MOBILENUM,EMAIL,BUDGET,INTEREST)
      VALUES ('$name','$mobilenum','$email','$budget','$interest');
   
EOF;
  




   $ret = $db->exec($sql);
   
   if(!$ret){
     //echo $db->lastErrorMsg();
   } else {
     echo "You Have Successfully registered\n" ;
    }
    
   
   
   $db->close();
?>