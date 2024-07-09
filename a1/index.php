<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
        padding: 20px;
        margin: 0;
    }
    h2 {
        color: #444;
        border-bottom: 2px solid #666;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px 15px;
        margin-bottom: 8px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    strong {
        color: #0056b3;
    }
</style>
<?php
$host = 'localhost'; // or your host
$db   = 'http5225-a1';
$user = 'root';
$password = 'root';

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect){
  die("Connection Failed: " . mysqli_connect_error());
}

$query = 'SELECT m.date, c.name, c.symbol, m.close, m.market_cap
FROM cryptocurrencies c
JOIN market_price m ON c.id = m.crypto_id
WHERE c.name = "Bitcoin"
ORDER BY m.date DESC
LIMIT 10;';

$result = mysqli_query($connect, $query);

echo "<h2>Bitcoin Price Record:</h2>"; 
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>";
    echo "<strong>Date:</strong> {$row['date']} - <strong>Name:</strong> {$row['name']} - <strong>Symbol:</strong> {$row['symbol']} - <strong>Close:</strong> {$row['close']} - <strong>Market Cap:</strong> {$row['market_cap']}";
    echo "</li>";
}
echo "</ul>";


$query = 'SELECT m.date, c.name, c.symbol, m.close, m.market_cap
FROM cryptocurrencies c
JOIN market_price m ON c.id = m.crypto_id
WHERE c.name = "Ethereum"
ORDER BY m.date DESC
LIMIT 10;';

$result = mysqli_query($connect, $query);

echo "<h2>Etherum Price Record:</h2>";  
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>";
    echo "<strong>Date:</strong> {$row['date']} - <strong>Name:</strong> {$row['name']} - <strong>Symbol:</strong> {$row['symbol']} - <strong>Close:</strong> {$row['close']} - <strong>Market Cap:</strong> {$row['market_cap']}";
    echo "</li>";
}
echo "</ul>";

?>
