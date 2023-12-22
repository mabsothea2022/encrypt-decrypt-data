<?php

namespace App\Models;

use COM;
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

    // All this function use for encrypt data from user input
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

    // All this function use for decrypt data
    public function GetCardNoAttribute($value){
        try{
            return Crypt::decryptString($value);
        }catch(\Exception $e){
            return $value;
        }
    }
    public function GetExpMonthAttribute($value){
        try{
            return Crypt::decryptString($value);
        }catch(\Exception $e){
            return $value;
        }
    }
    public function GetExpYearAttribute($value){
        try{
            return Crypt::decryptString($value);
        }catch(\Exception $e){
            return $value;
        }
    }
    public function GetCvvAttribute($value){
        try{
            return Crypt::decryptString($value);
        }catch(\Exception $e){
            return $value;
        }
    }
}
