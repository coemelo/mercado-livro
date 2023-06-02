<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/output.css">
    <title>Login | Mercado Livro</title>
</head>
<body class="min-h-screen bg-slate-100">
    <header class="w-full bg-[#fff159] p-2" style="text-align: center;">
        <p class="font-bold">Mercado Livro</p>
    </header>

    <main class="min-h-full" style="padding-top: 5rem;">
        <form action="./Controller/Auth/login.controller.php" method="POST" class="p-4 flex flex-col w-2/5 rounded border" style="margin: 0 auto;">
            <input type="email" placeholder="E-mail" name="email" class="drop-shadow-md p-2 my-2 rounded bg-slate-100">
            <input type="password" placeholder="Password" name="password" class="drop-shadow-md my-2 p-2 mb-4 rounded bg-slate-100">

            <button type="submit" class="p-2 drop-shadow-md rounded bg-blue-600 font-bold text-white w-32" style="margin: 0 auto">LOGIN</button>
            <?php if($_GET["error"] === "nullparams"): echo "<p class='text-red-500' style='margin: 1rem auto;'>All fields are required</p>"; 
                elseif($_GET["error"] === "invalidInput"): echo "<p class='text-red-500' style='margin: 1rem auto;'>Invalid fields. Check it again</p>";
                elseif($_GET["error"] === "incorrectField"): echo "<p class='text-red-500' style='margin: 1rem auto;'>Invalid E-mail or Password. Check it again</p>";
                endif;
            ?>

        </form>
    </main>
</body>
</html>