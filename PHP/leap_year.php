<html>

<body>
    <h2>PHP Script to find Leap year or not</h2>
    <form action="" method="post">
        <input type="text" name="year" />
        <input type="submit" />
    </form>
</body>

</html>

<?php
if ($_POST) {
    //get the year
    $year = $_POST['year'];

    //check if entered value is a number 
    if (!is_numeric($year)) {
        echo "Strings not allowed, Input should be a number";
        return;
    }

    //multiple conditions to check the leap year
    if ((0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400)) {
        echo "$year is a leap year";
    } else {
        echo "$year is not a leap year";
    }
}
?>