<?php

include 'config.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="relative">
        <nav class="flex justify-between p-6 ">
            <span class="font-black">
                Morocco 2030
            </span>
            <ul class="flex">
                <li class="mr-6">
                    <a class="text-gray-400  cursor-not-allowed" href="#">Accueil</a>
                </li>
                <li class="mr-6">
                    <a class="text-blue-500 hover:text-blue-800" href="#">Résérvation</a>
                </li>
                <li class="mr-6">
                    <a class="text-blue-500 hover:text-blue-800" href="#">Planification</a>
                </li>
                <li class="mr-6">
                    <a class="text-blue-500  hover:text-blue-800" href="#">Programme</a>
                </li>
            </ul>
        </nav>
        <div class="h-80 bg-sky-200	w-48 absolute right-0	top-32	 "></div>
        <div class="h-32 bg-sky-200	w-12 absolute 	top-32	 "></div>
        <div class="flex h-4/5 justify-center	items-center w-4/5 m-auto my-10" >
            <div class="z-40">
                <h1 class = "titre font-black text-5xl	leading-snug		">
                Maroc 2030
                <br>Un Rêve
                <br>Une Équipe
                <br>Une Victoire!
                </h1>
                <p class = "w-2/5	text-sm">
                    En 2030, le Maroc se prépare à accueillir le monde entier dans un spectacle époustouflant de passion et de compétition. Sous le ciel
                </p>
                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium  text-sm px-5 py-2.5 my-3">Voir Plus</button>
            </div>
            <img src="media/home.jpg" alt="" class="z-40">
        </div>
    </header>
    <main>
        <section class="flex flex-col items-center">
            <p class="titre font-black text-lg	leading-snug w-2/4 text-center	my-10" >Bienvenue sur la plateforme officielle de la Coupe du Monde 2030 au Maroc, où le monde entier se réunit pour célébrer le football dans toute sa splendeur !</p>
            

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-4/5">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
        </div>
    </div>
</div>

        </section>
        <section class="flex flex-col items-center">
            <h1 class="titre2 font-black text-lg	leading-snug w-2/4 text-center	my-10" > Explorez les détails de chaque groupe et suivez l'évolution de vos équipes préférées.</h1>
            <div class="bg-sky-300 w-4/5 rounded-xl">
                    

<div class="relative overflow-x-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                Matchs Joués
                </th>
                <th scope="col" class="px-6 py-3">
                Victoires
                </th>
                <th scope="col" class="px-6 py-3">
                Nuls
                </th>
                <th scope="col" class="px-6 py-3">
                Défaites
                </th>
                <th scope="col" class="px-6 py-3">
                Buts Pour
                </th>
                <th scope="col" class="px-6 py-3">
                Buts Contre
                </th>
                <th scope="col" class="px-6 py-3">
                Points
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes';
            $req = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_row($req)){


            ?>

        <tr class=" border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex gap-x-5 items-center">
                    <img src="<?php echo $row[1] ?>"  alt="" class="w-10">
                    <h2><?php echo $row[2] ?></h2>
                </th>
                <td class="text-center px-6 py-4">
                <?php echo $row[7] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[8] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[9] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[10] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[11] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[12] ?>
                </td>
                <td class="text-center px-6 py-4">
                <?php echo $row[13] ?>
                </td>
                <td>
                <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">
                    Info
                </button>
  

  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      
      <div class="modal-content py-4 text-left px-6">
        
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Simple Modal!</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <p>Modal content can go here</p>
        
        
        
      </div>
    </div>
  </div>

  <script src="script.js"> </script>
                </td>
            </tr>

            <?php
            }
            ?>

            
            
            
        </tbody>
    </table>
</div>

            </div>

        </section>
    </main>
</body>
</html>