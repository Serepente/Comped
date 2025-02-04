@extends('layouts.admin-dashboard')

@section('title', 'Event Creator Platform')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Event Creator</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">ADMIN ACCESS</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div style="text-align: right; margin-top: 15px;">
        <button class="btn btn-primary rounded-circle shadow-lg"
            style="width: 60px; height: 60px; font-size: 30px; line-height: 1; text-align: center; display: flex; align-items: center; justify-content: center;"
            onclick="openAddEventTab()">
            +
        </button>
    </div>

    <div class="previous-eventcreator">
        <div class="d-flex flex-wrap justify-content-center">
            <!-- Center the cards -->
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 1</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event1.jpg')}}" class="card-img-top rounded-0 mt-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            <a href="#" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openViewDetailsTab('{{Vite::asset('resources/assets/images/event1.jpg')}}', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2025-05-01 10:00')">View
                                Details</a>
                            <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openUpdateTab()">Update</a>
                            <a href="#"
                                class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Remove</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 2</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event4.jpg')}}" class="card-img-top rounded-0 mt-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            <a href="#" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openViewDetailsTab('{{Vite::asset('resources/assets/images/event4.jpg')}}', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2025-05-01 10:00')">View
                                Details</a>
                            <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openUpdateTab()">Update</a>
                            <a href="#"
                                class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Remove</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Event 3</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/event3.jpg')}}" class="card-img-top rounded-0 mt-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            <a href="#" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openViewDetailsTab('{{Vite::asset('resources/assets/images/event3.jpg')}}', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2025-05-01 10:00')">View
                                Details</a>
                            <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                onclick="openUpdateTab()">Update</a>
                            <a href="#"
                                class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Tab Modal -->
        <div class="update-tab" id="updateTab">
            <div class="card shadow border-0">
                <!-- Modal Header -->
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Update Event</h4>
                    <!-- Close Icon -->
                    <div class="close-btn" onclick="closeUpdateTab()"
                        style="cursor: pointer; font-size: 24px; position: absolute; top: 10px; right: 15px;">×
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Event Code" required><br>
                        <input type="text" placeholder="Event Name" required><br>
                        <input type="date" placeholder="Event Date" required><br>
                        <textarea placeholder="Event Description" required></textarea><br>
                        <input type="file" accept="image/*" required><br>
                        <input type="time" placeholder="Start Time" required><br>
                        <input type="time" placeholder="End Time" required><br>
                        <button type="submit" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add
                            Event</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- View Details Modal -->
        <div class="view-details-tab" id="viewDetailsTab">
            <div class="card shadow border-0">
                <!-- Modal Header -->
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Event Details</h4>
                    <!-- Close Icon -->
                    <div class="close-btn" onclick="closeViewDetailsTab()"
                        style="cursor: pointer; font-size: 24px; position: absolute; top: 10px; right: 15px;">×
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="card-body text-center">
                    <img id="eventImage" src="" alt="Event Image" class="img-fluid">
                    <h5 id="eventTitle">Event Title</h5>
                    <p id="eventDescription">Event Description</p>
                    <p id="eventDateTime">Event Date and Time</p>
                </div>
            </div>
        </div>

        <!-- Add Event Tab Modal -->
        <div class="add-event-tab" id="addEventTab">
            <div class="card shadow border-0">
                <!-- Modal Header -->
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Add Event</h4>
                    <!-- Close Icon -->
                    <div class="close-btn" onclick="closeAddEventTab()"
                        style="cursor: pointer; font-size: 24px; position: absolute; top: 10px; right: 15px;">×
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Event Code" required><br>
                        <input type="text" placeholder="Event Name" required><br>
                        <input type="date" placeholder="Event Date" required><br>
                        <textarea placeholder="Event Description" required></textarea><br>
                        <input type="file" accept="image/*" required><br>
                        <input type="time" placeholder="Start Time" required><br>
                        <input type="time" placeholder="End Time" required><br>
                        <button type="submit" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add
                            Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
