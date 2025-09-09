<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ppdb
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $dob
 * @property string $address
 * @property string $previous_school
 * @property string $parent_contact
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereParentContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb wherePreviousSchool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb pending()
 * @method static \Illuminate\Database\Eloquent\Builder|Ppdb accepted()
 * @method static \Database\Factories\PpdbFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Ppdb extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'dob',
        'address',
        'previous_school',
        'parent_contact',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dob' => 'date',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ppdb';

    /**
     * Scope a query to only include pending applications.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include accepted applications.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }
}