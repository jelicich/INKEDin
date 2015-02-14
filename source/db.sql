CREATE DATABASE inkedin;
USE inkedin;


CREATE TABLE IF NOT EXISTS `styles` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `style` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `userstyles` (
  `user_id` int unsigned NOT NULL,
  `style_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(60) NOT NULL,
  `pc` int(4) NOT NULL,
  `province_id` smallint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`province_id`) REFERENCES `provinces`(`id`),
  KEY `pc` (`pc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `total_votes` int(5) NOT NULL DEFAULT '0',
  `total_value` int(5) NOT NULL DEFAULT '0',
  `used_ips` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `photo` char(30) NOT NULL,
  `tags` text,
  `description` text,
  `album_id` int unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` char(40) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `about` text,
  `availability` text,
  `phone` varchar(20),
  `address` varchar(100),
  `rating_id` int unsigned,
  `photo_id` int unsigned,
  `city_id` int(4) unsigned,
  `hash` char(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`rating_id`) REFERENCES `ratings`(`id`),
  FOREIGN KEY (`photo_id`) REFERENCES `photos`(`id`),
  FOREIGN KEY (`city_id`) REFERENCES `cities`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `followers` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `follower_id` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `user_id` int unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `user_id` int unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

ALTER TABLE `photos` ADD FOREIGN KEY (`album_id`) REFERENCES `albums`(`id`);

CREATE TABLE IF NOT EXISTS `conversations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_1_id` int unsigned NOT NULL,
  `user_2_id` int unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_1_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`user_2_id`) REFERENCES `users`(`id`),
  KEY `user_1_id` (`user_1_id`),
  KEY `user_2_id` (`user_2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`conversation_id`) REFERENCES `conversations`(`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  KEY `conversation_id` (`conversation_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- Kohana Session TABLE 

CREATE TABLE  `sessions` (
    `session_id` VARCHAR(24) NOT NULL,
    `last_active` INT UNSIGNED NOT NULL,
    `contents` TEXT NOT NULL,
    PRIMARY KEY (`session_id`),
    INDEX (`last_active`)
) ENGINE = MYISAM;

INSERT INTO `inkedin`.`styles` (`id`, `style`) VALUES (NULL, 'Old School'), (NULL, 'New School'), (NULL, 'Realista'), (NULL, 'Retrato'), (NULL, 'Oriental'), (NULL, 'Maori'), (NULL, 'Tribal'), (NULL, 'Watercolor'), (NULL, 'Celta'), (NULL, 'Otro');