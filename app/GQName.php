<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QName as QName;

class GQName extends Model
{
    //
    protected $primaryKey = 'groupname_id';

    protected $table = 'gqname';

    public function qnames() {
        return $this->belongsToMany(QName::class, 'gqnameqname', 'gqname_groupname_id', 'qname_queue_id');
    }

}
