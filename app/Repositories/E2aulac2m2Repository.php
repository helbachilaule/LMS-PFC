<?php

namespace App\Repositories;

use App\Models\E2aulac2m2;
use App\Repositories\BaseRepository;

/**
 * Class E2aulac2m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:47 pm UTC
*/

class E2aulac2m2Repository extends BaseRepository
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
        return E2aulac2m2::class;
    }
}
