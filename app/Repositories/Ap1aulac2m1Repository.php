<?php

namespace App\Repositories;

use App\Models\Ap1aulac2m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap1aulac2m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 2:50 pm UTC
*/

class Ap1aulac2m1Repository extends BaseRepository
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
        return Ap1aulac2m1::class;
    }
}
