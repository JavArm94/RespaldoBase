<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Medico
 * @package App\Models
 * @version November 30, 2020, 5:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property integer $nroMatricula
 * @property string $apellido
 * @property string $nombres
 */
class Medico extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'medicos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nroMatricula',
        'apellido',
        'nombres'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nroMatricula' => 'integer',
        'apellido' => 'string',
        'nombres' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nroMatricula' => 'required|integer',
        'apellido' => 'required|string|max:45',
        'nombres' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idMedico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idMedico');
    }

    public function getApellidoNombresAttribute  (){
        return $this->apellido. ','. $this->nombres;
    }
}
