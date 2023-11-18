<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'branch_id',
        'serviceCode',
        'serviceName',
        'serviceDescription',
        'cost'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

}
