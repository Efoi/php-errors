<?php 
$envb = getenv();
echo "<pre>";
foreach ($envb as $key => $value) {
    print("$key : $value\n");
}
echo "</pre>";
?>