@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    Create Plan
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('plans.store') }}" method="POST">
                    @csrf()
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <label for="duration_type">Duration Type:</label>
                                <select name="duration_type" id="duration_type" class="form-control">
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="price">Price:</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="col-md-6">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Active">Active</option>
                                    <option value="In-active">In-active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" rows="5" class="form-control"
                                  placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection