<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Rmodel extends Model
{
 use HasFactory;

 protected $primaryKey = "id";
 public $timestamps = true; // cria data 
 public $incremeting = true;
 protected $fillable = [];


 public function beforeSave(){
    return true;
 }

 public function save( array $options = []){
    try{
      if(!$this->beforeSave()){
        return false;
      }
        return parent::save();
    }catch(\Exception $e){  
        throw new \Exception($e->getMessage()); 

 }

}
}