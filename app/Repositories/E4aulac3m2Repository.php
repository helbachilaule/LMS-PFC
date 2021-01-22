<?php

namespace App\Repositories;

use App\Models\E4aulac3m2;
use App\Repositories\BaseRepository;

/**
 * Class E4aulac3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:17 pm UTC
*/

class E4aulac3m2Repository extends BaseRepository
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
        return E4aulac3m2::class;
    }
}
