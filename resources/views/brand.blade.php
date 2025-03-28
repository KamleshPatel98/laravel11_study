@extends('layouts.admin')
@section('content')
<div class="container">
    <x-alert />
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Brand List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead class="table-primary">
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($records as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>
                                            <x-edit-delete editLink="{{ route('brands.edit',$row) }}" deleteLink="{{ route('brands.destroy',$row) }}" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No record found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $records->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    {{ isset($brand) ? 'Update' : 'Add' }} Brand
                </div>
                <div class="card-body">
                    @if (isset($brand))
                    <form action="{{ route('brands.update',$brand) }}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                    <form action="{{ route('brands.store') }}" method="POST">
                        @csrf
                    @endif
                        <x-input title="{{ 'Name' }}" name="{{ 'name' }}" value="{{ old('name',isset($brand->name) ? $brand->name : '') }}" required maxlength="100"/>
                        <br>
                        <x-submit-reset />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection