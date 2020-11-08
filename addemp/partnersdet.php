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
    //  echo $db->lastErrorMsg();
   } else {
      echo "";
   }
?>
<style type="text/css">
  input[type=submit]:hover,input[type=submit]:focus {
  
  outline: solid black;
}
  input[type=submit]{
  width: 15%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background-color:#203647;
  color: white;
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
#header-nav{
  background-color:rgb(0, 122, 165);
  border:2px solid black;
}
</style>
<body style="background-color: #12232E">
   <header>
  <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
      <h1 style="text-align: center;font-size:40px;color: white;">OUR BUSINESS PARTNERS</h1>
</div>
</div>
</nav>
 </header>
  
   <?php 
     
     $result = $db->query('SELECT * FROM BUSINESSPART ');  
     $row = 0;
    ?>
    <center style="font-size:50px; background-color: #203647;color: white;">
      <?php 
    while ($row = $result->fetchArray() ) { 
       
        echo "{$row['NAME']}</br>{$row['MOBILENUM']}</br>{$row['EMAIL']}</br>{$row['INTEREST']}</br></br></br>";
        
     } 
  
    $db->close();
?>
</center>
<div style="border: 1px solid black; background-color: #007CC7; ">
  <p style="font-size: 40px;">For loan and partnership contact your interests
  <input type="submit" value="Apply"/> 
  </p>
</div>
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
