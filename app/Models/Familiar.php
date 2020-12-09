<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Familiar
 * @package App\Models
 * @version November 30, 2020, 5:06 pm UTC
 *
 * @property \App\Models\Genero $idgenero
 * @property \App\Models\Parentesco $idparentesco
 * @property \App\Models\Usuario $idusuario
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property string $apellido
 * @property string $nombres
 * @property string $fechaNacimiento
 * @property integer $idUsuario
 * @property integer $idParentesco
 * @property integer $idGenero
 */
class Familiar extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'familiares';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombres',
        'fechaNacimiento',
        'idUsuario',
        'idParentesco',
        'idGenero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'apellido' => 'string',
        'nombres' => 'string',
        'fechaNacimiento' => 'date',
        'idUsuario' => 'integer',
        'idParentesco' => 'integer',
        'idGenero' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido' => 'required|string|max:45',
        'nombres' => 'required|string|max:45',
        'fechaNacimiento' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idUsuario' => 'required',
        'idParentesco' => 'required',
        'idGenero' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idgenero()
    {
        return $this->belongsTo(\App\Models\Genero::class, 'idGenero');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idparentesco()
    {
        return $this->belongsTo(\App\Models\Parentesco::class, 'idParentesco');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idusuario()
    {
        
        return $this->belongsTo(\App\Models\User::class, 'idUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idFamiliar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idFamiliar');
    }
}
