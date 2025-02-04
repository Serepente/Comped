@extends('layouts.admin-dashboard')

@section('title', 'Liquidation Report')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">LIQUIDATION REPORT</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">ADMIN ACCESS.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="container-fluid my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">
                    <i class="fas fa-file-invoice-dollar me-2"></i> Liquidation Reports
                </h5>
            </div>

            <div class="card-body">
                <div class="d-flex flex-column">
                    <hr class="mx-auto w-100 border-primary"
                        style="border-top: 5px solid #006eff; margin: 15px 0;">

                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center align-middle w-100">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Event</th>
                                    <th scope="col">Date of Liquidation</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PCB Seminar</td>
                                    <td>2025-01-01</td>
                                    <td>PHP 550</td>
                                    <td>
                                        <div class="d-flex flex-wrap justify-content-center gap-2">
                                            <a href="your_export_link_here"
                                                class="btn btn-success btn-sm rounded-pill fw-bold px-3">
                                                <i class="fas fa-file-export me-1"></i> Export
                                            </a>
                                            <a href="your_view_link_here"
                                                class="btn btn-primary btn-sm rounded-pill fw-bold px-3">
                                                <i class="fas fa-eye me-1"></i> View
                                            </a>
                                            <a href="your_remove_link_here"
                                                class="btn btn-danger btn-sm rounded-pill fw-bold px-3">
                                                <i class="fas fa-trash-alt me-1"></i> Remove
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <th colspan="2" class="text-end">Total:</th>
                                    <th>PHP 550</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all liquidation records are verified.</small>
            </div>
        </div>
    </div>
@endsection
