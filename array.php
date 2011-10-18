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
    echo "<h3>Print Array</h3>";
    echo "<pre>";
    print_r($personalInfo);
    echo "</pre>";


    /**
     *   Extract Array Keys
     */
    $keys = array_keys($personalInfo);

    echo "<h3>Array Keys</h3>";
    foreach ($keys as $key) {
        echo "$key </br/>";
    }
    
    /**
     *  Print Array Values
    */
    echo "<h3>Print</h3>";
    foreach($personalInfo as $info) {
        echo "$info </br>";
    }
    
    /**
     *   Extract Array Values
     */
    $values = array_values($personalInfo);

    echo "<h3>Array Values</h3>";
    foreach ($values as $value) {
        echo "$value </br/>";
    }
    


?>



