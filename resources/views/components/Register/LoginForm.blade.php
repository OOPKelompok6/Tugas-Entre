<form id="a-form" method="POST" action="/login" class="w-75 d-flex align-items-center row">
    @csrf
    <div class="mb-3">
        <label for="emailInput" class="form-label text-light">Email address</label>
        <input name="email" type="email" class="form-control bg-black text-light" id="emailInput" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="InputPassword" class="form-label text-light">Password</label>
        <input name="password" type="password" class="form-control bg-black text-light" id="InputPassword">
    </div>
</form>