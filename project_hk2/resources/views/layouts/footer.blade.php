<footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h3 class="header-left">
          <img src="{{ asset('image/logo.png') }}" class="logo-img" alt="Logo">
      </h3>
      <p>Công ty Mỹ phẩm Chính Hãng</p>
      <p>Địa chỉ: 123 Đường Số 1, Quận 1, TP.HCM</p>
      <p>Email: contact@mycosmetic.vn</p>
      <p>Điện thoại: (+84) 909 123 456</p>
      <div class="footer-socials">
        <a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
        <a href="instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="x.com"><i class="fab fa-twitter"></i></a>
      </div>
    </div>

    <div class="footer-column">
      <h3>VỀ CHÚNG TÔI</h3>
      <p>MyCosmetic chuyên cung cấp mỹ phẩm chính hãng chất lượng cao. Sứ mệnh của chúng tôi là mang đến sự tự tin và vẻ đẹp cho mọi khách hàng.</p>
    </div>

    <div class="footer-column">
      <h3>ĐỊA CHỈ CỦA CHÚNG TÔI</h3>
      <iframe src="https://maps.google.com/maps?q=ho%20chi%20minh&t=&z=13&ie=UTF8&iwloc=&output=embed"
              width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 - Project_hk2 - Group 05 | FPT Aptech HCMC-VN</p>
    <p id="current-time"></p>
  </div>
</footer>

<script>
  function updateTime() {
    const now = new Date();
    const timeStr = now.toLocaleString("vi-VN");
    document.getElementById("current-time").textContent = timeStr;
  }

  updateTime();
  setInterval(updateTime, 1000);
</script>
