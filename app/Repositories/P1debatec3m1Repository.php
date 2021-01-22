<?php

namespace App\Repositories;

use App\Models\P1debatec3m1;
use App\Repositories\BaseRepository;

/**
 * Class P1debatec3m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 4:57 pm UTC
*/

class P1debatec3m1Repository extends BaseRepository
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
        return P1debatec3m1::class;
    }
}
