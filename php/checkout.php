<!DOCTYPE html>
<html>

<head>
    <title>Check Out</title>
    <script>
        function phoneno() {
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k) >= 0))
                    e.preventDefault();
            });
        }
    </script>
    <style>
        .main {
            text-align: center;
        }
    </style>
</head>

<body>
    <form class="form-inline" action="checkout_1.php" method="post">
        <div class="main">
            <h2>Phone Number</h2>
            <input class="form-control" id="phone" placeholder="Please enter exactly 10 digits" type="text" pattern="\d{10}" 
            title="Please enter exactly 10 digits" required onkeypress="phoneno()" maxlength="10" name="phone" style="min-width: 280px;padding:0px 30px !important;"><br><br>
            <input class="btn btn-info" type="submit" value="Checkout" style="color: black; border-radius:15px;">
        </div>
    </form>
</body>

</html>