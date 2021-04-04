<?php

namespace Nouns\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class NormalNoun
 * @package App\Models
 * @version April 4, 2021, 4:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $normalNounReferences
 * @property string $word
 * @property string $rule_id
 * @property string $irregular
 */
class NormalNoun extends Model
{


    public $table = 'normal_nouns';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'word',
        'rule_id',
        'irregular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'word' => 'string',
        'rule_id' => 'string',
        'irregular' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'word' => 'required|string|max:255',
        'rule_id' => 'required|string|max:255',
        'irregular' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function normalNounReferences()
    {
        return $this->hasMany(\App\Models\NormalNounReference::class, 'normal_noun_id');
    }

    public function rule()
    {
        return $this->oneToMany(Rule::class);
    }
}
