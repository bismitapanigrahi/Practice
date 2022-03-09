SELECT o.orderid, o.orderdate, c.cus_name AS CustomerName 
FROM orders AS o, customers AS c 
WHERE o.cid=c.cid;