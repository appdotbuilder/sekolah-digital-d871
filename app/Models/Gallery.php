<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string $type
 * @property string $url
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery photos()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery videos()
 * @method static \Database\Factories\GalleryFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Gallery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'url',
        'description',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * Scope a query to only include photos.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePhotos($query)
    {
        return $query->where('type', 'photo');
    }

    /**
     * Scope a query to only include videos.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }
}