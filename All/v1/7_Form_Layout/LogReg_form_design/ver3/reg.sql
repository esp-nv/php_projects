/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 1.05.2024 г.
 */

CREATE TABLE `users` ( `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`username` varchar(100) NOT NULL, 
`email` varchar(100) NOT NULL, 
`password` varchar(100) NOT NULL )
 ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users`(`username`, `email`, `password`) VALUES
('esp_nv', 'esp', '123'), 
( 'hope_nv', 'hope', 'asd');