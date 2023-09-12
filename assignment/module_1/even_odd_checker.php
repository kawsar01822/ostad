<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Even Odd Checker</title>
    </head>

    <body>
        <div class="container">
            <form action="even_odd_checker.php" method="post" class="col-md-6 offset-md-3" onsubmit="return validateForm();">
                <h1>Even Odd Checker</h1>
                <div class="mb-3">
                    <label for="number" class="form-label">Number to check</label>
                    <input type="number" class="form-control" placeholder="write a number" id="number" name="number">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Check</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function validateForm()
            {
                var number = document.querySelector("#number").value.trim();
                if (!number) {
                    alert("Please write a number to check");
                    document.querySelector("#number").focus();
                    return false;
                }
                else{
                    return true;
                }
                return false;
            }
        </script>

    </body>
</html>


<?php

    // Task 4
    
    if(isset($_POST['submit']))
    {
        $number = $_POST['number'];
        $res = $number % 2 == 0?"Even":"Odd";
        echo "<br/><div class='alert alert-primary text-center col-md-4 offset-md-4' role='alert'><h4>$number is $res number</h4></div>";
    }
