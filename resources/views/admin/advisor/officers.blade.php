@extends('layouts.admin-dashboard')

@section('title', 'Student Officers')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Student & Officers Management</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Choose your Officers.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container-fluid mt-5">
        <div class="card shadow border-0" id="officersCard">
            <!-- Header -->
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Official Officers
                    <i class="fas fa-plus-circle" style="cursor: pointer; color: #fff; font-size: 24px;"
                        id="toggleView"></i>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle w-100">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Possition</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($officers as $officer)
                                <tr>
                                    <td>{{ $officer->name }}</td>
                                    <td>{{ ucfirst($officer->possition) }}</td>
                                    <td>{{ $officer->year_level ?? 'N/A' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-success dropdown-toggle rounded-pill fw-bold border border-2 px-4 py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Promote
                                            </button>
                                            <ul class="dropdown-menu p-3 shadow-lg border-0"
                                                style="background-color: #28a745; min-width: 220px;">
                                                <li class="text-center text-white fw-bold mb-2">Select Promotion Level</li>
                                                <li>
                                                    <form action="{{ route('admin.advisor.promote', $officer->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="officer_id" value="{{ $officer->id }}">

                                                        <!-- Custom Styled Select -->
                                                        <select class="form-select mb-2 border-0 text-center fw-bold"
                                                            name="promotion_level"
                                                            style="background: #fff; color: #28a745; font-size: 16px;">
                                                            <option value="advisor">Advisor</option>
                                                            <option value="president">President</option>
                                                            <option value="vice-president">Vice President</option>
                                                            <option value="officer">Officer</option>
                                                            <option value="treasurer">Treasurer</option>
                                                            <option value="secretary">Secretary</option>
                                                        </select>

                                                        <!-- Custom Styled Button -->
                                                        <button type="submit" class="btn btn-light w-100 fw-bold"
                                                            style="background: #fff; color: #28a745; border: none;">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>


                                        <button class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                            data-bs-toggle="modal" data-bs-target="#evictModal{{ $officer->id }}">
                                            Demote
                                        </button>
                                    </td>
                                </tr>
                                {{-- <div class="modal fade" id="reElectModal{{ $officer->id }}" tabindex="-1"
                                    aria-labelledby="reElectModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="reElectModalLabel">Re-elect
                                                    {{ $officer->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to re-elect {{ $officer->name }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('admin.advisor.reElect', $officer->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="modal fade" id="evictModal{{ $officer->id }}" tabindex="-1"
                                    aria-labelledby="evictModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="evictModalLabel">Demote {{ $officer->name }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to demote {{ $officer->name }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('admin.advisor.evict', $officer->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- @if ($officers->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No admin users found.</td>
                                </tr>
                            @endif --}}
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all officer details are accurate and updated regularly.</small>
            </div>
        </div>
        <div class="card shadow border-0" id="addOfficerCard" style="display: none;">
            <!-- Header -->
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Student Management</h4>
                <i class="fa-solid fa-circle-xmark" style="cursor: pointer; font-size: 24px;" id="closeView"></i>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('admin.advisor.officers') }}" class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex flex-wrap align-items-center">
                            <input id="rfidInput" placeholder="RFID Search.." type="text" class="form-control"
                                name="rfid">
                        </div>
                        <select name="year_level" class="form-select w-auto ms-auto" onchange="this.form.submit()">
                            <option value="all" {{ request('year_level') == 'all' ? 'selected' : '' }}>All Year Levels
                            </option>
                            @foreach ($yearLevels as $year)
                                <option value="{{ $year }}"
                                    {{ request('year_level') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                        <a href="{{ route('admin.advisor.officers') }}" class="btn btn-outline-secondary mx-2">
                            Clear Filters
                        </a>
                    </div>
                </form>
                <div class="table-responsive" style="max-height: 400px; overflow-y: auto; border-radius: 8px;">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-primary text-center" style="position: sticky; top: 0; z-index: 10;">
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Student RFID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (request()->has('rfid') && request('rfid') != '' && $students->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No student found for RFID:
                                        {{ request('rfid') }}</td>
                                </tr>
                            @else
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->student_id_num ?? 'N/A' }}</td>
                                        <td>{{ $student->rfid ?? 'N/A' }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->year_level ?? 'N/A' }}</td>
                                        <td>
                                            <button class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#confirmAddStudent{{ $student->id }}">
                                                Add
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all officer details are accurate and updated regularly.</small>
            </div>
        </div>
    </div>
    @foreach ($students as $student)
        <div class="modal fade" id="confirmAddStudent{{ $student->id }}" tabindex="-1"
            aria-labelledby="confirmAddStudentLabel{{ $student->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmAddStudentLabel{{ $student->id }}">
                            Confirm Adding Student
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to add <strong>{{ $student->name }}</strong> as an
                        officer?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('admin.advisor.addStudent', $student->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var rfidInput = document.getElementById("rfidInput");

            // Auto-focus the RFID input field
            rfidInput.focus();

            // Auto-submit when RFID is scanned (pressing Enter)
            rfidInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    this.form.submit();
                }
            });
        });
    </script>


@endsection
