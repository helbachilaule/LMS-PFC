<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ap3aulac1m1
 * @package App\Models
 * @version December 4, 2020, 3:04 pm UTC
 *
 */
class Ap3aulac1m1 extends Model
{
    use SoftDeletes;

    public $table = 'ap3aulac1m1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'aula'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aula' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'aula' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
