<?php
//associative arrays
$fam_array = array(
	"size"=>"4",
	"parent"=>"Ken|Caroline",
	"children"=>"Max|Chelsea",
	"pets"=>"Mimi|Harriet|Princess",
	"surname"=>"Korth"
	);
echo $fam_array["size"]."\n";
echo $fam_array["surname"]."\n";
echo $fam_array["pets"]."\n";
print_r($fam_array);
foreach ($fam_array as $key => $value) {
	echo "<p>".$key." is ".$value."</p>\n";
}
?>


