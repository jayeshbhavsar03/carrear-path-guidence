<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}; 

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `que_paper` WHERE id = '$delete_id'") or die('query failed');
    header('location:sub1.php');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STQA Question Papers</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">
    <style>
    select {
        border: 1px solid;
        padding: 5px;
    }

    .input-sub {
        padding: 5px;
        background: var(--red);
        color: #7d22b9;
    }
    .sec{
        width: 80%;
    margin: auto;
    background: white;
    border-radius: 2rem;
    padding: 2rem 3rem;
    margin: 2rem auto;
    }
    .host-name, h5{
        font-size: 1.4rem;
        padding: 2px;
    }
    h5{
        margin-top:10px;
    }
    h6{
        font-size: 1.2rem;
        padding: 2px;
    }
    .host-name span{
        font-weight: 900;
    }
    .sp{
        color: var(--red);
    }
    </style>
</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">

        <h4 style="text-align: center;font-size: 1.5rem;text-transform: capitalize;padding: 1rem;">STQA Added Question Papers</h4>

        <?php  
        $i = 1;
        $select_products = mysqli_query($conn, "SELECT * FROM `que_paper` WHERE `sub`='1'") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
        <div class="sec" style="text-align: initial;padding: 2rem 3rem;">
            <div class="host-name"><span>Paper No: </span><?php echo $i++; ?></div>
            <div class="host-name "><span>Subject Name: </span> <span class="sp">STQA</span></div>
            <h5>Q.1&#41;</h5>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_one_a']; ?></div>
            <div class="host-name">B&#41; <?php echo $fetch_products['que_one_b']; ?></div>
            <h6>OR</h6>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_one_or']; ?></div>
            <h5>Q.2&#41;</h5>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_two_a']; ?></div>
            <div class="host-name">B&#41; <?php echo $fetch_products['que_two_b']; ?></div>
            <h6>OR</h6>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_two_or']; ?></div>
            <h5>Q.3&#41;</h5>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_three_a']; ?></div>
            <div class="host-name">B&#41; <?php echo $fetch_products['que_three_b']; ?></div>
            <h6>OR</h6>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_three_or']; ?></div>
            <h5>Q.4&#41;</h5>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_four_a']; ?></div>
            <div class="host-name">B&#41; <?php echo $fetch_products['que_four_b']; ?></div>
            <h6>OR</h6>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_four_or']; ?></div>
            <h5>Q.5&#41;</h5>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_five_a']; ?></div>
            <div class="host-name">B&#41; <?php echo $fetch_products['que_five_b']; ?></div>
            <h6>OR</h6>
            <div class="host-name">A&#41; <?php echo $fetch_products['que_five_or']; ?></div>

            <a href="sub1.php?delete=<?php echo $fetch_products['id']; ?>" onclick="return confirm('delete this paper?');" class="delete-btn">Delete Paper</a>
        </div>
        <?php
         }
        }else{      
             echo '<p class="empty">no paper added yet!</p>';
        }
        ?>
        </div>
    </section>


    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>