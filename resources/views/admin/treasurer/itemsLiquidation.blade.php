@extends('layouts.admin-dashboard')

@section('title', 'Liquidation Report Items')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">LIQUIDATION REPORT ITEMS</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">ADMIN ACCESS.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="mb-0"><i class="fas fa-file-invoice-dollar me-2"></i> Liquidation Details
                        </h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Liquidations -->
                            <div class="mb-3">
                                <label for="event" class="form-label">Event Name</label>
                                <input type="text" class="form-control" id="event" placeholder=" ">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date of Event</label>
                                <input type="text" class="form-control" id="date" placeholder=" ">
                            </div>
                            <hr class="mx-auto w-100 border-secondary"
                                style="border-top: 3px solid #6e6f72; margin: 15px 0;">
                            <!-- Officer Approve -->
                            <h5 class="text-center mt-4 mb-3">Add Itemized Expenses</h5>
                            <div class="mb-3">
                                <label class="form-label">Date Bought</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Receipt</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Itemized Expenses</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <button type="button"
                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2 w-100">Add
                                Report</button>
                        </form>
                    </div>
                    <div class="card-footer bg-light text-center text-muted">
                        <small>Ensure all liquidation records are verified.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="mb-0"><i class="fas fa-file-invoice me-2"></i> Liquidation Report</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Receipt</th>
                                        <th scope="col">Itemized Expenses</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10/25/25</td>
                                        <td>092847291</td>
                                        <td>Tools</td>
                                        <td>₱1,500</td>
                                    </tr>
                                    <tr>
                                        <td>10/25/25</td>
                                        <td>092847291</td>
                                        <td>Food</td>
                                        <td>₱800</td>
                                    </tr>
                                    <tr>
                                        <td>10/25/25</td>
                                        <td>092847291</td>
                                        <td>Tools</td>
                                        <td>₱1,500</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th colspan="3" class="text-end">Total:</th>
                                        <th>₱3,800</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light text-center text-muted">
                        <small>Verify receipts and expenses before approval.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
