<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'payment_status', 'payment_method', 'payment_status', 'updated_at'
    ];
    protected $primaryKey = 'payment_id ';
    protected $table = 'tbl_payment';
}
