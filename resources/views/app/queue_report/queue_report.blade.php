@extends('app')
@section('mycss')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@stop

@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Line Chart
                            <div class="card-actions">
                                <a href="http://www.chartjs.org">
                                    <small class="text-muted">docs</small>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Doughnut Chart
                            <div class="card-actions">
                                <a href="http://www.chartjs.org">
                                    <small class="text-muted">docs</small>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Striped Table
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Date registered</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Yiorgos Avraamu</td>
                                    <td>2012/01/01</td>
                                    <td>Member</td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Avram Tarasios</td>
                                    <td>2012/02/01</td>
                                    <td>Staff</td>
                                    <td>
                                        <span class="badge badge-danger">Banned</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quintin Ed</td>
                                    <td>2012/02/01</td>
                                    <td>Admin</td>
                                    <td>
                                        <span class="badge badge-secondary">Inactive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Enéas Kwadwo</td>
                                    <td>2012/03/01</td>
                                    <td>Member</td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agapetus Tadeáš</td>
                                    <td>2012/01/21</td>
                                    <td>Staff</td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
    <script src="{{ asset('js/views/queue_report.js') }}"></script>
@endsection