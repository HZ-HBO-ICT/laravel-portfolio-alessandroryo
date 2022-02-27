<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['quartile', 'course_name', 'ec', 'test_name', 'lowest_passing_grade'];

    /**
     * Method for add update result column.
     *
     * @param $number
     */
    public function addResult($number)
    {
        if ($number >= $this->lowest_passing_grade) {
            if (null == $this->best_grade) {
                $course = Course::find('id', '=', $this->course_id);
                $course->assignCredits();
                $this->best_grade = $number;
            }
        }
    }

    /**
     * Method for connect Grades with Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
