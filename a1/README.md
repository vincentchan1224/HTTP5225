Sample for getting most recent record:

SELECT m.date,c.name, c.symbol, m.close, m.market_cap
FROM cryptocurrencies c
JOIN market_price m ON c.id = m.crypto_id
WHERE c.name = 'Bitcoin'
ORDER BY m.date DESC
LIMIT 10;
