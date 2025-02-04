@extends('layouts.admin-dashboard')

@section('title', 'Borrowers List Dashboard')
@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">List Of Borrowers</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">View Lists of Borrowers.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container-fluid mt-5">
        <div class="card shadow border-0">
            <!-- Header -->
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Borrowed and Returned Items History</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle w-100">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Borrower Name</th>
                                <th scope="col">Borrower RFID</th>
                                <th scope="col">Item</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Issued by</th>
                                <th scope="col">Date Issued</th>
                                <th scope="col">Return Date</th>
                                <th scope="col">Borrow Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($borrowedItems as $borrow)
                                <tr>
                                    <td>{{ $borrow->borrower_name }}</td>
                                    <td>{{ $borrow->borrower_rfid ?? 'Not Registered' }}</td>
                                    <td>{{ $borrow->borrowed_item }}</td>
                                    <td>{{ $borrow->quantity }}</td>
                                    <td>{{ $borrow->user_name ?? 'N/A' }}</td>
                                    <td>{{ $borrow->date_issued }}</td>
                                    <td>{{ $borrow->return_date }}</td>
                                    <td>
                                        @if ($borrow->status == 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($borrow->status == 'approved')
                                            <span class="badge bg-success">Approved</span>
                                        @elseif($borrow->status == 'returned')
                                            <span class="badge bg-info">Returned</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($borrow->status) }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-warning rounded-pill fw-bold px-3 py-1"
                                            data-bs-toggle="modal" data-bs-target="#editBorrowModal{{ $borrow->id }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.officer.deleteBorrow', $borrow->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger rounded-pill fw-bold px-3 py-1"
                                                onclick="return confirm('Are you sure you want to delete this record?');">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade" id="editBorrowModal{{ $borrow->id }}" tabindex="-1"
                                    aria-labelledby="editBorrowModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editBorrowModalLabel">Edit Borrow Record</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form action="{{ route('admin.officer.updateBorrow', $borrow->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Borrower Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="borrower_name"
                                                                        value="{{ $borrow->borrower_name }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Issued By</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $borrow->user_name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Borrower RFID</label>
                                                                    <input type="text" class="form-control"
                                                                        name="borrower_rfid"
                                                                        value="{{ $borrow->borrower_rfid }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Date Issued</label>
                                                                    <input type="date" class="form-control"
                                                                        name="date_issued"
                                                                        value="{{ $borrow->date_issued }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Status</label>
                                                                    <select class="form-select" name="status" required>
                                                                        <option value="pending"
                                                                            {{ $borrow->status == 'pending' ? 'selected' : '' }}>
                                                                            Pending</option>
                                                                        <option value="approved"
                                                                            {{ $borrow->status == 'approved' ? 'selected' : '' }}>
                                                                            Approved</option>
                                                                        <option value="returned"
                                                                            {{ $borrow->status == 'returned' ? 'selected' : '' }}>
                                                                            Returned</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Return Date</label>
                                                                    <input type="date" class="form-control"
                                                                        name="return_date"
                                                                        value="{{ $borrow->return_date }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row my-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label">Borrowed Item</label>
                                                                <input type="text" class="form-control"
                                                                    name="borrowed_item"
                                                                    value="{{ $borrow->borrowed_item }}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label">Quantity</label>
                                                                <input type="text" class="form-control"
                                                                    name="quantity"
                                                                    value="{{ $borrow->quantity }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save
                                                                Changes</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @if ($borrowedItems->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center text-muted">No borrowed items found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all borrow and return details are updated.</small>
            </div>
        </div>
    </div>

@endsection
