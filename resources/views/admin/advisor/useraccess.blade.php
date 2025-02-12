@extends('layouts.admin-dashboard')

@section('title', 'User Access')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">User Access</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Add more Users.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container-fluid mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">User Access
                    <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#addContributionModal"
                        style="cursor: pointer; color: #fff; font-size: 24px; margin-left: 10px;"></i>
                </h4>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('admin.advisor.useraccess') }}" class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex flex-wrap align-items-center">
                            <input id="rfidInput" placeholder="RFID Search.." type="text" class="form-control"
                                name="rfid">
                        </div>
                        <select name="year_level" class="form-select w-auto ms-auto" onchange="this.form.submit()">
                            <option value="all" {{ request('year_level') == 'all' ? 'selected' : '' }}>All Year Levels
                            </option>
                            @foreach ($yearLevels as $year)
                                <option value="{{ $year }}" {{ request('year_level') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                        <a href="{{ route('admin.advisor.useraccess') }}" class="btn btn-outline-secondary mx-2">
                            Clear Filters
                        </a>
                    </div>
                </form>
                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                    <table class="table table-striped align-middle w-100">
                        <thead class="table-primary text-center" style="position: sticky; top: 0; z-index: 10;">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">ID Number</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Role</th>
                                <th scope="col">Access Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (request()->has('rfid') && request('rfid') != '' && $users_query->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center text-muted">
                                        No student found for RFID: {{ request('rfid') }}
                                    </td>
                                </tr>
                            @elseif(request()->has('rfid') || request()->has('year_level'))
                                @foreach ($users_query as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->student_id_num }}</td>
                                        <td>{{ $user->year_level }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            @if ($user->access_status == 'granted')
                                                <i class="fas fa-check-circle" style="color: green;" title="Granted"></i>
                                            @elseif ($user->access_status == 'pending')
                                                <i class="fas fa-hourglass-half" style="color: orange;" title="Pending"></i>
                                            @elseif ($user->access_status == 'revoked')
                                                <i class="fas fa-times-circle" style="color: red;" title="Revoked"></i>
                                            @else
                                                <i class="fas fa-question-circle" style="color: gray;"
                                                    title="Unknown Status"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning rounded-pill fw-bold border border-2 px-4 py-2"
                                                data-bs-toggle="modal" data-bs-target="#detailsModal{{ $user->id }}">
                                                Revoke Access
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->student_id_num }}</td>
                                        <td>{{ $user->year_level }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            @if ($user->access_status == 'granted')
                                                <i class="fas fa-check-circle" style="color: green;" title="Granted"></i>
                                            @elseif ($user->access_status == 'pending')
                                                <i class="fas fa-hourglass-half" style="color: orange;" title="Pending"></i>
                                            @elseif ($user->access_status == 'revoked')
                                                <i class="fas fa-times-circle" style="color: red;" title="Revoked"></i>
                                            @else
                                                <i class="fas fa-question-circle" style="color: gray;"
                                                    title="Unknown Status"></i>
                                            @endif
                                        </td>

                                        <td>
                                            <button class="btn btn-info rounded-pill fw-bold border border-2 px-4 py-2"
                                                data-bs-toggle="modal" data-bs-target="#detailsModal{{ $user->id }}">
                                                Update Access
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all access rights are managed properly.</small>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addContributionModal" tabindex="-1" aria-labelledby="addContributionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addContributionModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Contribution Form -->
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter User Name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="studentId" class="form-label">Student ID</label>
                            <input type="number" class="form-control" id="studentId" placeholder="Enter Student ID"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="yearLevel" class="form-label">Year Level</label>
                            <select id="yearLevel" class="form-select" required>
                                <option value="" disabled selected>Select Year Level</option>
                                <option value="1stYear">1st Year</option>
                                <option value="2ndYear">2nd Year</option>
                                <option value="3rdYear">3rd Year</option>
                                <option value="4thYear">4th Year</option>
                            </select>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer with Action Buttons -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add
                        User</button>
                </div>
            </div>
        </div>
    </div>
    @foreach ($users as $user)
        <div class="modal fade" id="detailsModal{{ $user->id }}" tabindex="-1" aria-labelledby="detailsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="detailsModalLabel">User Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body text-center"> <!-- Center content inside -->
                            <div class="d-flex flex-column align-items-center mb-3">
                                <img src="{{ Vite::asset($user->profile_pic) }}" alt="Profile Image"
                                    class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>

                            <form action="{{ route('admin.advisor.updateUserAccess', $user->id) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">User Fullname</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $user->name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">User Email</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $user->email }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">User ID Number</label>
                                            <input type="text" class="form-control"
                                                value="{{ $user->student_id_num }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">USER RFID</label>
                                            <input type="text" class="form-control" name="rfid"
                                                value="{{ $user->rfid }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Year Level</label>
                                            <input type="text" class="form-control" value="{{ $user->year_level }}"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Date & Time Created</label>
                                            <input type="text" class="form-control" value="{{ $user->created_at }}"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">User Role</label>
                                            <input type="text" class="form-control" value="{{ $user->role }}"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Access Status</label>
                                            <select class="form-select" name="access_status" required>
                                                <option value="pending"
                                                    {{ $user->access_status == 'pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="granted"
                                                    {{ $user->access_status == 'granted' ? 'selected' : '' }}>
                                                    Granted</option>
                                                <option value="revoked"
                                                    {{ $user->access_status == 'revoked' ? 'selected' : '' }}>
                                                    Revoke</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
