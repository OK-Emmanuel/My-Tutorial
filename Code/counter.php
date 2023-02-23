
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        *{
            font-family:Poppins;
        }
        .text-form{ border-radius: 15px}
    </style>
    <title>Document</title>
</head>
<body class="bg-primary">
    <div class="container mt-5 ">
        <div class="row mb-3">
        <div class="col-md-4 offset-md-4  text-form bg-white p-5 shadow">
                <h1 class="text-center">Word Counter Application</h1>
                <p class="text-center">This app counts the total number of words you input into it</p>
                    <form action="" method="POST" >
                        <textarea name="user_text" class="form-control mb-3" placeholder="Type or paste your text here" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn btn-primary w-100" name="submit" value="Submit">
                    </form>    
        </div>
        </div>
    
    
   

    <?php
    if(isset($_REQUEST['submit'])){
        $text = $_POST['user_text'];
        $text_count = str_word_count($text); ?>
         <div class="row">
        <div class="col-md-4 offset-md-4  text-form bg-white shadow justify-content-center pb-0">
       <p> The total number of words you wrote is <?= $text_count ?> </p>";
    <?php }
    ?>
        </div>
    </div>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>