<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to OA Tutors</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h1 style="color: #2196f3;">Welcome to OA Tutors, {{ $user->name }}!</h1>

        <p>Thank you for registering with Learning Hub by OA Tutors. Your account has been successfully created.</p>

        <p><strong>Account Details:</strong></p>
        <ul>
            <li><strong>Name:</strong> {{ $user->name }}</li>
            <li><strong>Email:</strong> {{ $user->email }}</li>
            <li><strong>Role:</strong> {{ $user->profile->role ?? 'Student' }}</li>
        </ul>

        <p>You can now log in to your account and start exploring our learning resources.</p>

        <p>If you have any questions, feel free to contact us at support@oatutors.com.</p>

        <p>Best regards,<br>
        The OA Tutors Team</p>

        <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
        <p style="font-size: 12px; color: #666;">
            This is an automated message. Please do not reply to this email.
        </p>
    </div>
</body>
</html>
