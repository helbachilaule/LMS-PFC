<?php

namespace App\Repositories;

use App\Models\P1exercicioc2m1;
use App\Repositories\BaseRepository;

/**
 * Class P1exercicioc2m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 4:56 pm UTC
*/

class P1exercicioc2m1Repository extends BaseRepository
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
        return P1exercicioc2m1::class;
    }
}
