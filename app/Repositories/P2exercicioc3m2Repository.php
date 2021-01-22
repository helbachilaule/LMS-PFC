<?php

namespace App\Repositories;

use App\Models\P2exercicioc3m2;
use App\Repositories\BaseRepository;

/**
 * Class P2exercicioc3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:01 pm UTC
*/

class P2exercicioc3m2Repository extends BaseRepository
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
        return P2exercicioc3m2::class;
    }
}
