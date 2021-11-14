<?php
  $hostname = "localhost";
    $username = "root";
    $password = "localhost";
    $dbname = "webapp";
    @mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
    @mysql_select_db($dbname);
    
  $user=$_POST['username'];
  $password=$_POST['password'];
  
    $query="SELECT * FROM projectusers WHERE username = '$user' AND password = '$password'";
    @$result=mysql_query($query);
    @$rows=mysql_num_rows($result);

      if($rows>0)
      {
        header('location:calendar.html');
        exit;
      }
      else {
          header('location:register.html');
      exit();
      }
?>