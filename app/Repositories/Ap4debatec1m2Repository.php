<?php

namespace App\Repositories;

use App\Models\Ap4debatec1m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap4debatec1m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:11 pm UTC
*/

class Ap4debatec1m2Repository extends BaseRepository
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
        return Ap4debatec1m2::class;
    }
}
