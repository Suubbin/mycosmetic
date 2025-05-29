@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>
        <p>Hiện tại chưa kết nối cơ sở dữ liệu nên chỉ hiển thị mô phỏng.</p>

        <!-- Gợi ý sản phẩm hoặc thông báo chưa có -->
        <div class="product-grid">
            <p>Không tìm thấy sản phẩm nào phù hợp.</p>
        </div>
    </div>
@endsection
