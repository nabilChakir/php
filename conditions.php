<?php
/**
 * Series of exercises on PHP conditional structures.
 */

// exo 1.1  
echo "exo 1.1<br>";
$room_is_filthy = true;
if ($room_is_filthy) {
    echo "Yuk, Room is dirty : let's clean it up !";
    // cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "Nothing to do, room is neat.";
}
echo "<br>";

// exo 1.2 
echo "exo 1.2<br>";
// Create the array of possible states
$possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");
// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4];

if ($room_filthiness == "health hazard") {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if ($room_filthiness == "filthy" or $room_filthiness == "dirty") {
    echo "Yuk, Room is dirty : let's clean it up !";
    // ...
} else {
    echo "Nothing to do, room is neat.";
}
echo "<br>";

// exo 2
echo "exo 2<br>";
$now = date("H:i:s"); // How to get the current time in PHP ? Google is your friend ;-)
$limit_hours = array(
    date('H:i:s', strtotime('05:00:00')),
    date('H:i:s', strtotime('09:00:00')),
    date('H:i:s', strtotime('12:00:00')),
    date('H:i:s', strtotime('16:00:00')),
    date('H:i:s', strtotime('21:00:00'))
);
// Test the value of $now and display the right message according to the specifications.
if ($now >= $limit_hours[0] and $now <= $limit_hours[1]) {
    echo "Good morning !";
} else if ($now > $limit_hours[1] and $now <= $limit_hours[2]) {
    echo "Good day !";
} else if ($now > $limit_hours[2] and $now <= $limit_hours[3]) {
    echo "Good afternoon !";
} else if ($now > $limit_hours[3] and $now <= $limit_hours[4]) {
    echo "Good evening !";
} else {
    echo "Good night !";
}
echo "<br>";

// exos 3, 4 et 5
echo "exos 3, 4 et 5<br>";
if (isset($_GET['age']) and isset($_GET['gender'])) {
    // Form processing
    $age = $_GET['age'];
    $gender_status = $_GET['gender'];
    if ($_GET['do_u_speak_english'] == 'yes') {
        $salutation = "Hello";
    } else {
        $salutation = "Aloha";
    }
    if ($age < 12) {
        echo $salutation . " " . $gender_status . " kiddo!";
    } else if ($age >= 12 and $age < 18) {
        echo $salutation . " " . $gender_status . " Teenager !";
    } else if ($age >= 18 and $age <= 115) {
        echo $salutation . " " . $gender_status . " Adult !";
    } else {
        echo "Wow! Still alive " . $gender_status . " ? Are you a robot, like me ? Can I hug you ?";
    }
}
echo "<br>";

// exos 6 et 7
echo "exos 6 et 7<br>";
if (isset($_GET['ageBis']) and isset($_GET['genderBis'])) {
    // Form processing
    $age = $_GET['ageBis'];
    $gender = $_GET['genderBis'];
    $message = "Sorry you don't fit the criteria";
    if ($age >= 21 and $age <= 40 and $gender == "miss") {
        $message = "welcome to the team !";
    }
    echo $message;
}
echo "<br>";

// exo 8
echo "exo 8<br>";
if (isset($_GET['grade'])) {
    // Form processing
    $grade = $_GET['grade'];
    if ($grade < 5) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($grade >= 5 and $grade <= 9) {
        echo "This is not sufficient. More studying is required.";
    } else if ($grade == 10) {
        echo "barely enough!";
    } else if ($grade >= 11 and $grade <= 14) {
        echo "Not bad!";
    } else if ($grade > 14 and $grade < 19) {
        echo "Bravo, bravissimo!";
    } else {
        echo "Too good to be true : confront the cheater!";
    }
}
echo "<br>";

?>

<!-- 3, 4 et 5 -->
<form method="get" action="">
    <p>formulaire questions 3, 4 et 5</p>
    <div>
        <label for="age">Please type your age :</label>
        <input type="number" name="age">
    </div>
    <div>
        <label>Man or Woman?</label>
        <input type="radio" id="genreH" name="gender" value="mister" checked required>
        <label for="genreH">Man</label>
        <input type="radio" id="genreF" name="gender" value="miss" required>
        <label for="genreF">Woman</label>
    </div>
    <div>
        <label>Do you speak English ?</label>
        <input type="radio" id="do_speak_english" name="do_u_speak_english" value="yes" checked required>
        <label for="do_speak_english">Yes</label>
        <input type="radio" id="do_not_speak_english" name="do_u_speak_english" value="no" required>
        <label for="do_not_speak_english">No</label>
    </div>
    <input type="submit" name="submit" value="Greet me now">
</form>
<br>
<!-- 6 et 7 -->
<form method="get" action="">
    <p>formulaire questions 6 et 7</p>
    <div>
        <label for="name">What's your name ?</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="ageBis">Please type your age :</label>
        <input type="number" name="ageBis">
    </div>
    <div>
        <label>Man or Woman?</label>
        <input type="radio" id="male" name="genderBis" value="mister" checked required>
        <label for="male">Man</label>
        <input type="radio" id="female" name="genderBis" value="miss" required>
        <label for="female">Woman</label>
    </div>
    <input type="submit" name="submit" value="Can I join the soccer team 
?">
</form>
<br>
<!-- 8 -->
<form method="get" action="">
    <p>formulaire question 8</p>
    <label for="grade">What's your math grade ?</label>
    <input type="number" name="grade">
    <input type="submit" name="submit" value="what do you think about my 
math grade ?">
</form>