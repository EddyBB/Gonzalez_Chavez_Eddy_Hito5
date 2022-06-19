<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id_reserva
 * @property $id_usuario
 * @property $id_crucero
 * @property $fecha_reserva
 * @property $personas
 * @property $precio_final
 * @property $created_at
 * @property $updated_at
 *
 * @property Crucero $crucero
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'id_reserva' => 'required',
		'id_usuario' => 'required',
		'id_crucero' => 'required',
		'fecha_reserva' => 'required',
		'personas' => 'required',
		'precio_final' => 'required',
    ];
    protected $primaryKey = "id_reserva";
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_reserva','id_usuario','id_crucero','fecha_reserva','personas','precio_final'];


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
