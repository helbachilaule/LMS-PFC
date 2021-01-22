<?php

namespace App\Repositories;

use App\Models\P4aulac1m1;
use App\Repositories\BaseRepository;

/**
 * Class P4aulac1m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:15 pm UTC
*/

class P4aulac1m1Repository extends BaseRepository
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
        return P4aulac1m1::class;
    }
}
