<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class imagemodel extends Model{
    public $table='images';
    public $primaryKey='imageId';
    public $timestamps=FALSE;
}


?>
