<!DOCTYPE html>
<html>
<head>
    <title>Miaki Media Ltd.</title>
</head>
<body>
    <h4>Name : {{ $details['name'] }}</h4>
    <h4>Email : {{ $details['email'] }}</h4>
    <h4>Contact Number : {{ $details['phone'] }}</h4>
    <h4>CV : {{asset($details['cv'])}}</h4>
</body>
</html>