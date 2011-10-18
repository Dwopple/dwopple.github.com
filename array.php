<?php

    $personalInfo = array (
        'name'          =>  'Jan Lenaert',
        'occuppation'   =>  'PHP Developer',
        'age'           =>  '26',
        'location'      =>  'Genk'
    );
    
    echo "<p>". $personalInfo['name'] . "</p>";

    /**
    * Print Array
    * Prints the array to the screen 
    */
    echo "<h3>Print Array</h3>";
    echo "<pre>";
    print_r($personalInfo);
    echo "</pre>";


    /**
    * Extract Array Keys
    * This function extract array keys
    * and shows them on the screen
    */
    $keys = array_keys($personalInfo);

    echo "<h3>Array Keys</h3>";
    foreach ($keys as $key) {
        echo "$key </br/>";
    }
    
    /**
    * Print Array Values
    * 
    */
    echo "<h3>Print</h3>";
    foreach($personalInfo as $info) {
        echo "$info </br>";
    }
    
    /**
    * Extract Array Values
    */
    $values = array_values($personalInfo);

    echo "<h3>Array Values</h3>";
    foreach ($values as $value) {
        echo "$value </br/>";
    }
    
    /**
    * Multidimensional Arrays
    */
    echo "<h3>Multidimensional Arrays</h3>";
    $companyInfo = array 
    (
        'info'  => array 
        (
            'name'      => 'Dwopple ltd',
            'location'  => 'San Francisco',
            'website'   => 'http://www.dwopple.com',
        ),
        'staff' => array 
        (
            array('name' => 'John Doe', 'position' => 'CEO'),
            array('name' => 'Hiro Nakamura','position' => 'Art Director'),
            array('name'=>'Willy Wonka','position' => 'Web Developer') 
        )
    );
    
    foreach ($companyInfo['staff'] as $member) 
    {
        echo $member['name'] ." ". $member['position'] . "<br/>";
    }
    
    foreach ($companyInfo as $infor) 
    {
        echo $infor;
    }
    


?>



