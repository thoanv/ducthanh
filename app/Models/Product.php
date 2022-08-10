<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'code',
        'avatar',
        'description',
        'content',
        'specification',
        'star',
        'favourite',
        'status',
        'price',
        'discount',
        'quantity',
        'search',
        'key_search',
        'SKU',
        'bao_hanh',

        'employee_id',
        'trademark_id',
        'origin_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }
    public function trademark()
    {
        return $this->belongsTo(Trademark::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function getPriceDiscount()
    {
        $price = $this->price;
        if($this->discount)
            $price = $this->price * ((100 - $this->discount)/100);

        return number_format($price, 0, '.', '.');
    }
    public function getPrice()
    {
        return number_format($this->price, 0, '.', '.');
    }
}
