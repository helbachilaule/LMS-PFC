<?php

namespace App\Repositories;

use App\Models\Ap3exercicioc2m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap3exercicioc2m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:06 pm UTC
*/

class Ap3exercicioc2m1Repository extends BaseRepository
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
        return Ap3exercicioc2m1::class;
    }
}
