<?php

namespace App\Repositories;

use App\Models\F3aulac1m1;
use App\Repositories\BaseRepository;

/**
 * Class F3aulac1m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:21 pm UTC
*/

class F3aulac1m1Repository extends BaseRepository
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
        return F3aulac1m1::class;
    }
}
