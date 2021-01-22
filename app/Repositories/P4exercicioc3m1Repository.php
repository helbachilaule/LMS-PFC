<?php

namespace App\Repositories;

use App\Models\P4exercicioc3m1;
use App\Repositories\BaseRepository;

/**
 * Class P4exercicioc3m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:35 pm UTC
*/

class P4exercicioc3m1Repository extends BaseRepository
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
        return P4exercicioc3m1::class;
    }
}
