-- Create database if not exists
CREATE DATABASE IF NOT EXISTS login;
USE login;

-- Create login1 table
CREATE TABLE IF NOT EXISTS login1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin account
INSERT INTO login1 (email, password) 
VALUES ('admin@gmail.com', '1234')
ON DUPLICATE KEY UPDATE password = '1234';
