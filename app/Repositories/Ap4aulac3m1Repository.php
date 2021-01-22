<?php

namespace App\Repositories;

use App\Models\Ap4aulac3m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap4aulac3m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:13 pm UTC
*/

class Ap4aulac3m1Repository extends BaseRepository
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
        return Ap4aulac3m1::class;
    }
}
