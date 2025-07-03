<x-layout>
  <x-slot name="title">Login Admin Panel</x-slot>

      <x-slot name="bodycode">   
      <div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="login-box">
                <img src="image/main logos.jpeg" alt="Profile Image" class="profile-img">
                <h3>Admin Login</h3>
                <form action="/Super-Admin-Panel" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-custom btn-block w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </x-slot>
</x-layout>