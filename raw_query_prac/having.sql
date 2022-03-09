SELECT odid, orderid, quantity FROM orderdetails 
WHERE odid BETWEEN 2 AND 5 HAVING quantity>10;