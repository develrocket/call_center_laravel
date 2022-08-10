<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SqlRealTime;
use Illuminate\Support\Facades\Auth;
use App\QueueStat as QueueStat;
use App\UniqueId as UniqueId;
use App\QName as QName;
use App\QAgent as QAgent;

class DashboardController extends Controller
{
    public function index()
    {
        $user  = Auth::user();

        $start = date('Y-m-d 00:00:00');

        $qnameIds = $user->qnames->pluck('queue_id');

        if (count($qnameIds) > 0 && $qnameIds[0] == '-1') {
            $qnameIds = QName::pluck('queue_id');
        }

        $qagentIds = $user->qagents->pluck('agent_id');

        if (count($qagentIds) > 0 && $qagentIds[0] == '-1') {
            $qagentIds = QAgent::pluck('agent_id');
        }

        $qstats = QueueStat::where('datetime', '>=', '2017-07-27')
            ->whereIn('qname', $qnameIds)
            ->get()->count();

        echo $qstats;

        print_r($qnameIds);

        exit;

        return view('app.dashboard.dashboard');
    }
}
