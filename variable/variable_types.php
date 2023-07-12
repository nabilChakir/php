<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> Hi! My name is
        <?php
        $firstname = "Nabil";
        echo $firstname;
        ?>
    </p>
    <p>I am
        <?php
        $age = 33;
        echo $age; ?> years old
    </p>
    <p>My eyes are
        <?php
        $eyes_color = "black";
        echo $eyes_color; ?>
    </p>
    <p>The first person in my family is
        <?php
        $family = array(
            0 => 'Maman',
            1 => 'Papa',
            2 => 'Elias',
            3 => 'Badr',
            4 => 'Chahine'
        );
        $am_I_hungry = FALSE;
        echo $family[0]; ?>
    </p>


</body>

</html>
