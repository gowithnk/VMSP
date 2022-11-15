<?php 
$phone = null;
if (isset($_GET['phone'])) {
  $phone = $_GET['phone'];
}

?>
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
    <form class="form-inline" action="checkout_1.php" method="post">
        <div class="main">
            <h2>Phone Number</h2>
            <input class="form-control" id="phone" value="<?php echo $phone ?>" placeholder="example: 0987654321" type="text" pattern="\d{10}" 
            title="Please enter 10 digits Phone no." required onkeypress="phoneno()" maxlength="10" name="phone" style="min-width: 280px;padding:0px 10px !important;"><br><br>
            <input class="btn btn-danger" type="submit" value="Confirm Checkout" style="border-radius:15px;">
        </div>
    </form>
</body>