CREATE DATABASE tlunews;
USE tlunews;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL CHECK (role IN (0, 1)) -- 0: khách, 1: quản trị viên
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE news (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO categories (name) VALUES
('Thời sự'),
('Thể thao'),
('Giải trí'),
('Kinh tế'),
('Công nghệ');
INSERT INTO news (title, content, image, created_at, category_id) VALUES
('Tin nóng hôm nay', 'Nội dung chi tiết của tin nóng hôm nay...', 'image1.jpg', NOW(), 1),
('Đội tuyển bóng đá Việt Nam chiến thắng', 'Đội tuyển bóng đá Việt Nam vừa giành chiến thắng...', 'image2.jpg', NOW(), 2),
('Phim bom tấn sắp ra mắt', 'Bộ phim bom tấn được mong chờ sẽ ra mắt tuần này...', 'image3.jpg', NOW(), 3),
('Giá vàng giảm mạnh', 'Thị trường vàng hôm nay ghi nhận giá giảm mạnh...', 'image4.jpg', NOW(), 4),
('Ứng dụng mới của AI', 'Công nghệ AI đang thay đổi cách chúng ta sống...', 'image5.jpg', NOW(), 5);
INSERT INTO users (username, password, role) VALUES
('admin1', 'admin1', 1), 
('guest1', 'admin1', 0);