<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoUsuario
 * @package App\Models
 * @version November 30, 2020, 5:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $notificaciones
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $tipoDeUsuario
 */
class TipoUsuario extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tipo_usuarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipoDeUsuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipoDeUsuario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoDeUsuario' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notificaciones()
    {
        return $this->hasMany(\App\Models\Notificacione::class, 'idTipoUsuarioDestinatario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idTipoUsuario');
    }
}
