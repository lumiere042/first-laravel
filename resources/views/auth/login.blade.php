<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="font-poppins">

<div class="container w-[90%] mx-auto mt-10">
    <div class="card border border-black border-light-gray shadow p-5 rounded-lg max-w-[500px]">
        <form method="POST" action='/login' >
                @csrf()
            <h2 class="text-2xl font-extralight py-4">Welcome !</h2>
            <h1 class="text-3xl font-regular py-2">Sign in to</h2>

            <div class="">
                <label class="block "for="exampleInputEmail1">Email address</label>
                <input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
</body>
</html>