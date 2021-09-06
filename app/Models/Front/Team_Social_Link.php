<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_Social_Link extends Model
{
    use HasFactory;
    protected $table='team_social_link1';
    protected $guarded=[];

    public function teams()
    {
    	return $this->belongsTo(Team::class);
    }
}
