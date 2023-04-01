<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

    <style>
    .hrf {
        display: flex;
        justify-content: center;
        font-size: 2rem;
        padding: 1rem;
        color: white;
        background: #7d22b9;
        margin: 0.5rem 0rem;
        width: 40%;
        border-radius: 2rem;
    }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>All Subjects</h3>
    </div>

    <section class="about">

        <div class="flex">

            <a class="hrf" href="hsub1.php">STQA</a>
            <a class="hrf" href="hsub2.php">WN</a>
            <a class="hrf" href="hsub3.php">Cybar Security</a>
            <a class="hrf" href="hsub4.php">Advanced PHP</a>
            <a class="hrf" href="hsub5.php">Data Mining</a>
            <a class="hrf" href="hsub6.php">C#</a>

        </div>

    </section>

    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>