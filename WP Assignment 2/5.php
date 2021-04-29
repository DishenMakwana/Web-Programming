<?php
function year_check($my_year)
{
    if ($my_year % 400 == 0)
        print("It is a leap year");
    if ($my_year % 4 == 0)
        print("It is a leap year");
    else if ($my_year % 100 == 0)
        print("It is not a leap year");
    else
        print("It is not a leap year");
}
$my_year = (int)readline('Enter any year: ');
year_check($my_year);
