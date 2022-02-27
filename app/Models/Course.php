<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Method for Course has many Grades
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    /**
     * Change passed date
     *
     * @return void
     */
    public function assignCredits()
    {
        $this->passed_at = now();
    }
}
