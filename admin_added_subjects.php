<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

    <style>
        .box{
            flex-direction: column;
            width: 50%;
        }
        h3{
            font-size: 3rem;
    padding: 1rem;
        }
        .anchor{
            font-size: 1.5rem;
    margin-top: 2rem;
    background: #7d22b9;
    color: white;
    padding: 1rem;
    border-radius: 3rem;
        }
        .anchor:hover{
            color:var(--red);
        }
        .products .box-container .box{
            width: 40%;
        }
    </style>

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- show products  -->
    <section class="products">

        <h1 class="title">all events</h1>

        <div class="box-container">
            <div class="box">
                <h3>STQA</h3>
                <a class="anchor" href="sub1.php">See added papers</a>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h3>WN</h3>
                <a class="anchor" href="sub2.php">See added papers</a>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h3>Cybar Security</h3>
                <a class="anchor" href="sub3.php">See added papers</a>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h3>Advanced PHP</h3>
                <a class="anchor" href="sub4.php">See added papers</a>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h3>Data Mining</h3>
                <a class="anchor" href="sub5.php">See added papers</a>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h3>C#</h3>
                <a class="anchor" href="sub6.php">See added papers</a>
            </div>
        </div>
    </section>




    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>