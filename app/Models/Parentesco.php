<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Parentesco
 * @package App\Models
 * @version November 30, 2020, 5:06 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $familiares
 * @property string $nombreParentesco
 */
class Parentesco extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'parentescos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreParentesco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreParentesco' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreParentesco' => 'required|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function familiares()
    {
        return $this->hasMany(\App\Models\Familiare::class, 'idParentesco');
    }
}
