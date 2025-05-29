@extends('layouts.admin') {{-- Kế thừa layout admin --}}

@section('title', 'Quản lý người dùng')

@section('content')
    <div class="container mt-4">
        <h2>👤 Danh sách người dùng</h2>

        {{-- Hiển thị thông báo --}}
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->is_active)
                                <span class="badge bg-success">Đang hoạt động</span>
                            @else
                                <span class="badge bg-secondary">Đã tạm ngưng</span>
                            @endif
                        </td>
                        <td>
                            {{-- 👁️ Xem thông tin --}}
                            <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm">🔍 Xem</a>

                            {{-- 📦 Xem đơn hàng --}}
                            <a href="{{ route('admin.orders.vieworders', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">📦 Đơn hàng</a>

                            {{-- 🔄 Tạm ngưng / Kích hoạt --}}
                            <form action="{{ route('admin.users.toggleStatus', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning btn-sm">
                                    {{ $user->is_active ? '🔒 Tạm ngưng' : '✅ Kích hoạt' }}
                                </button>
                            </form>

                            {{-- 🗑️ Xoá tài khoản --}}
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Bạn có chắc muốn xóa người dùng này không?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">🗑️ Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Phân trang nếu có --}}
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection
