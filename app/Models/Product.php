<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    use HasFactory;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'products';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'technical_info',
        'price',
        'stock',
        'image_path',
        'category_id',
    ];


    /**
     * Summary of casts
     * @var array
     */
    protected $casts = [
        'technical_info' => 'array', // como você usou JSON
        'price' => 'decimal:2',
        'stock' => 'integer',
        'category_id' => 'integer',
    ];

    /**
     * Summary of category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Category, Product>
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
