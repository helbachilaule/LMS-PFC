<?php

namespace App\Repositories;

use App\Models\Ap2aulac3m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap2aulac3m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:01 pm UTC
*/

class Ap2aulac3m1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
         'aula'
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
        return Ap2aulac3m1::class;
    }
}
