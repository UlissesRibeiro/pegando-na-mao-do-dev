<?php
shell_exec('docker run -dit --name ubuntu -p 4200:4200 ubuntu:22.04');
shell_exec('docker exec ubuntu apt update && docker exec ubuntu apt install -y shellinabox');
shell_exec('docker exec -d ubuntu shellinaboxd -t -s "/:root:root:/:/bin/bash"');

header("location: ../labs/lab_linux.php");
?>
