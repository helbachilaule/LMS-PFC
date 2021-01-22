<?php

namespace App\Repositories;

use App\Models\Ap2exercicioc2m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap2exercicioc2m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:00 pm UTC
*/

class Ap2exercicioc2m2Repository extends BaseRepository
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
        return Ap2exercicioc2m2::class;
    }
}
