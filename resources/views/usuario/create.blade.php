@extends('layouts.admin')
@section('titulo')
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>This is main title</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div>
            </div>
@stop
@section('contenido')
{!! Form::open() !!}
	<div class="form-group">
		{!! Form::label("Nombre") !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre']) !!}
	</div>
{!! Form::close() !!}
@stop