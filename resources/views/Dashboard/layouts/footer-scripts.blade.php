<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<!-- JQuery min js -->


<script src="{{URL::asset('Dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle js -->
<script src="{{URL::asset('Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('Dashboard/plugins/ionicons/ionicons.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('Dashboard/plugins/moment/moment.js')}}"></script>

<!-- Rating js-->
<script src="{{URL::asset('Dashboard/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/rating/jquery.barrating.js')}}"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{URL::asset('Dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
<!--Internal Sparkline js -->
<script src="{{URL::asset('Dashboard/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Scroll bar Js-->
<script src="{{URL::asset('Dashboard/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- right-sidebar js -->
<script src="{{URL::asset('Dashboard/plugins/sidebar/sidebar-rtl.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/sidebar/sidebar-custom.js')}}"></script>
<!-- Eva-icons js -->
<script src="{{URL::asset('Dashboard/js/eva-icons.min.js')}}"></script>
@yield('js')
<!-- Sticky js -->
<script src="{{URL::asset('Dashboard/js/sticky.js')}}"></script>
<!-- custom js -->
<script src="{{URL::asset('Dashboard/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{URL::asset('Dashboard/plugins/side-menu/sidemenu.js')}}"></script>









 @livewireScripts


 <script>
     $(function() {
         jQuery("[name=select_all]").click(function(source) {
             checkboxes = jQuery("[name=delete_select]"); // delete_select the name of checkbox  الي فوق
             for(var i in checkboxes){
                 checkboxes[i].checked = source.target.checked;
             }
         });
     })
 </script>


 <script type="text/javascript">
 $(function () {
     $("#btn_delete_all").click(function () {
         var selected = []; // على هيئة [] لاني ممكن احدد مجموعة للحذف
         $("#example input[name=delete_select]:checked").each(function () { //input[name=delete_select] اسم التشيكبوكس في الطبيب
             // example   اسم جدول الاطباء في الانديكس  <table id="example"
             selected.push(this.value);  //value = id in checkbox
         });
         if (selected.length > 0) {
             $('#delete_select').modal('show')
             $('input[id="delete_select_id"]').val(selected);
         }
     });
 });
 </script>

 {{-- Jss data table --}}
 <!-- Internal Data tables -->
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>

