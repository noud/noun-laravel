<?php

namespace Nouns\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class IrregularNoun
 * @package App\Models
 * @version April 4, 2021, 4:24 pm UTC
 *
 * @property string $id
 * @property string $singular
 * @property string $plural
 * @property string $rule_id
 */
class IrregularNoun extends Model
{


    public $table = 'irregular_nouns';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id',
        'singular',
        'plural',
        'rule_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'singular' => 'string',
        'plural' => 'string',
        'rule_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required|string|max:255',
        'singular' => 'nullable|string|max:255',
        'plural' => 'nullable|string|max:255',
        'rule_id' => 'nullable|string|max:255'
    ];

    
}
