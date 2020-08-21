<?php

namespace App\Models\JobBoard;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\JobBoard\Professional;
use App\Models\Ignug\State;
use App\Models\JobBoard\Catalogue;

class Language extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-job-board';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function written_level()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function spoken_level()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function reading_level()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
