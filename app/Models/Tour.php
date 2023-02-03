<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tour';//nếu tên table là books -> không cần
    protected $primaryKey ='id_tour';//Nếu khóa là id -> không cần
    protected $keyType = 'string';//kiểu khóa chính int -> không cần
    public $incrementing = false;//Khóa chính tự động tăng -> kg cần
    public $timestamps = false;//Nếu có 2 cột: created_at, updated_at-> kg cần

    public function location()
    {
        return $this->BelongsTo(location::class,"id_location","id_location");
    }

    public function detail_order()
    {
        return $this->hasMany(Order_Detail::class,"id_tour","id_tour");
    }

    protected $fillable = [
        'id_tour',
        'name_tour',
        'date_go',
        'date_back',
        'content_tour',
        'place_go',
        'child_price',
        'adult_price',
        'img_tour',
        'best_seller',
        'hot_tour',
        'id_location',
        'id_vehicle',
        'id_detail_hotel',
    ];
}
