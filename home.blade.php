@extends("layouts.master")
@section("title","Home")

@section("content")

<div class="container-fluid home">
    <div class="row">
        <div class="col-md-12 bg-info">
            <img src="" alt="" width="100%" height="200px">
          
        </div>
        <div class="col-md-5 div-1">
            <form action="">
                <input type="text" class="form-control">
                <button type="button" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5" id="home">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h6 class="fs-6 fw-bold">What are you looking for ? </h6>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div id="div-1">
                               <img src="" alt="">
                               <a href="/category" class="text-dark fw-bold"><h6><i class="fa-solid fa-laptop"></i></h6></a>
                               <a href="/category" class="text-dark fw-bold"><h6>Computer</h6></a></h6></a>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h6 class="fs-6 fw-bold">Recent Items </h6>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="card" style="width: 11rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="/detail" class="fw-bold text-dark"><h6 >Item Name</h6></a>
                                   <a href="/detail" class="fw-bold text-primary"><h6 >Price</h6></a>
                                   <h6>User Name</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
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
            <div class="col-md-2"></div>
        </div>

</div>

@endsection