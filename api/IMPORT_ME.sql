
CREATE DATABASE jsnow_vlookup;

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'jon', 'jon123', 'Jon Snow'),
(2, 'stark', 'stark123', 'Stark');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);