<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';//nếu tên table là books -> không cần
    protected $primaryKey ='email';//Nếu khóa là id -> không cần
    protected $keyType = 'string';//kiểu khóa chính int -> không cần
    public $incrementing = false;//Khóa chính tự động tăng -> kg cần
    public $timestamps = false;//Nếu có 2 cột: created_at, updated_at-> kg cần

    protected $fillable = [
        'customer_name',
        'email',
        'password',
        'address',
        'phone',
        'gender',
        'date_of_birth'
    ];

    public function order()
    {
        return $this->hasMany(order::class,"email","email");
    }
}
