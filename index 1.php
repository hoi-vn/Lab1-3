<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cua Hang Thuc an Nhanh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        header {
            background-color: #ff5722;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 20px auto;
        }
        .product {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
        }
        .product img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product h2 {
            color: #ff5722;
        }
        .product p {
            color: #555;
        }
        .buy-btn {
            background-color: #ff5722;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .buy-btn:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

<header>
    <h1>Cua Hang Thuc an Nhanh Yummy</h1>
</header>

<div class="container">
    <div class="product">
        <img src="https://via.placeholder.com/300" alt="Burger">
        <h2>Burger</h2>
        <p>Gia: 50,000 VND</p>
        <a href="#" class="buy-btn">dat hang</a>
    </div>

    <div class="product">
        <img src="https://via.placeholder.com/300" alt="Pizza">
        <h2>Pizza</h2>
        <p>Gia: 150,000 VND</p>
        <a href="#" class="buy-btn">dat hang</a>
    </div>

    <div class="product">
        <img src="https://via.placeholder.com/300" alt="Ga Ran">
        <h2>Ga Ran</h2>
        <p>Gia: 70,000 VND</p>
        <a href="#" class="buy-btn">dat hang</a>
    </div>
</div>

</body>
</html>