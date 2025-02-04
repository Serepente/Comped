<div class="user-info dropdown">
    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ Vite::asset(Auth::user()->profile_pic) }}" alt="Profile Image" class="rounded-circle" width="50" height="50">
        <div class="ms-2">
            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
            <p class="mb-0 text-muted">{{ Auth::user()->status }}</p>
        </div>
    </a>

    <!-- Dropdown Menu -->
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item text-danger">Logout</button>
            </form>
        </li>
    </ul>
</div>
