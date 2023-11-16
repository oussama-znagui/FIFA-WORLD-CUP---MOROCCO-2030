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
        <section >
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center py-10">Filter les groupes</h1>
            <form action="" method = "POST" class="flex items-center justify-center gap-x-10">
                <label for="">Selectioner un groupe</label>
                <select name="groupe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5">
                    <option value="1">Groupe A</option>
                    <option value="2">Groupe B</option>
                    <option value="3">Groupe C</option>
                    <option value="4">Groupe D</option>
                    <option value="5">Groupe E</option>
                    <option value="6">Groupe F</option>
                    <option value="7">Groupe G</option>
                    <option value="8">Groupe H</option>
                </select>
                <input type="submit" name = "go" value="filtrer" id="btnSubmit" class="text-white   bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">

            </form>
        
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
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
                    if(@$_POST['go']){
                        $idE = $_POST['groupe'];
                        $sql = "SELECT * FROM equipes WHERE id_groupe = $idE";
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
                                        <a id = 'ff' href="info.php?id=<?php echo $row[0] ?>">info</a>
                                    </td>
                                </tr>
                                <script src='script.js' ></script>
                    
                    


                 

                    <?php
                    } }
                    ?>
                </tbody>
            </table>
   

            
        </section>
        <section class="groupes flex flex-col items-center">
            <h1 class="titre2 font-black text-lg	leading-snug w-2/4 text-center	my-10" > Explorez les détails de chaque groupe et suivez l'évolution de vos équipes préférées.</h1>
            <div class="bg-sky-300 w-4/5 rounded-xl">
                    

<div class="relative overflow-x-auto my-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
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
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 1';
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
                    <a href="info.php?id=<?php echo $row[0] ?>">info</a>
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 2';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 3';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 4';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 5';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 6';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 7';
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
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
        
        <tbody>
            <?php 
            $sql = 'SELECT * FROM equipes WHERE id_groupe = 8';
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
                    
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>


        </section>
    </main>
</body>
</html>