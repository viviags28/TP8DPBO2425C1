-- ========================
-- Buat Database
-- ========================
CREATE DATABASE tp_mvc25;
USE tp_mvc25;

-- ========================
-- Tabel Departments
-- ========================
CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(100) NOT NULL
);

-- ========================
-- Tabel Lecturers
-- ========================
CREATE TABLE lecturers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nidn VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    join_date DATE,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES departments(id)
);

-- ========================
-- Data Awal Departments
-- ========================
INSERT INTO departments (department_name) VALUES
('Teknik Informatika'),
('Sistem Informasi'),
('Teknik Elektro'),
('Manajemen Informatika');

-- ========================
-- Data Awal Lecturers
-- ========================
INSERT INTO lecturers (name, nidn, phone, join_date, department_id) VALUES
('Dr. Andi Wijaya', '11223344', '081234567890', '2018-07-11', 1),
('Siti Marlina, M.Kom', '22334455', '082167890234', '2020-01-15', 2),
('Budi Santoso, M.T', '33445566', '085212345678', '2017-09-20', 3),
('Rina Lestari, M.Kom', '55667788', '081389002211', '2021-03-30', 1);
