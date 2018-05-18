@extends('layouts.app') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        {{ Breadcrumbs::render('payroll_edit', $year, $month) }}
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <form action="/payroll" method="POST">
                    <input type="hidden" value="{{ $procedure->month->name}}" name="month">
                    <input type="hidden" value="{{ $procedure->year }}" name="year"> {{ csrf_field() }}
                    <payroll-index :edit="true" :procedure="{{ $procedure }}"></payroll-index>
                    <button class="btn btn-primary" type="submit"> <i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection