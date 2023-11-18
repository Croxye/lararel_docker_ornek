<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleComments extends Model {
    // The ArticleComments class uses the HasFactory trait, which provides a factory() method to create model instances.
    use HasFactory;

    // The ArticleComments class uses the SoftDeletes trait, which provides the ability to "soft delete" records (mark them as deleted instead of actually deleting them).
    use SoftDeletes;

    // The $guarded property specifies the attributes that are not mass assignable.
    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
        "deleted_at",
    ];
}
