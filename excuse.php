<?php
if (isset($_GET['teacher_name'], $_GET['child_name'])) {
    if ($_GET['teacher_name'] != "" && $_GET['child_name'] != "") {
        $date = date("l, \\t\\h\\e jS F Y");
        $jour = date("l");
        $teacher_name = $_GET['teacher_name'];
        $child_name = $_GET['child_name'];
        $child_status = ($_GET['child_gender'] == "boy") ? "son" : "daughter";
        $reason = $_GET['reason'];
        //L'unité em dans le contexte de la propriété text-indent correspond à la taille de la police de caractères utilisée dans le paragraphe
        echo "<style>.alinea {text-indent: 2em;} span,#right-align {font-style: italic;} #right-align {text-align: right;}</style>
        <p id='right-align'>$date</p>
        
        <p class='alinea'>Dear professor <span>$teacher_name</span>,</p>
    
    <p class='alinea'>Our child, <span>$child_name</span> , will be absent and will therefore not attend classes on this <span>$jour</span>.
    Our <span>$child_status</span> will be absent and will not go to school due to <span>$reason</span>. If you wish to have details on the reason for this absence 
    from school, you can contact me on my mobile phone,</p>
    
    
    
    <p class='alinea'>Cordially,</p>";

    }
}

?>


<form method="get" action="">
    <h3>apology generator</h3>
    <div>
        <label for="child_name">What's the child name ?</label>
        <input type="text" id="child_name" name="child_name">
    </div>
    <div>
        <label>What's the child gender ?</label>
        <input type="radio" id="male" name="child_gender" value="boy" checked required>
        <label for="male">Boy</label>
        <input type="radio" id="female" name="child_gender" value="girl" required>
        <label for="female">Girl</label>
    </div>
    <div>
        <label for="teacher_name">What's the teacher name ?</label>
        <input type="text" id="teacher_name" name="teacher_name">
    </div>
    <div>
        <label>What's the reason for the child absence ?</label>

        <input type="radio" id="illness" name="reason" value="illness" checked required>
        <label for="illness">Illness</label>
        <input type="radio" id="pet-death" name="reason" value="pet-death" required>
        <label for="pet-death">Death of the pet</label>
        <input type="radio" id="extra-activity" name="reason" value="extra-curricular activity" checked required>
        <label for="extra-curricular activity">significant extra-curricular activity</label>
        <input type="radio" id="other" name="reason" value="confidential issues" required>
        <label for="other">Confidential issues</label>
    </div>

    <input type="submit" name="submit" value="Generate apologies">
</form>