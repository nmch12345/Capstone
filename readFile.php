<html>
<head>
</head>
<body>
<?php
$handle = @fopen("/export/mathcs/home/student/y/ywang85/WWW/capstone/Capstone/student_name.txt", "r");
$student_name=array();

if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        array_push($student_name,$buffer);
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
   print_r($student_name);
}
?>
</body>
</html>
