CREATE DATABASE IF NOT EXISTS hotel;

USE hotel;
CREATE TABLE hotels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARSHAR(255),
    address VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(255),
    country VARCHAR(255),
    postal_code VARCHAR(255),
    phone_number VARCHAR(255),
    email VARCHAR(255),
    website VARCHAR(255),
    description TEXT
);

CREATE TABLE rooms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    hotel_id INT,
    rooms_type VARCHAR(50),
    description TEXT,
    price DECIMAL(10,2),
    availability BOOLEAN,
    FOREIGN KEY (hotel_id) REFERENCES hotels(id)
);

CREATE TABLE bookings(
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_id INT,
    user_id INT,
    check_in_date DATE,
    check_out_date DATE,
    number_guests INT,
    total_price DECIMAL(10,2),
    status VARCHAR(255), 
    FOREIGN KEY (room_id) REFERENCES rooms(id), 
    FOREIGN KEY (user_id) REFERENCES users(id),
);

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password_hash VARCHAR(255),
    phone_number VARCHAR(20),
    address VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(255),
    country VARCHAR(255),
    postal_code VARCHAR(20)
);

CREATE TABLE reviews(
    id INT AUTO_INCREMENT PRIMARY KEY,
    hotel_id INT,
    user_id INT,
    rating INT,
    comment TEXT,
    review_date DATE,
    FOREIGN KEY (hotel_id) REFERENCES hotels(id,)
    FOREIGN KEY (user_id) REFERENCES users(id,)
);