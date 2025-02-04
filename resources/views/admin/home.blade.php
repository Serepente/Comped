@extends('layouts.admin-dashboard')

@section('title', 'Home Dashboard')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-right: 10px;">
        <div style="text-align: center; position: relative;">
            <span style="font-size: 1.75rem; font-weight: bold; background-color: #fff; padding: 0 10px;">Developers</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">The Developers of COMPED.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div>
        <img src="{{ Vite::asset('resources/assets/images/COMPED ICON.png') }}" class="img-fluid mx-auto d-block"
            alt="Main Image">
        <hr style="border-top: 1px solid #45474b; flex-grow: 1; margin-left: 10px;">
        <h5 class="mt-3 text-center text-blue font-weight-bold">CompED: A Social Media Platform for Collaborative Learning
            and
            Event Management</h5>
        <p class="text-muted text-center font-weight-bold text-blue">Created and Develop by BSCOMPE - 4</p>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-4">
            <!-- Developer Information -->

            @php
                $developers = [
                    ['name' => 'Benjie Juabot', 'role' => 'Team Leader | Backend', 'image' => 'Benjie_Juabot-removebg-preview.png'],
                    ['name' => 'Kimberly Pacaldo', 'role' => 'Project Manager | Data Analyst', 'image' => 'Kimberly_Pacaldo-removebg-preview.png'],
                    ['name' => 'Don Allen Veloso', 'role' => 'Full Stack Developer', 'image' => 'Don_Allen_Veloso-removebg-preview.png'],
                    ['name' => 'Jeriebel Calunsag', 'role' => 'Frontend | UI/UX Designer', 'image' => 'Jeriebel_Bulac_Calunsag-removebg-preview.png'],
                    ['name' => 'Kyle Zymund Grapa', 'role' => 'Frontend | UI/UX Designer', 'image' => 'Kyle_Zymund_Grapa-removebg-preview.png'],
                    ['name' => 'Claidy Taguran', 'role' => 'Frontend Developer', 'image' => 'John_Claidy_Ken_Taguran-removebg-preview.png'],
                    ['name' => 'Keith Roma', 'role' => 'QA | Data Analyst', 'image' => 'Keith_Roma-removebg-preview.png'],
                    ['name' => 'Eugene John Guingao', 'role' => 'Backend Assistant', 'image' => 'Eugene_John_Guingao-removebg-preview.png'],
                    ['name' => 'John Michael Conarco', 'role' => 'Backend Assistant', 'image' => 'John_Michael_Conarco-removebg-preview.png'],
                    ['name' => 'Keith Lugo', 'role' => 'Data Analyst', 'image' => 'Romel_Keith_Lugo-removebg-preview.png'],
                    ['name' => 'Kenneth Olaivar', 'role' => 'QA Analyst', 'image' => 'Kenneth_Edd_Olaivar-removebg-preview.png'],
                    ['name' => 'Michael John Navea', 'role' => 'Assistant', 'image' => 'Michael_John_Navea-removebg-preview.png'],
                ];
            @endphp

            @foreach ($developers as $developer)
                <div class="col text-center">
                    <div class="developer-info">
                        <img src="{{ Vite::asset('resources/assets/images/developers/' . $developer['image']) }}"
                            class="rounded-circle img-fluid mx-auto d-block dev-img" alt="{{ $developer['name'] }}">
                        <h5 class="mt-3 text-blue font-weight-bold">{{ $developer['role'] }}</h5>
                        <p class="text-muted font-weight-bold text-blue">{{ $developer['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <footer class="text-center">
        <p>&copy; COMPED | 2025 All rights reserved.</p>
    </footer>

@endsection
