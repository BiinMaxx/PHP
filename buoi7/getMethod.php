<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gửi dữ liệu bằng phương thức GET</title>
</head>
<body>
    <h1>Tìm kiếm</h1>
    <a href="test.php?a=7&b=8$c=10">Tham số</a>
    <a href="delete.php?mod=cart&act=delete&id=2">Delete</a>
    <form action="search.php" method="GET">
        <input type="text"  name="search">
        <input type="submit" name="btn_search" value="Tìm kiếm">
    </form>
</body>
</html>