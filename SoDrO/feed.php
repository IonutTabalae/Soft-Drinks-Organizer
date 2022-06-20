<?php
require("database_con.php");
$sql = "SELECT * FROM web_feed "; 
$result = mysqli_query($conn, $sql);
$news = mysqli_fetch_all($result, MYSQLI_ASSOC);



header("Content-type: text/xml"); 

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>Soft Drinks Organizer - WebSite Blog</title>
<link>http://localhost/SoDrO/</link>
<description>Organize your drinks! The smart way!</description>
<language>en-us</language>"; 

foreach($news as $row):
$title=$row['title']; 
$link=$row['link']; 
$description=$row['description']; 

echo "<item>
<title>$title</title>
<link>$link</link>
<description>$description</description>
</item>"; 
endforeach; 
echo "</channel></rss>"; 
?>
