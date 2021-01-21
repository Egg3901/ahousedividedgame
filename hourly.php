<?php
$con = OpenCon();
$uquery = 'UPDATE accounts SET influence = influence * .97';
$stmt = $con->prepare($uquery);
$stmt->execute();
$stmt->fetch();
$stmt->close();