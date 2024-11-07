@extends('Dashboard.layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('Dashboard/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('Dashboard/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">لوحة تحكم المريض </h2><br>
						  <p class="mg-b-0">أهلا بعودتك مرة اخرى : {{Auth::User()->name}}</p>
						</div>
					</div>

				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي عدد الفواتير</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{App\Models\Invoice::where('patient_id',auth()->user()->id)->count('Service_id')}}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي المدفوعات </h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{App\Models\PatientAccount::where('patient_id',auth()->user()->id)->sum('credit')}}</h4>

										</div>

									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
{{--					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">--}}
{{--						<div class="card overflow-hidden sales-card bg-success-gradient">--}}
{{--							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">--}}
{{--								<div class="">--}}
{{--									<h6 class="mb-3 tx-12 text-white">اجمالي الفواتير المكتملة </h6>--}}
{{--								</div>--}}
{{--								<div class="pb-0 mt-0">--}}
{{--									<div class="d-flex">--}}
{{--										<div class="">--}}
{{--											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{App\Models\Ray::where ('case',1)->count()}}</h4>--}}

{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>--}}
{{--						</div>--}}
{{--					</div>--}}

				</div>
				<!-- row closed -->



				<!-- row opened -->
				<div class="row row-sm row-deck">
					<!-- <div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-dashboard-eight pb-2">
							<h6 class="card-title">Your Top Countries</h6><span class="d-block mg-b-10 text-muted tx-12">Sales performance revenue based by country</span>
							<div class="list-group">
								<div class="list-group-item border-top-0">
									<i class="flag-icon flag-icon-us flag-icon-squared"></i>
									<p>United States</p><span>$1,671.10</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-nl flag-icon-squared"></i>
									<p>Netherlands</p><span>$1,064.75</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-gb flag-icon-squared"></i>
									<p>United Kingdom</p><span>$1,055.98</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-ca flag-icon-squared"></i>
									<p>Canada</p><span>$1,045.49</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-in flag-icon-squared"></i>
									<p>India</p><span>$1,930.12</span>
								</div>
								<div class="list-group-item border-bottom-0 mb-0">
									<i class="flag-icon flag-icon-au flag-icon-squared"></i>
									<p>Australia</p><span>$1,042.00</span>
								</div>
							</div>
						</div>
					</div> -->
{{--					<div class="col-md-12 col-lg-8 col-xl-12">--}}
{{--						<div class="card card-table-two">--}}
{{--						--}}
{{--							<span class="tx-12 tx-muted mb-3 ">آخر خمسة عمليات على النظام</span>--}}
{{--							<div class="table-responsive country-table">--}}
{{--								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">--}}
{{--									<thead>--}}
{{--										<tr>--}}
{{--										<th>#</th>--}}
{{--                                        <th>تاريخ الفاتورة</th>--}}
{{--                                        <th>اسم المريض</th>--}}
{{--                                        <th>اسم الطبيب</th>--}}
{{--                                        <th>المطلوب</th>--}}
{{--                                        <th>حالة الفاتورة</th>--}}
{{--										</tr>--}}
{{--									</thead>--}}
{{--                                    <tbody>--}}
{{--                                    @forelse(\App\Models\Ray::latest()->take(5)->get() as $invoice )--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$loop->iteration}}</td>--}}
{{--                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->created_at}}</td>--}}
{{--                                            <td class="tx-right tx-medium tx-danger">{{$invoice->patient->name}}</td>--}}
{{--                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->doctor->name}}</td>--}}
{{--                                            <td class="tx-right tx-medium tx-danger">{{$invoice->description}}</td>--}}
{{--                                            <td class="tx-right tx-medium tx-inverse">--}}
{{--                                                @if($invoice->case == 0)--}}
{{--                                                    <span class="badge badge-danger">تحت الاجراء</span>--}}
{{--                                                @else--}}
{{--                                                    <span class="badge badge-success">مكتملة</span>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @empty--}}
{{--                                        لاتوجد بيانات--}}
{{--                                    @endforelse--}}
{{--                                    </tbody>--}}
{{--								</table>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('Dashboard/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('Dashboard/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('Dashboard/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('Dashboard/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('Dashboard/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('Dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('Dashboard/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('Dashboard/js/index.js')}}"></script>
<script src="{{URL::asset('Dashboard/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
