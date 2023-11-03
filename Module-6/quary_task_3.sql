SELECT
    c.name,
    SUM(p.price * oi.qty) AS total_revenue
FROM products p
LEFT JOIN order_items oi ON p.id = oi.product_id
LEFT JOIN categories c ON p.category_id = c.id
GROUP BY c.name
ORDER BY total_revenue DESC;