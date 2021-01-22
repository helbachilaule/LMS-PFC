<?php

namespace App\Repositories;

use App\Models\Admission;
use App\Repositories\BaseRepository;

/**
 * Class AdmissionRepository
 * @package App\Repositories
 * @version August 25, 2020, 2:05 pm UTC
*/

class AdmissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roll_me',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'identity',
        'emission_date',
        'user_id',
        'class_id',
        'image'
    ];
    protected $primaryKey = 'student_id';
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
        return Admission::class;
    }
}
