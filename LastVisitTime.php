20-44234-3
<html>
<body>
<center><h1> Last visited time on the web page</h1></center>
<br>
<?php

 date_default_timezone_set('Asia/Dhaka');
$LastVisit = 60 * 60 * 24 * 60 + time();
setcookie("lastVisit",date("l jS \of F Y h:i:s A"), $LastVisit); // date() is from w3 school I dont understand how "l jS \of F Y h:i:s A" works/means
if(isset($_COOKIE['lastVisit'])){

$visit = $_COOKIE['lastVisit'];
echo "Your last visit was - ". $visit;

}

?>
</body>
</html>