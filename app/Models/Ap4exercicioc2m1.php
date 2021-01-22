<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ap4exercicioc2m1
 * @package App\Models
 * @version December 4, 2020, 3:12 pm UTC
 *
 */
class Ap4exercicioc2m1 extends Model
{
    use SoftDeletes;

    public $table = 'ap4exercicioc2m1';
    
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
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    
}
