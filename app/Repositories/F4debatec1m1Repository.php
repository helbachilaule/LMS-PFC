<?php

namespace App\Repositories;

use App\Models\F4debatec1m1;
use App\Repositories\BaseRepository;

/**
 * Class F4debatec1m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:35 pm UTC
*/

class F4debatec1m1Repository extends BaseRepository
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
        return F4debatec1m1::class;
    }
}
