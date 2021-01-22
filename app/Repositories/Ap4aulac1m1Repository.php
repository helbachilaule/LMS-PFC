<?php

namespace App\Repositories;

use App\Models\Ap4aulac1m1;
use App\Repositories\BaseRepository;

/**
 * Class Ap4aulac1m1Repository
 * @package App\Repositories
 * @version December 4, 2020, 3:14 pm UTC
*/

class Ap4aulac1m1Repository extends BaseRepository
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
        return Ap4aulac1m1::class;
    }
}
