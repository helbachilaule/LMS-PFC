<?php

namespace App\Repositories;

use App\Models\F2exercicioc1m2;
use App\Repositories\BaseRepository;

/**
 * Class F2exercicioc1m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:18 pm UTC
*/

class F2exercicioc1m2Repository extends BaseRepository
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
        return F2exercicioc1m2::class;
    }
}
