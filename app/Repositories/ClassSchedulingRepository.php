<?php

namespace App\Repositories;

use App\Models\ClassScheduling;
use App\Repositories\BaseRepository;

/**
 * Class ClassSchedulingRepository
 * @package App\Repositories
 * @version August 25, 2020, 1:44 pm UTC
*/

class ClassSchedulingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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

    protected $primaryKey = 'schedule_id';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClassScheduling::class;
    }
}
