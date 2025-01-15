<?php
$content = file_get_contents('./index.php');
$base64Content = base64_encode($content);
echo $base64Content;
?>
