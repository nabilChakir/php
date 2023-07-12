<?php
if (isset($_POST['type'])) {
    $link = ($_POST['type'] == "human") ? "https://giphy.com/embed/SDUun9NqZiiPanKRaK" :
        (($_POST['type'] == "cat") ? "https://giphy.com/embed/102ygrIsUGwAQU" : "https://giphy.com/embed/K68Byi5hh5E3G0en5S");
    echo "<iframe src=" . $link . " width='480' height='480' frameBorder='0' class='giphy-embed' allowFullScreen></iframe>";
}
?>

<form method="post" action="">
    <label>Are you a human, a cat or a unicorn ?</label>
    <input type="radio" id="human" name="type" value="human" checked required>
    <label for="human">Human</label>
    <input type="radio" id="cat" name="type" value="cat" required>
    <label for="cat">Cat</label>
    <input type="radio" id="unicron" name="type" value="unicron" required>
    <label for="unicorn">Unicorn</label>

    <input type="submit" name="submit" value="Greet me now">

</form>
