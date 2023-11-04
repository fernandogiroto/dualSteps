<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessesVisaWorkPt extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'processes_visa_work_pt';

    protected $fillable = [
        'process_id',
        'lawyer_id'
    ];

    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
