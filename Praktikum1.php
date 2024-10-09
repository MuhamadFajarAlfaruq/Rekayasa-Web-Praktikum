
<?php
# CONTOH JSON OBJECT
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo json_encode($age);
?>

<br><br>

<?php
# CONTOH JSON ARRAY
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
?>

<br><br>

<?php
#CONTOH JSON OBJECT
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
// mengakses nilai object
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>

<br><br>

<?php
# CONTOH JSON ARRAY
 $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 $arr = json_decode($jsonobj, true);
 // mengakses nilai array
 echo $arr["Peter"];
 echo $arr["Ben"];
 echo $arr["Joe"];
 ?>