<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['quartile', 'course_name', 'ec', 'test_name', 'lowest_passing_grade'];

    /**
     * Method for add update result column
     *
     * @param $number
     * @return void
     */
    public function addResult($number)
    {
        if ($number >= $this->lowest_passing_grade) {
            if ($this->best_grade == null) {
                $course = Course::find('id', '=', $this->course_id);
                $course->assignCredits();
                $this->best_grade = $number;
            }
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
