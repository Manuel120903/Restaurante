@extends('dashboard_admin.index')

@section ('title','C U S T O M E R S')

@section ('content')
@include ('customers.create')
@include ('customers.data')
@endsection