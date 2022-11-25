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

<h2>Phone Number</h2>
<form action="pass.php" method="post">
    <div class="form-outline">
        <input id="phone" placeholder="example: 0987654321" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" 
        onkeypress="phoneno()" maxlength="10" name="phone" required class="form-control">
        <span id="message"></span>
        <label class="form-label" id="phone">Enter Phone No.</label>
    </div><br>
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block">Next</button>
    </div>
</form>