<?php

namespace App\Repositories;

use App\Models\Ap4exercicioc3m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap4exercicioc3m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:13 pm UTC
*/

class Ap4exercicioc3m1Repository extends BaseRepository
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
        return Ap4exercicioc3m1::class;
    }
}
