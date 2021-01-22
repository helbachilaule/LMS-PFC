<?php

namespace App\Repositories;

use App\Models\E1debatec1m1;
use App\Repositories\BaseRepository;

/**
 * Class E1debatec1m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:43 pm UTC
*/

class E1debatec1m1Repository extends BaseRepository
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
        return E1debatec1m1::class;
    }
}
