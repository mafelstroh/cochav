<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'product_id',
		'product_name',
		'product_description',
		'product_quantity',
		'product_price'
	];
	public $primaryKey = 'product_id';
}
