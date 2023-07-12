<?php
// 1ère volée d'exos
$family_members = ['Maman', 'Papa', 'Badr', 'Elias', 'Chahine'];
print_r($family_members);
$favourite_recipes = ['Bayssara', 'Loubia', 'La3dess'];
echo '<pre>';
print_r($favourite_recipes);
echo '</pre>';
$favourite_films = ['Matrix', 'Titanic', 'Les 3 frères'];
print($favourite_films[0]);

// exo isolé
$me = array(
    'age' => 33,
    'favourite_season' => 'summer',
    'do_I_like_soccer' => true
);
echo '<pre>';
print_r($me);
echo '</pre>';

// 2e volée d'exos
echo $me['do_I_like_soccer'];
$me['hobbies'] = ['soccer', 'skating', 'boxing', 'hacking'];
echo '<pre>';
print_r($me);
echo '</pre>';
$mother = array(
    'age' => 33,
    'favourite_season' => 'summer',
    'do_I_like_soccer' => true,
    'hobbies' => ['cooking', 'fitness', 'swimming']
);
$me['mother'] = $mother;
echo '<pre>';
print_r($me);
echo '</pre>';

// 3e volée
$me_hobbies_number=count($me['hobbies']);
$mother_hobbies_number=count($mother['hobbies']);
$total_hobbies_number=$me_hobbies_number+$mother_hobbies_number;
echo "Le nombre total de hobbies est de $total_hobbies_number.<br>";
$me['hobbies'][]='taxidermy';
var_dump($me['hobbies']);
$me['favourite_season']='spring';
echo '<pre>';
print_r($me);
echo '</pre>';
$soulmate = array(
    'age' => 28,
    'favourite_season' => 'winter',
    'do_I_like_soccer' => false,
    'hobbies' => ['make-up','cooking','cleaning','boxing']
);
$possible_hobbies_via_intersection = array_intersect($me['hobbies'],$soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'],$soulmate['hobbies']);
echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

// More array exercises
$web_development= array(
    'frontend' => [],
    'backend' => []
);

$web_development['frontend'][]='xhtml';
$web_development['backend'][]='Ruby on Rails';
$web_development['frontend'][]='Ruby on Rails';
$web_development['frontend'][]='CSS';
$web_development['frontend'][]='Flash';
$web_development['frontend'][]='Javascript';
$web_development['backend'][]='Javascript';
echo '<pre>';
print_r($web_development);
echo '</pre>';
$indice_xhtml=array_search("xhtml",$web_development['frontend']);
$web_development['frontend'][$indice_xhtml]='html';
$web_development['frontend']=array_filter($web_development['frontend'],function($element) {
    return $element !== "Flash";
});
echo '<pre>';
print_r($web_development);
echo '</pre>';
?>