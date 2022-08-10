<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\QName as QName;
use App\QAgent as QAgent;
use App\SqlRealTime as SqlRealTime;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function qnames() {
        return $this->belongsToMany(QName::class, 'userqname', 'users_id', 'qname_queue_id');
    }

    public function qagents() {
        return $this->belongsToMany(QAgent::class, 'userqagent', 'users_id', 'qagent_agent_id');
    }

    public function queryResult() {
        return SqlRealTime::where('user', $this->login)->firstOrFail();
    }
}
