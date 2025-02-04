@extends('layouts.admin-dashboard')

@section('title', 'Contribution Mangement')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Contribution Management</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Organize Contributions.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container-fluid mt-5">
        <!-- Changed to container-fluid -->
        <div class="card shadow border-0">
            <!-- Header -->
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">
                    Contribution Management
                    <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#addContributionModal"
                        style="cursor: pointer; color: #fff; font-size: 24px; margin-left: 10px;"></i>
                </h5>
            </div>

            <!-- Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle w-100">
                        <!-- Added w-100 -->
                        <!-- Table Header -->
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Event</th>
                                <th scope="col">Date</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Amount Fee</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody class="text-center">
                            <tr>
                                <td>PCB Seminar</td>
                                <td>2025-01-01</td>
                                <td>2025-01-01</td>
                                <td>PHP 100</td>
                                <td>
                                    <button class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#addContributionModal"
                                        onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                        Update
                                    </button>
                                    <button class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#"
                                        onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all contributions are properly updated and managed.</small>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addContributionModal" tabindex="-1" aria-labelledby="addContributionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white text-center">
                    <h5 class="modal-title" id="addContributionModalLabel">Add Contribution</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="eventName" placeholder="Enter Event Name">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod" class="form-label">Payment Method</label>
                            <select id="paymentMethod" class="form-select">
                                <option value="gcash">GCash</option>
                                <option value="bank">Bank Transfer</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="paymentDate" class="form-label">Payment Date</label>
                            <input type="date" class="form-control" id="paymentDate">
                        </div>
                        <div class="mb-3">
                            <label for="deadlineDate" class="form-label">Deadline Date</label>
                            <input type="date" class="form-control" id="deadlineDate">
                        </div>
                        <div class="text-end">
                            <button type="submit"
                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add/Update
                                Contribution</button>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light text-center text-muted">
                    <small>Ensure all contributions are properly updated and recorded.</small>
                </div>
            </div>
        </div>
    </div>
@endsection
