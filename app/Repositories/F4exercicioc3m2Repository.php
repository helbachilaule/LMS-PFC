<?php

namespace App\Repositories;

use App\Models\F4exercicioc3m2;
use App\Repositories\BaseRepository;

/**
 * Class F4exercicioc3m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:35 pm UTC
*/

class F4exercicioc3m2Repository extends BaseRepository
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
        return F4exercicioc3m2::class;
    }
}
