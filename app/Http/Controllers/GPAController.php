<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPAController extends Controller
{

    // Display GPA Calculator form
    public function showForm()
    {
        return view('calc');
    }
    public function calculateGPA(Request $request)
{
    // Place your PHP code here to process the form data
    // Retrieve data from $request->input('...') and perform calculations
    $student_name = $request->input('student_name');

    // Loop through each subject and calculate its contribution to the GPA
    $total_credits = 0;
    $total_grade_points = 0;
    $num_subjects = 10; // Use integer, not string

    for ($i = 1; $i <= $num_subjects; $i++) {
        // Retrieve the subject information from the form
        $subject_name = $request->input('subject_name_' . $i);
        $subject_grade = $request->input('subject_grade_' . $i);
        $subject_credits = $request->input('subject_credit_' . $i);

        // Convert the grade to a grade point
        switch ($subject_grade) {
            case 'S':
                $grade_point = 10;
                break;
            case 'A':
                $grade_point = 9;
                break;
            case 'B':
                $grade_point = 8;
                break;
            case 'C':
                $grade_point = 7;
                break;
            case 'D':
                $grade_point = 6;
                break;
            case 'E':
                $grade_point = 5;
                break;
            default:
                $grade_point = 0.0;
        }

        // Add the subject's contribution to the total grade points
        $total_credits += $subject_credits;
        $total_grade_points += $grade_point * $subject_credits;
    }

    // Calculate the overall GPA
    $gpa = $total_grade_points / $total_credits;

    return view('result', ['gpa' => $gpa, 'student_name' => $student_name, 'num_subjects' => $num_subjects]);
}

}
