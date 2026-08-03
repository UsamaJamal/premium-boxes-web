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
        @if(!empty($data['source']))<tr><th>Source</th><td>{{ $data['source'] }}</td></tr>@endif
        @if(!empty($data['page_url']))<tr><th>Page URL</th><td>{{ $data['page_url'] }}</td></tr>@endif
        @if(!empty($data['p_name']))<tr><th>Name</th><td>{{ $data['p_name'] }}</td></tr>@endif
        @if(!empty($data['email']))<tr><th>Email</th><td>{{ $data['email'] }}</td></tr>@endif
        @if(!empty($data['p_phone']))<tr><th>Phone</th><td>{{ $data['p_phone'] }}</td></tr>@endif
        @if(!empty($data['address']))<tr><th>Address</th><td>{{ $data['address'] }}</td></tr>@endif
        @if(!empty($data['company']))<tr><th>Company</th><td>{{ $data['company'] }}</td></tr>@endif
        @if(!empty($data['website']))<tr><th>Website</th><td>{{ $data['website'] }}</td></tr>@endif
        @if(!empty($data['p_boxname']))<tr><th>Product / Box Style</th><td>{{ $data['p_boxname'] }}</td></tr>@endif
        @if(!empty($data['p_stock']))<tr><th>Material</th><td>{{ $data['p_stock'] }}</td></tr>@endif
        @if(!empty($data['p_color']))<tr><th>Color Options</th><td>{{ $data['p_color'] }}</td></tr>@endif
        @if(!empty($data['p_type']))<tr><th>Printing Options</th><td>{{ $data['p_type'] }}</td></tr>@endif
        @if(!empty($data['p_width']))<tr><th>Width</th><td>{{ $data['p_width'] }}</td></tr>@endif
        @if(!empty($data['p_length']))<tr><th>Length</th><td>{{ $data['p_length'] }}</td></tr>@endif
        @if(!empty($data['p_height']))<tr><th>Depth / Height</th><td>{{ $data['p_height'] }}</td></tr>@endif
        @if(!empty($data['p_unit']))<tr><th>Unit</th><td>{{ $data['p_unit'] }}</td></tr>@endif
        @if(!empty($data['p_qty1']))<tr><th>Quantity</th><td>{{ $data['p_qty1'] }}</td></tr>@endif
        @if(!empty($data['message']))<tr><th>Message</th><td>{{ $data['message'] }}</td></tr>@endif
    </table>
</body>
</html>
