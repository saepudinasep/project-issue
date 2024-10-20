<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = ['detail_region_id', 'user_id', 'tanggal', 'jam', 'category_issue_id', 'no', 'details_issue', 'solusi'];

    public function detailRegion()
    {
        return $this->belongsTo(DetailRegion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoryIssue()
    {
        return $this->belongsTo(CatagoryIssue::class);
    }
}
