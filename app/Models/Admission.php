<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version August 25, 2020, 2:05 pm UTC
 *
 * @property string $roll_me
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $father_phone
 * @property string $mother_name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $nationality
 * @property string $identity
 * @property string $emission_date
 * @property string $user_id
 * @property string $class_id
 * @property string $image
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    protected $primaryKey = 'student_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roll_me',
        'full_name',
        
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
    
        'phone',
        'address',
        'nationality',
        'identity',
        'emission_date',
        'user_id',
        'class_id',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_me' => 'string',
        'full_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'nationality' => 'string',
        'identity' => 'string',
        'emission_date' => 'date',
        'user_id' => 'string',
        'class_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roll_me' => 'required|string|max:191',
        'full_name' => 'required|string|max:191',
        'father_name' => 'required|string|max:191',
        'father_phone' => 'required|string|max:191',
        'mother_name' => 'required|string|max:191',
        'gender' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'phone' => 'required|string|max:191',
        'address' => 'required|string',
        'nationality' => 'required|string|max:191',
        'identity' => 'required|string|max:191',
        'emission_date' => 'required',
        'user_id' => 'required|string|max:191',
        'class_id' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
