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
            <!-- Header -->
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">User Access
                    <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#addContributionModal"
                        style="cursor: pointer; color: #fff; font-size: 24px; margin-left: 10px;"></i>
                </h4>
            </div>

            <!-- Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle w-100">
                        <!-- Table Header -->
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Access Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody class="text-center">
                            <tr>
                                <td>Jeriebel Calunsag</td>
                                <td>
                                    <i class="fas fa-check-circle" style="color: green;"></i>
                                </td>
                                <td>
                                    <button class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#detailsModal"
                                        onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                        Revoke Access
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Conarco Bayot</td>
                                <td>
                                    <i class="fas fa-times-circle" style="color: red;"></i>
                                </td>
                                <td>
                                    <button class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#detailsModal"
                                        onclick="loadUserDetails('Conarco Bayot', '123-2343-213')">
                                        Grant Access
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



    <!-- Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="detailsModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <img src="assets/img/profile.jpg" alt="Profile Image" class="rounded-circle me-3"
                            style="width: 100px; height: 100px;">
                        <div>
                            <h5 id="userName">Name: <span class="fw-bold">Jeriebe Calunsag</span></h5>
                            <p id="userId">Student ID: <span class="fw-bold">123-456-789</span></p>
                            <p>Date Added: <span class="fw-bold">01/10/25</span></p>
                            <p>Status: <span class="fw-bold text-success">Admin</span></p>
                            <p>Year Level: <span class="fw-bold">4th Year</span></p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Revoke
                        Access</button>
                </div>
            </div>
        </div>
    </div>
@endsection
