<form action="pass.php" method="post">
    <div class="main">
        <h2>Phone Number</h2>
        <input id="phone" placeholder="Please enter exactly 10 digits" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" name="phone" style="width: 280px; height: 35px; border-radius: 5px; padding: 10px; color: black;">
        <span id="message"></span><br><br>
        <input class="btn btn-info" type="submit" value="Next" style="border-radius: 15px; padding: 5px 20px;">
    </div>
</form>