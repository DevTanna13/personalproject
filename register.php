<?
  $hostname = "stonehill.db.11435861.eed.hostedresource.net";
    $username = "stonehill";
    $dbname = "stonehill";
    $password = "Student2020!";

    @mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
    @mysql_select_db($dbname);

    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="INSERT INTO tannadusers (username, password) VALUES('$user','$pass')";
      @$result=mysql_query($query);

    header("Location: http://www.jcrozo.com/students/Dev/Final%20Project/login.html");
?>
