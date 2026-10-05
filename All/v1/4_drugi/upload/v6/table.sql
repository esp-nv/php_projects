/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 9.12.2023 г.
 */
CREATE DATABASE `demo` ;
Use `demo`;
CREATE TABLE IF NOT EXISTS `tbl_files` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
