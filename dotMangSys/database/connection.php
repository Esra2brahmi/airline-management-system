<?php
   $servername='localhost';
   $username='root';
   $password='PHW#84#jeor';

   //connecting to database
   try{
      $conn =new PDO("mysql:host=$servername;dbname=dotation",$username,$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   }catch(\Exception $e){
        $error_message= $e->getMessage();
   }
?>