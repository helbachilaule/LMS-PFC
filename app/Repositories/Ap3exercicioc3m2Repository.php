<?php

namespace App\Repositories;

use App\Models\Ap3exercicioc3m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap3exercicioc3m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:05 pm UTC
*/

class Ap3exercicioc3m2Repository extends BaseRepository
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
        return Ap3exercicioc3m2::class;
    }
}
