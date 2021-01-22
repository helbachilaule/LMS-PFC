<?php

namespace App\Repositories;

use App\Models\F3debatec1m2;
use App\Repositories\BaseRepository;

/**
 * Class F3debatec1m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:26 pm UTC
*/

class F3debatec1m2Repository extends BaseRepository
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
        return F3debatec1m2::class;
    }
}
