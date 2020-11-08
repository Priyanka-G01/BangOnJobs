<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('busspartners.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
     INSERT INTO BUSINESSP (NAME,MOBILENUM,EMAIL,INTEREST)
     VALUES('kristin',9210675890,'kf@umich.edu','Hardware');
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>
  




  