<?php

namespace App\Repositories;

use App\Models\Ap3debatec2m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap3debatec2m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:08 pm UTC
*/

class Ap3debatec2m2Repository extends BaseRepository
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
        return Ap3debatec2m2::class;
    }
}
