<?php

namespace App\Repositories;

use App\Models\Exerciciosc1m1;
use App\Repositories\BaseRepository;

/**
 * Class Exerciciosc1m1Repository
 * @package App\Repositories
 * @version November 25, 2020, 3:34 pm UTC
*/

class Exerciciosc1m1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome'
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
        return Exerciciosc1m1::class;
    }
}
