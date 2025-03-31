<?php
shell_exec('docker rm -f ubuntu');

header("location: ../index.php");
?>
