<?php
$dbh = new PDO("mysql:host=localhost;dbname=menupoisson","root","solicode24");
$sql = " SELECT * FROM poissons ";
$studentsQuery = $dbh->query($sql);
$getStudents = $studentsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getStudents));
?>