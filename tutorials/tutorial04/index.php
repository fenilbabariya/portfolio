
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        function calculate() {
            var date = new Date();
            var date2 = new Date(document.getElementById("bdate").value);

            var cdate = parseInt(date.getDate());
            var cmonth = parseInt(date.getMonth());
            var cyear = parseInt(date.getFullYear());

            var bdate = parseInt(date2.getDate());
            var month = parseInt(date2.getMonth());
            var year = parseInt(date2.getFullYear());

            var resyear = cyear - year;
            var resmonth = cmonth - month;
            var resdate = cdate - bdate;

            document.getElementById("result_age").innerHTML = resyear + " years " + resmonth + " months " + resdate + " days";
        }
    </script>
    <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
</style>
    <title>Simple Interest (Tutorial 4)</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="alert alert-primary text-center">
                        Calculator                    </div>
                    <div class="card-body">
                        <form action="result.php" method="post">
                        <p>Enter principal</p>
                         <input name="p" type="number" placeholder="principal" class="form-control mb-2" value="1000" required>
                        <p>Enter No of year</p>
                         <input name="n" type="number" placeholder="time" class="form-control mb-2" value="10" required>
                         <p>Enter Rate of intresset</p>
                         <input name="r" type="number" placeholder="rate of interesset" class="form-control mb-2" value="10" required>
                         <div class="row justify-content-center">
                             <div class="col-3">
                                 <button name="cal" class="btn btn-primary mb-2">Calculate</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>