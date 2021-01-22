<?php

namespace App\Repositories;

use App\Models\Ap2debatec1m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap2debatec1m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 2:59 pm UTC
*/

class Ap2debatec1m1Repository extends BaseRepository
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
        return Ap2debatec1m1::class;
    }
}
