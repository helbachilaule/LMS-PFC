<?php

namespace App\Repositories;

use App\Models\F3aulac3m2;
use App\Repositories\BaseRepository;

/**
 * Class F3aulac3m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:22 pm UTC
*/

class F3aulac3m2Repository extends BaseRepository
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
        return F3aulac3m2::class;
    }
}
