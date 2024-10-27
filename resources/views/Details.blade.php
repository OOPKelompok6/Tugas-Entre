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
        <div class="card my-4 mx-auto" style="max-width: 75%;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="https://shadycharacters.co.uk/wp/wp-content/uploads/2016/12/Book_IMG_1754-1-e1481474081467.jpg" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->bookName }}</h5>
                    <p class="card-text">{{ $book->description }}</p>
                    <p class="card-text">{{ "Author: ".$book->bookAuthor }}</p>
                    <p class="card-text">{{ "Publisher: ".$book->publisher }}</p>
                    <p class="card-text fw-semibold">{{ "ISBN: ".$book->ISBN }}</p>
                    <p class="card-text"><small class="text-muted">{{ "$".$book->price }}</small></p>
                    <form id="theForm" action="{{ route('detailsAdd') }}" method="POST">
                        @csrf
                        <label for="inputQuant" class="form-label">Quantity: </label>
                        <input name="quant" type="number" min="1" max="100" class="form-control-outline-dark" id="inputQuant">
                        <input type="hidden" name="item_id" value="{{ $book->id }}">
                    </form>
                    <button form="theForm" class="btn btn-outline-dark mt-3" type="submit">Add to cart</button>
                </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>