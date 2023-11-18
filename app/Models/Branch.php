<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';
    protected $fillable = [
        'branchName',
        'branchManager',
        'description', 
    ];

    public function service()
    {
        return $this->hasMany(Service::class,'branch_id');
    }
}
