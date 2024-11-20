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
        <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center">
            <div class="col col-lg-9 col-xl-8">
                <div class="card">
                <div class="rounded-top text-white d-flex flex-row bg-dark" style="height:200px;">
                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                        alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; z-index: 1">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark text-body" data-mdb-ripple-color="dark" style="z-index: 1;">
                        Edit profile
                    </button>
                    </div>
                    <div class="ms-3" style="margin-top: 130px;">
                    <h5>Jason Smith</h5>
                    <p>New York</p>
                    </div>
                </div>
                <div class="p-4 text-black bg-body-tertiary">
                    <div class="d-flex justify-content-end text-center py-1 text-body">
                    <div>
                        <p class="mb-1 h5">253</p>
                        <p class="small text-muted mb-0">Photos</p>
                    </div>
                    <div class="px-3">
                        <p class="mb-1 h5">1026</p>
                        <p class="small text-muted mb-0">Followers</p>
                    </div>
                    <div>
                        <p class="mb-1 h5">478</p>
                        <p class="small text-muted mb-0">Following</p>
                    </div>
                    </div>
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5  text-body">
                    <p class="lead fw-normal mb-1">About</p>
                    <div class="p-4 bg-body-tertiary">
                        <p class="font-italic mb-1">Web Developer</p>
                        <p class="font-italic mb-1">Lives in New York</p>
                        <p class="font-italic mb-0">Photographer</p>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4 text-body">
                    <p class="lead fw-normal mb-0">Book Collection</p>
                    <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-2">
                            <img src="https://m.media-amazon.com/images/I/71GNqqXuN3L._SY522_.jpg" alt="image 1"
                            class="w-100 rounded-3">
                        </div>
                        <div class="col mb-2">
                            <img src="https://m.media-amazon.com/images/I/41AGmIw-4aL._SY445_SX342_.jpg" alt="image 1"
                            class="w-100 rounded-3">
                        </div>
                        <div class="col">
                            <img src="https://m.media-amazon.com/images/I/31MoMlpSY3L._SY445_SX342_.jpg" alt="image 1"
                            class="w-100 rounded-3">
                        </div>
                        <div class="col">
                            <img src="https://m.media-amazon.com/images/I/517K-PLywYL._SY445_SX342_.jpg" alt="image 1"
                            class="w-100 rounded-3">
                        </div>
                    </div>
                </div>
                </div>
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