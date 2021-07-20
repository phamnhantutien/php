<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Tính giá trị gia tăng</h1>
<form action="/dem" method="POST">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Tên đăng nhập">
    </p>
    <p>
        <input type="text" name="price" placeholder="Giá">
    </p>
    <p>
        <input type="text" name="rate" placeholder="Tỉ lệ chiết khấu">
    </p>
    <p>
        <button type="submit">Tìm kết quả</button>
    </p>
</form>
</body>
</html>