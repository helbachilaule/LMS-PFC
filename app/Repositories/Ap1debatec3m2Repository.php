<?php

namespace App\Repositories;

use App\Models\Ap1debatec3m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap1debatec3m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 2:54 pm UTC
*/

class Ap1debatec3m2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'debate'
    ];

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
        return Ap1debatec3m2::class;
    }
}
