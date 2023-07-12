<?php
// exo isolé
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that 
the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does 
not read every letter by itself but the word as a whole.";
$words = explode(" ", $text);
echo '<pre>';
print_r($words);
echo '</pre>';
foreach ($words as $key => $value) {
    if (strlen($value) != 1) {
        $first_char = substr($value, 0, 1);
        $last_char = substr($value, -1);
        $toshuffle = substr($value, 1, -1);
        $words[$key] = $first_char . str_shuffle($toshuffle) . $last_char;
    }
}
echo '<pre>';
print_r($words);
echo '</pre>';
$shuffled_text = "";
foreach ($words as $word) {
    $shuffled_text = $shuffled_text . $word . " ";
}
echo $shuffled_text."<hr>";

//1
$a_name = "émilie";
$capitalized_name = mb_convert_case($a_name, MB_CASE_TITLE, "UTF-8");
echo $capitalized_name."<hr>";
//2
echo date('Y')."<hr>";
//3
$datetime = date("Y-m-d H:i:s");
echo $datetime."<hr>";
//4 et 5
function sum($nombre1, $nombre2){
    return (is_numeric($nombre1) && is_numeric($nombre2)) ? floatval($nombre1)+floatval($nombre2) : "Error: at least one of arguments is the not a number.";
}
echo sum("2",7)."<hr>";
//6
function make_acronym($sentence){
    $words=explode(" ",$sentence);
    $acronym="";
    foreach($words as $word){
        $acronym = $acronym.substr($word,0,1);
    }
    return strtoupper($acronym);
}
echo make_acronym("In code we trust!")."<hr>";
//7 et 8
function replace($word,$search,$replace){
    if(str_contains($word, $search)){
        $position=strpos($word,$search);
        $word = substr($word,0,$position).$replace.substr($word,$position+strlen($search));
    }
    return $word;
}
echo replace("caecotrophie","ae","æ")."<hr>";
echo replace("cæcotrophie","æ","ae")."<hr>";
//9 et 10
function feedback($message, $css_class = "info"){
    return "<div class='$css_class'>".ucfirst($css_class).": ".$message.".</div>";
}
echo feedback("Incorrect email address", "error")."<hr>";
echo feedback("Incorrect email address")."<hr>";
//11
$file_name="words_list.txt";
$file_content=file($file_name);
$lines_number=count($file_content);
$number_1=random_int(0,$lines_number-1);   
$number_2=random_int(0,$lines_number-1);
echo "mot n°1: ".$file_content[$number_1]." ,  mot n°2: ".$file_content[$number_2]."<hr>";
//12
echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!<hr>");
//13
function calculate_cone_volume($radius, $height){
    return "The volume of a cone which ray is $radius and height is $height = " . 1/3 * pi() * pow($radius, 2) * $height . " cm<sup>3</sup><br />";
}
echo calculate_cone_volume(4,3);
?>