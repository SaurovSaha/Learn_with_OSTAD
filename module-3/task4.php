<?php

    function calculateAverageGrades($studentGrades) {
        foreach ($studentGrades as $student => $grades) {
            $averageGrade = array_sum($grades) / count($grades);

            echo "Average grade for $student: $averageGrade <br>";
        }
    }

    $studentGrades = array(
        'Student1' => array('Math' => 90, 'English' => 85, 'Science' => 92),
        'Student2' => array('Math' => 78, 'English' => 88, 'Science' => 80),
        'Student3' => array('Math' => 95, 'English' => 91, 'Science' => 99),
    );

    calculateAverageGrades($studentGrades);

?>
