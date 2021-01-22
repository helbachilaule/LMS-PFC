<?php

namespace App\Repositories;

use App\Models\F1debatec3m2;
use App\Repositories\BaseRepository;

/**
 * Class F1debatec3m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:15 pm UTC
*/

class F1debatec3m2Repository extends BaseRepository
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
        return F1debatec3m2::class;
    }
}
