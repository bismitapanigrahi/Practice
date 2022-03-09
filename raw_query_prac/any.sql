SELECT contactname, postalcode, country FROM suppliers
WHERE country = ANY(SELECT country from customers WHERE cid>4);