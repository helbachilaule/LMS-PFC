<?php

namespace App\Repositories;

use App\Models\F4exercicioc2m2;
use App\Repositories\BaseRepository;

/**
 * Class F4exercicioc2m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:34 pm UTC
*/

class F4exercicioc2m2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'exercicio'
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
        return F4exercicioc2m2::class;
    }
}
