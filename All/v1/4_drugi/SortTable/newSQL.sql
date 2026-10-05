/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 22.12.2023 г.
 */
CREATE TABLE `member` (
  `member_id` INT(11) NOT NULL,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `middlename` VARCHAR(100) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `middlename`, `address`, `email`) VALUES
(1, 'John', 'Meyer', 'Doe', 'United States', 'johnDoe@gmail.com'),
(2, 'Jane', 'Doe', 'Meyer', 'United States', 'janeMeyer@gmail.com'),
(3, 'Andrea', 'Meyer', 'Doe', 'Mexico', 'andreaDoe@gmail.com'),
(4, 'Rocky', 'Dew', 'Doe', 'Mexico', 'rockyDoe@gmail.com');
