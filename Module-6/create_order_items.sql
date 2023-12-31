CREATE TABLE `order_Items`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` BIGINT(20) UNSIGNED NOT NULL,
         FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
    `product_id` BIGINT(20) UNSIGNED NOT NULL,
        FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
    `qty` VARCHAR(50) NOT NULL,
    `unit_price` INT(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    
)