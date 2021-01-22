<?php

namespace App\Repositories;

use App\Models\Ap3debatec1m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap3debatec1m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:07 pm UTC
*/

class Ap3debatec1m2Repository extends BaseRepository
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
        return Ap3debatec1m2::class;
    }
}
