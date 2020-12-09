<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AuditoriaCertificado
 * @package App\Models
 * @version November 30, 2020, 5:07 pm UTC
 *
 * @property \App\Models\Certificado $idcertificado
 * @property \App\Models\Familiare $idfamiliar
 * @property \App\Models\Medico $idmedico
 * @property \App\Models\Patologia $idpatologia
 * @property \App\Models\TipoCertificado $idtipocertificado
 * @property \App\Models\Usuario $idusuariocertificado
 * @property \App\Models\Usuario $idusuarioquemodifica
 * @property string $fechaModificacion
 * @property time $horaModificacion
 * @property string $tipoModificacion
 * @property integer $diasDeAusencia
 * @property integer $numeroComprobante
 * @property string $fechaVencimiento
 * @property string $fechaCertificado
 * @property string $imagen
 * @property string $estadoCerficado
 * @property integer $idUsuarioCertificado
 * @property integer $idUsuarioQueModifica
 * @property integer $idPatologia
 * @property integer $idMedico
 * @property integer $idTipoCertificado
 * @property integer $idFamiliar
 * @property integer $idCertificado
 */
class AuditoriaCertificado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'auditoria_certificados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fechaModificacion',
        'horaModificacion',
        'tipoModificacion',
        'diasDeAusencia',
        'numeroComprobante',
        'fechaVencimiento',
        'fechaCertificado',
        'imagen',
        'estadoCerficado',
        'idUsuarioCertificado',
        'idUsuarioQueModifica',
        'idPatologia',
        'idMedico',
        'idTipoCertificado',
        'idFamiliar',
        'idCertificado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechaModificacion' => 'date',
        'tipoModificacion' => 'string',
        'diasDeAusencia' => 'integer',
        'numeroComprobante' => 'integer',
        'fechaVencimiento' => 'date',
        'fechaCertificado' => 'date',
        'imagen' => 'string',
        'estadoCerficado' => 'string',
        'idUsuarioCertificado' => 'integer',
        'idUsuarioQueModifica' => 'integer',
        'idPatologia' => 'integer',
        'idMedico' => 'integer',
        'idTipoCertificado' => 'integer',
        'idFamiliar' => 'integer',
        'idCertificado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fechaModificacion' => 'required',
        'horaModificacion' => 'required',
        'tipoModificacion' => 'required|string|max:1',
        'diasDeAusencia' => 'required|integer',
        'numeroComprobante' => 'required',
        'fechaVencimiento' => 'required',
        'fechaCertificado' => 'required',
        'imagen' => 'nullable|string|max:65535',
        'estadoCerficado' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idUsuarioCertificado' => 'required',
        'idUsuarioQueModifica' => 'required',
        'idPatologia' => 'required',
        'idMedico' => 'required',
        'idTipoCertificado' => 'required',
        'idFamiliar' => 'nullable',
        'idCertificado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcertificado()
    {
        return $this->belongsTo(\App\Models\Certificado::class, 'idCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idfamiliar()
    {
        return $this->belongsTo(\App\Models\Familiare::class, 'idFamiliar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idmedico()
    {
        return $this->belongsTo(\App\Models\Medico::class, 'idMedico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idpatologia()
    {
        return $this->belongsTo(\App\Models\Patologia::class, 'idPatologia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipocertificado()
    {
        return $this->belongsTo(\App\Models\TipoCertificado::class, 'idTipoCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idusuariocertificado()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idusuarioquemodifica()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'idUsuarioQueModifica');
    }
}
