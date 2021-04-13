<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{ $user['name'] }}</h2>
<br/>
Your registered email-id is {{ $user['email']}}
<br/>
Click on this link to activate your email address for pillersoft.
<br/>
<a href="http://localhost/website/verify/{{ $user['verification_code'] }}">http://localhost/website/verify/{{ $user['verification_code'] }}</a>
</body>

</html>