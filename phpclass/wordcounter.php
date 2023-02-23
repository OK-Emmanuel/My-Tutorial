<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <title>Document</title>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Word Counter Application</h1>
                <p>This simple application helps you count the number of words that your write, or paste</p>
                <!-- The Form -->
                <form action="" method="POST">
                <textarea name="mytext" id="" cols="30" rows="10" class="form-control mb-3"></textarea>
                <input type="submit" name="submit" value="Count Now" class="form-control">
                </form>
            </div>
        </div>
    </div>

    <?php 
    if(isset($_POST['submit'])){
        $text = $_POST['mytext'];
        $count = str_word_count($text);
        echo "<p class='text-white text-center'>" . $count . "</p>";
    }
    ?>
    
    <!-- String Replace -->
    <?php
    $sentence = "I have a dog";
    str_replace($sentence, "dog", "goat" );
    echo $sentence;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>