<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassScheduling
 * @package App\Models
 * @version August 25, 2020, 1:44 pm UTC
 *
 * @property integer $course_id
 * @property integer $class_id
 * @property integer $level_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
 * @property integer $semester_id
 * @property boolean $status
 */
class ClassScheduling extends Model
{
    use SoftDeletes;

    public $table = 'class_schedulings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'schedule_id';
    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'semester_id',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'class_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'semesters_id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required|integer',
        'class_id' => 'required|integer',
        'level_id' => 'required|integer',
        'shift_id' => 'required|integer',
        'classroom_id' => 'required|integer',
        'batch_id' => 'required|integer',
        'day_id' => 'required|integer',
        'time_id' => 'required|integer',
        'semester_id' => 'required|integer',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
