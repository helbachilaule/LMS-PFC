<?php

namespace App\Repositories;

use App\Models\F3debatec2m1;
use App\Repositories\BaseRepository;

/**
 * Class F3debatec2m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:27 pm UTC
*/

class F3debatec2m1Repository extends BaseRepository
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
        return F3debatec2m1::class;
    }
}
