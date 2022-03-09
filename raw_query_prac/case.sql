SELECT sname, address, country FROM suppliers 
ORDER BY (CASE 
         WHEN address IS NULL THEN country
         ELSE address
         END) LIMIT 10;