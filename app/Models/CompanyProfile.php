<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CompanyProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'user_id',
        'company_name',
        'website_url',
        'industry',
        'company_size',
        'company_bio',
        'banner_image',
        'logo_image',
        'slug',
        'is_active',
        'is_published',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid();
            }

            if (empty($model->slug)) {
                $model->slug = Str::slug($model->company_name);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('company_name') && empty($model->slug)) {
                $model->slug = Str::slug($model->company_name);
            }
        });
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessors
    public function getBannerImageUrlAttribute()
    {
        return $this->banner_image
            ? asset('storage/'.$this->banner_image)
            : null;
    }

    public function getLogoImageUrlAttribute()
    {
        return $this->logo_image
            ? asset('storage/'.$this->logo_image)
            : null;
    }

    public function getShortBioAttribute()
    {
        if (! $this->company_bio) {
            return null;
        }

        return Str::limit($this->company_bio, 200, '...');
    }

    public function getCleanWebsiteAttribute()
    {
        if (! $this->website_url) {
            return null;
        }

        return preg_replace('/^https?:\/\//', '', $this->website_url);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
