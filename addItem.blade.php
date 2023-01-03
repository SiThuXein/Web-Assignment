@extends("layouts.master")
@section("title","Add Item")

@section("content")

<div class="container-fluid add">
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
                        <h6 class="mt-3 fs-6">ItemList >  <span class="text-primary"> Add Items</span> </h6>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="add-item">Add Items</h6>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-5 mt-1 mb-5">
                        <h6 class="text-dark mb-3">Item Information</h6>
                        <form action="/admin/dashboard/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label text-dark">Item Name*</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Select Category*</label>
                                <select name="category" id="" >
                                    @foreach($Category as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Price*</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Price">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Description</label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Item Condition</label>
                                <select name="item_condition" id="" placeholder="Select Item Condition">
                                    <option value="new">New</option>
                                    <option value="second">Good Second Hand</option>
                                </select>                            
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Item Type</label>
                                <select name="item_type" id="" placeholder="Select Item Type">
                                    <option value="sell">For Sell</option>
                                    <option value="buy">For Buy</option>
                                    <option value="exchange">For Exchange</option>
                                </select>                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Status</label><br>
                                <input type="checkbox" name="status" > <span>Publish</span>                              
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label">Item Photo</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                      
                    </div>
                    <div class="col-md-1"></div>
                   <div class="col-md-5">
                            <h6 class="text-dark mb-3">Owner Information</h6>

                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Owner Name</label>
                                <input type="text" class="form-control" name="owner_name" placeholder="Enter Name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Contact Number</label>
                                <input type="text" class="form-control" name="contact" placeholder="Add Number">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label text-dark">Address</label><br>
                                <textarea name="address" id="" cols="59" rows="5" placeholder="Enter Address" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-white mt-3 mb-5 cancle">Cancle</button>
                            <button type="submit" class="btn btn-sm btn-primary mt-3 mb-5">Save</button>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection