<!DOCTYPE html>
<html>
<header>
<link rel="stylesheet" href="style.css" type="text/css" />
	
</header>
<body>
<div id="main">
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel","Lamborghini","");
var_export(array_chunk($cars,2));
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_LOWER));

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
  );
$last_name = array_column($a, 'id','first_name');
print_r($last_name);
// error echo "My house is " . $COLOR . "<br>"; 
// error echo "My boat is " . $coLOR . "<br>";
?>
</div>

</body>
</html>