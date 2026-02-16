<?php
$data = file_get_contents("dataset.json");
$data = json_decode($data);

foreach ($data as $person) {
    
    $fullAddress = $person->address->street . " " . 
                   $person->address->city . " " . 
                   $person->address->country;

    if (stripos($fullAddress, "rizal city") !== false) {
        
        echo $person->id . " - " .
             $person->first_name . " " .
             $person->last_name .
             " (" . $fullAddress . ")";
        echo "<\n>";
    }
}
?>