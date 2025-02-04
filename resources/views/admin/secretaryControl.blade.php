@extends('layouts.admin-dashboard')

@section('title', 'Secretary Dashboard')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Secretary</span>
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
                        <h5 class="card-title mb-0">Event Management</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/eventcalendar.png')}}" class="card-img-top" alt="Student Office">
                    <div class="card-body">
                        <p class="card-text">Manage Events.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Create Events & Update Events</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.secretary.eventCreator')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Event</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Inventory Management</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/inventory.png')}}" class="card-img-top" alt="User Access">
                    <div class="card-body">
                        <p class="card-text">Manage Inventory.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Inventory</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.secretary.inventoryManagement')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Inventory</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Collaborative Learning</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/learning.png')}}" class="card-img-top" alt="School Year">
                    <div class="card-body">
                        <p class="card-text">Study and Learn.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">E-learning</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                            data-bs-toggle="modal" data-bs-target="#schoolYearModal">E-learning</a>
                    </div>
                </div>
            </div>



            <div class="right-sidebar">
                <div class="user-info">
                    <img src="assets/img/profile.jpg" alt="Profile Image">
                    <div>
                        <h5>Jeriebel Calunsag</h5>
                        <p>Online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
