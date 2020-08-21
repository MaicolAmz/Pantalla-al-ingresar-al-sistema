<?php

namespace App\Models\JobBoard;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\JobBoard\Professional;
use App\Models\Ignug\State;
use App\Models\JobBoard\Catalogue;

class Course extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-job-board';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'institution',
        'event_name',
        'start_date',
        'finish_date',
        'hours'
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function event_type()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function institution()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function type_certification()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
