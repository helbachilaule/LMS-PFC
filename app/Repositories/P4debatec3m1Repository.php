<?php

namespace App\Repositories;

use App\Models\P4debatec3m1;
use App\Repositories\BaseRepository;

/**
 * Class P4debatec3m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:37 pm UTC
*/

class P4debatec3m1Repository extends BaseRepository
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
        return P4debatec3m1::class;
    }
}
