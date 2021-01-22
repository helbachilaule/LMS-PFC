<?php

namespace App\Repositories;

use App\Models\F1exercicioc2m1;
use App\Repositories\BaseRepository;

/**
 * Class F1exercicioc2m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:12 pm UTC
*/

class F1exercicioc2m1Repository extends BaseRepository
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
        return F1exercicioc2m1::class;
    }
}
