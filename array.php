<?php

$personalInfo = array (
    'name'          =>  'Jan Lenaert',
    'occuppation'   =>  'PHP Developer',
    'age'           =>  '26',
    'location'      =>  'Genk'
    
    );
    
echo "<p>". $personalInfo['name'] ."</p>";



$keys = array_keys($personalInfo);

foreach ($keys as $key) {
    echo "$key </br/>";
}


?>



