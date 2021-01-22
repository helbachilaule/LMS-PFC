<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class E2exercicioc2m2
 * @package App\Models
 * @version December 11, 2020, 7:05 pm UTC
 *
 * @property string $exercicio
 */
class E2exercicioc2m2 extends Model
{
    use SoftDeletes;

    public $table = 'e2exercicioc2m2';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'exercicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'exercicio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'exercicio' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}