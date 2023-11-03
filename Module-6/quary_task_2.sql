SELECT 
    OI.order_id,
    p.name, 
    OI.qty, 
    (OI.qty * OI.unit_price) as total _amount
FROM order_items OI
LEFT JOIN products p ON OI.product_id= p.id
ORDER BY OI.order_id ASC;