<?php

namespace App\Repositories;

use App\Models\E1debatec1m2;
use App\Repositories\BaseRepository;

/**
 * Class E1debatec1m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:44 pm UTC
*/

class E1debatec1m2Repository extends BaseRepository
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
        return E1debatec1m2::class;
    }
}
