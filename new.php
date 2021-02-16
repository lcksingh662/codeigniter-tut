<?php

touch("temp.doc");
copy("temp.doc","resume.doc");
if(file_exists("temp.doc")){
	echo "temp.doc exists with size ". filesize("temp.doc"). " with path " . realpath("temp.doc") . "<br>";
}
if(file_exists("resume.doc")){
	echo "resume.doc exists with size ". filesize("resume.doc"). " with path " . realpath("resume.doc") . "<br>";
}

$x = "Jasjit";
$y = "Singh";
$z = $x.$y;
echo "<br>".$z."<br>";


/*
$data="A fish out of water again and again";

$fptr = fopen("output.txt","w");
flock($fptr,LOCK_EX) or die('Error: cannot lock file');
fwrite($fptr,$data);
flock($fptr,LOCK_UN) or die('Error: cannot unlock file');
fclose($fptr);
echo "Data written to file<br>";



$data="A fish out of water"; 

$fo=fopen("output.txt","a");

flock($fo,LOCK_EX) or die('ERROR:cannot lock file');

fputs($fo,$data);

flock($fo,LOCK_UN) or die('ERROR:cannot unlock file');

fclose($fo);

echo "Data written to file<br>";

*/










$str=file_get_contents('output.txt') or die('ERROR:cannot find the file');
echo $str."<br>";


$arr=file('output.txt') or die('ERROR: cannot file file');

foreach($arr as $line)

{

echo $line."<br>";

} 

$itr = new ArrayIterator($arr);
$itr -> rewind();
echo "Iterator<br>";
while($itr -> valid()){
	echo $itr -> current()."<br>";
	$itr -> next();
}

for($i = 0; $i < count($arr); $i++){
	echo $arr[$i]."<br>";
}

?>