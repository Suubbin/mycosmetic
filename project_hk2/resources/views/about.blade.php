@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<div class="about-container">
    <div class="about-left">
        <h2>Giới thiệu về chúng tôi</h2>
        <p>
            Chào mừng bạn đến với cửa hàng mỹ phẩm của chúng tôi! <br>
            Chúng tôi chuyên cung cấp các sản phẩm nhập khẩu chất lượng cao của các quốc gia, sản phẩm chính hãng sẻ mang lại an toàn cho làn da của bạn. <br>
            Đội ngũ chúng tôi luôn tận tâm phục vụ khách hàng với tiêu chí: <strong>“Đẹp tự nhiên ❤️ An toàn tuyệt đối.”</strong>
        </p>
    </div>

    <div class="about-right">
        <img src="{{ asset('image/sp54.png') }}" alt="Ảnh 1">
    </div>
</div>

<div class="about-container reverse-row">
    <div class="about-left">
        <h2>Giới thiệu về Cosmetics Authentic</h2>
        <p>
            "Cosmetics Authentic" được thành lập năm 2000 và phát triển đến nay <br>
            Những năm đâu khi thành lập công ty, chúng tôi gặp rất nhiều khó khăn, đa phần các khách hàng chỉ tiêu dùng hàng nội địa.<br>
            Sau một năm đội ngủ công ty đã tư vấn sản phẩm tốt nhất của nhiều quốc gia và nhiều khách hàng đã sử dụng và rất hài lòng với các sản phẩm nhập khẩu có tiếng ở nhiều quốc gia và từ đó khách hàng biết đến <strong>“Cosmetic Authentic.”</strong>
        </p>
    </div>

    <div class="about-right">
        <img src="{{ asset('image/sp47.png') }}" alt="Ảnh 2">
    </div>
</div>

<div class="about-container">
    <div class="about-left">
        <h2>Quá trình phát triển</h2>
        <p>
            Những năm đâu "Cosmetics Authentic" chỉ bán sản phẩm nhập khẩu từ nhiều quốc gia. <br>
            Cho đến năm 2012 "Cosmetics Authentic" đã ra đời một số sản phẩm do chúng tôi sản xuất, chúng tôi đã cố vượt khỏi cái bóng của những ông lớn nhưng khách hàng vẫn thích tiêu dùng. <br>
            Cuối năm 2017 sau 5 năm tạo dựng thương hiệu thì khách hàng đã tin tưởng vào sản phẩm của <strong>“Cosmetic Authentic”</strong>
            Theo thống kê đến năm 2024 thì <strong>“Cosmetic Authentic”</strong> đã có mặt tại 63 tỉnh thành và 5 quốc gia trên thế giới. <br><br>
        </p>
    </div>

    <div class="about-right">
        <img src="{{ asset('image/sp29.png') }}" alt="Ảnh 3">
    </div>
</div>

@endsection
