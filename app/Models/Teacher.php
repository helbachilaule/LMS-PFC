<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models
 * @version August 25, 2020, 2:06 pm UTC
 *
 * @property string $full_name
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $image
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    protected $primaryKey = 'teacher_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'full_name',
        'gender',
        'email',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'full_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required|string|max:191',
        'gender' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'phone' => 'required|string|max:191',
        'address' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
