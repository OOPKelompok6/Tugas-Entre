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
        <div id="carouselExample" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              
                <div class="carousel-item active">
                    <div class="card mx-auto col-8" style="background-image: url('https://teachlikeachampion.org/wp-content/uploads/Of-Mice-and-Men-cover-art-660x350.jpg'); background-size: cover; background-position: center; min-height: 100%;">
                        <p class="ms-3 mt-3 fs-3 text-light">Two Men. One Dream. Two Worlds.</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="mb-0 ms-3 fw-light text-light">Retraced the journey of</p>
                        <p class="my-0 ms-3 fw-light text-light">two men in the great depression era</p>
                        <p class="mt-0 ms-3 fw-light text-light">in the form of classic new print</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="ms-3 mb-1 fs-4 text-decoration-underline fw-light text-light">See more</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto col-8" style="background-image: url('https://i.imgur.com/71ugFOa.png'); background-size: cover; background-position: center; min-height: 100%;">
                        <p class="ms-3 mt-3 fs-3">Perfect Society, A Lost Foundation</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="mb-0 ms-3 fw-light">Travel through a perfect society</p>
                        <p class="my-0 ms-3 fw-light">and rediscover what was lost</p>
                        <p class="mt-0 ms-3 fw-light">in this timeless classic</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="ms-3 mb-1 fs-4 text-decoration-underline fw-light">See more</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto col-8" style="background-image: url('https://i.imgur.com/pK7dkso.jpeg'); background-size: cover; background-position: center; min-height: 100%;">
                        <p class="ms-3 mt-3 fs-3 text-light">A Man and His Dog</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="mb-0 ms-3 fw-light text-light">Lighthearted comedy.</p>
                        <p class="my-0 ms-3 fw-light text-light">plenty of lumber tools,</p>
                        <p class="mt-0 ms-3 fw-light text-light">plenty of things to cut down,</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="ms-3 mb-1 fs-4 text-decoration-underline fw-light text-light">See more</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto col-8" style="background-image: url('{{ asset('images/dune.png') }}'); background-size: cover; background-position: center; min-height: 100%;">
                        <p class="ms-3 mt-3 fs-3 text-light">A Dream of Power. A Prophecy Unfolds.</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="mb-0 ms-3 fw-light">Follow the journey of</p>
                        <p class="my-0 ms-3 fw-light">Paul Atraides as he fullfills</p>
                        <p class="mt-0 ms-3 fw-light">long chain of prophecy</p>

                        <p style="visibility:hidden;">AA</p>
                        <p style="visibility:hidden;">AA</p>

                        <p class="ms-3 mb-1 fs-4 text-decoration-underline fw-light text-light">See more</p>
                    </div>
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

        <div class="col mt-5 mb-3 d-flex justify-content-center">
            <div class="text-light fs-5 text-center mx-5 opacity-75">All</div>
            <div class="text-light fs-5 text-center mx-5 opacity-75">New</div>
            <div class="text-light fs-5 text-center mx-5 text-decoration-underline">Recommended</div>
            <div class="text-light fs-5 text-center mx-5 opacity-75">Best Sellers</div>
            <div class="text-light fs-5 text-center mx-5 opacity-75">On Sale</div>
        </div>

        <div id="carouselExample2" class="carousel slide mt-5 mb-0" data-bs-ride="carousel">
            <div class="carousel-inner"> 
                <div class="carousel-item active">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 w-75 mx-auto justify-content-center align-items-center">
                        @for ($i = 0; $i < 4; $i++)
                        <div class="col mb-2 mt-5">
                            <div class="card h-100" style="background-color:transparent; --bs-border-color-translucent: rgba(0, 0, 0, 0.0);">
                                <!-- Product image-->
                                <img class="card-img-top rounded-2" src="{{ asset("images/covers/". ((string) rand(1, 13)) . ".jpg") }}" alt="...">
                                <!-- Product details-->
                                <div class="card-body my-2 px-0">
                                    <div class="row"> 
                                        <div class="text-center rounded-2 bg-dark text-light">
                                            <h5 class="fs-6 fw-light my-auto">{{ $items[$i]->bookName }}</h5>
                                        </div>

                                        <div class="col d-flex rounded-2 bg-dark text-light my-3">
                                            <div class="my-auto">
                                                <h5 class="fs-6 fw-light my-auto">{{'$'.$items[$i]->price}}</h5>
                                            </div>

                                            <div class="my-1 text-end ms-auto">
                                                <form action="{{ route('details') }}" method="GET">
                                                    <input type="hidden" name="item_id" value="{{ $items[$i]->id }}">
                                                    <button class="btn btn-light mt-auto text-dark my-0 mx-0 btn-sm" type="submit">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 w-75 mx-auto justify-content-center align-items-center">
                        @for ($i = 4; $i < 8; $i++)
                        <div class="col mb-2 mt-5">
                            <div class="card h-100" style="background-color:transparent; --bs-border-color-translucent: rgba(0, 0, 0, 0.0);">
                                <!-- Product image-->
                                <img class="card-img-top rounded-2" src="{{ asset("images/covers/". ((string) rand(1, 13)) . ".jpg") }}" alt="...">
                                <!-- Product details-->
                                <div class="card-body my-2 px-0">
                                    <div class="row"> 
                                        <div class="text-center rounded-2 bg-dark text-light">
                                            <h5 class="fs-6 fw-light my-auto">{{ $items[$i]->bookName }}</h5>
                                        </div>

                                        <div class="col d-flex rounded-2 bg-dark text-light my-3">
                                            <div class="my-auto">
                                                <h5 class="fs-6 fw-light my-auto">{{'$'.$items[$i]->price}}</h5>
                                            </div>

                                            <div class="my-1 text-end ms-auto">
                                                <form action="{{ route('details') }}" method="GET">
                                                    <input type="hidden" name="item_id" value="{{ $items[$i]->id }}">
                                                    <button class="btn btn-light mt-auto text-dark my-0 mx-0 btn-sm" type="submit">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 w-75 mx-auto justify-content-center align-items-center">
                        @for ($i = 8; $i < 12; $i++)
                        <div class="col mb-2 mt-5">
                            <div class="card h-100" style="background-color:transparent; --bs-border-color-translucent: rgba(0, 0, 0, 0.0);">
                                <!-- Product image-->
                                <img class="card-img-top rounded-2" src="{{ asset("images/covers/". ((string) rand(1, 13)) . ".jpg") }}" alt="...">
                                <!-- Product details-->
                                <div class="card-body my-2 px-0">
                                    <div class="row"> 
                                        <div class="text-center rounded-2 bg-dark text-light">
                                            <h5 class="fs-6 fw-light my-auto">{{ $items[$i]->bookName }}</h5>
                                        </div>

                                        <div class="col d-flex rounded-2 bg-dark text-light my-3">
                                            <div class="my-auto">
                                                <h5 class="fs-6 fw-light my-auto">{{'$'.$items[$i]->price}}</h5>
                                            </div>

                                            <div class="my-1 text-end ms-auto">
                                                <form action="{{ route('details') }}" method="GET">
                                                    <input type="hidden" name="item_id" value="{{ $items[$i]->id }}">
                                                    <button class="btn btn-light mt-auto text-dark my-0 mx-0 btn-sm" type="submit">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container-fluid mt-0 mb-5">
            <div class="row">
                <div class="fs-2 text-light text-center my-5">Our Partners</div>
            </div>
            <div class="row justify-content-center align-items-center text-center">
                <!-- Partner Logos -->
                <div class="col-2">
                    <img class="img-fluid w-25" src="https://upload.wikimedia.org/wikipedia/en/1/1c/Penguin_logo.svg" alt="Penguin">
                </div>
                <div class="col-2">
                    <img class="img-fluid w-75" src="https://logos-download.com/wp-content/uploads/2016/06/Pearson_logo.png" alt="Pearson">
                </div>
                <div class="col-2">
                    <img class="img-fluid w-75" src="https://www.kompasgramedia.com/assets/photo/2018/09/06/822036325.png" alt="Kompas">
                </div>
                <div class="col-2">
                    <img class="img-fluid w-50" src="https://upload.wikimedia.org/wikipedia/commons/1/1f/Elex_Media_Komputindo_Logo.svg" alt="Elex Media">
                </div>
                <div class="col-2">
                    <img class="img-fluid w-25" src="https://seeklogo.com/images/M/mcgraw-hill-logo-96796A12FC-seeklogo.com.png" alt="McGraw-Hill">
                </div>
                <div class="col-2">
                    <img class="img-fluid w-50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Kodansha.png" alt="Kodansha">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>