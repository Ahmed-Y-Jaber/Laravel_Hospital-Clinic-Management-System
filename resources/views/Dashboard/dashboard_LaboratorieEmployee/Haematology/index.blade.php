@extends('Dashboard.layouts.master')
@section('title')
    الكشوفات
@stop
@section('css')


    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

    @section('page-header')
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">الكشوفات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الفواتير</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
    @endsection
    @section('content')
        @include('Dashboard.messages_alert')
        <!-- row -->
        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">

{{--                    <div class="card-header pb-0">--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <a href="{{route('lab_Haematology.create')}}" class="btn btn-primary">اضافة فحص  Haematology جديد</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>تاريخ الفاتورة</th>
                                    <th>اسم المريض</th>
                                    <th>اسم الدكتور</th>
                                    <th>اسم الاخصائي</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Haematologies as $haema)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $haema->created_at }}</td>
                                        <td>{{ $haema->Patient->name }}</td>
                                        <td>{{ $haema->doctor->name }}</td>
                                        <td>{{auth()->user()->name}}</td>


                                        <td>
                                            <a href="{{route('lab_Haematology.edit',$haema->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->

            <!-- /row -->
        </div>
        <!-- row closed -->

        <!-- Container closed -->

        <!-- main-content closed -->
    @endsection
    @section('js')

        <!--Internal  Notify js -->
        <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
        <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

    @endsection
