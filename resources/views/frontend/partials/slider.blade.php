<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $key => $row)
            <div class="carousel-item @if($key + 1 == 1) active @endif">
                <img class="w-100" src="{{asset('backend/img/slider/'.$row -> image)}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">{{$row -> heading}}</h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">{{$row -> small_text}}</p>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">{{$row -> button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
