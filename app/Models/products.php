<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
	protected $guarded = ['id'] ;  
	protected $timestamp = true;
	
	public function categorie()
	{
		return $this->belongsTo('App\Models\categories');
	}

	public function brand()
	{
		return $this->belongsTo('App\Models\brands');
	}

	public function orders()
    {
    	return $this->belongsToMany('App\Models\orders','orders_details','order_id','product_id');
    }
    
}
