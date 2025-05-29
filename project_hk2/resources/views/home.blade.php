@extends('layouts.app')

@section('content')
    <div class="banner-container" style="width: 100%; max-width: 800px; margin: auto; position: relative; overflow: hidden;">
        <img src="{{ asset('image/sp39.png') }}" class="banner-slide" style="width: 100%; display: none;">
        <img src="{{ asset('image/sp35.png') }}" class="banner-slide" style="width: 100%; display: none;">
        <img src="{{ asset('image/sp36.png') }}" class="banner-slide" style="width: 100%; display: none;">
        <img src="{{ asset('image/sp37.png') }}" class="banner-slide" style="width: 100%; display: none;">
    </div>

    <div class="new-products">
        <h2>-=- Sản Phẩm Mới -=-</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="{{ asset('image/sp1.png') }}" alt="Sản phẩm 1">
                <p><strong>Mã SP:</strong> SP001</p>
                <p><strong>Thương hiệu:</strong> L'Oreal</p>
                <p><strong>Giá:</strong> 150.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp2.png') }}" alt="Sản phẩm 2">
                <p><strong>Mã SP:</strong> SP002</p>
                <p><strong>Thương hiệu:</strong> Innisfree</p>
                <p><strong>Giá:</strong> 120.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp3.png') }}" alt="Sản phẩm 3">
                <p><strong>Mã SP:</strong> SP003</p>
                <p><strong>Thương hiệu:</strong> The Face Shop</p>
                <p><strong>Giá:</strong> 180.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp4.png') }}" alt="Sản phẩm 4">
                <p><strong>Mã SP:</strong> SP004</p>
                <p><strong>Thương hiệu:</strong> Laneige</p>
                <p><strong>Giá:</strong> 200.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp5.png') }}" alt="Sản phẩm 5">
                <p><strong>Mã SP:</strong> SP005</p>
                <p><strong>Thương hiệu:</strong> SK-II</p>
                <p><strong>Giá:</strong> 350.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp6.png') }}" alt="Sản phẩm 6">
                <p><strong>Mã SP:</strong> SP006</p>
                <p><strong>Thương hiệu:</strong> Estee Lauder</p>
                <p><strong>Giá:</strong> 320.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp7.png') }}" alt="Sản phẩm 7">
                <p><strong>Mã SP:</strong> SP007</p>
                <p><strong>Thương hiệu:</strong> Kiehl's</p>
                <p><strong>Giá:</strong> 250.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp8.png') }}" alt="Sản phẩm 8">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp9.png') }}" alt="Sản phẩm 9">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp10.png') }}" alt="Sản phẩm 10">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp21.png') }}" alt="Sản phẩm 21">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp22.png') }}" alt="Sản phẩm 22">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('new') }}" class="see-more-button">Xem Thêm</a>
    </div>

    <div class="sale-products">
        <h2>❤️Sản Phẩm Sale❤️</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="{{ asset('image/sp11.png') }}" alt="Sản phẩm 1">
                <p><strong>Mã SP:</strong> SP001</p>
                <p><strong>Thương hiệu:</strong> L'Oreal</p>
                <p><strong>Giá:</strong> 150.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp12.png') }}" alt="Sản phẩm 2">
                <p><strong>Mã SP:</strong> SP002</p>
                <p><strong>Thương hiệu:</strong> Innisfree</p>
                <p><strong>Giá:</strong> 120.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp13.png') }}" alt="Sản phẩm 3">
                <p><strong>Mã SP:</strong> SP003</p>
                <p><strong>Thương hiệu:</strong> The Face Shop</p>
                <p><strong>Giá:</strong> 180.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp14.png') }}" alt="Sản phẩm 4">
                <p><strong>Mã SP:</strong> SP004</p>
                <p><strong>Thương hiệu:</strong> Laneige</p>
                <p><strong>Giá:</strong> 200.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp15.png') }}" alt="Sản phẩm 5">
                <p><strong>Mã SP:</strong> SP005</p>
                <p><strong>Thương hiệu:</strong> SK-II</p>
                <p><strong>Giá:</strong> 350.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp16.png') }}" alt="Sản phẩm 6">
                <p><strong>Mã SP:</strong> SP006</p>
                <p><strong>Thương hiệu:</strong> Estee Lauder</p>
                <p><strong>Giá:</strong> 320.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp17.png') }}" alt="Sản phẩm 7">
                <p><strong>Mã SP:</strong> SP007</p>
                <p><strong>Thương hiệu:</strong> Kiehl's</p>
                <p><strong>Giá:</strong> 250.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp18.png') }}" alt="Sản phẩm 8">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp23.png') }}" alt="Sản phẩm 23">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp24.png') }}" alt="Sản phẩm 24">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp25.png') }}" alt="Sản phẩm 25">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
            <div class="product-item">
                <img src="{{ asset('image/sp26.png') }}" alt="Sản phẩm 26">
                <p><strong>Mã SP:</strong> SP008</p>
                <p><strong>Thương hiệu:</strong> Some By Mi</p>
                <p><strong>Giá:</strong> 190.000đ</p>
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('sale') }}" class="see-more-button">Xem Thêm</a>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.banner-slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        showSlide(currentSlide);
        setInterval(nextSlide, 3000);
    });
</script>
@endsection
