<!-- Modal Deleted Appointment -->
<div class="modal fade" id="delete{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف بيانات موعد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="post">

                 @method('delete')
                 @csrf


                <div class="row">
                    <div class="col">
                        <p class="h5 text-danger">حذف موعد ؟؟</p>
                    </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                <button type="submit" class="btn btn-danger">{{trans('Dashboard/sections_trans.submit')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
