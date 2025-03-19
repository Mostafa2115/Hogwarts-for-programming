DROP DATABASE IF EXISTS hogwarts;
create database hogwarts;
use hogwarts;

CREATE TABLE `Students` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `wand_id` int,
  `house_id` int
);

CREATE TABLE `Wands` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `wood` varchar(100) NOT NULL,
  `core` varchar(100) NOT NULL
);

CREATE TABLE `Houses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `house_name` varchar(100) NOT NULL,
  `total_points` int DEFAULT 0
);

CREATE TABLE `Courses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `professor_id` int
);

CREATE TABLE `Professors` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `role` ENUM('professor','admin')
);

CREATE TABLE `Student_Courses` (
  `student_id` int,
  `course_id` int,
  Primary key(`student_id`,`course_id`)
);

CREATE TABLE `House_Points_Log` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `house_id` int,
  `points_change` int,
  `reason` varchar(255),
  `timestamp` timestamp
);


CREATE TABLE `Challenges` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) UNIQUE NOT NULL,
  `course_id` int,
  `points` int,
  `challenge_type` varchar(100)
);

CREATE TABLE `Student_Challenge_Attempts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `challenge_id` int,
  `score` int,
  `completion_date` timestamp
);

CREATE TABLE `Student_Items` (
  `student_id` int,
  `item_id` int,
  `quantity` int,
  `total_price` decimal(5),
  Primary key(`student_id`,`item_id`)
);

CREATE TABLE `Diagon_Alley` (
  `item_id` int PRIMARY KEY AUTO_INCREMENT,
  `item_name` varchar(100),
  `item_price` decimal(5)
);

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

