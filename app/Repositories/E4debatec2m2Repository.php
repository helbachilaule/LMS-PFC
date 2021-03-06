<?php

namespace App\Repositories;

use App\Models\E4debatec2m2;
use App\Repositories\BaseRepository;

/**
 * Class E4debatec2m2Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:20 pm UTC
*/

class E4debatec2m2Repository extends BaseRepository
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
        return E4debatec2m2::class;
    }
}
