<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 
use Illuminate\Support\Facades\Crypt;

class transactionsModel extends Model
{
    use HasFactory;
    public $table = "tbl_transactions";
    public $primaryKey = "id";
    public $fillable = ["card_name","card_no","exp_month","exp_year","cvv"];
    public $timestamps = false;

    public function setCardNoAttribute($value){
        $this->attributes['card_no'] = Crypt::encryptString($value);
    }

    public function setExpMonthAttribute($value){
        $this->attributes['exp_month'] = Crypt::encryptString($value);
    }
    
    public function setExpYearattribute($value){
        $this->attributes['exp_year'] = Crypt::encryptString($value);
    }

    public function setCVVAttribute($value){
        $this->attributes['cvv'] = Crypt::encryptString($value);
    }
}
