<?php

namespace App\Repositories;

use App\Models\P1debatec3m2;
use App\Repositories\BaseRepository;

/**
 * Class P1debatec3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 4:58 pm UTC
*/

class P1debatec3m2Repository extends BaseRepository
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
        return P1debatec3m2::class;
    }
}
