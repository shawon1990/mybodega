<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class storeusermodel extends Model{
    public $table='storeuser';
    public $primaryKey='userId';
    public $timestamps=FALSE;
}


?>
