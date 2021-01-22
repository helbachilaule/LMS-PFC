<?php

namespace App\Repositories;

use App\Models\F4aulac2m1;
use App\Repositories\BaseRepository;

/**
 * Class F4aulac2m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:32 pm UTC
*/

class F4aulac2m1Repository extends BaseRepository
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
        return F4aulac2m1::class;
    }
}
