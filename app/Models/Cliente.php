<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version September 22, 2021, 12:15 am UTC
 *
 * @property string $apn_nom
 */
class Cliente extends Model
{
    //use SoftDeletes;

    public $table = 'cliente';
    protected $primaryKey= 'idcliente';
    public $timestamps =false;

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apn_nom'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcliente' => 'integer',
        'apn_nom' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apn_nom' => 'nullable|string|max:255'
    ];

    
}
