<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Extracurricular
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular query()
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extracurricular whereUpdatedAt($value)
 * @method static \Database\Factories\ExtracurricularFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Extracurricular extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'extracurriculars';
}