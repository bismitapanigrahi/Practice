SELECT a.cus_name AS CustomerName1, b.cus_name AS CustomerName2, b.country 
FROM customers a, customers b 
WHERE a.cid <> b.cid ORDER BY a.country;