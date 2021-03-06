<?php

namespace App\Repositories;

use App\Models\P2debatec1m1;
use App\Repositories\BaseRepository;

/**
 * Class P2debatec1m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:01 pm UTC
*/

class P2debatec1m1Repository extends BaseRepository
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
        return P2debatec1m1::class;
    }
}
