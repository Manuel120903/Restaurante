@extends('dashboard_admin.index')

@section ('title','P R O D U C T S')

@section ('content')
@include ('products.create')
@include ('products.data')
@endsection