<?php

namespace App\Models;

use App\Traits\Translatable;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityTypeTag extends Model
{
    use HasFactory;
    use Translatable;
    use UsesUuid;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'activity_type_id',

    ];

    public function activityType()
    {
        return $this->belongsTo(ActivityType::class, 'activity_type_id');
    }
}
