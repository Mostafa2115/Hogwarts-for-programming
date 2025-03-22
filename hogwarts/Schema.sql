-- Drop and Create Database
DROP DATABASE IF EXISTS hogwarts;
CREATE DATABASE hogwarts;
USE hogwarts;

-- Create Tables
CREATE TABLE `Students` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL UNIQUE,
  `email` varchar(100) NOT NULL UNIQUE,
  `hashedPassword` varchar(255) NOT NULL UNIQUE,
  `country_name` varchar(100) NOT NULL DEFAULT 'Unknown',
  `wand_id` int DEFAULT NULL,
  `house_id` int DEFAULT NULL
);

CREATE TABLE `Wands` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `wood` varchar(100) NOT NULL DEFAULT 'Unknown',
  `core` varchar(100) NOT NULL DEFAULT 'Unknown'
);

CREATE TABLE `Houses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `house_name` varchar(100) NOT NULL DEFAULT 'Unknown',
  `total_points` int DEFAULT 0,
  `house_description` varchar(1000) NOT NULL DEFAULT 'Unknown'
);

CREATE TABLE `Courses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL DEFAULT 'Unknown',
  `Description` varchar(250) NOT NULL DEFAULT 'Unknown',
  `professor_id` int DEFAULT NULL
);

CREATE TABLE `Professors` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(100) NOT NULL UNIQUE,
  `email` varchar(100) NOT NULL UNIQUE,
  `hashedPassword` varchar(255) NOT NULL UNIQUE,
  `role` ENUM('professor', 'admin') DEFAULT 'professor'
);

CREATE TABLE `Student_Courses` (
  `student_id` int,
  `course_id` int,
  PRIMARY KEY(`student_id`, `course_id`)
);

CREATE TABLE `House_Points_Log` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `house_id` int,
  `points_change` int DEFAULT 0,
  `reason` varchar(255) DEFAULT 'No reason provided',
  `timestamp` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `Challenges` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) UNIQUE NOT NULL,
  `course_id` int DEFAULT NULL,
  `points` int DEFAULT 0,
  `challenge_type` varchar(100) DEFAULT 'General',
  `start_date` DATETIME NOT NULL,
  `deadline` DATETIME NOT NULL,
  `description` varchar(1000) DEFAULT 'No description'
);

CREATE TABLE `Student_Challenge_Attempts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `challenge_id` int,
  `score` int DEFAULT 0,
  `completion_date` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `Student_Items` (
  `student_id` int,
  `item_id` int,
  `quantity` int DEFAULT 1,
  `total_price` decimal(5,2) DEFAULT 0.00,
  PRIMARY KEY(`student_id`, `item_id`)
);

CREATE TABLE `Diagon_Alley` (
  `item_id` int PRIMARY KEY AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `item_price` decimal(5,2) NOT NULL DEFAULT 0.00
);

-- Add Foreign Keys
ALTER TABLE `Students` ADD FOREIGN KEY (`house_id`) REFERENCES `Houses` (`id`);
ALTER TABLE `Students` ADD FOREIGN KEY (`wand_id`) REFERENCES `Wands` (`id`);

ALTER TABLE `House_Points_Log` ADD FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);
ALTER TABLE `House_Points_Log` ADD FOREIGN KEY (`house_id`) REFERENCES `Houses` (`id`);

ALTER TABLE `Courses` ADD FOREIGN KEY (`professor_id`) REFERENCES `Professors` (`id`);

ALTER TABLE `Challenges` ADD FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`);

ALTER TABLE `Student_Challenge_Attempts` ADD FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);
ALTER TABLE `Student_Challenge_Attempts` ADD FOREIGN KEY (`challenge_id`) REFERENCES `Challenges` (`id`);

ALTER TABLE `Student_Items` ADD FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);
ALTER TABLE `Student_Items` ADD FOREIGN KEY (`item_id`) REFERENCES `Diagon_Alley` (`item_id`);

ALTER TABLE `Student_Courses` ADD FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);
ALTER TABLE `Student_Courses` ADD FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`);

-- Insert Data
INSERT INTO Wands (wood, core) VALUES
('Holly', 'Phoenix Feather'),
('Yew', 'Phoenix Feather'),
('Vine', 'Dragon Heartstring'),
('Hawthorn', 'Unicorn Hair'),
('Elder', 'Thestral Tail Hair'),
('Cherry', 'Dragon Heartstring'),
('Oak', 'Phoenix Feather'),
('Walnut', 'Dragon Heartstring'),
('Cedar', 'Unicorn Hair');

INSERT INTO Houses (house_name, total_points, house_description) VALUES
('Gryffindor', 0, 'Bravery and chivalry.'),
('Slytherin', 0, 'Ambition and resourcefulness.'),
('Hufflepuff', 0, 'Loyalty and hard work.'),
('Ravenclaw', 0, 'Wisdom and creativity.');

INSERT INTO Professors (username, email, hashedPassword, role) VALUES
('dumbledore', 'dumbledore@hogwarts.edu', 'hashed_pass1', 'admin'),
('mcgonagall', 'mcgonagall@hogwarts.edu', 'hashed_pass2', 'professor'),
('snape', 'snape@hogwarts.edu', 'hashed_pass3', 'professor');

INSERT INTO Courses (course_name, Description, professor_id) VALUES
('Defense Against the Dark Arts', 'Learn to defend against dark magic.', 3),
('Potions', 'Master potion-making.', 3),
('Transfiguration', 'Change objects into different forms.', 2);

INSERT INTO Students (name, username, email, hashedPassword, country_name, wand_id, house_id) VALUES
('Harry Potter', 'harry', 'harry@hogwarts.edu', 'hashed_password1', 'UK', 1, 1),
('Hermione Granger', 'hermione', 'hermione@hogwarts.edu', 'hashed_password2', 'UK', 3, 1),
('Draco Malfoy', 'draco', 'draco@hogwarts.edu', 'hashed_password3', 'UK', 2, 2);

INSERT INTO Student_Courses (student_id, course_id) VALUES
(1, 1), (2, 2), (3, 3);

INSERT INTO Challenges (name, course_id, points, challenge_type, start_date, deadline, description) VALUES
('Dark Creatures Quiz', 1, 10, 'Quiz', '2025-03-01 10:00:00', '2025-03-05 23:59:59', 'Test knowledge of dark creatures.');

INSERT INTO Student_Challenge_Attempts (student_id, challenge_id, score) VALUES
(1, 1, 10), (2, 1, 15);

INSERT INTO House_Points_Log (student_id, house_id, points_change, reason) VALUES
(1, 1, 50, 'Winning the House Cup');

INSERT INTO Diagon_Alley (item_name, item_price) VALUES
('Wand Holster', 12.50),
('Spellbook', 15.00);

INSERT INTO Student_Items (student_id, item_id, quantity, total_price) VALUES
(1, 1, 1, 12.50),  
(2, 2, 2, 30.00);
