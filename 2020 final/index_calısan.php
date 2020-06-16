<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>final</title>
</head>
<body>


<form method="post">
    <div>
        <label>Hangi Gün İçin İzin İstiyorsunuz</label>
        <input id="tarih" type="date" name="tarih">
    </div>

    <div>
        <label>Kaç Saat İzin İstiyorsunuz</label>
        <input id="izin" type="text" style="margin-left: 40px; margin-top: 10px" name="izin">
    </div>

    <div style="margin-left: 300px; margin-top: 10px">
        <button type="submit">İzin İste</button>
    </div>
</form>

<a href="logout.php">sistemden çık</a>

<p>önceki izin istekleri</p>
</body>
</html>

