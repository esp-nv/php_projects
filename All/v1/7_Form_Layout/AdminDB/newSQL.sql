/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 22.12.2023 г.
 */
CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` tinyint(100) NOT NULL,
  `joined` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `name`, `age`, `joined`) VALUES
(1, 'David Deacon', 23, '17/08/2023'),
(2, 'Sheri Warner', 19, '03/05/2023'),
(3, 'Sean Glover', 24, '24/07/2023'),
(4, 'John West', 17, '13/08/2023'),
(5, 'Rufus Clarke', 20, '28/07/2023'),
(6, 'Roosevelt Myers', 20, '25/07/2023'),
(7, 'Elvira Andrews', 22, '02/07/2023'),
(8, 'Richard	Cook', 26, '19/07/2023'),
(9, 'Lorenzo	Harris', 23, '01/07/2023'),
(10, 'Eduardo	Hoffman', 17, '03/07/2023');
