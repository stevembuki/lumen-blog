<?php namespace App;

use Illuminate\Database\Eloquent\Model;

Class Chabrin extends Model

{
	public $table="chabrin";
	protected $fillable=['Tenant Name','Amount','Description'];

}
?>