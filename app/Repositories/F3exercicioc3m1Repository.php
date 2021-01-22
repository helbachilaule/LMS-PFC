<?php

namespace App\Repositories;

use App\Models\F3exercicioc3m1;
use App\Repositories\BaseRepository;

/**
 * Class F3exercicioc3m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:25 pm UTC
*/

class F3exercicioc3m1Repository extends BaseRepository
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
        return F3exercicioc3m1::class;
    }
}
