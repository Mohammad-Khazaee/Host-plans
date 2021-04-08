<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'HostAttributeValue',
        'HostAttributekey',
        'host_id',
    ];

    public $timestamps = false;

    public $incrementing = false;

    

    public function Host()
    {
        return $this->belongsTo(Host::class);
    }
    
    public function store_new_attribute($request)
    {
       
        Host_detail::create($request);
    }
}
