INSERT INTO suppliers (sname, city, postalcode, country)
SELECT cus_name, city, postalcode, country FROM customers;