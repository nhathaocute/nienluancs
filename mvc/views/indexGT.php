<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/nienluanCNTT/public/img/Coffee_Please__1_-removebg-preview.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <link rel="stylesheet" href="/nienluanCNTT/public/css/index.css" />
    <link rel="stylesheet" href="/nienluanCNTT/public/css/admin.css" />
    <?php 
        if (isset($data["css"])) {
            echo "<link rel='stylesheet' href='/nienluanCNTT/public/css/". $data["css"] .".css' />";
        }
    ?>
    <title>Mua Bán Nhà Đất</title>
    <style>

    </style>
</head>

<body>

    <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
$('.logout').click(function() {
    document.cookie = "idAdmin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.location.reload();

})
$('.logout').click(function() {
    document.cookie = "idUser=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.location.reload();

})
</script>


</html>