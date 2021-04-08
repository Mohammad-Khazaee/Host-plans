<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    public function Host_detail()
    {
        return $this->hasMany(Host_detail::class);
    }

    public function Create_new_Host($name)
    {
        $Host = new host;
        $Host->name = $name;
        $Host->save();

        return $Host->id;
    }

    public function delete_host($id)
    {
        Host::find($id)->delete();
    }
}
