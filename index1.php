<meta charset="utf-8" />	
<?php
$data='id:name:age
1:Ваня:8
2:Коля:10
3:Саша:5';
$array_values=explode("\n", $data);
$array_keys=array_shift($array_values);
$array_keys=explode(":", $array_keys);
$final=array();
foreach ($array_values as $value) {
		$value=explode(':',$value);
		$pre_final=array_combine($array_keys, $value);
		array_push($final,$pre_final);
	}
echo "<pre>";
var_dump($final);
echo "</pre>";
?>
