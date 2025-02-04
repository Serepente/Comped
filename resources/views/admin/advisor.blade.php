@extends('layouts.admin-dashboard')

@section('title', 'Advisor Dashboard')
@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Advisor</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">ADMIN ACCESS.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container my-5">
        <div class="row justify-content-center text-center g-4">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Student Officers</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/studentofficeres.png')}}" class="card-img-top" alt="Student Office">
                    <div class="card-body">
                        <p class="card-text">Admin Student Officers.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Grant Officers | Remove Officers</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.advisor.officers')}}" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Student Officers</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">User Access</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/useraccess.png')}}" class="card-img-top" alt="User Access">
                    <div class="card-body">
                        <p class="card-text">Access or Deny Users.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Grant Users | Remove Users</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.advisor.useraccess')}}" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Users Access</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">School Year/Sem</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/schoolyear.png')}}" class="card-img-top" alt="School Year">
                    <div class="card-body">
                        <p class="card-text">Change School Year and Semester.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Edit School Year</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2" data-bs-toggle="modal" data-bs-target="#schoolYearModal">School Year</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="schoolYearModal" tabindex="-1" aria-labelledby="schoolYearModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="schoolYearModalLabel">Edit School Year/Semester</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
              <p class="mb-3">You can edit the school year and semester details here.</p>
              <form>
                <!-- School Year Selection -->
                <div class="mb-3">
                  <label for="schoolYear" class="form-label">School Year</label>
                  <select class="form-select" id="schoolYear" aria-label="Select School Year">
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025" selected>2024-2025</option>
                    <option value="2025-2026">2025-2026</option>
                  </select>
                </div>

                <!-- Semester Selection -->
                <div class="mb-3">
                  <label for="semester" class="form-label">Semester</label>
                  <select class="form-select" id="semester" aria-label="Select Semester">
                    <option value="1st">1st Semester</option>
                    <option value="2nd" selected>2nd Semester</option>
                    <option value="summer">Summer Term</option>
                  </select>
                </div>
              </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
              <button class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
