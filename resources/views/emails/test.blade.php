<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="margin:0; padding:0; background: #f4f6f8; font-family:Arial, Helvitica, sans-serif; color:#222">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:10px; overflow:hidden;"> 
        <tr>
            <td style="padding:30px;">
                <h1 style="margin:0 0 20px; font-size:24px; text-align:center; color:#111827;">Message reçu</h1>
                <p style="font-size: 16px; line-height:1.6; white-space:pre-line; margin:0;">{{ $messageContent }}</p>
            </td>
        </tr>
        @if (!empty($logoPath) && file_exists($logoPath))
            <tr>
                <td align="center" style="padding: 22px 30px; border-top:1px solid #e5e7eb; background:#fafafa">
                    <p>Envoyé par</p>
                    <img src="{{ $message->embed($logoPath) }}" alt="Logo de l'entreprise" width="140" style="display: block; width:140px; max-width:100%; height:auto; border:0;">
                </td>
            </tr>
        @endif
    </table>
</body>
</html>