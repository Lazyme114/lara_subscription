@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    Create Invoice
                </div>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif


                <form action="{{ route('invoices.store') }}" method="POST">
                    @csrf()
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                            </div>

                            <div class="col-md-6">
                                <label for="duration_type">Duration Type:</label>
                                <select name="duration_type" id="duration_type" class="form-control">
                                    <option value="Monthly" {{ ((old('duration_type') == "Monthly") ? "selected" : "") }} >Monthly</option>
                                    <option value="Yearly" {{ ((old('duration_type') == "Yearly") ? "selected" : "") }} >Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="price">Price:</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Active" {{ ((old('status') == "Active") ? "selected" : "") }} >Active</option>
                                    <option value="In-active" {{ ((old('status') == "In-active") ? "selected" : "") }} >In-active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" rows="5" class="form-control"
                                  placeholder="Description">{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Plan</button>
                </form>
            </div>
        </div>
    </div>

@endsection