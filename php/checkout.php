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
<h2>Mark Out Time</h2><br>
<form action="checkout_1.php" method="post">
    <div class="form-outline">
        <input type="text" id="phone" value="<?php echo $phone ?>" pattern="\d{10}" title="Please enter 10 digits Phone no." required onkeypress="phoneno()" maxlength="10" name="phone" class="form-control" />
        <label class="form-label" id="phone">Confirm Phone No.</label>
    </div><br>
    <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block btn-lg mb-4">Confirm Checkout</button>
    </div>
</form>
</body>