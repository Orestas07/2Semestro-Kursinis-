@extends('mainlayout')

@section('content')

<form method="POST">
    @csrf
    <div class="form-group">
        <br>
        <label>Budget Goal Description</label>
        <input name="description" required="required" type="text" class="form-control">
    </div>

    <button type="submit">Create</button>
    {{-- <div class="modal fade" id="goalform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Budget goals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <br>
                        <label class="">Budget Goal</label>
                        <input name="order_item_model" required="required" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <br>
                        <label class="">Pageidaujama paslauga</label>
                        <select id="order_service_id_desktop" class="form-select" name="order_service_id" required>
                            <option>Completed</option>
                            <option>Not Finished</option>
                         </select>
                    </div>
                

                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Uždaryti</button>
                    <button type="submit" name="Edit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div> --}}
</form>
@endsection