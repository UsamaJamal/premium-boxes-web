<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; color: #333333; margin: 0; }
        table { width: 100%; max-width: 600px; border-collapse: collapse; background-color: #fff; border: 1px solid #ddd; margin: 0 auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #ddd; padding: 12px 15px; text-align: left; font-size: 15px; line-height: 1.4; }
        th { background-color: #3598db; color: #ffffff; font-weight: bold; width: 35%; }
        td { background-color: #ffffff; word-break: break-word; width: 65%; color: #333; }
        a { color: #3598db; text-decoration: none; }
    </style>
</head>
<body>
    @php
        $isProductInstantQuote = ($data['source'] ?? '') === 'Product detail instant quote';
        $productName = !empty($data['p_boxname']) ? $data['p_boxname'] : (!empty($data['product_name']) ? $data['product_name'] : (!empty($data['box_style']) ? $data['box_style'] : ''));
        $boxStyle = !empty($data['box_style']) && ($isProductInstantQuote || $data['box_style'] !== $productName) ? $data['box_style'] : '';
    @endphp
    <table class="mail-table">
        @if(!empty($productName) && !$isProductInstantQuote)
        <tr><th>Product Name:</th><td>{{ $productName }}</td></tr>
        @endif
        @if(!empty($boxStyle))
        <tr><th>Box Style:</th><td>{{ $boxStyle }}</td></tr>
        @endif
        <tr><th>Client Name:</th><td>{{ $data['p_name'] ?? '' }}</td></tr>
        <tr><th>Client Email:</th><td>{{ $data['email'] ?? '' }}</td></tr>
        <tr><th>Client Phone:</th><td>{{ $data['p_phone'] ?? '' }}</td></tr>
        @if(!empty($data['address']))
        <tr><th>Address:</th><td>{{ $data['address'] }}</td></tr>
        @endif
        @if(!empty($data['company']))
        <tr><th>Company:</th><td>{{ $data['company'] }}</td></tr>
        @endif
        @if($isProductInstantQuote && !empty($data['website']))
        <tr><th>Website:</th><td>{{ $data['website'] }}</td></tr>
        @endif
        @if(!$isProductInstantQuote)
        <tr><th>Length:</th><td>{{ $data['p_length'] ?? '' }}</td></tr>
        <tr><th>Width:</th><td>{{ $data['p_width'] ?? '' }}</td></tr>
        <tr><th>Height:</th><td>{{ $data['p_height'] ?? '' }}</td></tr>
        <tr><th>Unit:</th><td>{{ $data['p_unit'] ?? '' }}</td></tr>
        <tr><th>Stock:</th><td>{{ $data['p_stock'] ?? '' }}</td></tr>
        @endif
        <tr><th>Color:</th><td>{{ $data['p_color'] ?? '' }}</td></tr>
        @if(!$isProductInstantQuote)
        <tr><th>Coating:</th><td>{{ $data['p_coating'] ?? '' }}</td></tr>
        <tr><th>CAD Sample:</th><td>{{ $data['cad_sample'] ?? 'Yes' }}</td></tr>
        @endif
        <tr><th>Qty:</th><td>{{ $data['p_qty1'] ?? '' }}</td></tr>
        @if(!$isProductInstantQuote)
        <tr><th>File:</th><td>{{ $data['file_name'] ?? 'No file uploaded' }}</td></tr>
        @endif
        <tr><th>Message:</th><td>{{ $data['message'] ?? '' }}</td></tr>
        @if(!empty($data['source']))
        <tr><th>Source:</th><td>{{ $data['source'] }}</td></tr>
        @endif
        @if(!empty($data['page_url']))
        <tr><th>Page URL:</th><td><a href="{{ $data['page_url'] }}" target="_blank">{{ $data['page_url'] }}</a></td></tr>
        @endif
    </table>
</body>
</html>
