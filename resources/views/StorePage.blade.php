<x-Universal.headMetaData></x-Universal.headMetaData>

<body>
    <div class="container-fluid px-0 py-0 mx-0 my-0" style="background-image: url('{{ asset('images/mainThumbnail.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;"> 
        
        <!-- Navbar -->
        @if ($routeCond)
            <x-Universal.navbarLogged></x-Universal.navbarLogged>
        @else
            <x-Universal.navbar></x-Universal.navbar>
        @endif

        <!-- Content -->
        <div id="carouselExample" class="carousel slide my-4" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://upload.wikimedia.org/wikipedia/en/1/1c/Penguin_logo.svg" alt="...">
            </div>

            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://logos-download.com/wp-content/uploads/2016/06/Pearson_logo.png" alt="...">
            </div>

            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://www.kompasgramedia.com/assets/photo/2018/09/06/822036325.png" alt="...">
            </div>

            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://upload.wikimedia.org/wikipedia/commons/1/1f/Elex_Media_Komputindo_Logo.svg" alt="...">
            </div>

            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://seeklogo.com/images/M/mcgraw-hill-logo-96796A12FC-seeklogo.com.png" alt="...">
            </div>

            <div class="col-sm-2 d-flex">
                <img class="img-fluid mx-4" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Kodansha.png" alt="...">
            </div>
        </div>

        <section class="py-5">
            <div class="container px-1 px-lg-1 mt-5">
                <div class="bg-dark p-3 rounded-3">
                    <p class="text-light fs-1 mb-0">Recommended</p>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($items as $item)
                        <div class="col mb-2 mt-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/d/d5/Books_Books.JPG" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $item->bookName }}</h5>
                                        <!-- Product price-->
                                        {{'$'.$item->price}}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <form action="{{ route('details') }}" method="GET">
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <button class="btn btn-outline-dark mt-auto" type="submit">Details</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-dark p-3 rounded-3 mt-5">
                    <p class="text-light fs-1 mb-0">New Arrivals</p>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($bottomFour as $item)
                        <div class="col mb-2 mt-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/d/d5/Books_Books.JPG" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $item->bookName }}</h5>
                                        <!-- Product price-->
                                        {{'$'.$item->price}}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <form action="{{ route('details') }}" method="GET">
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <button class="btn btn-outline-dark mt-auto" type="submit">Details</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>