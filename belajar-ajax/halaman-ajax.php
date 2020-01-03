<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax</title>
    <script src="../belajar-ajax/jquery-3.4.1.min.js"></script>
</head>

<body>
    <button id="panggil-ajax">Panggil Ajax</button>
    <div id="tampilkan-data"></div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#panggil-ajax").click(function () {
                $.ajax({
                    method: "POST",
                    url: "keluarkan-data.php",
                    data: "nama=Rafi&umur=19",
                    success: function (data) {
                        $("#tampilkan-data").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>