<?php

namespace App\Repositories;

use App\Models\F2aulac2m2;
use App\Repositories\BaseRepository;

/**
 * Class F2aulac2m2Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:16 pm UTC
*/

class F2aulac2m2Repository extends BaseRepository
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
        return F2aulac2m2::class;
    }
}
