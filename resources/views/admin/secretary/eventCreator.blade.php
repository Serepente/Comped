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
            data-bs-toggle="modal" data-bs-target="#addEventModal">
            +
        </button>
    </div>

    <div class="previous-eventcreator">
        @if ($events->count() == 0)
            <div class="text-center py-5">
                <h4 class="text-muted">No events available.</h4>
            </div>
        @elseif ($events->count() < 3)
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($events as $event)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                <h5 class="card-title">{{ $event->event_title }}</h5>
                            </div>
                            <div class="event-banner-container">
                                <img src="{{ asset('storage/' . $event->event_banner) }}"
                                    class="card-img-top rounded-0 mt-2 event-banner-img" alt="{{ $event->event_title }}">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{ Str::limit($event->event_description, 100, '...') }}
                                </p>
                                <div class="d-flex justify-content-center flex-wrap gap-2">
                                    <a href="#" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#viewEventModal{{ $event->id }}">
                                        View Details
                                    </a>
                                    <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#editEventModal{{ $event->id }}">Edit</a>
                                    <form action="{{ route('admin.secretary.deleteEvent', $event->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="owl-carousel owl-theme">
                @foreach ($events as $event)
                    <div class="item">
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                <h5 class="card-title">{{ $event->event_title }}</h5>
                            </div>
                            <div class="event-banner-container">
                                <img src="{{ asset('storage/' . $event->event_banner) }}"
                                    class="card-img-top rounded-0 mt-2 event-banner-img" alt="{{ $event->event_title }}">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{ Str::limit($event->event_description, 100, '...') }}
                                </p>
                                <div class="d-flex justify-content-center flex-wrap gap-2">
                                    <a href="#" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#viewEventModal{{ $event->id }}">
                                        View Details
                                    </a>
                                    <a href="#" class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2"
                                        data-bs-toggle="modal" data-bs-target="#editEventModal{{ $event->id }}">Edit</a>
                                    <form action="{{ route('admin.secretary.deleteEvent', $event->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- modals --}}
        {{-- add event modal --}}
        <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fs-5" id="addEventModalLabel">Add Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('admin.secretary.eventCreator') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="event-code" class="form-label text-start d-block">Event
                                                Code</label>
                                            <input type="text" class="form-control" id="event-code" name="event_code"
                                                placeholder="Enter code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="event-title" class="form-label text-start d-block">Event
                                                Title</label>
                                            <input type="text" class="form-control" id="event-title" name="event_title"
                                                placeholder="Enter title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="event-date" class="form-label text-start d-block">Event
                                                Date</label>
                                            <input type="date" class="form-control" id="event-date" name="event_date"
                                                placeholder="{{ date('Y-m-d') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="event-description" class="form-label text-start d-block">Event
                                                Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter Event Description" id="event-description"
                                                name="event_description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Event Banner (Image)</label>
                                            <input type="file" class="form-control" accept="image/*"
                                                name="event_banner" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-center text-success fw-bold mb-3">Attendance (Morning)</h5>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Time In Start Time</label>
                                            <input type="time" class="form-control" name="time_in_open_am">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time In End Time</label>
                                            <input type="time" class="form-control" name="time_in_close_am">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time Out Start Time</label>
                                            <input type="time" class="form-control" name="time_out_open_am">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time Out End Time</label>
                                            <input type="time" class="form-control" name="time_out_close_am">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-3">
                                    <h5 class="text-center text-success fw-bold mb-3">Attendance (Afternoon)</h5>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Time In Start Time</label>
                                            <input type="time" class="form-control" name="time_in_open_pm">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time In End Time</label>
                                            <input type="time" class="form-control" name="time_in_close_pm">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time Out Start Time</label>
                                            <input type="time" class="form-control" name="time_out_open_pm">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Time Out End Time</label>
                                            <input type="time" class="form-control" name="time_out_close_pm">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="d-flex justify-content-between w-100 bg-light">

                                        <button type="button"
                                            class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>

                                        <button type="submit"
                                            class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- view details modal --}}
        @foreach ($events as $event)
            <div class="modal fade" id="viewEventModal{{ $event->id }}" tabindex="-1"
                aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow border-0">
                        <div class="modal-header bg-primary text-white text-center">
                            <h4 class="modal-title" id="eventDetailsModalLabel">Event Details</h4>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img id="eventImage" src="{{ asset('storage/' . $event->event_banner) }}" alt="Event Image"
                                class="img-fluid rounded mb-3">
                            <h5 id="eventTitle" class="fw-bold">{{ $event->event_title }}</h5>
                            <p id="eventDescription">{{ $event->event_description }}</p>
                            <p id="eventDate" class="text-muted">{{ $event->event_date }}</p>
                            <hr>
                            <h5 class="fw-bold text-primary">Attendance Schedule</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Session</th>
                                            <th>Time In (Start)</th>
                                            <th>Time In (End)</th>
                                            <th>Time Out (Start)</th>
                                            <th>Time Out (End)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Morning</td>
                                            <td>{{ $event->time_in_open_am ?? 'N/A' }}</td>
                                            <td>{{ $event->time_in_close_am ?? 'N/A' }}</td>
                                            <td>{{ $event->time_out_open_am ?? 'N/A' }}</td>
                                            <td>{{ $event->time_out_close_am ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Afternoon</td>
                                            <td>{{ $event->time_in_open_pm ?? 'N/A' }}</td>
                                            <td>{{ $event->time_in_close_pm ?? 'N/A' }}</td>
                                            <td>{{ $event->time_out_open_pm ?? 'N/A' }}</td>
                                            <td>{{ $event->time_out_close_pm ?? 'N/A' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- edit events modal --}}
        @foreach ($events as $event)
            <div class="modal fade" id="editEventModal{{ $event->id }}" tabindex="-1"
                aria-labelledby="addEventModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title fs-5" id="addEventModalLabel">Edit Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form id="editEventForm{{ $event->id }}"
                                    action="{{ route('admin.secretary.updateEvent', $event->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="event-code" class="form-label text-start d-block">Event
                                                    Code</label>
                                                <input type="text" class="form-control" id="event-code"
                                                    name="event_code" value="{{ $event->event_code }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="event-title" class="form-label text-start d-block">Event
                                                    Title</label>
                                                <input type="text" class="form-control" id="event-title"
                                                    name="event_title" value="{{ $event->event_title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="event-date" class="form-label text-start d-block">Event
                                                    Date</label>
                                                <input type="date" class="form-control" id="event-date"
                                                    name="event_date" value="{{ $event->event_date }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="event-description" class="form-label text-start d-block">Event
                                                    Description</label>
                                                <textarea class="form-control" rows="3" id="event-description" name="event_description" required>{{ $event->event_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Event Banner</label><br>
                                                <img src="{{ asset('storage/' . $event->event_banner) }}"
                                                    alt="Event Banner" class="img-fluid mb-3" width="200">
                                                <input type="file" class="form-control" name="event_banner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="text-center text-success fw-bold mb-3">Attendance (Morning)</h5>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label class="form-label">Time In Start Time</label>
                                                <input type="time" class="form-control" name="time_in_open_am"
                                                    value="{{ old('time_in_open_am', substr($event->time_in_open_am, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time In End Time</label>
                                                <input type="time" class="form-control" name="time_in_close_am"
                                                    value="{{ old('time_in_close_am', substr($event->time_in_close_am, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time Out Start Time</label>
                                                <input type="time" class="form-control" name="time_out_open_am"
                                                    value="{{ old('time_out_open_am', substr($event->time_out_open_am, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time Out End Time</label>
                                                <input type="time" class="form-control" name="time_out_close_am"
                                                    value="{{ old('time_out_close_am', substr($event->time_out_close_am, 0, 5)) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-3">
                                        <h5 class="text-center text-success fw-bold mb-3">Attendance (Afternoon)</h5>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label class="form-label">Time In Start Time</label>
                                                <input type="time" class="form-control" name="time_in_open_pm"
                                                    value="{{ old('time_in_open_pm', substr($event->time_in_open_pm, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time In End Time</label>
                                                <input type="time" class="form-control" name="time_in_close_pm"
                                                    value="{{ old('time_in_close_pm', substr($event->time_in_close_pm, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time Out Start Time</label>
                                                <input type="time" class="form-control" name="time_out_open_pm"
                                                    value="{{ old('time_out_open_pm', substr($event->time_out_open_pm, 0, 5)) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Time Out End Time</label>
                                                <input type="time" class="form-control" name="time_out_close_pm"
                                                    value="{{ old('time_out_close_pm', substr($event->time_out_close_pm, 0, 5)) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="d-flex justify-content-between w-100 bg-light">

                                            <button type="button"
                                                class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                Cancel
                                            </button>

                                            <button type="submit"
                                                class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">
                                                Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection
