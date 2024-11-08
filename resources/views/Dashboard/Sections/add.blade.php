<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{trans('sections_trans.add_sections')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('Sections.store') }}" method="post" >
            @csrf

            <div class="modal-body">
                <label for="exampleInputPassword1">{{trans('sections_trans.name_sections')}}</label>
                <input type="text" name="name" class="form-control" autocomplete="off">
            </div>
            <div class="modal-body">
                <label for="exampleInputPassword1">{{trans('sections_trans.description')}}</label>
                <textarea class="form-control" name="description"  rows="5" autocomplete="off"></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('sections_trans.Close')}}</button>
            <button type="submit" class="btn btn-primary">{{trans('sections_trans.submit')}}</button>
            </div>
        </form>
      </div>
    </div>
  </div>
