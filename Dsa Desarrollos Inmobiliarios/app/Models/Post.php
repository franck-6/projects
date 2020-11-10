<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version January 12, 2019, 1:08 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property integer author_id
 * @property integer category_id
 * @property string title
 * @property string seo_title
 * @property string excerpt
 * @property string body
 * @property string image
 * @property string slug
 * @property string meta_description
 * @property string meta_keywords
 * @property string status
 * @property boolean featured
 */
class Post extends Model
{
    //use SoftDeletes;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'author_id',
        'category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'featured'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'seo_title' => 'string',
        'excerpt' => 'string',
        'body' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string',
        'status' => 'integer',
        'featured' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
