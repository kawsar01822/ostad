<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Grade Calculator</title>
</head>

<body>
    <div class="container">
        <form action="grade_calcuator.php" method="post" class="col-md-6 offset-md-3" onsubmit="return validateForm();">
            <h1>Grade Calculator</h1>
            <div class="input-group mb-3">
                <label class="input-group-text" for="test1">First Test </label>
                <input type="number" class="form-control" id="test1" name="test1" placeholder="score out of 100">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="test2">Second Test</label>
                <input type="number" class="form-control" id="test2" name="test2" placeholder="score out of 100">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="test3">Third Test</label>
                <input type="number" class="form-control" id="test3" name="test3" placeholder="score out of 100">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Grade</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function validateForm(){
            var test1 = document.querySelector("#test1").value.trim();
            var test2 = document.querySelector("#test2").value.trim();
            var test3 = document.querySelector("#test3").value.trim();

            if (test1<0 || test1>100){
                alert("Invalid score for First Test");
                document.querySelector("#test1").focus();
                return false;
            }
            else if (test2<0 || test2>100){
                alert("Invalid score for Second Test");
                document.querySelector("#test2").focus();
                return false;
            }
            else if (test3<0 || test3>100){
                alert("Invalid score for Third Test");
                document.querySelector("#test3").focus();
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

// Task 3

if(isset($_POST['submit']))
{
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $test3 = $_POST['test3'];
    $avg = ($test1 + $test2 + $test3) / 3;
    $avg = number_format((float)$avg, 2, '.', '');

    $res = null;
    $color = null;

    if($avg>=0 && $avg<=100)
    {
        if($avg>=80)
        {
            $res = "A+";
            $color = "success";
        }
        else if($avg>=70)
        {
            $res = "A";
            $color = "success";
        }
        else if($avg>=60)
        {
            $res = "A-";
            $color = "warning";
        }
        else if($avg>=50)
        {
            $res = "B";
            $color = "warning";
        }
        else if($avg>=40)
        {
            $res = "C";
            $color = "warning";
        }
        else if($avg>=33)
        {
            $res = "D";
            $color = "warning";
        }
        else
        {
            $res = "F";
            $color = "danger";
        }

        $result = "Average score :</b> $avg and You got $res";
    }
    else
    {
        $result = "Invalid score";
    }
    
    echo "<br/><div class='alert alert-$color text-center col-md-6 offset-md-3' role='alert'><h4>$result</h4></div>";
}