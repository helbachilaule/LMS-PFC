<?php

namespace App\Repositories;

use App\Models\E4aulac1m1;
use App\Repositories\BaseRepository;

/**
 * Class E4aulac1m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:15 pm UTC
*/

class E4aulac1m1Repository extends BaseRepository
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
        return E4aulac1m1::class;
    }
}
