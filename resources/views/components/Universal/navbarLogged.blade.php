<nav class="w-100 navbar navbar-expand-lg">
    <h6 class="text-light fw-bold ms-4 me-6 mb-0">Readery - Your Story Awaits Here</h5>
        <div id="buttonsContainer" class="mx-auto">
            <a href="/homeLogged" class="btn text-light mx-3">Home</a>
            <a class="btn text-light mx-3">Community</a>
            <a class="btn text-light mx-3">Profile</a>
            <a class="btn text-light mx-3">Challenges</a>
            <a href="/store" class="btn text-light mx-3">Store</a>
        </div>
    <a href="/cart" class="btn text-light mx-3">Cart</a>
    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Logout Button -->
    <a href="#" class="btn btn-light fw-bold rounded-pill me-2" 
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Log Out
    </a>
</nav>