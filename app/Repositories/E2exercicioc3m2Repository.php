<?php

namespace App\Repositories;

use App\Models\E2exercicioc3m2;
use App\Repositories\BaseRepository;

/**
 * Class E2exercicioc3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:06 pm UTC
*/

class E2exercicioc3m2Repository extends BaseRepository
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
        return E2exercicioc3m2::class;
    }
}
