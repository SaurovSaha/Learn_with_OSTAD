SELECT
    c. id,
    c.name,
    c.location,
COUNT(o.id) as total_orders
FROM customers c 
LEFT JOIN orders o ON c.id= o.customer_id 
GROUP BY c.id, c.name, c.location 
ORDER BY total_orders DESC;