<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRegion extends Model
{
    use HasFactory;

    protected $fillable = ['region_id', 'cabang_id'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
}
