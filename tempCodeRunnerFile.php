<?php
for($i=0;$i <=10;$i++){
    // echo $i;
}

if(isset($_POST['submit'])){
        $number=$_POST['number'];
    echo $number;
    if(empty($_POST['number'])){
        $error="Enter Your Mark";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main style="margin-top:100px">
        <div class="container">
        <div class="card">
         
            <?php if(isset($_GET['error'])) : ?>
                <div class="alert alert-danger m-3 p-3">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php endif; ?>
            <div class="card-body shadow">           
            <form method="POST" action="grade.php">
                <div class="mb-3">
                    <label for="" class="form-label">Enter Your Number</label>
                    <input type="text" class="form-control" name="number" id="" placeholder="Enter Your Number" />
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" name="submit" value="Show Grade">
                </div>
            </form>
            </div>
        </div>

        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>