<?php

namespace App\Repositories;

use App\Models\Day;
use App\Repositories\BaseRepository;

/**
 * Class DayRepository
 * @package App\Repositories
 * @version August 25, 2020, 1:42 pm UTC
*/

class DayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];
    protected $primaryKey = 'day_id';
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
        return Day::class;
    }
}
