<!DOCTYPE html>
<html>
<head>
    <title>Login Link</title>
</head>
<body>
    <p>Hello,</p>
    
    <p>You can login to the system by clicking the following link:</p>
    
    <a href="{{ $loginLink }}">Login Link</a>
    
    <p>If the link doesn't work, please copy and paste the URL below into your browser's address bar:</p>
    
    <p>{{ $loginLink }}</p>
    
    <p>Thank you,</p>
    <p>Your Application Team</p>
</body>
</html>
