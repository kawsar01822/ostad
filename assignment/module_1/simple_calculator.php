<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Simple Calculator</title>
    </head>

    <body>
        <div class="container">
            <form action="simple_calculator.php" method="post" class="col-md-6 offset-md-3" onsubmit="return validateForm();">
                <h1 class="text-center">Simple Calculator</h1>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="number1" class="form-label">Number 1</label>
                        <input type="number" class="form-control" placeholder="write a number" id="number1" name="number1">
                    </div>
                    <div class="mb-3 col">
                        <label for="number2" class="form-label">Number 2</label>
                        <input type="number" class="form-control" placeholder="write a number" id="number2" name="number2">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col">
                        <label for="number1" class="form-label">Operation</label>
                        <select class="form-control" id="operation" name="operation">
                            <option value="+">addition</option>
                            <option value="-">subtraction</option>
                            <option value="*">multiplication</option>
                            <option value="/">division</option>
                        </select>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Report</button>
                
                
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function validateForm()
            {
                var number1 = document.querySelector("#number1").value.trim();
                var number2 = document.querySelector("#number2").value.trim();

                if (!number1) {
                    alert("Please write a number");
                    document.querySelector("#number1").focus();
                    return false;
                }
                else if (!number2) {
                    alert("Please write a number");
                    document.querySelector("#number2").focus();
                    return false;
                }
                else
                {
                    return true;
                }

                return false;
            }
        </script>
    </body>
</html>


<?php

    // Task 7
    
    if(isset($_POST['submit']))
    {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];

        $res = null;

        if($operation == "+")
        {
            $res = "$number1 $operation $number2 = ".($number1+$number2);
        }
        else if($operation == "-")
        {
            $res = "$number1 $operation $number2 = ".($number1-$number2);
        }
        else if($operation == "*")
        {
            $res = "$number1 $operation $number2 = ".($number1*$number2);
        }
        else if($operation == "/")
        {
            $res = "$number1 $operation $number2 = ".number_format((float)($number1/$number2), 2, '.', '');
        }

        echo "<br/><div class='alert alert-primary text-center col-md-4 offset-md-4' role='alert'><h4>$res</h4></div>";
    }
