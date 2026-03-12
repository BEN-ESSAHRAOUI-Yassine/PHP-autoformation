USE library_db;
SELECT 
    status,
    COUNT(*) AS total_books
FROM library_books
GROUP BY status;
SELECT 
    author,
    SUM(price) AS total_book_value
FROM library_books
GROUP BY author;
SELECT 
    author,
    SUM(price) AS total_book_value
FROM library_books
GROUP BY author
HAVING SUM(price) > 500;