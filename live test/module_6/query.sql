-- Task 1: 

-- Write a SQL query to retrieve all the orders from the 'orders' table and their corresponding customer names from the 'customers' table. Use an INNER JOIN to combine the tables.

SELECT c.name,o.* 
FROM orders o
INNER JOIN customers c ON c.id = o.customer_id;



-- Task 2: .

-- Write a SQL query to retrieve all the products from the 'products' table and their corresponding category names from the 'categories' table. Use a LEFT JOIN to combine the tables and include all products, even if they don't have a category.

SELECT c.name,p.name FROM 
products p
LEFT JOIN categories c ON c.id = p.category_id;