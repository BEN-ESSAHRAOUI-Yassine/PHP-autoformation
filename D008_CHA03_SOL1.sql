USE library_db;
SELECT title, author, price FROM library_books;
SELECT * FROM library_books WHERE price BETWEEN 100 AND 300;
SELECT * FROM library_books WHERE published_year > 2020;
SELECT * FROM library_books WHERE title LIKE '%PHP%';
SELECT * FROM library_books WHERE status <> 'Lost' ORDER BY published_year DESC;
SELECT DISTINCT author FROM library_books;
SELECT UPPER(title) AS title_uppercase, ROUND(price) AS rounded_price FROM library_books;