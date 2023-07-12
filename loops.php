<?php
// 1ère volé d'exos
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
foreach ($pronouns as $pronoun) {
    echo "$pronoun<br>";
}
foreach ($pronouns as $pronoun) {
    $verb = ($pronoun == 'He/She') ? "codes" : "code";
    echo "$pronoun $verb<br/>";
}

// 2e volé d'exos
$counter = 1;
while ($counter <= 120) {
    echo "$counter<br>";
    $counter++;
}

for ($i = 1; $i <= 120; $i++) {
    echo "$i<br>";
}

$colleagues = ['Bob', 'Alice', 'Sara', 'Luc', 'Camille'];
foreach ($colleagues as $colleague) {
    echo "$colleague<br>";
}

$countries = array(
    "United States",
    "Canada",
    "United Kingdom",
    "Germany",
    "France",
    "Spain",
    "Italy",
    "Australia",
    "Japan",
    "Brazil"
);
echo "<label for='countries'>Choose a country:</label>
<select name='countries' id='countries'>";
foreach ($countries as $country) {
    $value = strtoupper(substr($country, 0, 2));
    echo "<option value='$value'>$country</option>";
}
echo "</select>";

echo '<pre>';
print_r($countries);
echo '</pre>';
foreach ($countries as $key => $value) {
    unset($countries[$key]);
    $key = strtoupper(substr($value, 0, 2));
    $countries[$key] = $value;
}
echo '<pre>';
print_r($countries);
echo '</pre>';
?>