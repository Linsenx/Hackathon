CREATE TABLE `hackthon`.`register` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL ,
  `gender` TEXT NOT NULL ,
  `age` TINYINT NOT NULL ,
  `phone` TEXT NOT NULL ,
  `school` TEXT NOT NULL ,
  `grade` TEXT NOT NULL ,
  `team` TEXT NOT NULL ,
  `motto` TEXT NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `hackthon`.`volunteer` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `c1` TEXT NOT NULL ,
  `c2` TEXT NOT NULL ,
  `c3` TEXT NOT NULL ,
  `c4` TEXT NOT NULL ,
  `c5` TEXT NOT NULL ,
  `c6` TEXT NOT NULL ,
  `c7` TEXT NOT NULL ,
  `c8` TEXT NOT NULL ,
  `c9` TEXT NOT NULL ,
  `c10` TEXT NOT NULL ,
  `d1` TEXT NOT NULL ,
  `d2` TEXT NOT NULL ,
  `d3` TEXT NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `hackthon`.`spectator` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `c1` TEXT NOT NULL ,
  `c2` TEXT NOT NULL ,
  `c3` TEXT NOT NULL ,
  `c4` TEXT NOT NULL ,
  `c5` TEXT NOT NULL ,
  `c6` TEXT NOT NULL ,
  `c7` TEXT NOT NULL ,
  `c8` TEXT NOT NULL ,
  `c9` TEXT NOT NULL ,
  `c10` TEXT NOT NULL ,
  `d1` TEXT NOT NULL ,
  `d2` TEXT NOT NULL ,  
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;