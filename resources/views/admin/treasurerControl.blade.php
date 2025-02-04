@extends('layouts.admin-dashboard')

@section('title', 'Treasurer Dashboard')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Treasurer</span>
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
                        <h5 class="card-title mb-0">Student Payment Center</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/payment.png')}}" class="card-img-top" alt="Student Office">
                    <div class="card-body">
                        <p class="card-text">Payment Center..</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pay Fees & Contributions</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.treasurer.paymentCenter')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Payment Center</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Contribution Management</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/contribution.png')}}" class="card-img-top" alt="User Access">
                    <div class="card-body">
                        <p class="card-text">Manage Fees.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Contribution Tracking</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.treasurer.contribution')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Contribution</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Payment List</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/paymentlist.png')}}" class="card-img-top" alt="User Access">
                    <div class="card-body">
                        <p class="card-text">View Payments.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">List of Payments</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.treasurer.paymentList')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Payment List</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Liquidation Report</h5>
                    </div>
                    <img src="{{Vite::asset('resources/assets/images/liquidation.png')}}" class="card-img-top" alt="User Access">
                    <div class="card-body">
                        <p class="card-text">Reports Liquidation.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Liquidation Reports</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.treasurer.liquidation')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Liquidation</a>
                        <a href="{{route('admin.treasurer.eventsLiquidation')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Event</a>
                        <a href="{{route('admin.treasurer.itemsLiquidation')}}"
                            class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
