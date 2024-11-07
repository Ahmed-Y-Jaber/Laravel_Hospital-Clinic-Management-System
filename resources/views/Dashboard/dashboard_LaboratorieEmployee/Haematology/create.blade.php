@extends('Dashboard.layouts.master')

@section('title')
   اضافة فحص  جديد
@stop
@section('css')

@endsection

@section('page-header')

<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">قائمة الفحوصات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة فحص  Haematology</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('lab_Haematology.store')}}" method="post" autocomplete="off">

                    @csrf

                    <input type="text" name="invoice_id" value="{{$invoice->invoice_id}}">
                    <input type="text" name="patient_id" value="{{$invoice->patient_id}}">
                    <input type="text" name="doctor_id" value="{{$invoice->doctor_id}}">


                    <div class="row">
                        <div class="col-1">
                            <label>HGB </label>
                            <input type="text" name="HGB"   class="form-control">
                        </div>

                        <div class="col-2">
                            <label> HGB Normal Range</label>
                            <select  class="form-control" name="n_HGB" >
                                <option value="" >--  Normal Range --</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>HCT </label>
                            <input type="text" name="HCT"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> HCT Normal Range</label>
                            <select  class="form-control" name="n_HCT">
                                <option value="" >--  Normal Range --</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>RBCs </label>
                            <input type="text" name="RBCs"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> RBCs Normal Range</label>
                            <select  class="form-control" name="n_RBCs" >
                                <option value="" >--  Normal Range --</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                            </select>
                        </div>
                    </div>

                        <br>

{{--                    <div class="col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Date  :</label>--}}
{{--                            <input class="form-control" type="text"  id="datepicker-action" name="lab_date" data-date-format="yyyy-mm-dd">--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row">
                        <div class="col-1">
                            <label>MCV </label>
                            <input type="text" name="MCV"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> MCV Normal Range</label>
                            <select  class="form-control" name="n_MCV" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>MCH</label>
                            <input type="text" name="MCH"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> MCH Normal Range</label>
                            <select  class="form-control" name="n_MCH" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>MCHC</label>
                            <input type="text" name="MCHC"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> MCHC Normal Range</label>
                            <select  class="form-control" name="n_MCHC" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>PLT </label>
                            <input type="text" name="PLT"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> PLT Normal Range</label>
                            <select  class="form-control" name="n_PLT" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>WBCs</label>
                            <input type="text" name="WBCs"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> WBCs Normal Range</label>
                            <select  class="form-control" name="n_WBCs" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Blood_Group</label>
                            <input type="text" name="Blood_Group"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Blood_Group Normal Range</label>
                            <select  class="form-control" name="n_Blood_Group" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>Rh </label>
                            <input type="text" name="Rh"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> Rh Normal Range</label>
                            <select  class="form-control" name="n_Rh" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Reticulocyte</label>
                            <input type="text" name="Reticulocyte_Count"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> Reticulocyte Count Range</label>
                            <select  class="form-control" name="n_Reticulocyte_Count" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Lymphocytes</label>
                            <input type="text" name="Lymphocytes"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Lymphocytes Normal Range</label>
                            <select  class="form-control" name="n_Lymphocytes" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-1">
                            <label>Monocytes </label>
                            <input type="text" name="Monocytes"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> Monocytes Normal Range</label>
                            <select  class="form-control" name="n_Monocytes" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Eosinophils</label>
                            <input type="text" name="Eosinophils"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> Eosinophils Range</label>
                            <select  class="form-control" name="n_Eosinophils" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Basophils</label>
                            <input type="text" name="Basophils"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Basophils Normal Range</label>
                            <select  class="form-control" name="n_Basophils" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>Abnormal_Cells </label>
                            <input type="text" name="Abnormal_Cells"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> Abnormal_Cells Range</label>
                            <select  class="form-control" name="n_Abnormal_Cells" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Bleeding_time</label>
                            <input type="text" name="Bleeding_time"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> Bleeding_time Range</label>
                            <select  class="form-control" name="n_Bleeding_time" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Clotting_Time</label>
                            <input type="text" name="Clotting_Time"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Clotting_Time Normal Range</label>
                            <select  class="form-control" name="n_Clotting_Time" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>PT </label>
                            <input type="text" name="PT"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> PT Range</label>
                            <select  class="form-control" name="n_PT" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Activity</label>
                            <input type="text" name="Activity"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> Activity Range</label>
                            <select  class="form-control" name="n_Activity" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Control</label>
                            <input type="text" name="Control"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Control Normal Range</label>
                            <select  class="form-control" name="n_Control" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>INR </label>
                            <input type="text" name="INR"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> INR Range</label>
                            <select  class="form-control" name="n_INR" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>APTT</label>
                            <input type="text" name="APTT"   class="form-control" >
                        </div>
                        <div class="col-2">
                            <label> APTT Range</label>
                            <select  class="form-control" name="n_APTT" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Fibrinogen</label>
                            <input type="text" name="Fibrinogen"   class="form-control" >
                        </div>

                        <div class="col-2">
                            <label> Fibrinogen Normal Range</label>
                            <select  class="form-control" name="n_Fibrinogen" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-1">
                            <label>Factor </label>
                            <input type="text" name="Factor"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> Factor Range</label>
                            <select  class="form-control" name="n_Factor" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>Neutrophils </label>
                            <input type="text" name="Neutrophils"   class="form-control  ">

                        </div>
                        <div class="col-2">
                            <label> Neutrophils Range</label>
                            <select  class="form-control" name="n_Neutrophils" >
                                <option value="" >--  Neutrophils Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <label>ESR1</label>
                            <input type="text" name="ESR1"   class="form-control" >
                        </div>


                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-1">
                            <label>ESR2</label>
                            <input type="text" name="ESR2"   class="form-control" >
                        </div>

                        <div class="col-1">
                            <label> </label>
                        </div>

                        <div class="col-2">
                            <label> ESR Range</label>
                            <select  class="form-control" name="n_ESR" >
                                <option value="" >--  Normal Range --</option>
                                <option value="1">100</option>
                                <option value="2">200</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success">حفظ البيانات</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
