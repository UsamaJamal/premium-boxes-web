<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { margin: 0; padding: 20px; background: #ffffff; font-family: Arial, sans-serif; color: #333333; }
        table { border-collapse: collapse; width: 450px; max-width: 100%; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #cccccc; padding: 9px 8px; text-align: left; font-size: 14px; line-height: 1.25; }
        th { background: #379bd3; color: #ffffff; width: 120px; font-weight: bold; }
        td { background: #ffffff; word-break: break-word; }
        a { color: #0b67d1; }
    </style>
</head>
<body>
    <table>
        @foreach($data as $key => $value)
            @if(!empty($value) && is_string($value) && !in_array($key, ['subject', 'g-recaptcha-response', 'p_file']))
                <tr>
                    <th>{{ ucwords(str_replace(['_', 'p '], [' ', ''], $key)) }}:</th>
                    <td>{{ $value }}</td>
                </tr>
            @endif
        @endforeach
        
        @if(!empty($data['p_file']))
        <tr>
            <th>Attachment:</th>
            <td>A file was attached to this request.</td>
        </tr>
        @endif
    </table>
</body>
</html>
