<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company',
        'contact_name',
        'phone',
        'email',
        'password',
        'address',
        'tin',
        'vn',
        'rdo_code',
        'report_status_id',
        'duration',
    ];

    /**
     * Get the report status associated with the client.
     */
    public function reportStatus()
    {
        return $this->belongsTo(ReportStatus::class);
    }
}