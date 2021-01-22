<?php

namespace App\Repositories;

use App\Models\P3debatec2m1;
use App\Repositories\BaseRepository;

/**
 * Class P3debatec2m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 5:12 pm UTC
*/

class P3debatec2m1Repository extends BaseRepository
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
        return P3debatec2m1::class;
    }
}
