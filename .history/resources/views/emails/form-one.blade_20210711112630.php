<!DOCTYPE html>
<html>
<head>
    <title>Forms Community</title>
</head>
<body>
<h2>Hello</h2> <br><br>

You have got an email from : $details['first_name'] <br><br>

User details: <br><br>

Name: {{ $details['first_name'] }} {{ $detaile['last_name'] }} <br>
Email: {{ $details['email'] }} <br>
Phone: {{ $details['phone_number'] }} <br>
Company Name: {{ $details['company_name'] }} <br>

Thanks
</body>
</html>
