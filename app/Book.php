<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'google_volume_id',
        'asin',
        'title',
        'isbn_10',
        'isbn_13',
        'goodreads_id',
        'subtitle',
        'description',
        'publisher',
        'published_date',
        'page_count',
        'google_average_rating',
        'google_ratings_count',
        'image',
        'cover_image',
        'original_image',
        'language',
        'google_info_link',
        'detail_page_url',
    ];

    /**
     * Get the authors for the book.
     */
    public function authors()
    {
        return $this->belongsToMany('App\Author')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    /**
     * Get the likes for the book.
     */
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    /**
     * Get the notes of this book
     */
    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    /**
     * Get all the shelves that this book belongs to.
     */
    public function shelves()
    {
        return $this->belongsToMany('App\Shelf')->withTimestamps();
    }

    /**
     * Get all the topics that this book belongs to.
     */
    public function topics()
    {
        return $this->belongsToMany('App\Topic')->withTimestamps();
    }
}
