<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Order Received</title>
    <style>
      /* Email-safe, simple styling */
      body { background-color: #f4f6f8; margin:0; padding:0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
      .container { width:100%; max-width:680px; margin:32px auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(16,24,40,.08); }
      .header { padding:24px 32px; background: linear-gradient(90deg,#0f172a,#0b1220); color:#fff; }
      .header h1 { margin:0; font-size:20px; font-weight:600; }
      .content { padding:24px 32px; color:#0f172a; }
      .muted { color:#6b7280; font-size:13px; }
      .box { background:#f8fafc; padding:16px; border-radius:6px; margin:16px 0; }
      table { width:100%; border-collapse:collapse; margin-top:8px; }
      th, td { text-align:left; padding:8px 6px; border-bottom:1px solid #e6edf3; font-size:14px; }
      th { color:#374151; font-size:13px; font-weight:600; }
      .total-row td { border-top:2px solid #e6edf3; font-weight:700; }
      .right { text-align:right; }
      .footer { padding:20px 32px; font-size:13px; color:#6b7280; }
      .small { font-size:13px; }
      @media (max-width:520px) {
        .container { margin:12px; }
        .header, .content, .footer { padding-left:16px; padding-right:16px; }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>New Order Received</h1>
        <div class="muted" style="margin-top:6px; font-weight:400;">A new order has been placed on your store</div>
      </div>

      <div class="content">
        <p class="muted">Hello Admin,</p>
        <p>You've received a new order. Below is the summary and customer details.</p>

        <div class="box">
          <table>
            <tr>
              <th>Order</th>
              <td>#{{ $order->id ?? ($order['id'] ?? 'N/A') }}</td>
            </tr>
            <tr>
              <th>Date</th>
              <td>{{ isset($order->created_at) ? $order->created_at->format('d M Y H:i') : ($order['created_at'] ?? 'N/A') }}</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>{{ $order->status ?? ($order['status'] ?? 'Pending') }}</td>
            </tr>
            <tr>
              <th>Payment</th>
              <td>{{ $order->payment_method ?? ($order['payment_method'] ?? 'N/A') }}</td>
            </tr>
          </table>
        </div>

        <h3 style="margin:16px 0 8px 0;">Items</h3>
        <div class="box">
          <table>
            <thead>
              <tr>
                <th>Product</th>
                <th class="right">Qty</th>
                <th class="right">Price</th>
                <th class="right">Subtotal</th>
              </tr>
            </thead>
            <tbody>
              @if(!empty($items) && is_iterable($items))
                @foreach($items as $item)
                  <tr>
                    <td>{{ $item->name ?? ($item['name'] ?? 'Item') }}</td>
                    <td class="right">{{ $item->qty ?? ($item['qty'] ?? ($item['quantity'] ?? 1)) }}</td>
                    <td class="right">{{ isset($item->price) ? number_format($item->price,2) : (isset($item['price']) ? number_format($item['price'],2) : '0.00') }}</td>
                    <td class="right">{{ isset($item->subtotal) ? number_format($item->subtotal,2) : (isset($item['subtotal']) ? number_format($item['subtotal'],2) : '0.00') }}</td>
                  </tr>
                @endforeach
              @else
                <tr><td colspan="4" class="muted">No line items available.</td></tr>
              @endif
            </tbody>
            <tfoot>
              <tr class="total-row">
                <td></td>
                <td></td>
                <td class="right">Total</td>
                <td class="right">{{ isset($order->total) ? number_format($order->total,2) : (isset($order['total']) ? number_format($order['total'],2) : '0.00') }}</td>
              </tr>
            </tfoot>
          </table>
        </div>

        <h3 style="margin:16px 0 8px 0;">Customer</h3>
        <div class="box small">
          <table>
            <tr>
              <th>Name</th>
              <td>{{ $order->customer_name ?? $order->name ?? ($order['customer_name'] ?? ($order['name'] ?? 'N/A')) }}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{ $order->email ?? ($order['email'] ?? 'N/A') }}</td>
            </tr>
            <tr>
              <th>Phone</th>
              <td>{{ $order->phone ?? ($order['phone'] ?? 'N/A') }}</td>
            </tr>
            <tr>
              <th>Address</th>
              <td>{{ $order->shipping_address ?? ($order['address'] ?? ($order['shipping'] ?? 'N/A')) }}</td>
            </tr>
          </table>
        </div>

        <p class="muted" style="margin-top:12px;">You can view and process this order in the admin dashboard.</p>
      </div>

      <div class="footer">
        <div style="display:flex; justify-content:space-between; align-items:center;">
          <div class="small">Store Admin • Bike Showroom</div>
          <div class="small muted">If you did not expect this email, please check the order details immediately.</div>
        </div>
      </div>
    </div>
  </body>
</html>
