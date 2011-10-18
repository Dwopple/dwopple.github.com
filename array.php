<?php

$personalInfo = array (
    'name'          =>  'Jan Lenaert',
    'occuppation'   =>  'PHP Developer',
    'age'           =>  '26',
    'location'      =>  'Genk'
    
    );
    
echo $personalInfo['name'];

$keys = array_keys($personalInfo);

foreach ($keys as $key) {
    echo $key;
}


?>



