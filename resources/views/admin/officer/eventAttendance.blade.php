@extends('layouts.admin-dashboard')

@section('title', 'Events Dashboard')
@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Events</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Attendance of the Events.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="previous-eventsattendance">
        <div class="d-flex flex-wrap justify-content-center"> <!-- Center the cards -->
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 1</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event1.jpg')}}" class="card-img-top rounded-0 mt-3" alt="...">
                    <div class="card-body text-center"> <!-- Center the buttons -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">RFID</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">QR Code</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Manual</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 2</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event4.jpg')}}" class="card-img-top rounded-0 mt-3" alt="...">
                    <div class="card-body text-center"> <!-- Center the buttons -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">RFID</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">QR Code</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Manual</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 3</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event3.jpg')}}" class="card-img-top rounded-0 mt-3" alt="...">
                    <div class="card-body text-center"> <!-- Center the buttons -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">RFID</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">QR Code</a>
                        <a href="AttendanceSystem.html" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Manual</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
