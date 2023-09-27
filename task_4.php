<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        echo "Student $student: Average Grade = $average\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Bangla' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Bangla' => 90),
    'Student3' => array('Math' => 75, 'English' => 82, 'Bangla' => 88)
);

calculateAverageGrades($studentGrades);
?>
