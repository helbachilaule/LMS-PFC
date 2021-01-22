<?php

namespace App\Repositories;

use App\Models\P4aulac3m2;
use App\Repositories\BaseRepository;

/**
 * Class P4aulac3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 6:32 pm UTC
*/

class P4aulac3m2Repository extends BaseRepository
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
        return P4aulac3m2::class;
    }
}
