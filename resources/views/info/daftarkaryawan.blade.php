@extends('layouts.base')

@section('title')
Komunitas Guru Digital | Data Karyawan
@endsection

@section('open2')
active open
@endsection

@section('content')

<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/home">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Program</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Data Karyawan</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <!-- END PAGE HEADER-->
    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Karyawan</div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align:center">No</th>
                                    <th style="text-align:center">Nama</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center">No. Telpon</th>
                                    <th style="text-align:center">&nbsp;</th>
                                    <th style="text-align:center">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align:center">
                                    <td>1</td>
                                    <td>Ovitasari Dewi</td>
                                    <td>ovitasari@gmail.com</td>
                                    <td>08226767678687</td>
                                    <td><a href="" class="btn btn-info">Edit</a></td>
                                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                                </tr>
                                <tr style="text-align:center">
                                    <td>2</td>
                                    <td>Ovitasari Dewi</td>
                                    <td>ovitasari@gmail.com</td>
                                    <td>08226767678687</td>
                                    <td><a href="" class="btn btn-info">Edit</a></td>
                                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                                </tr>
                                <tr style="text-align:center">
                                    <td>3</td>
                                    <td>Ovitasari Dewi</td>
                                    <td>ovitasari@gmail.com</td>
                                    <td>08226767678687</td>
                                    <td><a href="" class="btn btn-info">Edit</a></td>
                                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

</div>
<!-- END CONTENT BODY -->
@endsection

@section('style')
<link href="../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="../../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
@endsection

