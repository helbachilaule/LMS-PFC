<?php

namespace App\Repositories;

use App\Models\E1exercicioc2m2;
use App\Repositories\BaseRepository;

/**
 * Class E1exercicioc2m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:42 pm UTC
*/

class E1exercicioc2m2Repository extends BaseRepository
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
        return E1exercicioc2m2::class;
    }
}
