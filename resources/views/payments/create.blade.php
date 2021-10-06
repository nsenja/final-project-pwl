@extends('layouts.admin.master')

@section('title', '- Manajemen Payment')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Payment</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('payments.index') }}">Payment</a></div>
                <div class="breadcrumb-item">Buat Payment Baru</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('payments.store') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Payment</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                 <div class="form-group">
                                    <label>Nama Akun</label>
                                    <input type="text" class="form-control" name="account_name">
                                </div>
                                 <div class="form-group">
                                    <label>Nomor Akun</label>
                                    <input type="text" class="form-control" name="account_number">
                                </div>
                                 <div class="form-group">
                                    <label>Logo Payment</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                    <a href="javascript:history.back()" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
