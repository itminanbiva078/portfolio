<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
        protected $table='team';
    protected $guarded=[];
    
    public function team_social()
    {
    	return $this->hasMany(Team_Social_Link::class);
    }
}
