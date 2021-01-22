<?php

namespace App\Repositories;

use App\Models\P2aulac3m2;
use App\Repositories\BaseRepository;

/**
 * Class P2aulac3m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 4:59 pm UTC
*/

class P2aulac3m2Repository extends BaseRepository
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
        return P2aulac3m2::class;
    }
}
