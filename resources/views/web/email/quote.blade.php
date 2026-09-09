<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { margin: 0; padding: 20px; background: #ffffff; font-family: Arial, sans-serif; color: #333333; }
        table { border-collapse: collapse; width: 450px; max-width: 100%; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #cccccc; padding: 9px 8px; text-align: left; font-size: 14px; line-height: 1.25; }
        th { background: #379bd3; color: #ffffff; width: 88px; font-weight: bold; }
        td { background: #ffffff; word-break: break-word; }
        a { color: #0b67d1; }
    </style>
</head>
<body>
    <table>
        @if((empty($data['source']) || !in_array($data['source'], ['Home Page Quote Form', 'Request quote page'], true)) && !empty($data['p_boxname']))<tr><th>Product Name:</th><td>{{ $data['p_boxname'] }}</td></tr>@endif
        @if(!empty($data['p_name']))<tr><th>Client Name:</th><td>{{ $data['p_name'] }}</td></tr>@endif
        @if(!empty($data['email']))<tr><th>Client Email:</th><td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td></tr>@endif
        @if(!empty($data['p_phone']))<tr><th>Client Phone:</th><td>{{ $data['p_phone'] }}</td></tr>@endif
        @if(!empty($data['p_length']))<tr><th>Length:</th><td>{{ $data['p_length'] }}</td></tr>@endif
        @if(!empty($data['p_width']))<tr><th>Width:</th><td>{{ $data['p_width'] }}</td></tr>@endif
        @if(!empty($data['p_height']))<tr><th>Height:</th><td>{{ $data['p_height'] }}</td></tr>@endif
        @if(!empty($data['p_unit']))<tr><th>Unit:</th><td>{{ $data['p_unit'] }}</td></tr>@endif
        @if(!empty($data['p_stock']))<tr><th>Stock:</th><td>{{ $data['p_stock'] }}</td></tr>@endif
        @if(!empty($data['p_color']))<tr><th>Color:</th><td>{{ $data['p_color'] }}</td></tr>@endif
        @if(!empty($data['p_coating']))<tr><th>Coating:</th><td>{{ $data['p_coating'] }}</td></tr>@endif
        @if(!empty($data['cad_sample']))<tr><th>CAD Sample:</th><td>{{ $data['cad_sample'] }}</td></tr>@endif
        @if(!empty($data['p_qty1']))<tr><th>Qty:</th><td>{{ $data['p_qty1'] }}</td></tr>@endif
        @if(!empty($data['file_name']))<tr><th>File:</th><td>{{ $data['file_name'] }} (attached)</td></tr>@endif
        @if(!empty($data['message']))<tr><th>Message:</th><td>{{ $data['message'] }}</td></tr>@endif
        @if(!empty($data['source']))<tr><th>Source:</th><td>{{ $data['source'] }}</td></tr>@endif
    </table>
</body>
</html>
