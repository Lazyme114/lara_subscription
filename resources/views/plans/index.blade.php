@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Plan Listing
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('plans.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Duration Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>My Name</td>
                        <td>10</td>
                        <td>Months</td>
                        <td>$ 10</td>
                        <td>
                            <span class="badge badge-success">Active</span>
                        </td>
                        <td>
                            EDIT | DELETE
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection