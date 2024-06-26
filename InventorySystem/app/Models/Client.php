<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the report status associated with the client.
     */
    public function reportStatus()
    {
        return $this->belongsTo(ReportStatus::class);
    }
}