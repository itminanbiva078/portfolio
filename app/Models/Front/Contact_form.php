<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_form extends Model
{
    use HasFactory;
    protected $table='contact';
    protected $guarded=[];
    public  $timestamps=false;
}
