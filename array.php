<?php

    $personalInfo = array (
        'name'          =>  'Jan Lenaert',
        'occuppation'   =>  'PHP Developer',
        'age'           =>  '26',
        'location'      =>  'Genk'
    );
    
    echo "<p>". $personalInfo['name'] . "</p>";

   /**
    *  Print Array
    *
    */
    print_r($personalInfo);


    /*
     *   Extract Array Keys
    */
    $keys = array_keys($personalInfo);

    echo "<h3>Array Keys</h3>";
    foreach ($keys as $key) {
        echo "$key </br/>";
    }


?>



