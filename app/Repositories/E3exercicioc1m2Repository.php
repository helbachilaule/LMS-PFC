<?php

namespace App\Repositories;

use App\Models\E3exercicioc1m2;
use App\Repositories\BaseRepository;

/**
 * Class E3exercicioc1m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:10 pm UTC
*/

class E3exercicioc1m2Repository extends BaseRepository
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
        return E3exercicioc1m2::class;
    }
}
