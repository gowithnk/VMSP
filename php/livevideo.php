<div id="my_camera"></div>
<br />

<script language="JavaScript">
    Webcam.set({
        width: 280,
        height: 220,
        image_format: 'jpeg',
        jpeg_quality: 300
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('image_input').value = data_uri;
            console.log(data_uri);
            document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
        });
    }
</script>