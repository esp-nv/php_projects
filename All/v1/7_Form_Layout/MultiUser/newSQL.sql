/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 22.12.2023 г.
 */
CREATE TABLE `admins` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `admins`
--
INSERT INTO `admins` (`id`, `name`, `username`, `password`, `role`, `created`) VALUES
(1, 'hope', 'hope-nv', '123', 'super_admin', '2021-01-23 09:51:05'),
(2, 'esp', 'esp_nv', 'asd', 'admin', '2021-01-24 05:41:25'),
(3, 'iskra', 'iskra.7', 'qwe', 'manager', '2021-01-23 09:57:54');
