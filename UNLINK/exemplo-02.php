<?php 

if(!is_dir("images")) mkdir("images");

//$img = scandir("images");

foreach (scandir("images") as $item) {
	if (!in_array($item, array(".",".."))) {
		unlink("images/" . $item);
	}
}

echo "Ok";

 ?>