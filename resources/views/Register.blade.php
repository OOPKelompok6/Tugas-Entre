<x-Universal.headMetaData></x-Universal.headMetaData>
<body>
    <div class="container-fluid px-0 py-0 mx-0 my-0" style="background-image: url('{{ asset('images/aurora.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;"> 
        
        <!-- Navbar -->
        <x-Universal.navbar></x-Universal.navbar>

        <!-- Content -->
        <div class="container-fluid mx-0 my-0">
            <div class="w-50 h-50 bg-black mx-auto my-5 d-flex justify-content-center align-items-center row rounded-4">
                
                <!-- Main Buttons -->
                <div class="w-75 row mt-5 mb-4">
                    <a href="/register" class="btn bg-light me-0 w-50 rounded-start-1 rounded-end-0 {{ $mainOpacR }}">Register</a>
                    <a href="/login" class="btn bg-light ms-n1 w-50 rounded-end-1 rounded-start-0  {{ $mainOpacL }}">Log In</a>
                </div>

                <h5 class="my-0 py-0 text-light text-center mt-1 mb-4">{{ $bannerCond }}</h5>

                <div class="d-flex mt-1 mb-2 justify-content-center align-items-center">
                    <a href="#" class="btn bg-black me-0 w-50 rounded-4 text-light border border-light">
                        {{ $logOrReg . "with Facebook" }}
                    </a>
                </div>

                <div class="d-flex mt-2 mb-1 justify-content-center align-items-center">
                    <a href="#" class="btn bg-black me-0 w-50 rounded-4 text-light border border-light">
                        {{ $logOrReg . "with Google" }}
                    </a>
                </div>

                <div class="d-flex mx-auto justify-content-center align-items-center my-4">
                    <p class="text-light">OR</p>
                </div>

                @if ($routeCond)
                    <x-Register.LoginForm></x-Register.LoginForm>
                @else
                    <x-Register.RegisterForm></x-Register.RegisterForm>
                @endif

                <button type="submit" form="a-form" class="btn bg-light my-4 w-50 rounded-4">{{ $bannerCond }}</button>

            </div>
        </div>

        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>