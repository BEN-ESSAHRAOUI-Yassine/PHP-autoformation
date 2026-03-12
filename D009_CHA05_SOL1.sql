USE library_db;
SELECT SUM(price) AS total_inventory_value
FROM library_books;
SELECT COUNT(*) AS available_books
FROM library_books
WHERE status = 'Available';
SELECT 
    MAX(price) AS most_expensive_book,
    MIN(price) AS cheapest_book
FROM library_books;
SELECT AVG(price) AS average_book_price
FROM library_books;