<?php

namespace App\Models\JobBoard;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\JoabBoard\Professional;

class ProfessionalExperience extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-job-board';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employer',
        'job_description',
        'start_date',
        'finish_date',
        'reason_leave',
        'current_work'
    ];

    public function profsesional()
    {
        return $this->belongsTo(Professional::class);
    }

}
