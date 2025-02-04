@extends('layouts.admin-dashboard')

@section('title', 'Payment Center')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Student Payment
                Center</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Pay Contributions.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <!-- First Column: User Details and Payment Info -->
            <div class="col-lg-6">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="mb-0">User Details</h5>
                    </div>

                    <div class="card-body">
                        <form>
                            <!-- User Details -->
                            <div class="mb-3">
                                <label for="userName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="userName" placeholder="Enter full name">
                            </div>
                            <div class="mb-3">
                                <label for="yearLevel" class="form-label">Year Level</label>
                                <select class="form-select" id="yearLevel">
                                    <option value="" disabled selected>Year Level</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                    <option value="5th Year">5th Year</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="idNumber" class="form-label">ID Number</label>
                                <input type="text" class="form-control" id="idNumber" placeholder="Enter ID number">
                            </div>

                            <!-- Payment Information -->
                            <h5 class="card-title mt-4 mb-3 text-center">Payment Information</h5>
                            <div class="mb-3">
                                <label for="totalAmount" class="form-label">Total</label>
                                <input type="number" class="form-control" id="totalAmount" placeholder="₱0.00" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="cash" class="form-label">Cash</label>
                                <input type="number" class="form-control" id="cash" placeholder="Enter cash amount">
                            </div>
                            <div class="mb-3">
                                <label for="change" class="form-label">Change</label>
                                <input type="number" class="form-control" id="change" placeholder="₱0.00" readonly>
                            </div>

                            <!-- Pay Fee Button -->
                            <button type="button"
                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2 w-100">Paid</button>
                        </form>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer bg-light text-center text-muted">
                        <small>Ensure all payment details are correct before submitting.</small>
                    </div>
                </div>
            </div>

            <!-- Second Column: Event Table -->
            <div class="col-lg-6">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="mb-0">Event Fee</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Event</th>
                                        <th scope="col">Type of Fee</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Enrollment</td>
                                        <td>Registration</td>
                                        <td>₱1,500</td>
                                    </tr>
                                    <tr>
                                        <td>UB Days</td>
                                        <td>Contribution</td>
                                        <td>₱800</td>
                                    </tr>
                                    <tr>
                                        <td>Graduation Fee</td>
                                        <td>Contribution</td>
                                        <td>₱1,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer bg-light text-center text-muted">
                        <small>Ensure all event fees are cleared for a smooth transaction.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
