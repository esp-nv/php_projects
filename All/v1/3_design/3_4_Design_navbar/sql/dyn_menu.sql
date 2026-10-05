/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 3.05.2024 г.
 */

CREATE TABLE `dyn_menu` (
  `id` int(11) NOT NULL auto_increment,
  `label` varchar(50) NOT NULL default '',
  `link_url` varchar(100) NOT NULL default '#',
  `parent_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

INSERT INTO `dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES
(1, 'Web Development', '', 0),
(2, 'Content Creation', '', 0),
(3, 'PHP Jobs', '/php_web_development_jobs.php', 1),
(4, 'OSCommerce projects', '/php_web_development_jobs.php', 1),
(5, 'Technical Writing Jobs', '/php_web_development_jobs.php', 2),
(6, 'Forum Posting', '/php_web_development_jobs.php', 2),
(7, 'Design and Artwork', '', 0),
(8, 'Blog Design Projects', '/php_web_development_jobs.php', 7),
(9, 'Freelance Website Design', '/php_web_development_jobs.php', 7),
(10, 'Sales and Marketing', '', 0),
(11, 'Internet Marketing Consulting', '/php_web_development_jobs.php', 10),
(12, 'Leads Generation Services', '/php_web_development_jobs.php', 10);
