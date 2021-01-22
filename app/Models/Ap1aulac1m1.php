<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ap1aulac1m1
 * @package App\Models
 * @version December 4, 2020, 2:44 pm UTC
 *
 */
class Ap1aulac1m1 extends Model
{
    use SoftDeletes;

    public $table = 'ap1aulac1m1';
    
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
        'aula' => 'file'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'aula.*'=>'required|file|mimes:pdf,docx,zip',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
