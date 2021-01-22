<?php

namespace App\Repositories;

use App\Models\P4exercicioc1m2;
use App\Repositories\BaseRepository;

/**
 * Class P4exercicioc1m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:34 pm UTC
*/

class P4exercicioc1m2Repository extends BaseRepository
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
        return P4exercicioc1m2::class;
    }
}
