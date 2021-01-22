<?php

namespace App\Repositories;

use App\Models\Ap1exercicioc2m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap1exercicioc2m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 2:55 pm UTC
*/

class Ap1exercicioc2m2Repository extends BaseRepository
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
        return Ap1exercicioc2m2::class;
    }
}
