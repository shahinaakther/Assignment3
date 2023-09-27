<?php
$studentGrades = [
    'student1' =>['Math' => 90, 'English' => 85, 'Science' => 94],
    'student2' =>['Math' => 87, 'English' => 96, 'Science' => 90],
    'student3' =>['Math' => 60, 'English' => 75, 'Science' => 54]
];
function grades($studentGrade){
    foreach ($studentGrade as $student => $grades) {
        
        $averageGrade = array_sum($grades) / count($grades);
        
        echo "Student: $student, Average Grade: $averageGrade \n";
    }
}

grades($studentGrades);

