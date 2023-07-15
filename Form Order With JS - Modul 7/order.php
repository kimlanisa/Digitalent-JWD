<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Coffe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <a class="navbar-brand" href="index.html">
                            <h1>Choose your favorite coffee ☕</h1>
                        </a>
                        <p class="lead">Enjoy your order!</p>
                        <hr>
                    </div>
                    
                        <div class="col-md-9 mx-auto">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Cappucino (Rp. 10.000)</h5>
                                    <p class="card-text">The classic cappucino with a rich espresso shot topped with steamed milk and foam.</p>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-cokelat" type="button" onclick="calculateTotal(10)">Choose</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Latte (Rp. 8.000)</h5>
                                    <p class="card-text">A smooth and creamy espresso-based drink made with espresso and steamed milk.</p>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-cokelat" type="button" onclick="calculateTotal(8)">Choose</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Mocha (Rp 6.000)</h5>
                                    <p class="card-text">A delightful combination of espresso, chocolate, and steamed milk topped with whipped cream.</p>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-cokelat" type="button" onclick="calculateTotal(6)">Choose</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Espresso (Rp 4.000)</h5>
                                    <p class="card-text">A concentrated shot of bold and intense coffee made with finely ground coffee beans.</p>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-cokelat" type="button" onclick="calculateTotal(4)">Choose</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <h4>Total Payment:</h4>
                                <p id="totalPayment">Rp 0</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script>
            function calculateTotal(price) {
                var totalPaymentElement = document.getElementById("totalPayment");
                var currentTotalPayment = parseFloat(totalPaymentElement.innerHTML.replace("Rp", ""));
                var newTotalPayment = currentTotalPayment + price;
                totalPaymentElement.innerHTML = "Rp" + newTotalPayment.toFixed(3);
            }
        </script>

        <style>
            .btn-cokelat {
                background-color: #835545;
                color: #fff;
            }

            .btn-cokelat:hover {
                background-color: #835545;
                color: #fff;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>