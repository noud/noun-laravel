<?php

namespace Nouns\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Rule
 * @package App\Models
 * @version April 4, 2021, 4:38 pm UTC
 *
 * @property string $id
 * @property string $name
 * @property string $inflector_irregular
 */
class Rule extends Model
{


    public $table = 'rules';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id',
        'name',
        'inflector_irregular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'inflector_irregular' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'inflector_irregular' => 'required|string|max:255'
    ];

    public function normalNouns()
    {
        return $this->hasMany(NormalNoun::class);
    }

    public function IrregularNouns()
    {
        return $this->hasMany(IrregularNoun::class);
    }
}
