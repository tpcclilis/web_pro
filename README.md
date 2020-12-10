# web_pro
web pro 2020

# setup db:
nama db : perpus
CREATE TABLE `pengarang` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nama` varchar(50) DEFAULT NULL,
`email` varchar(25) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `buku` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`isbn` varchar(15) DEFAULT NULL,
`judul` varchar(50) DEFAULT NULL,
`idpengarang` int(50) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
