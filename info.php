<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM equipes WHERE id = $id";
;
$req = mysqli_query($conn,$sql);

if(!$req){
    echo 'makhdamaach';
}
$row = mysqli_fetch_row($req);


$sql2 = "SELECT * FROM groupes WHERE id = $row[14]";
;
$req2 = mysqli_query($conn,$sql2);

if(!$req2){
    echo 'makhdamaach';
}
$row2 = mysqli_fetch_row($req2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    

    <title>info</title>
</head>
<body id="allo" class="flex justify-center items-center h-screen">
    

<div class="w-4/5 bg-blue-300 border border-gray-200 rounded-lg shadow flex items-center justify-around	">
    
        <img class="w-1/4	" src="<?php echo $row[1] ?>" alt="" />
   
    <div class="p-5">
        <div class="flex justify-between w-full">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row[2] ?></h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row[13] ?> Pts</h5>
        </div>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Continent : <?php echo $row[5] ?></p>
        <p class = "font-black">Capitale : <?php echo $row[5] ?> 
            <br>Population :  <?php echo $row[6] ?> 
            <br>Joueur : <?php echo $row[3] ?> 
            <br>Groupe : <?php echo $row2[1] ?> 


    
    </p>
        
        
    </div>
</div>

    
</body>
</html>