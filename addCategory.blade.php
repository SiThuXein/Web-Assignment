@extends("layouts.master")
@section("title","Add Category")

@section("content")

<div class="container-fluid edit-category">
    <div class="row">
        <div class="col-md-2 bg-secondary col-1">
            <div>
            <a href="/admin/dashboard" class="text-dark"><h6 class="mt-5 fw-bold fs-6"> Admin Panel</a></h6>
            </div>
            <div class="mt-5 div-2">
                <div>
                    <a href="/admin/dashboard" class="text-dark"> > Item</a>
                </div>
                <div>
                    <a href="/admin/dashboard/category" class="text-dark"> > Category</a>
                </div>

            </div>

        </div>
        <div class="col-md-10 col-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  mt-3">
                        <div class="name">
                            <h6>PS</h6>
                        </div>
                    </div>
                </div>
                <hr style="width:100%">
                <div class="row">
                    <div class="col-md-12">
                    <h6 class="mt-3 fs-6">Category >  <span class="text-primary"> Add Categories</span> </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h6 class="add-category">Add Items</h6>
                    </div>
                </div>
                <div class="row mb-5">
                    <!-- <div class="col-md-3"></div> -->
                    <div class="col-md-6">
                    <form action="/admin/dashboard/category/add" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label text-dark">Category Name*</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group mt-3">
                                <label for="" class="form-label">Category Photo*</label>
                                <input type="file" class="form-control" name="image">
                        </div>
                        
                 

                        <button type="submit" name="edit" class="btn btn-primary mt-3 mb-5">Save</button>
                    </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection