<?php
$dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'pass'); 

$o = "SELECT * FROM posts";
$c = $dbh->query($o);


$row = $c->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>"; print_r($row); echo "</pre>";

