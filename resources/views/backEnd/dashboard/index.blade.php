@extends('layouts.main')
@section('title', config('app.name'))
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12  text-center">
                <div class="card shadow">
                    <div class="card-header">
                        <img src="{{asset('assets/dist/img/.png')}}" alt="" height="150">
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">Masih dalam masa pengerjaan</h4>
                            <p>Mohon Di tunggu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
