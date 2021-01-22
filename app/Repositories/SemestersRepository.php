<?php

namespace App\Repositories;

use App\Models\Semesters;
use App\Repositories\BaseRepository;

/**
 * Class SemestersRepository
 * @package App\Repositories
 * @version October 29, 2020, 12:49 pm UTC
*/

class SemestersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];
    protected $primaryKey = 'semester_id';
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
        return Semesters::class;
    }
}
