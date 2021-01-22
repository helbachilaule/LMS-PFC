<?php

namespace App\Repositories;

use App\Models\P3aulac3m1;
use App\Repositories\BaseRepository;

/**
 * Class P3aulac3m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:05 pm UTC
*/

class P3aulac3m1Repository extends BaseRepository
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
        return P3aulac3m1::class;
    }
}
