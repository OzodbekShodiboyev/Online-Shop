<div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">Are you sure want to delete</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" type="button"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a style="margin-left:1%" href="{{ url('admin/category/create') }}">
            <button type="button" class="btn ml-5 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(22 163 74);">
                📂 Add Category
            </button>
        </a>

        <div class="con ml-5">
            @foreach ($categories as $category)
                <a class="text-decoration-none text-center " href="{{ url('admin/category/' . $category->id . '/edit') }}">
                    <div class="card m-3 float-left" style="width: 17rem; height:380px">
                        <img src="{{ asset('Uploads/Category/' . $category->image) }}" class="card-img-top"
                            width="230px" height="230px" alt="{{ $category->name }}">
                        <div class="card-body">
                            <h3 class="text-center text-decoration-none text-dark hover-text-dec-none" style="width: 15rem; height:60px">{{ $category->name }}</h3>
                            <div class="float-end d-flex justify-content-center">
                                <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                    class="btn btn-warning m-1">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ url('admin/category/' . $category->id . '/delete') }}"
                                    onclick="return confirm('Are you sure you want to delete this Category?')"
                                    class="btn btn-danger m-1 ">
                                    <i class="fa fa-sharp fa-regular fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

    </div>

</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide')
    });
</script>
    
@endpush