<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/output.css" rel="stylesheet">
    <title>Mercado Livro Brasil</title>
</head>
<body>
    <header class="bg-[#fff159] w-full p-4 flex flex-col justify-between">
        <div class="flex flex-row justify-around my-2" style="align-items: center">
            <p class="text-center font-bold">Mercado <br> Livro</p>
            <div style="width: 80%; margin: 0 0 1rem 1rem; padding-top: 1rem">
                <input type="search" name="search" id="searchBar" placeholder="Search" class="px-2 drop-shadow-md" style="width: 80%;">
                <label for="searchBar" class="bg-white px-2 drop-shadow-md w-1/12">O</label>
            </div>
        </div>

        <div class="flex justify-around" style="align-items: center;">
            <div class="mx-2">User's Adress</div>
            <nav class="flex flex-row text-xs justify-between text-gray-500 mx-2" style="width: 80%;">
                <ul class="mx-2">
                    <li>Categories</li>
                </ul>
                <ul class="mx-2">
                    <li>Daily Offers</li>
                </ul>
                <ul class="mx-2">
                    <li>History</li>
                </ul>
                <ul class="mx-2">
                    <li>Sell</li>
                </ul>
            </nav>
        </div>
    </header>

    <main class=" min-h-screen py-2 px-1">

    <p>So sad, no? There's nothing to see here! ;&#40</p>

    </main>

    <footer class="w-full text-xs flex flex-col p-2 border-t-2">
        <div>
            <p class=" font-bold">Github</p>
        </div>
        <p>Copyright © 2023 Coemelo.</p>
    </footer>
</body>
</html>