<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="text-center p-4 text-white">
                <img src="https://static.vecteezy.com/system/resources/previews/016/921/110/original/business-task-management-illustration-concept-on-white-background-vector.jpg" alt="" class="img-fluid mb-4" style="max-width: 70%;">
                <div class="rounded bg-dark p-3">
                    <h1>Welcome to Task Management System</h1>
                    <p>Please log in to access your tasks</p>
                    <a href="{{route('login')}} " class="btn btn-light">Login</a> <br>
                    <div class="my-3">
                        <a href=" {{route('register')}} " class="text-white">Don't have an account? <strong>Register here</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
