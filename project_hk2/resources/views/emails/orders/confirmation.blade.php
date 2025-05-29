@component('mail::message')
# Xin chào {{ $order->user->name }}

Cảm ơn bạn đã mua hàng tại {{ config('app.name') }}!  
Dưới đây là chi tiết đơn hàng của bạn:

---

## 🧾 Mã đơn hàng: #{{ $order->id }}

@foreach ($order->orderItems as $item)
- **{{ $item->product->name }}**  
  SL: {{ $item->quantity }} × {{ number_format($item->price, 0, ',', '.') }}đ  
  ➤ Tổng: {{ number_format($item->quantity * $item->price, 0, ',', '.') }}đ
@endforeach

---

### 💰 Tổng cộng: **{{ number_format($order->total_price, 0, ',', '.') }}đ**

### 🚚 Giao đến:  
{{ $order->province->name ?? '...' }},
{{ $order->district->name ?? '...' }},
{{ $order->ward->name ?? '...' }}

---

🙏 **Xin chân thành cảm ơn** quý khách.  
Chúc bạn một ngày tốt lành và nhiều niềm vui! 🌷

Trân trọng,  
{{ config('app.name') }}
@endcomponent
