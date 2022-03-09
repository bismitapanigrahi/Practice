SELECT COUNT(cid), country FROM customers
GROUP BY country ORDER BY country DESC;