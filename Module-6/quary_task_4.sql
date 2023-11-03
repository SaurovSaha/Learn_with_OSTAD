SELECT
    c.name,
    SUM(oi.unit_price * oi.qty) AS total_purchase_amount
FROM customers c
LEFT JOIN orders o ON c.id = o.customer_id
LEFT JOIN order_items oi ON o.id = oi.order_id
GROUP BY c.name
ORDER BY total_purchase_amount DESC
LIMIT 5;
