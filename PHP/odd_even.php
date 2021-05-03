<html>

<body>
    <h2>Check enter number is odd or even</h2>
    <form action="" method="post">
        <input type="number" name="number" />
        <input type="submit" />
    </form>
</body>

</html>

<?php
if ($_POST) {
    //get the year
    $number = $_POST['number'];

    //check if entered value is a number 
    if (!is_numeric($number)) {
        echo "Strings not allowed, Input should be a number";
        return;
    }

    //multiple conditions to check the leap year
    if ($number % 2 == 0) {
        echo "$number is even";
    } else {
        echo "$number is odd";
    }
}
?>