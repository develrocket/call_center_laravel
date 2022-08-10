@extends('app')
@section('mycss')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@stop

@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">

            <div class="card top-info">
                <div class="card-footer">
                    <ul>
                        <li>
                            <div class="text-muted">Agents logged</div>
                            <div class="text-muted">In | Out</div>
                            <strong><span style="color: #379457">78</span> <span style="color: #187da0">|</span> <span style="color: #f86c6b">15</span></strong>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">Agent on</div>
                            <div class="text-muted">Pause</div>
                            <strong>13</strong>
                        </li>
                        <li>
                            <div class="text-muted">Agent on</div>
                            <div class="text-muted">Call | Idle</div>
                            <strong><span style="color: #379457">59</span> <span style="color: #187da0">|</span> <span style="color: #f86c6b">1</span></strong>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">Agent on</div>
                            <div class="text-muted">HOLD</div>
                            <strong>3</strong>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">Calls in</div>
                            <div class="text-muted">QUEUE</div>
                            <strong>25</strong>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">9.823</h4>
                            <p>Total Calls</p>
                        </div>
                        <div class="chart-wrapper px-3" style="height:70px;">
                            <canvas id="card-chart1" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">1103 (78.7%)</h4>
                            <p>Answered</p>
                        </div>
                        <div class="chart-wrapper px-3" style="height:70px;">
                            <canvas id="card-chart2" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">208 (20.5%)</h4>
                            <p>Unanswered</p>
                        </div>
                        <div class="chart-wrapper" style="height:70px;">
                            <canvas id="card-chart3" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">9 (0.6%)</h4>
                            <p>Abandon</p>
                        </div>
                        <div class="chart-wrapper px-3" style="height:70px;">
                            <canvas id="card-chart4" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>

            <div class="row bottom-info" style="margin-top: 40px">
                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-success text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>1048</strong>
                                <div>Total Transfer Calls</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-danger text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>890</strong>
                                <div>Drop Call by Caller</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-primary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>290</strong>
                                <div>Drop Call by Agent</div>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-warning text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>88%</strong>
                                <div>SLA (30 secs)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-info text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>00:35</strong>
                                <div>Avg. Ring Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-secondary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>5</strong>
                                <div>Avg. Abandon Pos.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-success text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>14</strong>
                                <div>Avg. Wait Pos</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-danger text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>05:50</strong>
                                <div>Avg. Agent Talk Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-primary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>00:50</strong>
                                <div>Avg. Wait Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-warning text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>01:10</strong>
                                <div>Abandon Avg. Wait</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-info text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>87.6%</strong>
                                <div>Avg. Caller Hangup</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-secondary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>12.4%</strong>
                                <div>Avg. Agent Hangup</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-success text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>Lucas</strong>
                                <div>Fewest call Agent</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-danger text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>Aznita</strong>
                                <div>Highest call Agent</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-primary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>James (25.5%)</strong>
                                <div>Highest Agent Hangup</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-warning text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>Jaznita (90.5%)</strong>
                                <div>Highest Caller Hangup</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-info text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>Lucas (01:54:23)</strong>
                                <div>Highest Pause Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-secondary text-center">
                        <div class="card-body">
                            <div class="float-right text-right">
                                <strong>Aznita (03:45:43)</strong>
                                <div>Highest Talk Time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
    <script src="{{ asset('js/views/dashboard.js') }}"></script>
@endsection