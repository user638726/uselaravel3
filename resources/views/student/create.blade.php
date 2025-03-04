<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3">
            <label for="mobile">Mobile:</label>
            <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
