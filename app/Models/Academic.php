<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Academic
 * @package App\Models
 * @version August 25, 2020, 1:41 pm UTC
 *
 * @property string $academic_year
 */
class Academic extends Model
{
    use SoftDeletes;

    public $table = 'academics';
    protected $primaryKey = 'academic_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'academic_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academic_id' => 'integer',
        'academic_year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'academic_year' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
