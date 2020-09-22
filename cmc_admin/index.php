<?php
session_start();
if(isset($_SESSION["username"])){
    header('Location: pages/home.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.0/tailwind.min.css">
    <title>Login</title>
</head>
<body class="bg-grey-lighter h-screen font-sans">
    <div class="container mx-auto h-full flex justify-center items-center">
        <div class="w-1/3">
            <h1 class="font-hairline mb-6 text-center">CMC PANEL</h1>
        <form action="script/login_script.php" method="post">
            <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label class="font-bold text-grey-darker block mb-2">Username or Email</label>
                    <input type="text" name="username" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Username">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-grey-darker block mb-2">Password</label>
                    <input type="password" name="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Password">
                </div>

                <div class="flex items-center justify-between">
                    <button name="login" class="bg-blue-500 w-full hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Login
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>