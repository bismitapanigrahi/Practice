SELECT o.orderid, o.orderdate, c.cus_name AS CustomerName, s.shipper_name 
FROM (orders AS o INNER JOIN customers AS c ON o.cid=c.cid)
INNER JOIN shippers AS s on o.shipperid=s.shipperid;