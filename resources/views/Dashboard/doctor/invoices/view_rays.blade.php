@extends('Dashboard.layouts.master-doctor')
@section('title')
   الكشوفات
@stop
@section('css')

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">صور الاشعة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$rays->patient->name}}</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

            <div class="form-floating">
                <label for="floatingTextarea"> تشخيص دكتور الاشعة</label>
                <textarea class="form-control" readonly placeholder="Leave a comment here" id="floatingTextarea">{{$rays->description_employee}}</textarea>

            </div>
				<!-- Gallery -->
				<div class="demo-gallery">
					<ul id="lightgallery" class="list-unstyled row row-sm pr-0">

                    @foreach($rays->images as $image)

						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('Dashboard/img/Rays/'.$rays->Patient->name.'/'.$image->filename)}}" data-src="{{URL::asset('Dashboard/img/Rays/'.$rays->Patient->name.'/'.$image->filename)}}"  >
							<a href="{{ route('show.image', $image->id) }}">
								<img width="50px" height="350px" class="img-responsive" src="{{URL::asset('Dashboard/img/Rays/'.$rays->Patient->name.'/'.$image->filename)}}" alt="NoImg">
                            </a>

						</li>


                    @endforeach
					</ul>
					<!-- /Gallery -->


				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

@endsection
@section('js')


@endsection
