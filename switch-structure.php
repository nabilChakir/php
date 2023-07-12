<?php
if ($_GET['grade'] != "") {
    // Form processing
    $grade = $_GET['grade'];
    switch ($grade) {
        case ($grade > 0 && $grade < 5):
            echo "This work is really bad. What a dumb kid!";
            break;

        case ($grade >= 5 && $grade <= 9):
            echo "This is not sufficient. More studying is required.";
            break;

        case $grade == 10:
            echo "barely enough!";
            break;

        case ($grade >= 11 && $grade <= 14):
            echo "Not bad!";
            break;

        case ($grade > 14 && $grade < 19):
            echo "Bravo, bravissimo!";
            break;
		case ($grade == 19 || $grade == 20):
			echo "Too good to be true: confront the cheater!";
			break;
		default:
            echo "Grade input out of range!";
    }
}

?>
<!-- exo 9 -->
<form method="get" action="">
    <p>formulaire question 8</p>
    <label for="grade">What's your math grade ?</label>
    <input type="number" name="grade">
    <input type="submit" name="submit" value="what do you think about my 
math grade ?">
</form>
