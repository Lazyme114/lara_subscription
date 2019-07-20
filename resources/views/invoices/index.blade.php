@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Invoice Listing
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('alert-success'))
                    <div class="alert alert-success">
                        {{ Session::get('alert-success') }}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Duration Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($plans as $plan)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $plan->id }}</td>--}}
{{--                            <td>{{ $plan->name }}</td>--}}
{{--                            <td>{{ $plan->duration_type }}</td>--}}
{{--                            <td>{{ $plan->price }}</td>--}}
{{--                            <td>--}}
{{--                                @if($plan->status == "Active")--}}
{{--                                    <span class="badge badge-success">{{ $plan->status }}</span>--}}
{{--                                @else--}}
{{--                                    <span class="badge badge-danger">{{ $plan->status }}</span>--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('plans.destroy', $plan->id) }}" method="POST">--}}
{{--                                    @csrf()--}}
{{--                                    @method('DELETE')--}}
{{--                                    <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-info btn-sm">--}}
{{--                                        <i class="fa fa-edit" style="color: white;"></i>--}}
{{--                                    </a>--}}
{{--                                    <button type="submit" class="btn btn-danger btn-sm">--}}
{{--                                        <i class="fa fa-trash" style="color: white;"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection