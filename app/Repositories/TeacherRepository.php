<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

/**
 * Class TeacherRepository
 * @package App\Repositories
 * @version August 25, 2020, 2:06 pm UTC
*/

class TeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'gender',
        'email',
        'phone',
        'address',
    ];

     protected $primaryKey = 'teacher_id';

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
        return Teacher::class;
    }
}
