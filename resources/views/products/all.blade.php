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
        background-color: #4CAF50;
        color: white;
    }

    .pagination a:hover {
        background-color: #ddd;
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {

    $(".filter-button").click(function() {
        var value = $(this).attr('data-filter');

        if(value == "all") 
        {
            $('.filter').show('1000');
        } 
        else 
        {
            $('.filter').not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    }); 
       if($('.filter-button').removeClass('active')) 
       {
           $(this).removeClass('active');
       } 

       $(this).addClass("active");
    });
</script>
@endsection