<?php

namespace App\Repositories;

use App\Models\Ap2exercicioc3m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap2exercicioc3m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 2:56 pm UTC
*/

class Ap2exercicioc3m1Repository extends BaseRepository
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
        return Ap2exercicioc3m1::class;
    }
}
