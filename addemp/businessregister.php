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
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE COMPANY2
      (NAME   TEXT NOT NULL,
      MOBILENUM INTEGER,
      EMAIL     TEXT  NOT NULL,
      BUDGET  REAL,
      INTEREST  TEXT  NOT NULL
     );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>