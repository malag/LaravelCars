<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'name', 'model', 'year', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id');
    }        



    public function scopeFilter($query, Request $request)
    {
        if($request['year'] ?? false)
        {
            $query->where('year', '=', $request['year'] );
        }
        else 
        {
            if($request['brand'] ?? false)
            {
                $query->where('brand', '=', $request['brand'] );
            }
            else
            {
                if($request['model'] ?? false)
                {
                    $query->where('model', '=', $request['model'] );
                }
            }
        }
        if($request['search'] ?? false)
        {
            $query->where('name', 'like', '%' . $request['search'] . '%' )
              ->orWhere('brand', 'like', '%' . $request['search'] . '%' )
              ->orWhere('model', 'like', '%' . $request['search'] . '%' )
              ->orWhere('year', 'like', '%' . $request['search'] . '%' );
        }
    }

}