<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    /**
     * @use HasFactory<\Database\Factories\QuestionFactory>
     */
    use HasFactory;
    // protected $guarded = [];
    // protected $fillable = ['question'];

    /**
     * @return HasMany<Vote, $this>
     */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * @return Attribute<int, never>
     */
    public function likes(): Attribute
    {
        return new Attribute(
            get: fn (): int => (int) $this->votes()->sum('like')
        );
    }

    /**
     * @return Attribute<int, never>
     */
    public function unlikes(): Attribute
    {
        return new Attribute(
            get: fn (): int => (int) $this->votes()->sum('unlike')
        );
    }
}
