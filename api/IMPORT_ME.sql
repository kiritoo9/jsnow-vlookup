
CREATE DATABASE IF NOT EXISTS jsnow_vlookup;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`username`, `password`, `fullname`) VALUES
('jon', 'jon123', 'Jon Snow'),
('stark', 'stark123', 'Stark');
