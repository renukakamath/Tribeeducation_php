/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - tribe-education
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tribe-education` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tribe-education`;

/*Table structure for table `children` */

DROP TABLE IF EXISTS `children`;

CREATE TABLE `children` (
  `children_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`children_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `children` */

insert  into `children`(`children_id`,`firstname`,`lastname`,`place`,`phone`,`age`,`gender`) values 
(4,'vxcbxc','xcbxvb','cxbxcxc','xcbcx','xcbcxb','male'),
(5,'cxvcxv','cxvvcv','cxvcx','php xcxz','xcx','male');

/*Table structure for table `coordinators` */

DROP TABLE IF EXISTS `coordinators`;

CREATE TABLE `coordinators` (
  `coordinators_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`coordinators_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `coordinators` */

insert  into `coordinators`(`coordinators_id`,`login_id`,`firstname`,`lastname`,`place`,`phone`,`email`) values 
(1,7,'dgfsgf','cxvgfdg','dsgsdg','dsgdsg','ddsgdsg');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'renuka','kamath','user'),
(4,'renuka','123','manager'),
(7,'123','456','coordinator');

/*Table structure for table `managers` */

DROP TABLE IF EXISTS `managers`;

CREATE TABLE `managers` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `managers` */

insert  into `managers`(`manager_id`,`login_id`,`first_name`,`last_name`,`place`,`phone`,`email`) values 
(3,5,'renuka','kamath','ernakulam','9495736748','renukakamath@gmail.com');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=582 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification_id`,`notification`,`date`) values 
(574,'kamath','2022-06-22'),
(576,'dsgsgdsgds','2022-06-22'),
(577,'dsgsfgs','2022-06-22');

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `odetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `omaster_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`odetail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `orderdetails` */

insert  into `orderdetails`(`odetail_id`,`omaster_id`,`product_id`,`amount`,`quantity`,`date`) values 
(1,3,4,'500','2','2022-06-24');

/*Table structure for table `ordermaster` */

DROP TABLE IF EXISTS `ordermaster`;

CREATE TABLE `ordermaster` (
  `omaster_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`omaster_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ordermaster` */

insert  into `ordermaster`(`omaster_id`,`manager_id`,`total`,`date`) values 
(3,3,'1000','2022-06-24');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `omaster_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`omaster_id`,`amount`,`date`) values 
(2,3,'500','2022-06-24'),
(3,3,'500','2022-06-24');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) DEFAULT NULL,
  `product` varchar(20) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`product_id`,`manager_id`,`product`,`rate`,`quantity`) values 
(6,4,'food','300','2kg'),
(4,3,'sfdfd','500','1 kg'),
(7,4,'fdsrfd','dsgsfg','dafdf');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `public_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`public_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`public_id`,`login_id`,`firstname`,`lastname`,`place`,`phone`,`email`,`dob`,`gender`) values 
(1,2,'renuka','kamath','ernakulam','9495736748','renukakamath@gmail.com','2022-06-05','female');

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `public_id` int(11) DEFAULT NULL,
  `review` varchar(20) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `review` */

insert  into `review`(`review_id`,`public_id`,`review`,`rating`,`date`) values 
(3,1,'rev','rate','2022-06-23'),
(2,1,'rev','rate','2022-06-23'),
(4,2,'rev','rate','2022-06-23'),
(5,1,'cxfxb','dgdsgdsgds','2022-06-23');

/*Table structure for table `takeover` */

DROP TABLE IF EXISTS `takeover`;

CREATE TABLE `takeover` (
  `takeover_id` int(11) NOT NULL AUTO_INCREMENT,
  `public_id` int(11) DEFAULT NULL,
  `children_id` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`takeover_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `takeover` */

insert  into `takeover`(`takeover_id`,`public_id`,`children_id`,`date`) values 
(1,1,4,'2022-06-25'),
(12,1,4,'2022-06-25');

/*Table structure for table `works` */

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `children_id` int(11) DEFAULT NULL,
  `work` varchar(20) DEFAULT NULL,
  `images` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`work_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `works` */

insert  into `works`(`work_id`,`children_id`,`work`,`images`) values 
(1,4,'dsfdsgs','image/image_62b682f91c58d.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
