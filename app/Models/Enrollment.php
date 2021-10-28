<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Enrollment
 * @package App\Models
 * @version October 28, 2021, 2:53 pm UTC
 *
 * @property string $Firstname
 * @property string $Lastname
 * @property string $MI
 * @property string $course
 * @property integer $year
 * @property string $date of birth
 * @property string $current address
 * @property string $email address
 * @property integer $phone number
 */
class Enrollment extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'enrollments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Lastname',
        'MI',
        'course',
        'year',
        'date of birth',
        'current address',
        'email address',
        'phone number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Lastname' => 'string',
        'MI' => 'string',
        'course' => 'string',
        'year' => 'integer',
        'date of birth' => 'date',
        'current address' => 'string',
        'email address' => 'string',
        'phone number' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'required|string|max:255',
        'Lastname' => 'required|string|max:255',
        'MI' => 'nullable|string|max:255',
        'course' => 'required|string|max:255',
        'year' => 'required|integer',
        'date of birth' => 'required',
        'current address' => 'required|string|max:255',
        'email address' => 'required|string|max:255',
        'phone number' => 'required|integer'
    ];

    
}
