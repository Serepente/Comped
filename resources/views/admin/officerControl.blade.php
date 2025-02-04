@extends('layouts.admin-dashboard')

@section('title', 'Officer Control Dashboard')
@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Officer Control</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">ADMIN ACCESS.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container my-5">
        <div class="row justify-content-center text-center g-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Event Management</h5>
                    </div>
                    <img src="{{ Vite::asset('resources/assets/images/eventcalendar.png') }}" class="card-img-top"
                        alt="Student Office">
                    <div class="card-body">
                        <p class="card-text">Manage Event.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Event Handler</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.officer.eventAttendance') }}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Event</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Borrowing Management</h5>
                    </div>
                    <img src="{{ Vite::asset('resources/assets/images/borrowlist.png') }}" class="card-img-top"
                        alt="User Access">
                    <div class="card-body">
                        <p class="card-text">View lists.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Borrower</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.officer.borrowersList') }}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">List</a>
                        <button type="button" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                            data-bs-toggle="modal" data-bs-target="#requestModal">Request</button>
                    </div>
                    <div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title fs-5" id="exampleModalLabel">User Borrowing Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form action="{{ route('admin.officer.requestBorrow') }}" method="POST">
                                            @csrf

                                            <div class="row">
                                                <input type="text" name="user_id" value="{{ Auth::user()->id }}" readonly style="display: none">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="borrowerName" class="form-label text-start d-block">Borrower Name</label>
                                                        <input type="text" class="form-control" id="borrowerName" name="borrower_name"
                                                            placeholder="Enter Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="adminIssuedBy" class="form-label text-start d-block">Issued By</label>
                                                        <input type="text" class="form-control" id="adminIssuedBy" name="admin_issued_name"
                                                            value="{{ Auth::user()->name }}" readonly>

                                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="rfid" class="form-label text-start d-block">Borrower RFID</label>
                                                        <input type="text" class="form-control" id="rfid" name="rfid"
                                                            placeholder="Enter RFID" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="borrowDate" class="form-label text-start d-block">Borrow Date</label>
                                                        <input type="date" class="form-control" id="borrowDate" name="date_issued"
                                                            value="{{ date('Y-m-d') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="returnDate" class="form-label text-start d-block">Return Date</label>
                                                        <input type="date" class="form-control" id="returnDate" name="return_date"
                                                            value="{{ date('Y-m-d') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <label class="form-label">Details of Borrowed Items</label>
                                                <table class="table table-bordered">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="borrowed_item" placeholder="Item Name" required></td>
                                                            <td><input type="number" class="form-control" name="quantity" placeholder="Quantity" required min="1"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="d-flex justify-content-between w-100 bg-light">
                                                    <button type="submit" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">
                                                        Accept
                                                    </button>
                                                    <button type="button" class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
