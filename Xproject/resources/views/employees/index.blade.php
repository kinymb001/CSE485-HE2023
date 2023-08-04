
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Trang Employee</h1>

        <a href="#" class="btn btn-primary mb-3">Thêm mới</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">Xem chi tiết</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
