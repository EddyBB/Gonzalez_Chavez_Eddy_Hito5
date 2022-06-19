<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tripulacion
 *
 * @property $id_tripulante
 * @property $id_usuario
 * @property $id_crucero
 * @property $funcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Crucero $crucero
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tripulacion extends Model
{
    
    static $rules = [
		'id_tripulante' => 'required',
		'id_usuario' => 'required',
		'id_crucero' => 'required',
		'funcion' => 'required',
    ];
    protected $table = 'tripulacion';
    protected $primaryKey = "id_tripulante";
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tripulante','id_usuario','id_crucero','funcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function crucero()
    {
        return $this->hasOne('App\Models\Crucero', 'id_crucero', 'id_crucero');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id_usuario', 'id_usuario');
    }
    

}
