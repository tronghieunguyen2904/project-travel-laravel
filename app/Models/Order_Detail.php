<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $table = 'detail_order_tour';//nếu tên table là books -> không cần
    protected $primaryKey =['id_order','id_tour'];//Nếu khóa là id -> không cần
    //kiểu khóa chính int -> không cần
    public $incrementing = false;//Khóa chính tự động tăng -> kg cần
    public $timestamps = false;//Nếu có 2 cột: created_at, updated_at-> kg cần

    public function tour()
    {
        return $this->BelongsTo(location::class,"id_tour","id_tour");
    }

    protected $fillable = [
        'id_tour',
        'id_order',
        'name_customer',
        'sex',
        'CMND',
        'birth',
    ];
}
