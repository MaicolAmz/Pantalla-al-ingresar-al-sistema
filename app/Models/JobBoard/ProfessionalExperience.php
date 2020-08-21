<?php

namespace App\Models\JobBoard;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\JobBoard\Professional;
use App\Models\Ignug\State;
use App\Models\JobBoard\Catalogue;

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

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function category()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
