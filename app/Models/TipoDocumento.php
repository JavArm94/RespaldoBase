<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoDocumento
 * @package App\Models
 * @version November 30, 2020, 5:03 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $tipoDeDocumento
 */
class TipoDocumento extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tipo_documentos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipoDeDocumento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipoDeDocumento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoDeDocumento' => 'required|string|max:10',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idTipoDocumento');
    }
}
