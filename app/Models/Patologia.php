<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Patologia
 * @package App\Models
 * @version November 30, 2020, 5:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property string $nombrePatologia
 */
class Patologia extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'patologias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombrePatologia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombrePatologia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombrePatologia' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idPatologia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idPatologia');
    }
}
