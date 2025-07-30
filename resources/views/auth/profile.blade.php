 @extends('layout.dashboard.dashboard-layout')

 @section('content')













<div class="">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

          

          <h5 class="mb-0">Profile Information</h5>
          <!-- Edit Button -->
          <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">
            Edit Profile
          </button>
        </div>
        <div class="card-body">
          <!-- Success Message -->
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <form>
            <div class="row g-3">
              <!-- Name -->
              <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
              </div>
              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
              </div>
            </div>

            <div class="row g-3 mt-3">
              <!-- Password -->
              <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" value="********" disabled>
              </div>
              <!-- Confirm Password -->
              <div class="col-md-6">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" value="********" disabled>
              </div>
            </div>

            <div class="mt-4 text-end">
              <a href="/home" class="btn btn-secondary btn-sm">Go Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content shadow">

      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="{{ route('profile.update') }}" method="POST">
          @csrf
          @method('PUT')

          <div class="row g-3">
            <!-- Name -->
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', auth()->user()->name) }}" required>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email', auth()->user()->email) }}" required>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row g-3 mt-3">
            <!-- New Password -->
            <div class="col-md-6">
              <label class="form-label">New Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter new password">
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password">
            </div>
          </div>

          <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-success">Save Changes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>





 @endsection