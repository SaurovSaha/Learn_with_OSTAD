<?php

    function sortGradesDescending($grades) {
        arsort($grades);
        print_r($grades);
    }

    $grades = array(85, 92, 78, 88, 95);
    
    sortGradesDescending($grades);

?>
