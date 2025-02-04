@extends('layouts.admin-dashboard')

@section('title', 'Payment Lists')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Payment Lists</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">List of Payments.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>
    <div class="container-fluid my-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">Payment List
                    <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#addContributionModal"
                        style="cursor: pointer; color: #fff; font-size: 24px; margin-left: 10px;"></i>
                </h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Event</th>
                                <th scope="col">Date</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Amount Fee</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>PCB Seminar</td>
                                <td>2025-01-01</td>
                                <td>2025-01-01</td>
                                <td>PHP 100</td>
                                <td>
                                    <button class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#detailsModal"
                                        onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                        View
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all payments are recorded and verified.</small>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addContributionModal" tabindex="-1" aria-labelledby="addContributionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addContributionModalLabel">Add Contribution</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add
                                Contribution</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light text-center text-muted">
                    <small>Ensure the contribution details are correct before submitting.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="detailsModalLabel">Event Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <img src="assets/img/himamat.png" alt="Profile Image" class="square me-3"
                            style="width: 100px; height: 100px;">
                        <div>
                            <h5 id="userName">Event: </h5>
                            <p id="userId">Date: </p>
                            <p>Time: 9:00AM - 5:00PM</p>
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label for="feeType" class="form-label">Type of Fee</label>
                            <select id="feeType" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Tuition Fee</option>
                                <option value="2">Laboratory Fee</option>
                                <option value="3">Miscellaneous Fee</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="yearLevel" class="form-label">Year Level</label>
                            <select id="yearLevel" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Graduated</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <input type="text" id="searchBar" class="form-control"
                            placeholder="Search borrowed items...">
                    </div>

                    <h6>Details of Borrowed Items:</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Payment Method</th>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Year</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="listTable">
                            <tr>
                                <td>GCash</td>
                                <td>69</td>
                                <td>Conarco</td>
                                <td>4</td>
                                <td>Utangan</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end">
                        <button id="downloadButton"
                            class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Download</button>
                    </div>
                </div>
                <div class="modal-footer bg-light text-center text-muted">
                    <small> </small>
                </div>
            </div>
        </div>
    </div>
@endsection
