<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TblstudentMark;
use App\Models\Tblstudent;
use App\Models\Tblsubject;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TblstudentMark>
 */
class TblstudentMarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $studentIds = Tblstudent::pluck('id');
        $subjectIds = Tblsubject::pluck('id');
        return [
             'student_id' => $this->faker->randomElement($studentIds),
            'subject_id' => $this->faker->randomElement($subjectIds),
            'student_marks' => $this->faker->numberBetween(0, 100),
            'exam_marks' => $this->faker->numberBetween(0, 100),
        ];
    }
}
