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
        @foreach ($items as $item)
            <div class="card my-4 mx-auto" style="max-width: 50%;">
                <div class="row g-0">
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->book->bookName }}</h5>
                        <p class="card-text">{{ "Author: ".$item->book->bookAuthor }}</p>
                        <p class="card-text">{{ "Publisher: ".$item->book->publisher }}</p>
                        <p class="card-text fw-semibold">{{ "ISBN: ".$item->book->ISBN }}</p>
                        <p class="card-text"><small class="text-muted">{{ "$".$item->book->price }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ "Quantity: ".$item->quantity }}</small></p>

                        <form action="{{ route('cart.removeItem') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->book->id }}">
                            <button class="btn btn-outline-dark mt-3" type="submit">Remove</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h5 class="text-center text-light">{{ "Total: $".$totalPrice }}</h5>
        <form class="d-flex justify-content-center" action="{{ route('cart.checkout') }}" method="POST">
            @csrf
            <button class="mx-auto btn btn-light my-3" type="submit">Checkout</button>
        </form>

        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>