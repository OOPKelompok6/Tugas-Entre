<form id="a-form" method="POST" class="w-75 d-flex align-items-center row">
    @csrf
    <div class="mb-3 row">
        <div class="col-6">
            <label for="firstInput" class="form-label text-light">First Name</label>
            <input name="firstName" type="text" class="form-control bg-black w-100 text-light" id="firstInput" aria-describedby="firstHelp">
        </div>

        <div class="col-6">
            <label for="lastInput" class="form-label text-light">Last Name</label>
            <input name="lastName" type="text" class="form-control bg-black w-100 text-light" id="lastInput" aria-describedby="lastHelp">
        </div>
    </div>

    <div class="mb-3">
        <label for="emailInput" class="form-label text-light">Email address</label>
        <input name="email" type="email" class="form-control bg-black text-light" id="emailInput" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="InputPassword" class="form-label text-light">Password</label>
        <input name="password" type="password" class="form-control bg-black text-light" id="InputPassword">
    </div>
</form>