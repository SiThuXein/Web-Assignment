@extends("layouts.master")
@section("title","Dashboard")
@section("content")

<div class="container-fluid dashboard">
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
                        <h6 class="mt-3 text-primary">Itemlist</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-end">
                        <a href="/admin/dashboard/add"><button class="btn btn-primary">+ Add Items</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <h6 class="text-center mt-1">Show :</h6>
                    </div>
                    <div class="col-md-1">
                        
                        <form action="/admin/dashboard/filter" method="get">
                            @csrf
                            <select name="rows" id="" >
                                <option value="">10 rows</option>
                                <option  value="15">15 rows</option>
                            </select>
                        </form>
                
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 mt-3 mb-4">
                        <table class="table">
                            <tr class="bg-primary text-white">
                                <th>Action</th>
                                <th>No</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Owner</th>
                                <th>Publish</th>
                            </tr>
                                @foreach($Item as $item)
                                <tr>
                                    <td>
                                        <a href="/admin/dashboard/edit/{{ $item->id }}"><i class="fa-solid fa-pen-to-square text-success fs-6"></i></a>
                                        <a href="/admin/dashboard/delete/{{ $item->id }}"><i class="fa-solid fa-trash text-danger fs-6"></i></a>
                                    </td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->owner }}</td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                            
                        </table>
                        {{ $Item->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection