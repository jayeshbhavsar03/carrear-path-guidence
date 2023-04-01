<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['add_event'])){

   $sub = $_POST['sub'];
   $que_one_a = $_POST['que_one_a'];
   $que_one_b = $_POST['que_one_b'];
   $que_one_or = $_POST['que_one_or'];
   
   $que_two_a = $_POST['que_two_a'];
   $que_two_b = $_POST['que_two_b'];
   $que_two_or = $_POST['que_two_or'];

   $que_three_a = $_POST['que_three_a'];
   $que_three_b = $_POST['que_three_b'];
   $que_three_or = $_POST['que_three_or'];

   $que_four_a = $_POST['que_four_a'];
   $que_four_b = $_POST['que_four_b'];
   $que_four_or = $_POST['que_four_or'];

   $que_five_a = $_POST['que_five_a'];
   $que_five_b = $_POST['que_five_b'];
   $que_five_or = $_POST['que_five_or'];

  

   

   
      $add_event_query = mysqli_query($conn, "INSERT INTO `que_paper`(sub, que_one_a, que_one_b, que_one_or, que_two_a, que_two_b, que_two_or, que_three_a, que_three_b, que_three_or, que_four_a, que_four_b, que_four_or, que_five_a, que_five_b, que_five_or) VALUES('$sub', '$que_one_a', '$que_one_b', '$que_one_or', '$que_two_a', '$que_two_b', '$que_two_or', '$que_three_a', '$que_three_b', '$que_three_or', '$que_four_a', '$que_four_b', '$que_four_or', '$que_five_a', '$que_five_b', '$que_five_or')") or die('query failed');

}

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

    <style>
      label{
         display: flex;
    font-size: 2rem;
      }
      .lab{
         justify-content: center;
    margin-top: 1rem;
      }
    </style>
</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">
        <form action="" method="post" enctype="multipart/form-data">
            <h1 class="title">ADD QUATION PAPER</h1>
            <label for="subject">select subject:</label>
            <select name="sub" class="form-control box">
                <option value="">-- select subject --</option>
                <option value="1">STQA</option>
                <option value="2">WN</option>
                <option value="3">Cybar Security</option>
                <option value="4">Advanced PHP</option>
                <option value="5">Data Mining</option>
                <option value="6">C#</option>
            </select>
            <!-- question 1 -->
            <label class="lab">Q. 1&#41;</label>
            <label>a&#41;</label>
            <input type="text" name="que_one_a" class="box" placeholder="enter question" required>
            <label>b&#41;</label>
            <input type="text" name="que_one_b" class="box" placeholder="enter question" required>
            <label>OR</label>
            <input type="text" name="que_one_or" class="box" placeholder="enter question" required>


             <!-- question 2 -->
            <label class="lab">Q. 2&#41;</label>
            <label>a&#41;</label>
            <input type="text" name="que_two_a" class="box" placeholder="enter question" required>
            <label>b&#41;</label>
            <input type="text" name="que_two_b" class="box" placeholder="enter question" required>
            <label>OR</label>
            <input type="text" name="que_two_or" class="box" placeholder="enter question" required>


             <!-- question 3 -->
            <label class="lab">Q. 3&#41;</label>
            <label>a&#41;</label>
            <input type="text" name="que_three_a" class="box" placeholder="enter question" required>
            <label>b&#41;</label>
            <input type="text" name="que_three_b" class="box" placeholder="enter question" required>
            <label>OR</label>
            <input type="text" name="que_three_or" class="box" placeholder="enter question" required>


             <!-- question 4 -->
            <label class="lab">Q. 4&#41;</label>
             <label>a&#41;</label>
            <input type="text" name="que_four_a" class="box" placeholder="enter question" required>
            <label>b&#41;</label>
            <input type="text" name="que_four_b" class="box" placeholder="enter question" required>
            <label>OR</label>
            <input type="text" name="que_four_or" class="box" placeholder="enter question" required>


             <!-- question 5 -->
            <label class="lab">Q. 1&#41;</label>
             <label>a&#41;</label>
            <input type="text" name="que_five_a" class="box" placeholder="enter question" required>
            <label>b&#41;</label>
            <input type="text" name="que_five_b" class="box" placeholder="enter question" required>
            <label>OR</label>
            <input type="text" name="que_five_or" class="box" placeholder="enter question" required>

            <input type="submit" style="margin-top: 5rem;" value="add question paper" name="add_event" class="btn">
        </form>

    </section>

    <!-- product CRUD section ends -->



    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>