<?php

namespace App\Repositories;

use App\Models\E3debatec2m2;
use App\Repositories\BaseRepository;

/**
 * Class E3debatec2m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:12 pm UTC
*/

class E3debatec2m2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'debate'
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
        return E3debatec2m2::class;
    }
}
