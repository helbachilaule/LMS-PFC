<?php

namespace App\Repositories;

use App\Models\E2exercicioc2m1;
use App\Repositories\BaseRepository;

/**
 * Class E2exercicioc2m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:05 pm UTC
*/

class E2exercicioc2m1Repository extends BaseRepository
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
        return E2exercicioc2m1::class;
    }
}
