USE library_db;
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);
INSERT INTO categories (name) VALUES
('Literature'),
('History'),
('Travel'),
('Cooking'),
('Technology'),
('Folklore');
ALTER TABLE library_books
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category
FOREIGN KEY (category_id) REFERENCES categories(id);
UPDATE library_books SET category_id = 1 WHERE id IN (1,2,3,4,5,6,7,8,10,11,18);
UPDATE library_books SET category_id = 6 WHERE id = 9;
UPDATE library_books SET category_id = 5 WHERE id IN (16,17);
UPDATE library_books SET category_id = 2 WHERE id IN (12,13);
UPDATE library_books SET category_id = 4 WHERE id = 14;
UPDATE library_books SET category_id = 3 WHERE id = 15;
SELECT 
    library_books.title,
    categories.name
FROM library_books
INNER JOIN categories
ON library_books.category_id = categories.id;