@extends('Dashboard.layouts.master-doctor')
@section('css')
    <!-- Internal  Prism css -->
    <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Images</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="card mg-b-20" id="image1">
        <div class="card-body">
{{--            <div class="main-content-label mg-b-5">--}}
{{--                Responsive Image--}}
{{--            </div>--}}
{{--            <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>--}}
            <div class="text-wrap">
                <div class="example">
                        <img alt="Responsive image" height="1000" width="750" src="{{URL::asset('Dashboard/img/Rays/محمد السيد/'.$img->filename)}}"> </a>
                </div>
            </div>


        </div>
    </div>
    <!-- /row -->


    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
    <!-- Internal Prism js-->
    <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection
