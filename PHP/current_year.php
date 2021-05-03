<html>

<body>
    <h2>PHP Script to find current year is leap year or not</h2>
</body>

</html>

<?php
$year = date("Y");
if ((0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400)) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
?>