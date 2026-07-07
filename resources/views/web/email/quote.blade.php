<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table { border-collapse: collapse; width: 100%; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #222; color: #fff; width: 220px; }
    </style>
</head>
<body>
    <h2>Quote Request</h2>
    <table>
        <tr><th>Source</th><td>{{ $data['source'] ?? '' }}</td></tr>
        <tr><th>Page URL</th><td>{{ $data['page_url'] ?? '' }}</td></tr>
        <tr><th>Name</th><td>{{ $data['p_name'] ?? '' }}</td></tr>
        <tr><th>Email</th><td>{{ $data['email'] ?? '' }}</td></tr>
        <tr><th>Phone</th><td>{{ $data['p_phone'] ?? '' }}</td></tr>
        <tr><th>Address</th><td>{{ $data['address'] ?? '' }}</td></tr>
        <tr><th>Company</th><td>{{ $data['company'] ?? '' }}</td></tr>
        <tr><th>Website</th><td>{{ $data['website'] ?? '' }}</td></tr>
        <tr><th>Product / Box Style</th><td>{{ $data['p_boxname'] ?? '' }}</td></tr>
        <tr><th>Material</th><td>{{ $data['p_stock'] ?? '' }}</td></tr>
        <tr><th>Color Options</th><td>{{ $data['p_color'] ?? '' }}</td></tr>
        <tr><th>Printing Options</th><td>{{ $data['p_type'] ?? '' }}</td></tr>
        <tr><th>Width</th><td>{{ $data['p_width'] ?? '' }}</td></tr>
        <tr><th>Length</th><td>{{ $data['p_length'] ?? '' }}</td></tr>
        <tr><th>Depth / Height</th><td>{{ $data['p_height'] ?? '' }}</td></tr>
        <tr><th>Unit</th><td>{{ $data['p_unit'] ?? '' }}</td></tr>
        <tr><th>Quantity</th><td>{{ $data['p_qty1'] ?? '' }}</td></tr>
        <tr><th>Message</th><td>{{ $data['message'] ?? '' }}</td></tr>
    </table>
</body>
</html>
