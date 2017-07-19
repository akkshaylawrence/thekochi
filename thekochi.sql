CREATE TABLE `users` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` longtext NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
