SELECT o.orderid, o.orderdate, c.cus_name AS CustomerName 
FROM orders AS o LEFT JOIN customers AS c ON o.cid=c.cid;