

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `tbl_admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'dyPatil');



CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `voter_id` int(7) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `voters_feedback` (
  `id` int(5) NOT NULL,
  `voter_id` int(7) NOT NULL,
  `email` varchar(32) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `voted_for`) VALUES
(1, 'Manan Gupta', 'manan@gmail.com', 1290323 , 'TMC'),
(2, 'Sumit Kuamr', 'sumit@reddif.com', 6145678, 'BJP'),
(3, 'Apurva Deep', 'apurva@deep.com', 8967401, 'AAP'),
(4, 'Abhishek Jain', 'abhijain@gmail.com', 123465, 'INC'),
(5, 'Abhi Uppal', 'ap@gmail.com', 1000105, 'BJP');


ALTER TABLE `tbl_admin`
ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_users`
ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

ALTER TABLE `tbl_users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

ALTER TABLE `registered_users`
ADD PRIMARY KEY (`id`);

ALTER TABLE `registered_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `voters_feedback`
ADD PRIMARY KEY (`id`);

ALTER TABLE `voters_feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

