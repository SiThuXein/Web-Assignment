@extends("layouts.master")
@section("title","Category")

@section("content")

<div class="container home">
    <div class="row">
        <div class="col-md-12 mt-5">
            <a href="/" class="fs-6 fw-bold text-dark">Home <span> > Fashion</span></a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-dark">Filter By</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-end text-danger fw-bold">Clear Filter</h6>
                    </div>
                </div>
                <div class="row mt-3">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="form-label fw-bold text-dark">Sorting</label><br>
                            <input type="radio">Latest
                            <input type="radio">Popular
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label fw-bold text-dark">Item Name</label>
                            <input type="text" class="form-control" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="">Price Range</label><br>
                            <input type="text" placeholder="min" style="width:135px; border:1px solid #ccc;border-radius:3px;margin-right:5px">
                            <input type="text" placeholder="max" style="width:135px; border:1px solid #ccc;border-radius:3px">
                        </div>
                        <div class="form-group">
                                <label for="" class="form-label fw-bold text-dark">Category</label><br>
                                <select name="item_condition" id="select" >
                                    <option value="" class="text-secondary">Choose one</option>
                                    @foreach($Category as $category)
                                        <option value="new">{{ $category->name }}</option>
                                    @endforeach
                                  
                                </select>                            
                        </div>
                        <div class="form-group mt-3">
                                <label for="" class="form-label fw-bold text-dark">Item Condition</label><br>
                                <select name="item_condition" id="select">
                                    <option value="" class="text-secondary">Choose one</option>
                                    @foreach($Item as $item)
                                        <option value="new">{{ $item->item_condition }}</option>
                                    @endforeach
                                </select>                            
                        </div>
                        <div class="form-group mt-3">
                                <label for="" class="form-label fw-bold text-dark">Type</label><br>
                                <select name="item_condition" id="select">
                                    <option value="" class="text-secondary">Choose one</option>
                                    @foreach($Item as $item)
                                        <option value="new">{{ $item->item_type }}</option>
                                    @endforeach
                                </select>                            
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Apply Filter</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container ">
                <div class="row">
                    <div class="col-md-3">
                            <div class="card" style="width: 11rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <a href="" class="fw-bold "><h6 >Item Name</h6></a>
                                   <h6 class="fw-bold text-primary">Price</h6>
                                   <h6>User Name</h6>
                                </div>
                            </div>
                    </div> 
                    <div class="col-md-3">
                            <div class="card" style="width: 11rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h6 class="fw-bold ">Item Name</h6>
                                   <h6 class="fw-bold text-primary">Price</h6>
                                   <h6>User Name</h6>
                                </div>
                            </div>
                    </div>  
                </div>      
            </div>
        </div>
    </div>
</div>

@endsection