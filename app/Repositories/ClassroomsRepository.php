<?php

namespace App\Repositories;

use App\Models\Classrooms;
use App\Repositories\BaseRepository;

/**
 * Class ClassroomsRepository
 * @package App\Repositories
 * @version August 25, 2020, 1:21 pm UTC
*/

class ClassroomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];
    protected $primaryKey = 'classroom_id';
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
        return Classrooms::class;
    }
}
