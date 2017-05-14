<?php

$turnout = $_POST["turnout"];
// echo $turnout."<br />";
$constituency = $_POST["constituency"];
// echo $constituency."<br />";
$forenames = $_POST["candidate_forename"];
$surnames = $_POST["candidate_surname"];
$votes = $_POST["votes"];
$party_codes = $_POST["party_code"];

// echo "    forename 1: ".$forenames[0]."     forename 2: ".$forenames[1];

require "database.php";
$db = new Database();

$sql = "INSERT IGNORE INTO `new_constituencies` (`name`, `turnout`) VALUES ('".$constituency."', '".$turnout."')";
$db->exec($sql);


// fields I need to insert:
// forename
// surname
// constituency_name
// votes
// share
// change_percent
// incumbent
// party_name
// party_abbr
// year (always "2017")
//
// fields I'm NOT inserting:
// ballot_desc
// PANO
// constituency_id
// region_id
// county
// region
// country
// constituency_type

for ($i = 0; $i < sizeof($surnames); $i++) {
    if ($surnames[$i] == "")
        continue;
    $sql = "INSERT INTO `new_candidates` (`forename`, `surname`, `party_code`, `votes`) VALUES
    ('".$forenames[$i]."', '".$surnames[$i]."', '".$party_codes[$i]."', '.$votes[$i].')";
    $db->exec($sql);
}

 ?>
