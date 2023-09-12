<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Weather Report</title>
    </head>

    <body>
        <div class="container">
            <form action="weather_report.php" method="post" class="col-md-6 offset-md-3" onsubmit="return validateForm();">
                <h1 class="text-center">Weather Report</h1>
                <div class="mb-3">
                    <label for="temperature" class="form-label">Temperature</label>
                    <input type="number" class="form-control" placeholder="write a temparature" id="temperature" name="temperature">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Report</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function validateForm(){
                var temperature = document.querySelector("#temperature").value.trim();
                if (!temperature) {
                    alert("Please write a temparature");
                    document.querySelector("#temperature").focus();
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

    // Task 5
    
    if(isset($_POST['submit']))
    {
        $temperature = $_POST['temperature'];
        $color = "";

        if($temperature>30){
            $res = "It is hot";
            $color = "danger";
        }
        else if($temperature>=20 && $temperature<=30){
            $res = "It is warm";
            $color = "success";
        }
        else if($temperature>=0 && $temperature<20){
            $res = "It is cold";
            $color = "warning";
        }
        else
        {
            $res = "It is freezing";
            $color = "info";
        }

        echo "<br/><div class='alert alert-$color text-center col-md-4 offset-md-4' role='alert'><h4>$res</h4></div>";
    }
