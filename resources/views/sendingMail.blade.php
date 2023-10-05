<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>mail</title>
</head>

<body>
    <h1>Name :
    </h1>
    <div>{{ $formData['name'] }}</div>
    <h1>email :
    </h1>
    <div>{{ $formData['email'] }}</div>
    <h1>phone :
    </h1>
    <div>{{ $formData['phone'] }}</div>
    <h1>subject :
    </h1>
    <div>{{ $formData['subject'] }}</div>
    <div class="text-center">
        <h1>message : </h1>
        <div>{{ $formData['message'] }}<div>
            </div>
</body>

</html>
