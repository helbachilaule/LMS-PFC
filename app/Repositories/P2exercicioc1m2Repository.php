<?php

namespace App\Repositories;

use App\Models\P2exercicioc1m2;
use App\Repositories\BaseRepository;

/**
 * Class P2exercicioc1m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:00 pm UTC
*/

class P2exercicioc1m2Repository extends BaseRepository
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
        return P2exercicioc1m2::class;
    }
}
