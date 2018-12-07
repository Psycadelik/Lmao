<?php
// run this script in the SQL prompt or phpmyadmin

//create users table
CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(90) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin','Editor') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

//create posts table

CREATE TABLE `posts` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) NOT NULL,
 `slug` varchar(255) NOT NULL UNIQUE,
 `views` int(11) NOT NULL DEFAULT '0',
 `image` varchar(255) NOT NULL,
 `body` text NOT NULL,
 `published` tinyint(1) NOT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1

//test data
//user
INSERT INTO `users` (`id`, `username`,`first_name`,`last_name`,`gender`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Adrian','Francis','Nduva','Male', 'adrian@admin.com', 'Admin', 'mypassword', '2018-01-08 12:52:58', '2018-01-08 12:52:58')

//posts
INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES (1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Read every day', 1, '2018-02-03 07:58:02', '2018-02-01 19:14:31'),
(2, 1, 'Second post on LifeBlog', 'second-post-on-lifeblog', 0, 'banner.jpg', 'This is the body of the second post on this site', 0, '2018-02-02 11:40:14', '2018-02-01 13:04:36')

//create topics table 

CREATE TABLE `topics` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL,
	`slug` varchar(255) NOT NULL UNIQUE
)

CREATE TABLE `post_topic` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`post_id` int(11) NOT NULL,
	`topic_id` int(11) NOT NULL
)

// insert data into topics table
INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Sports', 'sports'),
(2, 'Artculture', 'art'),
(3, 'Inspiration', 'inspiration')

//insert data into post_topics table
INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3)

?>