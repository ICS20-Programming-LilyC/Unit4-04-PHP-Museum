<?php

//Setting constants for ages: children are a maximum of 5, elderly people are a minimum of 95 and students are between 12 & 21
define("CHILD_FREE", 5);
define("ELDERLY_FREE", 95);
define("STUDENT_MINIMUM", 12);
define("STUDENT_MAXIMUM", 21);

//Define cost that will be displayed as result later on
$cost = "";

//Get the user's age and the day of the week from input form
$userAge = intval($_POST["user-age"]);
$day = $_POST["day"];

//If the user enters a negative number for their age, display "Please enter a valid age."
if ($userAge < 0) {
    $cost = "Please enter a valid age.";
} 

//Otherwise, if user does not enter age, display "Please enter age"
elseif (empty($userAge)) {
    $cost = "Please enter age.";
} 

//Otherwise, if the user does not enter a day of the week, display "Please enter a day of the week."
elseif ($day == "Day of week") {
    $cost = "Please select a day of the week.";
} 

//Using compound if statements to determine cost of free admission. 
elseif (($userAge < CHILD_FREE) || ($userAge > ELDERLY_FREE)) {
    $cost = "You can visit the museum for free!";
} 

//Otherwise if the user's age is between 12 and 21 and between the days Thursday and Tuesday, display "You get a student discount".
elseif ((($userAge >= STUDENT_MINIMUM) && ($userAge <= STUDENT_MAXIMUM)) || (($day == "Thursday") || ($day == "Tuesday"))) {
    $cost = "You’re eligible for a student discount!";
}

//Else, display "You are not eligible for a discount and must pay the full price."
else { 
    $cost = "You're not eligible for a discount, you will have to pay the full price. Thank you for understanding.";
}

// Display the museum pass the user gets
echo "$cost";
