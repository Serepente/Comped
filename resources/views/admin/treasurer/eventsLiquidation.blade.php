@extends('layouts.admin-dashboard')

@section('title', 'Liquidation Report Event')

@section('admin-content')

    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">LIQUIDATION REPORT EVENT</span>
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
                        <h5 class="mb-0"><i class="fas fa-coins me-2"></i> Liquidation Details</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="payment" class="form-label">Amount Student Contribution</label>
                                <input type="text" class="form-control" id="payment" placeholder="₱0.00">
                            </div>
                            <div class="mb-3">
                                <label for="expenses" class="form-label">Total Expenses</label>
                                <input type="text" class="form-control" id="expenses" placeholder="₱0.00">
                            </div>
                            <div class="mb-3">
                                <label for="money" class="form-label">Remaining Money</label>
                                <input type="text" class="form-control" id="money" placeholder="₱0.00">
                            </div>
                            <div class="mb-3">
                                <label for="remit" class="form-label">Remitted to Treasurer</label>
                                <input type="text" class="form-control" id="remit" placeholder="₱0.00">
                            </div>
                            <div class="mb-3">
                                <label for="cash" class="form-label">Cash on Hand</label>
                                <input type="text" class="form-control" id="cash" placeholder="₱0.00">
                            </div>

                            <hr class="mx-auto w-100 border-secondary"
                                style="border-top: 3px solid #6e6f72; margin: 15px 0;">

                            <h5 class="text-center mt-4 mb-3">Officer Approval</h5>
                            <div class="mb-3">
                                <label class="form-label">Treasurer</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Auditor</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">President</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Organization Adviser</label>
                                <input type="text" class="form-control" placeholder=" " readonly>
                            </div>

                            <button type="button"
                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2 w-100 fw-bold">
                                <i class="fas fa-file-export me-1"></i> Export Liquidation
                            </button>
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
                        <h5 class="mb-0"><i class="fas fa-file-invoice-dollar me-2"></i> Liquidation Report</h5>
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
