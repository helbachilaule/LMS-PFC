<?php

namespace App\Repositories;

use App\Models\F2debatec1m2;
use App\Repositories\BaseRepository;

/**
 * Class F2debatec1m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:20 pm UTC
*/

class F2debatec1m2Repository extends BaseRepository
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
        return F2debatec1m2::class;
    }
}
