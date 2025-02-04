@extends('layouts.admin-dashboard')

@section('title', 'Inventory Management')

@section('admin-content')
    <div style="display: flex; align-items: center; margin: 15px 0;">
        <div style="text-align: left; margin-right: 10px;">
            <span style="white-space: nowrap; font-size: 1.75rem; font-weight: bold;">Inventory Management</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">Manage the Inventory.</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>
    <div class="container-fluid mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Manage Inventory</h4>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-pill" placeholder="Search for an item..."
                        aria-label="Search for an item...">
                    <button class="btn btn-primary rounded-pill" type="button">Search</button>
                </div>
                <div class="d-flex flex-wrap gap-3 mb-4 justify-content-center">
                    <button class="btn btn-primary rounded-pill fw-bold border border-2 px-4 py-2">Update
                        Item</button>
                    <button class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#inventoryModal">Add Item</button>
                    <button class="btn btn-danger rounded-pill fw-bold border border-2 px-4 py-2">Delete
                        Item</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-center w-100">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Item ID</th>
                                <th scope="col">Item</th>
                                <th scope="col">Category</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Borrowed</th>
                                <th scope="col">Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>069</td>
                                <td>Ultrasonic</td>
                                <td>Sensor</td>
                                <td>6</td>
                                <td>3</td>
                                <td>09-29-25</td>
                            </tr>
                            <tr>
                                <td>070</td>
                                <td>Infrared</td>
                                <td>Sensor</td>
                                <td>8</td>
                                <td>2</td>
                                <td>10-10-25</td>
                            </tr>
                        </tbody>
                        <tfoot class="table-dark">
                            <tr>
                                <td colspan="6" class="text-center">End of Inventory</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all inventory details are updated.</small>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Borrowed and Returned Items</h4>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <hr style="border-top: 5px solid #006eff; margin: 15px 0;">
                    <div class="table-responsive">
                        <table class="table table-striped w-100">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th scope="col">Item ID</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Borrowed</th>
                                    <th scope="col">Added</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>069</td>
                                    <td>Arduino</td>
                                    <td>Microcontroller</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>09-29-25</td>
                                </tr>
                                <tr>
                                    <td>069</td>
                                    <td>Arduino</td>
                                    <td>Microcontroller</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>09-29-25</td>
                                </tr>
                                <tr>
                                    <td>069</td>
                                    <td>Arduino</td>
                                    <td>Microcontroller</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>09-29-25</td>
                                </tr>
                                <tr>
                                    <td>069</td>
                                    <td>Arduino</td>
                                    <td>Microcontroller</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>09-29-25</td>
                                </tr>
                                <tr>
                                    <td>069</td>
                                    <td>Arduino</td>
                                    <td>Microcontroller</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>09-29-25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light text-center text-muted">
                <small>Ensure all borrowed and returned item details are up-to-date.</small>
            </div>
        </div>
    </div>
    <div class="modal fade" id="inventoryModal" tabindex="-1" aria-labelledby="inventoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow border-0">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="inventoryModalLabel">Inventory Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="itemCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="itemCategory" placeholder="Enter category">
                        </div>
                        <div class="mb-3">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
                        </div>
                        <div class="mb-3">
                            <label for="totalStock" class="form-label">Total Stock</label>
                            <input type="number" class="form-control" id="totalStock" placeholder="Enter total stock">
                        </div>
                        <div class="mb-3">
                            <label for="itemUnits" class="form-label">Units</label>
                            <input type="text" class="form-control" id="itemUnits"
                                placeholder="Enter units (e.g., pcs, kg)">
                        </div>
                        <div class="mb-3">
                            <label for="itemImage" class="form-label">Item Image</label>
                            <input type="file" class="form-control" id="itemImage" accept="image/*">
                            <div class="mt-3 text-center">
                                <img id="previewImage" src="#" alt="Image Preview"
                                    class="img-fluid rounded d-none" style="max-width: 100px;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success rounded-pill fw-bold border border-2 px-4 py-2">Add
                        Item</button>
                    <button type="button" class="btn btn-secondary rounded-pill fw-bold border border-2 px-4 py-2"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection
