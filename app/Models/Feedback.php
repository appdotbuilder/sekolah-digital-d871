<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $message
 * @property bool $replied
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereReplied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback unreplied()
 * @method static \Database\Factories\FeedbackFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Feedback extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'message',
        'replied',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'replied' => 'boolean',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedback';

    /**
     * Get the user that owns the feedback.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include unreplied feedback.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnreplied($query)
    {
        return $query->where('replied', false);
    }
}