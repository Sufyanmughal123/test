<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    use HasFactory, SoftDeletes;
    protected $table = 'services';
    //     protected $fillable=['name','logo','section4_short','point_one','section3_list','section1_image','point_two','point_three','description',  'section1_heading','section1_description','how_it_works_banner' ,'section3_heading',  'section3_description', 'section3_image', 'section3_right','section4_heading','section4_image','section4_description','section5_heading','section5_description_before','section5_image','section5_description_after','section6_heading', 'section6_left_text','section6_left_right','image','meta_title','meta_description','slug','status','keywords',''];
    //    public function sluggable(): array
    //    {
    //        return [
    //            'slug' => [
    //                'source' => 'name'
    //            ]
    //        ];
    //    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'name');
    }
}
