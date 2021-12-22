@extends('layouts.other')

@section('header')
@include('layouts.partials.products-header')
@endsection

@section('banner')
@include('layouts.partials.products-banner') 
@endsection

@section('content')
 <products />   
@endsection

@section('footer')
@include('layouts.partials.footer')
@endsection

@section('styles')
<style>
    .pagination {
        display: inline-block;
    }

    .pagination ul {
        display: flex;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination .ivu-page-item-active a {
        background-color: red;
        color: white;
    }

    .pagination a:hover {
        background-color: #ddd;
    }
</style>
@endsection

