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
        @if(!empty($data['name']))<tr><th>Client Name:</th><td>{{ $data['name'] }}</td></tr>@endif
        @if(!empty($data['email']))<tr><th>Client Email:</th><td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td></tr>@endif
        @if(!empty($data['phone']))<tr><th>Client Phone:</th><td>{{ $data['phone'] }}</td></tr>@endif
        @if(!empty($data['company']))<tr><th>Company:</th><td>{{ $data['company'] }}</td></tr>@endif
        @if(!empty($data['subject_query']))<tr><th>Subject:</th><td>{{ $data['subject_query'] }}</td></tr>@endif
        @if(!empty($data['message']))<tr><th>Message:</th><td>{{ $data['message'] }}</td></tr>@endif
    </table>
</body>
</html>
