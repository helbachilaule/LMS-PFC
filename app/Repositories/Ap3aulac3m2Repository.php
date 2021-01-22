<?php

namespace App\Repositories;

use App\Models\Ap3aulac3m2;
use App\Repositories\BaseRepository;

/**
 * Class Ap3aulac3m2Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:04 pm UTC
*/

class Ap3aulac3m2Repository extends BaseRepository
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
        return Ap3aulac3m2::class;
    }
}
