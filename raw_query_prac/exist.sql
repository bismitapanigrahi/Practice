SELECT sname, country FROM suppliers WHERE 
EXISTS (SELECT pname FROM products WHERE products.sid=suppliers.sid AND price < 25);