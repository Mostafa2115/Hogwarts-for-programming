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
  `house_logo` VARCHAR(255) NOT NULL,
);

CREATE TABLE `Courses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL DEFAULT 'Unknown',
  `Description` varchar(250) NOT NULL DEFAULT 'Unknown',
  `professor_id` int DEFAULT NULL
);

CREATE TABLE `Professors` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
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
  `item_price` decimal(5,2) NOT NULL DEFAULT 0.00,
  `image` VARCHAR(255) NOT NULL,
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

INSERT INTO `Houses` (`house_name`, `total_points`, `house_description`, `house_logo`) VALUES
('Gryffindor', 0, 'probably know that some of Gryffindor’s most renowned members include Harry Potter and Albus Dumbledore. But did you know that the Gryffindor common room is located in one of the highest towers at Hogwarts, offering breathtaking views of the grounds? Or that their house ghost, Nearly Headless Nick, is famous for his unfortunate beheading mishap?', 'https://img.icons8.com/color/48/gryffindor.png'),
('Hufflepuff', 0, 'probably know that some of Hufflepuff’s most renowned members include Cedric Diggory and Newt Scamander. But did you know that the Hufflepuff common room is the coziest in Hogwarts, located near the kitchens and filled with warm, earthy tones? Or that Hufflepuff’s house ghost, the Fat Friar, is the friendliest of them all, always ready to offer a kind word?', 'https://img.icons8.com/color/48/hufflepuff.png'),
('Ravenclaw', 0, 'probably know that some of Ravenclaw’s most renowned members include Gilderoy Lockhart and Luna Lovegood. But did you know that Ravenclaw’s Grey Lady is the least talkative Hogwarts house ghost, or that Ravenclaw’s common room boasts the most stunning views of the castle grounds?', 'https://img.icons8.com/plasticine/100/ravenclaw.png'),
('Slytherin', 0, 'probably know that some of Slytherin’s most renowned members include Severus Snape and Draco Malfoy. But did you know that the Slytherin common room is located beneath the Black Lake, casting an eerie green light on its stone walls? Or that their house ghost, the Bloody Baron, is the most terrifying of all the Hogwarts ghosts?', 'https://img.icons8.com/color/48/slytherin.png');


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

INSERT INTO House_Points_Log (house_id, points_change, reason) VALUES
(1, 50, 'Winning the House Cup');


INSERT INTO Student_Items (student_id, item_id, quantity, total_price) VALUES
(1, 1, 1, 12.50),  
(2, 2, 2, 30.00);

INSERT INTO diagon_alley (item_name, item_price, image) VALUES
('Elder Wand', 39.99, 'https://img.icons8.com/emoji/48/magic-wand.png'),
('Nimbus 2000', 299.99, 'https://img.icons8.com/color/96/broom.png'),
('Hogwarts Express Ticket', 10.00, 'https://img.icons8.com/color/96/ticket.png'),
('Polyjuice Potion', 49.99, 'https://img.icons8.com/color/96/bottle.png'),
('Golden Snitch', 19.99, 'https://img.icons8.com/color/96/snitch.png'),
('Sorting Hat', 79.99, 'https://img.icons8.com/external-wanicon-flat-wanicon/64/external-witch-hat-halloween-wanicon-flat-wanicon.png'),
('Marauder’s Map', 24.99, 'https://img.icons8.com/color/96/map.png'),
('Hedwig (Owl)', 149.99, 'https://img.icons8.com/color/96/owl.png');

INSERT INTO `House_Points_Log` ( `house_id`, `points_change`, `reason`) VALUES
( 1, 10, 'Won the Quidditch match'),
( 2, -5, 'Late submission of homework'),
( 3, 15, 'Outstanding performance in Charms class'),
( 4, -10, 'Caught dueling in the corridors'),
(1, 20, 'Helped a fellow student in need'),
(2, 5, 'Perfect attendance in Herbology'),
(3, -3, 'Talking in class'),
(4, 10, 'Exceptional potion-making skills');
