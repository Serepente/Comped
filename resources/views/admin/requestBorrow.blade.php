@extends('layouts.admin-dashboard')

@section('title', 'Request Borrow')
@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Borrow Request</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Borrow Tools and Equipments.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container my-4">
        <div class="d-flex justify-content-center">
          <div class="row justify-content-center g-4 w-100">
            <!-- Borrowing Form Section -->
            <div class="col-md-6">
              <div class="card shadow border-0">
                <!-- Header -->
                <div class="card-header text-center bg-primary text-white">
                  <h5>User Borrowing Details</h5>
                </div>
                <!-- Body -->
                <div class="card-body">
                  <div class="text-center mb-4">
                    <label for="profileImage" class="form-label d-block">Profile Image</label>
                    <img id="profileImageDisplay" src="{{Vite::asset('resources/assets/images/profile.jpg')}}" alt="Profile Image"
                      class="rounded-circle border border-3 border-secondary" style="width: 150px; height: 150px;">
                  </div>
                  <form>
                    <div class="mb-3">
                      <label for="userName" class="form-label">Name</label>
                      <input type="text" class="form-control" id="userName" placeholder="Enter Name" >
                    </div>
                    <div class="mb-3">
                      <label for="yearLevel" class="form-label">Year Level</label>
                      <input type="text" class="form-control" id="yearLevel" placeholder="Enter Year Level" >
                    </div>
                    <div class="mb-3">
                      <label for="studentId" class="form-label">Student ID</label>
                      <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Details of Borrowed Items</label>
                      <table class="table table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th>Item ID</th>
                            <th>Quantity</th>
                            <th>Unit</th>
                            <th>Item Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" class="form-control" placeholder="Item ID"></td>
                            <td><input type="number" class="form-control" placeholder="Quantity"></td>
                            <td><input type="text" class="form-control" placeholder="Unit"></td>
                            <td><input type="text" class="form-control" placeholder="Item Name"></td>
                          </tr>
                          <!-- Additional rows can be dynamically added -->
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                <!-- Footer -->
                <div class="card-footer d-flex justify-content-between bg-light">
                  <button type="button"
                    class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2  w-45">Accept</button>
                  <button type="submit"
                    class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2  w-45">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <div class="card shadow border-0">
          <!-- Header -->
          <div class="card-header bg-primary text-white text-center">
            <h5 class="mb-0">Borrowed and Returned Items</h5>
          </div>

          <!-- Body -->
          <div class="card-body">
            <!-- Borrowed Items Table -->
            <div class="mb-4">
              <h6 class="fw-bold">Borrowed Items</h6>
              <hr class="border-primary mb-4">
              <div class="table-responsive">
                <table class="table table-striped w-100">
                  <!-- Table Header -->
                  <thead class="table-dark text-center">
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Student ID</th>
                      <th scope="col">Date Issued</th>
                      <th scope="col">Borrow Request</th>
                      <th scope="col">Return Date</th>
                    </tr>
                  </thead>
                  <!-- Table Body -->
                  <tbody class="text-center">
                    <tr>
                      <td>Jeriebel Calunsag</td>
                      <td>123-2343-212</td>
                      <td>2025-01-01</td>
                      <td>2025-01-02</td>
                      <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                    <tr>
                      <td>Conarco Bayot</td>
                      <td>123-2343-213</td>
                      <td>2025-01-01</td>
                      <td>2025-01-02</td>
                      <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                    <!-- Additional rows can be dynamically added -->
                  </tbody>
                  <!-- Table Footer -->
                  <tfoot class="table-light">
                    <tr>
                      <td colspan="5" class="text-center text-muted">
                        End of Borrowed Items List
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <div class="card-footer text-end bg-light">
            <button type="button" class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2">
              <i class="fas fa-file-export me-1"></i> Export
            </button>
            <button type="button" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">
              <i class="fas fa-print me-1"></i> Print
            </button>
          </div>
        </div>
      </div>


@endsection
