@extends('layouts.app')

@section('content')
<div class="container">
    <div class="cart-box p-4 shadow rounded bg-white">
    <h2 class="mb-4">🛒 Giỏ Hàng Của Bạn</h2>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (count($cart) > 0)
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach ($cart as $id => $item)
                    @php $itemTotal = $item['price'] * $item['quantity']; $total += $itemTotal; @endphp
                    <tr data-id="{{ $id }}">
                        <td data-label="Hình ảnh">
                            <img src="{{ asset('image/products/' . $item['image']) }}" width="60">
                        </td>
                        <td data-label="Tên sản phẩm" class="cartproduct-name">{{ $item['name'] }}</td>
                        <td data-label="Giá">{{ number_format($item['price'], 0, ',', '.') }}đ</td>
                        <td data-label="Số lượng">
                            <input type="number"
                                   class="form-control form-control-sm quantity-input"
                                   value="{{ $item['quantity'] }}"
                                   min="1"
                                   data-update-url="{{ route('cart.update', $id) }}"
                                   style="width: 70px;">
                        </td>
                        <td data-label="Tổng" class="item-total">{{ number_format($itemTotal, 0, ',', '.') }}đ</td>
                        <td data-label="Thao tác">
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-sm btn-confirm-delete" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h5 class="d-flex justify-content-center my-3">Tổng tiền tất cả sản phẩm: <span id="grand-total">{{ number_format($total, 0, ',', '.') }}đ</span></h5>

        <div class="text-center my-3">
            <a href="{{ route('checkout') }}" class="btn btn-success">🔒 Tiến hành thanh toán</a>
        </div>

        <hr>
        <h4 class="mt-4">Chọn địa chỉ giao hàng</h4>
        <form action="{{ route('cart.saveLocation') }}" method="POST" id="address-form">
            @csrf
            <div class="mb-3">
                <label for="province" class="form-label">Tỉnh/Thành phố</label>
                <select name="province_code" id="province" class="form-select">
                    <option value="">-- Chọn Tỉnh --</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->code }}" {{ session('province_code') == $province->code ? 'selected' : '' }}>
                            {{ $province->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="district" class="form-label">Quận/Huyện</label>
                <select name="district_code" id="district" class="form-select">
                    <option value="">-- Chọn Quận --</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ward" class="form-label">Phường/Xã</label>
                <select name="ward_code" id="ward" class="form-select">
                    <option value="">-- Chọn Phường --</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-save-location px-4 py-2">Lưu địa chỉ</button>
            </div>
        </form>
    @else
        <p>Chưa có sản phẩm nào trong giỏ hàng.</p>
    @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Cập nhật số lượng sản phẩm
    document.querySelectorAll('.quantity-input').forEach(function(input) {
        input.addEventListener('input', function () {
            const url = this.dataset.updateUrl;
            const quantity = this.value;
            const row = this.closest('tr');

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ quantity: quantity })
            })
            .then(res => res.json())
            .then(data => {
                row.querySelector('.item-total').textContent = data.item_total;
                document.getElementById('grand-total').textContent = data.grand_total;
            });
        });
    });

    // Xác nhận xóa sản phẩm
    document.querySelectorAll('.btn-confirm-delete').forEach(function(button) {
        button.addEventListener('click', function(e) {
            const confirmDelete = confirm("🗑 Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?");
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    });

    // Xử lý địa chỉ
    const provinceSelect = document.getElementById('province');
    const districtSelect = document.getElementById('district');
    const wardSelect = document.getElementById('ward');

    if (provinceSelect) {
        provinceSelect.addEventListener('change', function () {
            const province_code = this.value;
            fetch("{{ url('/get-districts') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ province_code: province_code })
            })
            .then(response => response.json())
            .then(data => {
                districtSelect.innerHTML = '<option value="">-- Chọn Quận --</option>';
                wardSelect.innerHTML = '<option value="">-- Chọn Phường --</option>';
                data.forEach(district => {
                    districtSelect.innerHTML += `<option value="${district.code}">${district.name}</option>`;
                });
            });
        });
    }

    if (districtSelect) {
        districtSelect.addEventListener('change', function () {
            const district_code = this.value;
            fetch("{{ url('/get-wards') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ district_code: district_code })
            })
            .then(response => response.json())
            .then(data => {
                wardSelect.innerHTML = '<option value="">-- Chọn Phường --</option>';
                data.forEach(ward => {
                    wardSelect.innerHTML += `<option value="${ward.code}">${ward.name}</option>`;
                });
            });
        });
    }
});
</script>
@endsection
