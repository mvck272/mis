# MIS : MySQL database backup
#
# Generated: Friday 22. December 2023
# Hostname: localhost
# Database: mis
# --------------------------------------------------------


#
# Delete any existing table `activity_log`
#

DROP TABLE IF EXISTS `activity_log`;


#
# Table structure of table `activity_log`
#



CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=596 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO activity_log VALUES("82","Logout","Successfull logout!","2023-07-31 12:11:06");
INSERT INTO activity_log VALUES("83","Login","Login Failed!","2023-07-31 12:11:12");
INSERT INTO activity_log VALUES("84","Login","Successfull login superadmin!","2023-07-31 12:11:19");
INSERT INTO activity_log VALUES("85","Logout","Successfull logout!","2023-07-31 12:12:27");
INSERT INTO activity_log VALUES("86","Login","Login Failed!","2023-07-31 12:51:14");
INSERT INTO activity_log VALUES("87","Login","Login Failed!","2023-07-31 12:54:40");
INSERT INTO activity_log VALUES("88","Login","Login Failed!","2023-07-31 12:55:40");
INSERT INTO activity_log VALUES("89","Login","Login Failed!","2023-07-31 12:56:30");
INSERT INTO activity_log VALUES("90","Login","Login Failed!","2023-07-31 13:01:07");
INSERT INTO activity_log VALUES("91","Login","Login Failed!","2023-07-31 13:03:17");
INSERT INTO activity_log VALUES("92","Login","Login Failed!","2023-07-31 13:03:34");
INSERT INTO activity_log VALUES("93","Login","Login Failed!","2023-07-31 13:07:44");
INSERT INTO activity_log VALUES("94","Login","Successfull login superadmin!","2023-07-31 13:09:52");
INSERT INTO activity_log VALUES("95","Logout","Successfull logout!","2023-07-31 13:10:06");
INSERT INTO activity_log VALUES("96","Login","Login Failed!","2023-07-31 13:27:56");
INSERT INTO activity_log VALUES("97","Login","Successfull login superadmin!","2023-07-31 13:28:06");
INSERT INTO activity_log VALUES("98","Add","Added a Delivery Entry!","2023-07-31 13:36:00");
INSERT INTO activity_log VALUES("99","Logout","Successfull logout!","2023-07-31 13:38:05");
INSERT INTO activity_log VALUES("100","Login","Successfull login superadmin!","2023-07-31 13:39:14");
INSERT INTO activity_log VALUES("101","Logout","Successfull logout!","2023-07-31 14:02:20");
INSERT INTO activity_log VALUES("102","Login","Successfull login superadmin!","2023-07-31 14:10:43");
INSERT INTO activity_log VALUES("103","Add","Added a Delivery Entry!","2023-07-31 14:13:11");
INSERT INTO activity_log VALUES("104","Edit","Edited a employee details named: MA. DOLORES D. SALUD","2023-07-31 15:37:34");
INSERT INTO activity_log VALUES("105","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-3 )","2023-07-31 15:38:42");
INSERT INTO activity_log VALUES("106","Logout","Successfull logout!","2023-07-31 15:57:47");
INSERT INTO activity_log VALUES("107","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-02 02:19:00");
INSERT INTO activity_log VALUES("108","Login","Login Failed!","2023-08-02 02:20:36");
INSERT INTO activity_log VALUES("109","Login","Successfull login superadmin!","2023-08-02 02:20:42");
INSERT INTO activity_log VALUES("110","Backup","Successful new backup data [mis_backup_1690935651.sql]","2023-08-02 02:20:56");
INSERT INTO activity_log VALUES("111","Logout","Successfull logout!","2023-08-02 09:27:48");
INSERT INTO activity_log VALUES("112","Login","Successfull login superadmin!","2023-08-02 09:29:37");
INSERT INTO activity_log VALUES("113","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-1 )","2023-08-02 09:41:13");
INSERT INTO activity_log VALUES("114","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-1 )","2023-08-02 10:14:30");
INSERT INTO activity_log VALUES("115","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-03 02:16:18");
INSERT INTO activity_log VALUES("116","Login","Login Failed!","2023-08-03 02:16:25");
INSERT INTO activity_log VALUES("117","Login","Successfull login superadmin!","2023-08-03 02:16:36");
INSERT INTO activity_log VALUES("118","Add","Added a new stock: 11 - 1","2023-08-03 08:25:02");
INSERT INTO activity_log VALUES("119","Delete","Deleted a Stock!","2023-08-03 08:25:08");
INSERT INTO activity_log VALUES("120","Add","Added a new stock: 2 - 2","2023-08-03 08:28:46");
INSERT INTO activity_log VALUES("121","Add","Added a new stock: ALCHOHOL - 11","2023-08-03 08:29:47");
INSERT INTO activity_log VALUES("122","Delete","Deleted a Stock!","2023-08-03 08:29:52");
INSERT INTO activity_log VALUES("123","Delete","Deleted a Stock!","2023-08-03 08:29:57");
INSERT INTO activity_log VALUES("124","Add","Added a new stock: ALCHOHOL - we","2023-08-03 08:30:48");
INSERT INTO activity_log VALUES("125","Delete","Deleted a Stock!","2023-08-03 08:30:53");
INSERT INTO activity_log VALUES("126","Add","Added a new stock: ALCHOHOL - wwq","2023-08-03 08:31:11");
INSERT INTO activity_log VALUES("127","Add","Added a new stock: e - e","2023-08-03 08:32:30");
INSERT INTO activity_log VALUES("128","Delete","Deleted a Stock!","2023-08-03 08:32:43");
INSERT INTO activity_log VALUES("129","Add","Added a new stock: 2 - 22","2023-08-03 08:32:59");
INSERT INTO activity_log VALUES("130","Add","Added a new stock: 1 - 1","2023-08-03 08:36:52");
INSERT INTO activity_log VALUES("131","Edit","Edited a stocks details named: PAPER","2023-08-03 08:39:50");
INSERT INTO activity_log VALUES("132","Add","Added a new stock: 3 - 1","2023-08-03 08:42:28");
INSERT INTO activity_log VALUES("133","Delete","Deleted a Stock!","2023-08-03 08:42:37");
INSERT INTO activity_log VALUES("134","Delete","Deleted a Stock!","2023-08-03 08:42:41");
INSERT INTO activity_log VALUES("135","Add","Added a new stock: 3 - ","2023-08-03 08:44:14");
INSERT INTO activity_log VALUES("136","Add","Added a new stock:  - 1","2023-08-03 08:44:55");
INSERT INTO activity_log VALUES("137","Delete","Deleted a Stock!","2023-08-03 08:45:01");
INSERT INTO activity_log VALUES("138","Delete","Deleted a Stock!","2023-08-03 08:45:06");
INSERT INTO activity_log VALUES("139","Delete","Deleted a Stock!","2023-08-03 08:45:12");
INSERT INTO activity_log VALUES("140","Edit","Edited a stocks details named: PAPER","2023-08-03 08:46:12");
INSERT INTO activity_log VALUES("141","Edit","Edited a stocks details named: ENVELOPE","2023-08-03 08:47:17");
INSERT INTO activity_log VALUES("142","Edit","Edited a stocks details named: ALCHOHOL","2023-08-03 08:47:25");
INSERT INTO activity_log VALUES("143","Edit","Edited a stocks details named: ALCHOHOL","2023-08-03 08:48:01");
INSERT INTO activity_log VALUES("144","Edit","Edited a stocks details named: ALCHOHOL","2023-08-03 08:48:06");
INSERT INTO activity_log VALUES("145","Edit","Edited a stocks details named: ALCHOHOL","2023-08-03 08:48:13");
INSERT INTO activity_log VALUES("146","Add","Added a new stock: BALLPEN - 1","2023-08-03 08:51:35");
INSERT INTO activity_log VALUES("147","Edit","Edited a stocks details named: ALCHOHOL","2023-08-03 08:51:47");
INSERT INTO activity_log VALUES("148","Add","Added a new stock: 1 - 1","2023-08-03 08:56:37");
INSERT INTO activity_log VALUES("149","Delete","Deleted a Stock!","2023-08-03 08:56:41");
INSERT INTO activity_log VALUES("150","Logout","Successfull logout!","2023-08-03 09:52:34");
INSERT INTO activity_log VALUES("151","Login","Successfull login superadmin!","2023-08-03 09:52:48");
INSERT INTO activity_log VALUES("152","Logout","Successfull logout!","2023-08-03 09:52:56");
INSERT INTO activity_log VALUES("153","Login","Successfull login user!","2023-08-03 09:52:59");
INSERT INTO activity_log VALUES("154","Logout","Successfull logout!","2023-08-03 09:53:08");
INSERT INTO activity_log VALUES("155","Login","Successfull login superadmin!","2023-08-03 09:53:13");
INSERT INTO activity_log VALUES("156","Add","Added a new stock: Notebook - Customized Notebook","2023-08-03 09:56:14");
INSERT INTO activity_log VALUES("157","Add","Added a new stock: Button Pin - 3 inches in diameter","2023-08-03 09:56:49");
INSERT INTO activity_log VALUES("158","Add","Added a Delivery Entry [IAR Number: 2023-103-6]","2023-08-03 10:00:37");
INSERT INTO activity_log VALUES("159","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-6 )","2023-08-03 10:01:38");
INSERT INTO activity_log VALUES("160","Add","Added a Delivery Entry [IAR Number: 2023-103-8]","2023-08-03 10:12:19");
INSERT INTO activity_log VALUES("161","Add","Added a Delivery Entry [IAR Number: 2023-101-10]","2023-08-03 10:36:42");
INSERT INTO activity_log VALUES("162","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-10 )","2023-08-03 10:36:44");
INSERT INTO activity_log VALUES("163","Login","Successfull login superadmin!","2023-08-04 02:48:45");
INSERT INTO activity_log VALUES("164","Login","Successfull login superadmin!","2023-08-07 04:59:32");
INSERT INTO activity_log VALUES("165","Logout","Successfull logout!","2023-08-07 10:45:01");
INSERT INTO activity_log VALUES("166","Login","Successfull login superadmin!","2023-08-07 10:45:13");
INSERT INTO activity_log VALUES("167","Logout","Successfull logout!","2023-08-07 10:45:18");
INSERT INTO activity_log VALUES("168","Login","Successfull login superadmin!","2023-08-07 10:46:28");
INSERT INTO activity_log VALUES("169","Add","Added a new employee name: ALVIN S. BARBACENA","2023-08-07 10:47:55");
INSERT INTO activity_log VALUES("170","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-08 02:07:06");
INSERT INTO activity_log VALUES("171","Login","Login Failed!","2023-08-08 02:07:13");
INSERT INTO activity_log VALUES("172","Login","Successfull login superadmin!","2023-08-08 02:07:21");
INSERT INTO activity_log VALUES("173","Logout","Successfull logout!","2023-08-08 05:00:39");
INSERT INTO activity_log VALUES("174","Login","Successfull login superadmin!","2023-08-08 05:14:36");
INSERT INTO activity_log VALUES("175","Logout","Successfull logout!","2023-08-08 05:18:35");
INSERT INTO activity_log VALUES("176","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-11 02:58:50");
INSERT INTO activity_log VALUES("177","Login","Successfull login superadmin!","2023-08-11 02:58:59");
INSERT INTO activity_log VALUES("178","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-11 03:03:29");
INSERT INTO activity_log VALUES("179","Add","Added a Delivery Entry [IAR Number: 2023-103A-4]","2023-08-11 03:30:54");
INSERT INTO activity_log VALUES("180","Add","Added a Delivery Entry [IAR Number: 2023-103A-6]","2023-08-11 03:33:40");
INSERT INTO activity_log VALUES("181","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-16 02:37:28");
INSERT INTO activity_log VALUES("182","Login","Successfull login superadmin!","2023-08-16 02:37:55");
INSERT INTO activity_log VALUES("183","Add","Added a new stock: Fuel -  ","2023-08-16 02:39:10");
INSERT INTO activity_log VALUES("184","Add","Added a Delivery Entry [IAR Number: 2023-101-1]","2023-08-16 02:41:40");
INSERT INTO activity_log VALUES("185","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-1 )","2023-08-16 02:41:50");
INSERT INTO activity_log VALUES("186","Add","Added a new stock: battery terminal  - for generator","2023-08-16 02:46:00");
INSERT INTO activity_log VALUES("187","Add","Added a Delivery Entry [IAR Number: 2023-101-2]","2023-08-16 02:47:30");
INSERT INTO activity_log VALUES("188","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-2 )","2023-08-16 02:47:34");
INSERT INTO activity_log VALUES("189","Add","Added a Delivery Entry [IAR Number: 2023-101-3]","2023-08-16 03:26:31");
INSERT INTO activity_log VALUES("190","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-3 )","2023-08-16 03:26:35");
INSERT INTO activity_log VALUES("191","Login","Successfull login superadmin!","2023-08-31 04:06:34");
INSERT INTO activity_log VALUES("192","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-08-31 05:42:07");
INSERT INTO activity_log VALUES("193","Login","Successfull login superadmin!","2023-08-31 05:42:16");
INSERT INTO activity_log VALUES("194","Login","Successfull login superadmin!","2023-09-07 07:26:28");
INSERT INTO activity_log VALUES("195","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-07 07:28:45");
INSERT INTO activity_log VALUES("196","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-08 02:44:07");
INSERT INTO activity_log VALUES("197","Login","Successfull login superadmin!","2023-09-08 02:44:12");
INSERT INTO activity_log VALUES("198","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-4 )","2023-09-08 03:39:05");
INSERT INTO activity_log VALUES("199","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-09-08 08:45:43");
INSERT INTO activity_log VALUES("200","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-11 02:45:26");
INSERT INTO activity_log VALUES("201","Login","Successfull login superadmin!","2023-09-11 02:46:18");
INSERT INTO activity_log VALUES("202","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-12 03:16:59");
INSERT INTO activity_log VALUES("203","Login","Successfull login superadmin!","2023-09-12 03:17:09");
INSERT INTO activity_log VALUES("204","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-13 03:41:34");
INSERT INTO activity_log VALUES("205","Login","Successfull login superadmin!","2023-09-13 03:41:44");
INSERT INTO activity_log VALUES("206","Logout","Successfull logout!","2023-09-13 03:41:53");
INSERT INTO activity_log VALUES("207","Login","Login Failed!","2023-09-13 03:41:56");
INSERT INTO activity_log VALUES("208","Login","Login Failed!","2023-09-13 03:42:04");
INSERT INTO activity_log VALUES("209","Login","Successfull login superadmin!","2023-09-13 03:42:15");
INSERT INTO activity_log VALUES("210","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-2 )","2023-09-13 05:57:34");
INSERT INTO activity_log VALUES("211","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-14 02:21:42");
INSERT INTO activity_log VALUES("212","Login","Successfull login superadmin!","2023-09-14 02:21:48");
INSERT INTO activity_log VALUES("213","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-18 04:59:34");
INSERT INTO activity_log VALUES("214","Login","Successfull login superadmin!","2023-09-18 05:01:34");
INSERT INTO activity_log VALUES("215","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-19 05:20:42");
INSERT INTO activity_log VALUES("216","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-19 05:20:42");
INSERT INTO activity_log VALUES("217","Login","Successfull login superadmin!","2023-09-19 05:20:52");
INSERT INTO activity_log VALUES("218","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-20 03:58:02");
INSERT INTO activity_log VALUES("219","Login","Successfull login superadmin!","2023-09-20 03:58:14");
INSERT INTO activity_log VALUES("220","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-22 02:40:56");
INSERT INTO activity_log VALUES("221","Login","Successfull login superadmin!","2023-09-22 02:41:08");
INSERT INTO activity_log VALUES("222","Login","Login Failed!","2023-09-25 09:49:14");
INSERT INTO activity_log VALUES("223","Login","Successfull login superadmin!","2023-09-25 09:49:19");
INSERT INTO activity_log VALUES("224","Logout","Successfull logout!","2023-09-26 06:03:09");
INSERT INTO activity_log VALUES("225","Login","Successfull login superadmin!","2023-09-26 06:03:14");
INSERT INTO activity_log VALUES("226","Logout","Successfull logout!","2023-09-27 03:22:41");
INSERT INTO activity_log VALUES("227","Login","Successfull login superadmin!","2023-09-27 03:22:44");
INSERT INTO activity_log VALUES("228","Login","Successfull login superadmin!","2023-09-27 03:23:11");
INSERT INTO activity_log VALUES("229","Logout","Successfull logout!","2023-09-27 03:25:54");
INSERT INTO activity_log VALUES("230","Login","Successfull login superadmin!","2023-09-27 03:26:15");
INSERT INTO activity_log VALUES("231","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-09-27 04:27:27");
INSERT INTO activity_log VALUES("232","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-28 02:26:45");
INSERT INTO activity_log VALUES("233","Login","Successfull login superadmin!","2023-09-28 02:26:50");
INSERT INTO activity_log VALUES("234","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-09-28 03:21:31");
INSERT INTO activity_log VALUES("235","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-09-29 03:24:08");
INSERT INTO activity_log VALUES("236","Login","Successfull login superadmin!","2023-09-29 03:24:15");
INSERT INTO activity_log VALUES("237","Login","Successfull login superadmin!","2023-09-29 10:42:10");
INSERT INTO activity_log VALUES("238","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-02 02:10:12");
INSERT INTO activity_log VALUES("239","Login","Login Failed!","2023-10-02 02:11:45");
INSERT INTO activity_log VALUES("240","Login","Successfull login superadmin!","2023-10-02 02:11:52");
INSERT INTO activity_log VALUES("241","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-10-02 08:32:37");
INSERT INTO activity_log VALUES("242","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-10-02 08:48:19");
INSERT INTO activity_log VALUES("243","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-10-02 10:07:47");
INSERT INTO activity_log VALUES("244","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-02 10:47:47");
INSERT INTO activity_log VALUES("245","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-02 10:48:35");
INSERT INTO activity_log VALUES("246","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-02 10:49:09");
INSERT INTO activity_log VALUES("247","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-02 10:49:31");
INSERT INTO activity_log VALUES("248","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-03 02:04:14");
INSERT INTO activity_log VALUES("249","Login","Successfull login superadmin!","2023-10-03 02:04:23");
INSERT INTO activity_log VALUES("250","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-6 )","2023-10-03 02:09:44");
INSERT INTO activity_log VALUES("251","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-03 02:09:47");
INSERT INTO activity_log VALUES("252","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-03 08:51:23");
INSERT INTO activity_log VALUES("253","Logout","Successfull logout!","2023-10-04 02:15:04");
INSERT INTO activity_log VALUES("254","Login","Login Failed!","2023-10-04 02:15:08");
INSERT INTO activity_log VALUES("255","Login","Successfull login superadmin!","2023-10-04 02:15:16");
INSERT INTO activity_log VALUES("256","Add","Added a Delivery Entry [IAR Number: 2023-103-1]","2023-10-04 02:19:25");
INSERT INTO activity_log VALUES("257","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-04 02:19:36");
INSERT INTO activity_log VALUES("258","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-04 02:24:59");
INSERT INTO activity_log VALUES("259","Add","Added a new stock: PEN - Gel Pen, (0.5mm, Blue)","2023-10-04 02:30:45");
INSERT INTO activity_log VALUES("260","Add","Added a new stock: CERTIFICATE FRAME - Certificate frame, A4 size","2023-10-04 02:31:48");
INSERT INTO activity_log VALUES("261","Edit","Edited a stocks details named: PEN","2023-10-04 02:32:00");
INSERT INTO activity_log VALUES("262","Add","Added a Delivery Entry [IAR Number: 2023-103-2]","2023-10-04 02:34:25");
INSERT INTO activity_log VALUES("263","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-2 )","2023-10-04 02:34:33");
INSERT INTO activity_log VALUES("264","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-04 02:35:35");
INSERT INTO activity_log VALUES("265","Add","Added a Delivery Entry [IAR Number: 2023-101-4]","2023-10-04 02:39:32");
INSERT INTO activity_log VALUES("266","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-04 08:35:05");
INSERT INTO activity_log VALUES("267","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-04 09:29:54");
INSERT INTO activity_log VALUES("268","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-04 10:35:15");
INSERT INTO activity_log VALUES("269","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-05 02:36:15");
INSERT INTO activity_log VALUES("270","Login","Successfull login superadmin!","2023-10-05 02:36:20");
INSERT INTO activity_log VALUES("271","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-05 03:46:24");
INSERT INTO activity_log VALUES("272","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-6 )","2023-10-05 04:08:52");
INSERT INTO activity_log VALUES("273","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-6 )","2023-10-05 04:18:42");
INSERT INTO activity_log VALUES("274","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-05 04:33:49");
INSERT INTO activity_log VALUES("275","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-05 04:34:21");
INSERT INTO activity_log VALUES("276","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-06 02:38:04");
INSERT INTO activity_log VALUES("277","Login","Successfull login superadmin!","2023-10-06 02:38:12");
INSERT INTO activity_log VALUES("278","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-06 08:16:01");
INSERT INTO activity_log VALUES("279","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-06 11:27:48");
INSERT INTO activity_log VALUES("280","Login","Successfull login superadmin!","2023-10-06 11:28:08");
INSERT INTO activity_log VALUES("281","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-09 09:57:09");
INSERT INTO activity_log VALUES("282","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-10 02:13:39");
INSERT INTO activity_log VALUES("283","Login","Successfull login superadmin!","2023-10-10 02:13:48");
INSERT INTO activity_log VALUES("284","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-10 11:18:10");
INSERT INTO activity_log VALUES("285","Login","Successfull login superadmin!","2023-10-10 11:27:14");
INSERT INTO activity_log VALUES("286","Add","Added a Delivery Entry [IAR Number: 2023-101-5]","2023-10-11 05:51:31");
INSERT INTO activity_log VALUES("287","Login","Successfull login superadmin!","2023-10-11 11:28:56");
INSERT INTO activity_log VALUES("288","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-13 02:39:14");
INSERT INTO activity_log VALUES("289","Login","Login Failed!","2023-10-13 02:39:26");
INSERT INTO activity_log VALUES("290","Login","Login Failed!","2023-10-13 02:39:31");
INSERT INTO activity_log VALUES("291","Login","Successfull login superadmin!","2023-10-13 02:39:47");
INSERT INTO activity_log VALUES("292","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-4 )","2023-10-13 02:57:08");
INSERT INTO activity_log VALUES("293","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0005 )","2023-10-13 09:04:46");
INSERT INTO activity_log VALUES("294","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0005 )","2023-10-13 09:45:14");
INSERT INTO activity_log VALUES("295","Login","Successfull login superadmin!","2023-10-18 04:17:12");
INSERT INTO activity_log VALUES("296","Login","Successfull login superadmin!","2023-10-19 02:42:25");
INSERT INTO activity_log VALUES("297","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0005 )","2023-10-19 03:00:38");
INSERT INTO activity_log VALUES("298","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0005 )","2023-10-19 03:02:25");
INSERT INTO activity_log VALUES("299","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-4 )","2023-10-19 03:04:10");
INSERT INTO activity_log VALUES("300","Add","Added a Delivery Entry [IAR Number: 2023-103A-1]","2023-10-19 05:27:54");
INSERT INTO activity_log VALUES("301","Login","Successfull login superadmin!","2023-10-20 03:09:00");
INSERT INTO activity_log VALUES("302","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-23 02:27:45");
INSERT INTO activity_log VALUES("303","Login","Successfull login superadmin!","2023-10-23 02:28:00");
INSERT INTO activity_log VALUES("304","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-23 03:08:03");
INSERT INTO activity_log VALUES("305","Login","Successfull login superadmin!","2023-10-23 08:36:53");
INSERT INTO activity_log VALUES("306","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-10-23 09:05:18");
INSERT INTO activity_log VALUES("307","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-24 02:10:56");
INSERT INTO activity_log VALUES("308","Login","Successfull login superadmin!","2023-10-24 02:20:59");
INSERT INTO activity_log VALUES("309","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-24 04:23:12");
INSERT INTO activity_log VALUES("310","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-24 09:26:56");
INSERT INTO activity_log VALUES("311","Add","Added a Delivery Entry [IAR Number: 2023-103-1]","2023-10-24 10:27:06");
INSERT INTO activity_log VALUES("312","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-25 02:28:42");
INSERT INTO activity_log VALUES("313","Login","Successfull login superadmin!","2023-10-25 02:28:50");
INSERT INTO activity_log VALUES("314","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:02:44");
INSERT INTO activity_log VALUES("315","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:04:55");
INSERT INTO activity_log VALUES("316","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:05:06");
INSERT INTO activity_log VALUES("317","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:09:47");
INSERT INTO activity_log VALUES("318","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:14:24");
INSERT INTO activity_log VALUES("319","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-25 04:33:20");
INSERT INTO activity_log VALUES("320","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 05:06:40");
INSERT INTO activity_log VALUES("321","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:12:27");
INSERT INTO activity_log VALUES("322","Generate Excel file","Generate Inspection &amp; Acceptance Report (  )","2023-10-25 10:30:45");
INSERT INTO activity_log VALUES("323","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:30:57");
INSERT INTO activity_log VALUES("324","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:31:30");
INSERT INTO activity_log VALUES("325","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:32:56");
INSERT INTO activity_log VALUES("326","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:33:07");
INSERT INTO activity_log VALUES("327","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:33:18");
INSERT INTO activity_log VALUES("328","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:49:07");
INSERT INTO activity_log VALUES("329","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:49:34");
INSERT INTO activity_log VALUES("330","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-10-25 10:49:49");
INSERT INTO activity_log VALUES("331","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-25 10:50:45");
INSERT INTO activity_log VALUES("332","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-25 10:51:21");
INSERT INTO activity_log VALUES("333","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-25 10:51:33");
INSERT INTO activity_log VALUES("334","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-26 02:05:42");
INSERT INTO activity_log VALUES("335","Login","Successfull login superadmin!","2023-10-26 02:05:50");
INSERT INTO activity_log VALUES("336","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-26 04:40:19");
INSERT INTO activity_log VALUES("337","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:31:42");
INSERT INTO activity_log VALUES("338","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:33:47");
INSERT INTO activity_log VALUES("339","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:34:06");
INSERT INTO activity_log VALUES("340","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:36:57");
INSERT INTO activity_log VALUES("341","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:36:59");
INSERT INTO activity_log VALUES("342","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:37:31");
INSERT INTO activity_log VALUES("343","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:37:33");
INSERT INTO activity_log VALUES("344","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-10-0003 )","2023-10-26 05:37:57");
INSERT INTO activity_log VALUES("345","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-26 05:43:32");
INSERT INTO activity_log VALUES("346","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-26 06:02:28");
INSERT INTO activity_log VALUES("347","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-26 06:02:33");
INSERT INTO activity_log VALUES("348","Add","Added a new stock: 1 - 
What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","2023-10-26 09:01:06");
INSERT INTO activity_log VALUES("349","Edit","Edited a stocks details named: 1","2023-10-26 09:01:22");
INSERT INTO activity_log VALUES("350","Delete","Deleted a Stock!","2023-10-26 09:01:28");
INSERT INTO activity_log VALUES("351","Add","Added a new employee name: SDSF","2023-10-26 09:02:18");
INSERT INTO activity_log VALUES("352","Delete","Deleted a Employee!","2023-10-26 09:02:21");
INSERT INTO activity_log VALUES("353","Add","Added a new employee name: SA","2023-10-26 09:11:12");
INSERT INTO activity_log VALUES("354","Delete","Deleted a Employee!","2023-10-26 09:11:21");
INSERT INTO activity_log VALUES("355","Add","Added a new employee name: 3131","2023-10-26 09:12:45");
INSERT INTO activity_log VALUES("356","Delete","Deleted a Employee!","2023-10-26 09:13:54");
INSERT INTO activity_log VALUES("357","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-26 09:19:41");
INSERT INTO activity_log VALUES("358","Login","Successfull login superadmin!","2023-10-27 03:07:04");
INSERT INTO activity_log VALUES("359","Add","Added a new stock: s - s","2023-10-27 03:07:18");
INSERT INTO activity_log VALUES("360","Edit","Edited a stocks details named: s","2023-10-27 03:07:28");
INSERT INTO activity_log VALUES("361","Edit","Edited a stocks details named: s","2023-10-27 03:08:12");
INSERT INTO activity_log VALUES("362","Edit","Edited a stocks details named: s","2023-10-27 03:08:41");
INSERT INTO activity_log VALUES("363","Edit","Edited a stocks details named: s","2023-10-27 03:08:48");
INSERT INTO activity_log VALUES("364","Edit","Edited a stocks details named: PEN","2023-10-27 03:11:26");
INSERT INTO activity_log VALUES("365","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-10-31 02:12:50");
INSERT INTO activity_log VALUES("366","Login","Successfull login superadmin!","2023-10-31 02:13:02");
INSERT INTO activity_log VALUES("367","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:14:39");
INSERT INTO activity_log VALUES("368","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:16:33");
INSERT INTO activity_log VALUES("369","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:41:38");
INSERT INTO activity_log VALUES("370","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:42:03");
INSERT INTO activity_log VALUES("371","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-31 02:42:23");
INSERT INTO activity_log VALUES("372","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:55:16");
INSERT INTO activity_log VALUES("373","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 02:56:52");
INSERT INTO activity_log VALUES("374","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0003 )","2023-10-31 03:17:57");
INSERT INTO activity_log VALUES("375","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-1 )","2023-10-31 03:18:09");
INSERT INTO activity_log VALUES("376","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-1 )","2023-10-31 03:18:25");
INSERT INTO activity_log VALUES("377","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 03:18:35");
INSERT INTO activity_log VALUES("378","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 08:37:04");
INSERT INTO activity_log VALUES("379","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 08:42:23");
INSERT INTO activity_log VALUES("380","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-10-31 08:42:27");
INSERT INTO activity_log VALUES("381","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-03 01:15:08");
INSERT INTO activity_log VALUES("382","Login","Successfull login superadmin!","2023-11-03 01:15:25");
INSERT INTO activity_log VALUES("383","Generate Excel file","Generate Requistion and Issue Slip ( 2023-10-0001 )","2023-11-03 01:17:18");
INSERT INTO activity_log VALUES("384","Login","Successfull login superadmin!","2023-11-03 01:29:07");
INSERT INTO activity_log VALUES("385","Generate Excel file","Generate Requistion and Issue Slip (  )","2023-11-03 01:29:12");
INSERT INTO activity_log VALUES("386","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-11-03 02:44:17");
INSERT INTO activity_log VALUES("387","Add","Added a Delivery Entry [IAR Number: 2023-103-3]","2023-11-03 03:46:11");
INSERT INTO activity_log VALUES("388","Add","Added a Delivery Entry [IAR Number: 2023-101-12]","2023-11-03 04:50:44");
INSERT INTO activity_log VALUES("389","Edit","Edited a stocks details named: PAPER","2023-11-03 04:51:48");
INSERT INTO activity_log VALUES("390","Edit","Edited a stocks details named: PAPER","2023-11-03 04:51:56");
INSERT INTO activity_log VALUES("391","Edit","Edited a stocks details named: PAPER","2023-11-03 04:52:03");
INSERT INTO activity_log VALUES("392","Edit","Edited a stocks details named: FOLDER","2023-11-03 04:52:09");
INSERT INTO activity_log VALUES("393","Edit","Edited a stocks details named: BALLPEN","2023-11-03 04:52:15");
INSERT INTO activity_log VALUES("394","Edit","Edited a stocks details named: PAPER","2023-11-03 04:52:37");
INSERT INTO activity_log VALUES("395","Edit","Edited a stocks details named: ALCHOHOL","2023-11-03 04:52:44");
INSERT INTO activity_log VALUES("396","Edit","Edited a stocks details named: BALLPEN","2023-11-03 04:52:58");
INSERT INTO activity_log VALUES("397","Add","Added a Delivery Entry [IAR Number: 2023-103A-4]","2023-11-03 06:55:21");
INSERT INTO activity_log VALUES("398","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-06 00:51:33");
INSERT INTO activity_log VALUES("399","Login","Successfull login superadmin!","2023-11-06 00:52:18");
INSERT INTO activity_log VALUES("400","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-4 )","2023-11-06 02:06:58");
INSERT INTO activity_log VALUES("401","Add","Added a Delivery Entry [IAR Number: 2023-101-16]","2023-11-06 02:53:00");
INSERT INTO activity_log VALUES("402","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-101-16 )","2023-11-06 02:59:12");
INSERT INTO activity_log VALUES("403","Add","Added a Delivery Entry [IAR Number: 2023-103A-1]","2023-11-06 03:15:54");
INSERT INTO activity_log VALUES("404","Add","Added a Delivery Entry [IAR Number: 2023-103-1]","2023-11-06 03:16:44");
INSERT INTO activity_log VALUES("405","Add","Added a new stock: fsdf - the iar is existing in the ris_entry but the output of the console is this:
Response from check_iar_existence.php:  not_exists
deliveryEntry.php:1395 IAR doesn't exist in the database. Enabling the button.","2023-11-06 04:01:24");
INSERT INTO activity_log VALUES("406","Delete","Deleted a Stock!","2023-11-06 04:01:33");
INSERT INTO activity_log VALUES("407","Add","Added a new stock: Scanner - Hi-speed A4 color image scanner, up to 40ppm, Automatic Document Feeder (ADF) of up to 100 sheets, Daily Duty Cycle of 4000 pages, 1200 dpi scanning with ultrasonic sensor which prevents double-feeding; USB 2.0, rated voltage AC 100-240V; Rated frequency 50-60Hz; Output Resolution 50dpi- 4800dpi (1 dpi increments), 7200 dpi and 9600 dpi; Max Document Size:216 x 297mm (Epson DS-780N)","2023-11-06 04:09:07");
INSERT INTO activity_log VALUES("408","Add","Added a Delivery Entry [IAR Number: 2023-103A-3]","2023-11-06 04:16:45");
INSERT INTO activity_log VALUES("409","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:16:47");
INSERT INTO activity_log VALUES("410","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:19:03");
INSERT INTO activity_log VALUES("411","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:19:44");
INSERT INTO activity_log VALUES("412","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:21:16");
INSERT INTO activity_log VALUES("413","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:22:47");
INSERT INTO activity_log VALUES("414","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:24:26");
INSERT INTO activity_log VALUES("415","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:25:10");
INSERT INTO activity_log VALUES("416","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:26:41");
INSERT INTO activity_log VALUES("417","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:28:15");
INSERT INTO activity_log VALUES("418","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:30:31");
INSERT INTO activity_log VALUES("419","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:38:02");
INSERT INTO activity_log VALUES("420","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:38:37");
INSERT INTO activity_log VALUES("421","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:41:27");
INSERT INTO activity_log VALUES("422","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:42:24");
INSERT INTO activity_log VALUES("423","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:43:54");
INSERT INTO activity_log VALUES("424","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:44:44");
INSERT INTO activity_log VALUES("425","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-06 04:46:12");
INSERT INTO activity_log VALUES("426","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-07 01:11:36");
INSERT INTO activity_log VALUES("427","Login","Successfull login superadmin!","2023-11-07 01:11:56");
INSERT INTO activity_log VALUES("428","Add","Added a new stock: Puncher - Heavy duty, 2 hole","2023-11-07 01:51:31");
INSERT INTO activity_log VALUES("429","Add","Added a Delivery Entry [IAR Number: 2023-103A-4]","2023-11-07 01:52:40");
INSERT INTO activity_log VALUES("430","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-4 )","2023-11-07 01:52:44");
INSERT INTO activity_log VALUES("431","Add","Added a Delivery Entry [IAR Number: 2023-103A-2]","2023-11-07 01:54:16");
INSERT INTO activity_log VALUES("432","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-2 )","2023-11-07 01:54:19");
INSERT INTO activity_log VALUES("433","Add","Added a new employee name: ATTY. MARY JANE N. ORPIADA","2023-11-07 01:58:46");
INSERT INTO activity_log VALUES("434","Add","Added a new employee name: CHARMAINE C. BALABIS","2023-11-07 01:59:33");
INSERT INTO activity_log VALUES("435","Edit","Edited a employee details named: ATTY. MARY JANE N. ORPIADA","2023-11-07 01:59:48");
INSERT INTO activity_log VALUES("436","Edit","Edited a employee details named: ATTY. MARY JANE N. ORPIADA","2023-11-07 02:00:05");
INSERT INTO activity_log VALUES("437","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-2 )","2023-11-07 04:03:02");
INSERT INTO activity_log VALUES("438","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-07 04:26:22");
INSERT INTO activity_log VALUES("439","Login","Successfull login superadmin!","2023-11-07 06:37:46");
INSERT INTO activity_log VALUES("440","Login","Successfull login superadmin!","2023-11-07 06:52:50");
INSERT INTO activity_log VALUES("441","Add","Added a new stock: Paint - Semi Gloss","2023-11-07 07:00:36");
INSERT INTO activity_log VALUES("442","Add","Added a new stock: Paintbrush - #2","2023-11-07 07:01:00");
INSERT INTO activity_log VALUES("443","Add","Added a new stock: Corrugated roofing sheet (yero) - 24ft x 8ft","2023-11-07 07:01:59");
INSERT INTO activity_log VALUES("444","Add","Added a new stock: Nails - 4 inches","2023-11-07 07:02:37");
INSERT INTO activity_log VALUES("445","Add","Added a new stock: Nails - 3 inches","2023-11-07 07:02:59");
INSERT INTO activity_log VALUES("446","Add","Added a new stock: Nails - 1 1/2 inches","2023-11-07 07:03:29");
INSERT INTO activity_log VALUES("447","Add","Added a new stock: Good Lumber - 2x4x12","2023-11-07 07:04:20");
INSERT INTO activity_log VALUES("448","Add","Added a new stock: Good Lumber - 2x3x12","2023-11-07 07:04:41");
INSERT INTO activity_log VALUES("449","Add","Added a new stock: Good Lumber - 2x2x12","2023-11-07 07:05:02");
INSERT INTO activity_log VALUES("450","Add","Added a new stock: RSB - 10mm","2023-11-07 07:10:15");
INSERT INTO activity_log VALUES("451","Add","Added a new stock: Cement - Green packaging","2023-11-07 07:10:50");
INSERT INTO activity_log VALUES("452","Add","Added a new stock: Concrete Hollow Blocks - 4&quot;","2023-11-07 07:11:30");
INSERT INTO activity_log VALUES("453","Add","Added a new stock: GI Pipe - #2","2023-11-07 07:11:57");
INSERT INTO activity_log VALUES("454","Add","Added a new stock: Welding Rod - rod","2023-11-07 07:12:50");
INSERT INTO activity_log VALUES("455","Add","Added a new stock: Cutting Disk - #4","2023-11-07 07:13:19");
INSERT INTO activity_log VALUES("456","Add","Added a new stock: Sand - sand","2023-11-07 07:13:50");
INSERT INTO activity_log VALUES("457","Add","Added a new stock: Nail - Umbrella nail","2023-11-07 07:14:26");
INSERT INTO activity_log VALUES("458","Add","Added a new stock: Marine plywood - 1/4 thick
","2023-11-07 07:15:03");
INSERT INTO activity_log VALUES("459","Add","Added a new stock: Grinding - Stone","2023-11-07 07:15:28");
INSERT INTO activity_log VALUES("460","Add","Added a Delivery Entry [IAR Number: 2023-103A-3]","2023-11-07 07:22:23");
INSERT INTO activity_log VALUES("461","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-2 )","2023-11-07 07:22:28");
INSERT INTO activity_log VALUES("462","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-3 )","2023-11-07 07:25:37");
INSERT INTO activity_log VALUES("463","Add","Added a Delivery Entry [IAR Number: 2023-103A-20]","2023-11-07 07:40:21");
INSERT INTO activity_log VALUES("464","Add","Added a Delivery Entry [IAR Number: 2023-103-1]","2023-11-07 07:41:38");
INSERT INTO activity_log VALUES("465","Add","Added a Delivery Entry [IAR Number: 2023-101-4]","2023-11-07 07:42:13");
INSERT INTO activity_log VALUES("466","Add","Added a Delivery Entry [IAR Number: 2023-103A-21]","2023-11-07 07:42:48");
INSERT INTO activity_log VALUES("467","Backup","Successful new backup data [mis_backup_1699340055.sql]","2023-11-07 07:54:20");
INSERT INTO activity_log VALUES("468","Add","Added a Delivery Entry [IAR Number: 2023-103A-1]","2023-11-07 07:54:54");
INSERT INTO activity_log VALUES("469","Add","Added a Delivery Entry [IAR Number: 2023-103A-2]","2023-11-07 07:55:42");
INSERT INTO activity_log VALUES("470","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-07 07:56:35");
INSERT INTO activity_log VALUES("471","Login","Successfull login superadmin!","2023-11-07 07:56:39");
INSERT INTO activity_log VALUES("472","Add","Added a Delivery Entry [IAR Number: 2023-103A-1]","2023-11-07 07:58:07");
INSERT INTO activity_log VALUES("473","Add","Added a Delivery Entry [IAR Number: 2023-103A-1]","2023-11-07 08:07:15");
INSERT INTO activity_log VALUES("474","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-1 )","2023-11-07 08:07:19");
INSERT INTO activity_log VALUES("475","Add","Added a Delivery Entry [IAR Number: 2023-101-4]","2023-11-07 08:54:07");
INSERT INTO activity_log VALUES("476","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-08 01:05:42");
INSERT INTO activity_log VALUES("477","Login","Successfull login superadmin!","2023-11-08 01:05:47");
INSERT INTO activity_log VALUES("478","Edit","Edited a employee details named: CHARMAINE C. BALABIS","2023-11-08 01:09:28");
INSERT INTO activity_log VALUES("479","Login","Successfull login superadmin!","2023-11-08 01:40:29");
INSERT INTO activity_log VALUES("480","Delete","Deleted a UACS-Expenses!","2023-11-08 02:56:16");
INSERT INTO activity_log VALUES("481","Backup","Successful new backup data [mis_backup_1699411414.sql]","2023-11-08 03:43:37");
INSERT INTO activity_log VALUES("482","Login","Successfull login superadmin!","2023-11-08 06:51:53");
INSERT INTO activity_log VALUES("483","Logout","Successfull logout!","2023-11-08 07:37:25");
INSERT INTO activity_log VALUES("484","Login","Successfull login superadmin!","2023-11-08 07:37:51");
INSERT INTO activity_log VALUES("485","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-09 01:47:13");
INSERT INTO activity_log VALUES("486","Login","Successfull login superadmin!","2023-11-09 01:47:19");
INSERT INTO activity_log VALUES("487","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-09 08:37:09");
INSERT INTO activity_log VALUES("488","Login","Successfull login superadmin!","2023-11-09 08:37:14");
INSERT INTO activity_log VALUES("489","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-13 02:42:46");
INSERT INTO activity_log VALUES("490","Login","Successfull login superadmin!","2023-11-13 02:42:51");
INSERT INTO activity_log VALUES("491","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-13 04:35:49");
INSERT INTO activity_log VALUES("492","Login","Successfull login superadmin!","2023-11-13 04:35:53");
INSERT INTO activity_log VALUES("493","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-13 07:10:18");
INSERT INTO activity_log VALUES("494","Login","Successfull login superadmin!","2023-11-13 07:10:24");
INSERT INTO activity_log VALUES("495","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-14 01:19:54");
INSERT INTO activity_log VALUES("496","Login","Successfull login superadmin!","2023-11-14 01:19:58");
INSERT INTO activity_log VALUES("497","Add","Added a new stock: lanyard - Customized Lanyard with text &quot;Civil Servive Commission&quot;","2023-11-14 07:16:42");
INSERT INTO activity_log VALUES("498","Add","Added a Delivery Entry [IAR Number: 2023-103-1]","2023-11-14 07:18:07");
INSERT INTO activity_log VALUES("499","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-1 )","2023-11-14 07:18:12");
INSERT INTO activity_log VALUES("500","Backup","Successful new backup data [mis_backup_1699949160.sql]","2023-11-14 09:06:04");
INSERT INTO activity_log VALUES("501","Backup","Successful new backup data [mis_backup_1699949176.sql]","2023-11-14 09:06:20");
INSERT INTO activity_log VALUES("502","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-15 01:15:49");
INSERT INTO activity_log VALUES("503","Login","Successfull login superadmin!","2023-11-15 01:15:58");
INSERT INTO activity_log VALUES("504","Add","Added a Delivery Entry [IAR Number: 2023-101-7]","2023-11-14 12:04:05");
INSERT INTO activity_log VALUES("505","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-16 01:44:57");
INSERT INTO activity_log VALUES("506","Login","Successfull login superadmin!","2023-11-17 01:44:00");
INSERT INTO activity_log VALUES("507","Login","Successfull login superadmin!","2023-11-17 10:09:40");
INSERT INTO activity_log VALUES("508","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-20 09:42:20");
INSERT INTO activity_log VALUES("509","Login","Successfull login superadmin!","2023-11-20 09:42:25");
INSERT INTO activity_log VALUES("510","Add","Added a new stock: Keychain - Acrylic with metal ring customize keychain","2023-11-21 02:36:49");
INSERT INTO activity_log VALUES("511","Add","Added a Delivery Entry [IAR Number: 2023-103-2]","2023-11-21 02:39:14");
INSERT INTO activity_log VALUES("512","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-2 )","2023-11-21 02:39:53");
INSERT INTO activity_log VALUES("513","Add","Added a new stock: Electric Wire - 3.5mm stranded wire","2023-11-21 02:53:26");
INSERT INTO activity_log VALUES("514","Add","Added a new stock: Tape - Electric Tape Big","2023-11-21 02:55:31");
INSERT INTO activity_log VALUES("515","Add","Added a Delivery Entry [IAR Number: 2023-103A-20]","2023-11-21 02:57:20");
INSERT INTO activity_log VALUES("516","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-20 )","2023-11-21 02:57:33");
INSERT INTO activity_log VALUES("517","Login","Successfull login superadmin!","2023-11-21 04:51:33");
INSERT INTO activity_log VALUES("518","Add","Added a Delivery Entry [IAR Number: 2023-103A-22]","2023-11-21 04:52:28");
INSERT INTO activity_log VALUES("519","Add","Added a Delivery Entry [IAR Number: 2023-103A-23]","2023-11-21 04:53:06");
INSERT INTO activity_log VALUES("520","Add","Added a new stock: 11 - 1","2023-11-21 06:43:17");
INSERT INTO activity_log VALUES("521","Add","Added a Delivery Entry [IAR Number: 2023-103A-23]","2023-11-21 06:43:55");
INSERT INTO activity_log VALUES("522","Add","Added a Delivery Entry [IAR Number: 2023-103A-24]","2023-11-21 06:45:17");
INSERT INTO activity_log VALUES("523","Delete","Deleted a Stock!","2023-11-21 07:37:48");
INSERT INTO activity_log VALUES("524","Add","Added a new stock: Pen - Gel Pen 0.5 blue","2023-11-21 07:39:58");
INSERT INTO activity_log VALUES("525","Add","Added a new stock: Paper - Special Board Paper A4 (10 packs)","2023-11-21 07:46:46");
INSERT INTO activity_log VALUES("526","Add","Added a Delivery Entry [IAR Number: 2023-103-3]","2023-11-21 07:52:24");
INSERT INTO activity_log VALUES("527","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-3 )","2023-11-21 07:52:31");
INSERT INTO activity_log VALUES("528","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-22 01:56:00");
INSERT INTO activity_log VALUES("529","Login","Successfull login superadmin!","2023-11-22 01:56:07");
INSERT INTO activity_log VALUES("530","Login","Successfull login superadmin!","2023-11-22 03:47:57");
INSERT INTO activity_log VALUES("531","Login","Successfull login superadmin!","2023-11-23 01:14:10");
INSERT INTO activity_log VALUES("532","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-23 07:14:08");
INSERT INTO activity_log VALUES("533","Login","Successfull login superadmin!","2023-11-23 07:14:13");
INSERT INTO activity_log VALUES("534","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-24 01:06:20");
INSERT INTO activity_log VALUES("535","Login","Successfull login superadmin!","2023-11-24 01:06:47");
INSERT INTO activity_log VALUES("536","Add","Added a Delivery Entry [IAR Number: 2023-103-6]","2023-11-24 01:12:11");
INSERT INTO activity_log VALUES("537","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-6 )","2023-11-24 01:12:17");
INSERT INTO activity_log VALUES("538","Login","Successfull login superadmin!","2023-11-29 01:32:30");
INSERT INTO activity_log VALUES("539","Add","Added a new stock: Cabinet - Index card cabinet 24 drawers, 6rows &amp; 4column; over all dimension 80.58cm(h) &amp; 76.5cm(w)Card size 5&quot; x 8&quot;","2023-11-29 01:51:25");
INSERT INTO activity_log VALUES("540","Add","Added a Delivery Entry [IAR Number: 2023-103A-22]","2023-11-29 02:50:59");
INSERT INTO activity_log VALUES("541","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-22 )","2023-11-29 02:51:07");
INSERT INTO activity_log VALUES("542","Add","Added a Delivery Entry [IAR Number: 2023-103A-23]","2023-11-29 02:53:55");
INSERT INTO activity_log VALUES("543","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-23 )","2023-11-29 02:54:01");
INSERT INTO activity_log VALUES("544","Add","Added a Delivery Entry [IAR Number: 2023-103A-24]","2023-11-29 02:56:27");
INSERT INTO activity_log VALUES("545","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-24 )","2023-11-29 02:56:33");
INSERT INTO activity_log VALUES("546","Add","Added a Delivery Entry [IAR Number: 2023-103A-25]","2023-11-29 02:59:33");
INSERT INTO activity_log VALUES("547","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-25 )","2023-11-29 02:59:38");
INSERT INTO activity_log VALUES("548","Add","Added a Delivery Entry [IAR Number: 2023-103A-26]","2023-11-29 03:01:41");
INSERT INTO activity_log VALUES("549","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-26 )","2023-11-29 03:01:46");
INSERT INTO activity_log VALUES("550","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-26 )","2023-11-29 03:02:19");
INSERT INTO activity_log VALUES("551","Add","Added a new employee name: ATTY. ALICIA P. SALINAS","2023-11-29 03:14:50");
INSERT INTO activity_log VALUES("552","Add","Added a new employee name: MARIFE LUZURIAGA","2023-11-29 03:16:04");
INSERT INTO activity_log VALUES("553","Add","Added a new employee name: SHARON FARIDA A. FLORES","2023-11-29 03:17:12");
INSERT INTO activity_log VALUES("554","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-30 01:26:27");
INSERT INTO activity_log VALUES("555","Login","Successfull login superadmin!","2023-11-30 01:26:32");
INSERT INTO activity_log VALUES("556","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-11-30 06:55:04");
INSERT INTO activity_log VALUES("557","Login","Successfull login superadmin!","2023-11-30 08:21:41");
INSERT INTO activity_log VALUES("558","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-12-01 01:17:56");
INSERT INTO activity_log VALUES("559","Login","Successfull login superadmin!","2023-12-01 01:18:02");
INSERT INTO activity_log VALUES("560","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-12-01 09:57:04");
INSERT INTO activity_log VALUES("561","Login","Successfull login superadmin!","2023-12-01 09:57:47");
INSERT INTO activity_log VALUES("562","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-12-05 02:55:59");
INSERT INTO activity_log VALUES("563","Add","Added a new stock: Paper - Glossy Photopaper (A4) 10pcs per pack","2023-12-05 03:05:31");
INSERT INTO activity_log VALUES("564","Add","Added a new stock: Card Case - 103mm x 150mm thickness 40cm","2023-12-05 03:07:02");
INSERT INTO activity_log VALUES("565","Edit","Edited a stocks details named: Paper","2023-12-05 03:10:28");
INSERT INTO activity_log VALUES("566","Edit","Edited a stocks details named: Paper","2023-12-05 03:11:58");
INSERT INTO activity_log VALUES("567","Add","Added a Delivery Entry [IAR Number: 2023-103-7]","2023-12-05 03:13:32");
INSERT INTO activity_log VALUES("568","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-7 )","2023-12-05 03:13:40");
INSERT INTO activity_log VALUES("569","Login","Successfull login superadmin!","2023-12-05 06:16:12");
INSERT INTO activity_log VALUES("570","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-12-05 07:37:11");
INSERT INTO activity_log VALUES("571","Add","Added a Delivery Entry [IAR Number: 2023-101-10]","2023-12-06 07:45:31");
INSERT INTO activity_log VALUES("572","Add","Added a Delivery Entry [IAR Number: 2023-101-12]","2023-12-06 07:46:31");
INSERT INTO activity_log VALUES("573","Login","Successfull login superadmin!","2023-12-07 11:07:58");
INSERT INTO activity_log VALUES("574","Add","Added a Delivery Entry [IAR Number: 2023-101-14]","2023-12-13 02:53:10");
INSERT INTO activity_log VALUES("575","Login","Successfull login superadmin!","2023-12-14 03:05:28");
INSERT INTO activity_log VALUES("576","Login","Successfull login superadmin!","2023-12-14 04:41:42");
INSERT INTO activity_log VALUES("577","Add","Added a Delivery Entry [IAR Number: 2023-101-10]","2023-12-15 04:05:21");
INSERT INTO activity_log VALUES("578","Add","Added a Delivery Entry [IAR Number: 2023-101-12]","2023-12-15 04:06:07");
INSERT INTO activity_log VALUES("579","Add","Added a Delivery Entry [IAR Number: 2023-CFAG-1]","2023-12-15 04:31:20");
INSERT INTO activity_log VALUES("580","Add","Added a Delivery Entry [IAR Number: 2023-CFAG-3]","2023-12-15 04:32:07");
INSERT INTO activity_log VALUES("581","Add","Added a Delivery Entry [IAR Number: 2023-101-4]","2023-12-15 04:45:01");
INSERT INTO activity_log VALUES("582","Add","Added a Delivery Entry [IAR Number: 2023-101-6]","2023-12-15 07:10:32");
INSERT INTO activity_log VALUES("583","Add","Added a Delivery Entry [IAR Number: 2023-101-8]","2023-12-15 07:11:24");
INSERT INTO activity_log VALUES("584","Add","Added a Delivery Entry [IAR Number: 2023-101-10]","2023-12-15 07:12:19");
INSERT INTO activity_log VALUES("585","Add","Added a Delivery Entry [IAR Number: 2023--1]","2023-12-18 01:28:17");
INSERT INTO activity_log VALUES("586","Login","Successfull login superadmin!","2023-12-18 01:28:25");
INSERT INTO activity_log VALUES("587","Login","Successfull login superadmin!","2023-12-21 01:32:02");
INSERT INTO activity_log VALUES("588","Add","Added a new stock: Mugs - w/ Laser engraved","2023-12-21 03:48:53");
INSERT INTO activity_log VALUES("589","Add","Added a new stock: Tumbler - customize with CSC RO V Logo","2023-12-21 03:49:33");
INSERT INTO activity_log VALUES("590","Add","Added a Delivery Entry [IAR Number: 2023-103-9]","2023-12-21 03:51:02");
INSERT INTO activity_log VALUES("591","Add","Added a Delivery Entry [IAR Number: 2023-103A-27]","2023-12-21 03:52:34");
INSERT INTO activity_log VALUES("592","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103A-27 )","2023-12-21 03:52:41");
INSERT INTO activity_log VALUES("593","Generate Excel file","Generate Inspection &amp; Acceptance Report ( 2023-103-9 )","2023-12-21 03:55:16");
INSERT INTO activity_log VALUES("594","Add","Added a new employee name: LILIA A. JADIE","2023-12-21 04:01:19");
INSERT INTO activity_log VALUES("595","Add","Added a new employee name: JELETE S. ITURRALDE","2023-12-21 04:05:45");



#
# Delete any existing table `delivery_entry`
#

DROP TABLE IF EXISTS `delivery_entry`;


#
# Table structure of table `delivery_entry`
#



CREATE TABLE `delivery_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iar_no` varchar(50) NOT NULL,
  `fund` varchar(50) NOT NULL,
  `req_dept` varchar(50) NOT NULL,
  `del_no` varchar(50) NOT NULL,
  `del_date` date NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `po_no` varchar(50) NOT NULL,
  `po_date` date NOT NULL,
  `stock_no` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `qty1` int(50) NOT NULL,
  `unit_cost` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO delivery_entry VALUES("85","2023-101-1","F-101","MSD","26535","2023-08-15","Glenas Fuel Station","0","2023-08-15","101-0009","0","0","66","2023-11-06 13:24:40");
INSERT INTO delivery_entry VALUES("86","2023-101-2","F-101","MSD","125730","2023-08-15","Lladone's Enterprises","-","2023-08-15","101-0010","0","0","25","2023-11-06 13:24:56");
INSERT INTO delivery_entry VALUES("87","2023-101-3","F-101","MSD","26540","2023-08-16","Glenas Fuel Station","-","2023-08-16","101-0009","0","0","66","2023-11-06 13:25:14");
INSERT INTO delivery_entry VALUES("152","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0017","0","3","258","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("153","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0018","0","25","15.50","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("154","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0009","0","10","502","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("155","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0021","0","10","40","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("156","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0019","0","3","1380","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("157","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0013","0","6","1026","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("158","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0014","0","8","749","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("159","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0015","0","6","499","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("160","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0025","0","1","73","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("161","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0024","0","1","445","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("162","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0023","0","2","97","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("163","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0010","0","3","80","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("164","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0011","0","3","82","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("165","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0012","0","1","87","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("166","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0007","0","2","3143","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("167","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0008","0","3","45","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("168","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0016","0","2","158","2023-11-07 15:09:25");
INSERT INTO delivery_entry VALUES("169","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0022","0","1","590","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("170","2023-103A-1","F-103A","MSD","57634","2023-11-03","JM Olbes Marketing","TR 2023-10-0036","2023-10-24","103A-0020","0","5","107","2023-11-07 15:09:26");
INSERT INTO delivery_entry VALUES("174","2023-103-1","F-103","HRD","0003370","2023-11-14","PixelBoards, Inc.","JO# TN 2023-09-0053","2023-09-25","103-0009","0","56","120","2023-11-14 14:19:29");
INSERT INTO delivery_entry VALUES("178","2023-103-2","F-103","HRD","0003376","2023-11-17","PixelBoards, Inc.","JO# TN 2023-11-0057","2023-11-14","103-0010","0","200","18","2023-11-21 09:48:35");
INSERT INTO delivery_entry VALUES("179","2023-103A-20","F-103A","ESD","08496","2023-11-17","Unico Trading","PO# TR 2023-11-0038","2023-11-14","103A-0027","0","2","75","2023-11-21 10:01:36");
INSERT INTO delivery_entry VALUES("180","2023-103A-20","F-103A","ESD","08496","2023-11-17","Unico Trading","PO# TR 2023-11-0038","2023-11-14","103A-0026","0","1","4690","2023-11-21 10:01:36");
INSERT INTO delivery_entry VALUES("188","2023-103-3","F-103","HRD","0197","2023-11-21","Pandayan Bookshop, Inc","JO# TN 2023-11-0057A","2023-11-08","103-0007","0","200","21.61","2023-11-21 14:58:27");
INSERT INTO delivery_entry VALUES("189","2023-103-3","F-103","HRD","0197","2023-11-21","Pandayan Bookshop, Inc","JO# TN 2023-11-0057A","2023-11-08","103-0008","0","4","99","2023-11-21 14:58:28");
INSERT INTO delivery_entry VALUES("190","2023-103-3","F-103","HRD","0197","2023-11-21","Pandayan Bookshop, Inc","JO# TN 2023-11-0057A","2023-11-08","103-0012","0","1","30","2023-11-21 14:58:28");
INSERT INTO delivery_entry VALUES("191","2023-103-6","F-103","HRD","1969","2023-11-23","Nuprint Master","JO# TN 2023-11-0056","2023-11-08","103-0006","0","200","45","2023-11-24 08:17:19");
INSERT INTO delivery_entry VALUES("192","2023-103A-22","F-103A","AFO","0036802","2023-11-24","Lucky Educational Supply","PO# TR 2023-09-0028","2023-09-18","103A-0028","0","1","36498.75","2023-11-29 10:18:13");
INSERT INTO delivery_entry VALUES("193","2023-103A-23","F-103A","CSFO","0036802","2023-11-24","Lucky Educational Supply","PO# TR 2023-09-0028","2023-09-18","103A-0028","0","1","36498.75","2023-11-29 10:20:29");
INSERT INTO delivery_entry VALUES("194","2023-103A-24","F-103A","SFO","0036802","2023-11-24","Lucky Educational Supply","PO# TR 2023-09-0028","2023-09-18","103A-0028","0","1","36498.75","2023-11-29 10:23:10");
INSERT INTO delivery_entry VALUES("195","2023-103A-25","F-103A","MFO","0036802","2023-11-24","Lucky Educational Supply","PO# TR 2023-09-0028","2023-09-18","103A-0028","0","1","36498.75","2023-11-29 10:24:58");
INSERT INTO delivery_entry VALUES("196","2023-103A-26","F-103A","CNFO","0036802","2023-11-24","Lucky Educational Supply","PO# TR 2023-09-0028","2023-09-18","103A-0028","0","1","36498.75","2023-11-29 10:29:57");
INSERT INTO delivery_entry VALUES("197","2023-103-7","F-103","HRD","0213183","2023-11-28","Lucky Educational Supply","PO# TN 2023-11-0020","2023-11-22","103-0013","0","6","69.75","2023-12-05 10:19:23");
INSERT INTO delivery_entry VALUES("198","2023-103-7","F-103","HRD","0213183","2023-11-28","Lucky Educational Supply","PO# TN 2023-11-0020","2023-11-22","103-0014","0","56","10.75","2023-12-05 10:19:23");
INSERT INTO delivery_entry VALUES("213","2023-101-4","F-101","LSD","1","2023-11-29","PixelBoards, Inc.","1","2023-12-06","101-0003","0","2","120","2023-12-15 11:45:17");
INSERT INTO delivery_entry VALUES("214","2023-101-4","F-101","LSD","1","2023-11-29","PixelBoards, Inc.","1","2023-12-06","101-0004","0","2","50.25","2023-12-15 11:45:17");
INSERT INTO delivery_entry VALUES("215","2023-101-6","F-101","HRD","1","2023-12-08","1","1","2023-12-07","101-0003","0","10","12.50","2023-12-15 14:13:04");
INSERT INTO delivery_entry VALUES("216","2023-101-6","F-101","HRD","1","2023-12-08","1","1","2023-12-07","101-0008","0","5","450","2023-12-15 14:13:04");
INSERT INTO delivery_entry VALUES("217","2023-101-8","F-101","PSED","1","2023-12-07","2","2","2023-12-08","101-0003","0","6","10","2023-12-15 14:13:19");
INSERT INTO delivery_entry VALUES("218","2023-101-8","F-101","PSED","1","2023-12-07","2","2","2023-12-08","101-0008","0","7","430","2023-12-15 14:13:19");
INSERT INTO delivery_entry VALUES("219","2023-101-10","F-101","ESD","1","2024-01-03","2","2","2023-12-02","101-0003","0","13","13","2023-12-15 14:13:32");
INSERT INTO delivery_entry VALUES("220","2023-103-9","F-103","PSED","19221","2023-12-20","Bengx Print Graphic and Architectural Services","JO# TN 2023-12-0059","2023-12-12","103-0015","0","30","700","2023-12-21 11:02:40");
INSERT INTO delivery_entry VALUES("221","2023-103A-27","F-103A","PALD","19222","2023-12-20","Bengx Print Graphic and Architectural Services","JO# TR 2023-12-0046","2023-12-12","103A-0029","0","30","450","2023-12-21 11:06:18");



#
# Delete any existing table `dept`
#

DROP TABLE IF EXISTS `dept`;


#
# Table structure of table `dept`
#



CREATE TABLE `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `acname` varchar(50) NOT NULL,
  `rcc` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO dept VALUES("1","HUMAN RESOURCE DIVISION","HRD","30-001-03-00005-01","1","2023-07-03 15:19:25");
INSERT INTO dept VALUES("2","MANAGEMENT SERVICES DIVISION","MSD","30-001-03-00005-02","1","2023-07-03 15:23:35");
INSERT INTO dept VALUES("3","EXAMINATION  SERVICES DIVISION","ESD","30-001-03-00005-03","1","2023-07-03 15:28:49");
INSERT INTO dept VALUES("4","LEGAL SERVICES DIVISION","LSD","30-001-03-00005-04","1","2023-07-03 15:29:19");
INSERT INTO dept VALUES("5","POLICIES & SYSTEM EVALUATION DIVISION","PSED","30-001-03-00005-05","1","2023-07-03 15:29:57");
INSERT INTO dept VALUES("6","PUBLIC ASSISTANCE & LIASON DIVISION","PALD","30-001-03-00005-06","1","2023-07-03 15:30:36");
INSERT INTO dept VALUES("7","ALBAY FIELD OFFICE","AFO","30-001-03-00005-07","1","2023-07-03 15:31:13");
INSERT INTO dept VALUES("8","CATANDUANES FIELD OFFICE","CFO","30-001-03-00005-08","1","2023-07-03 16:21:19");
INSERT INTO dept VALUES("9","CAMARINES NORTE FIELD OFFICE","CNFO","30-001-03-00005-09","1","2023-07-03 16:21:54");
INSERT INTO dept VALUES("10","CAMARINES SUR FIELD OFFICE","CSFO","30-001-03-00005-10","1","2023-07-03 16:22:21");
INSERT INTO dept VALUES("11","SORSOGON FIELD OFFICE","SFO","30-001-03-00005-11","1","2023-07-03 16:22:44");
INSERT INTO dept VALUES("12","MASBATE FIELD OFFICE ","MFO","30-001-03-00005-12","1","2023-07-03 16:23:08");
INSERT INTO dept VALUES("13","COMMISSION OF AUDIT","COA","30-001-03-00005-13","1","2023-07-03 16:23:37");
INSERT INTO dept VALUES("14","OFFICE OF THE REGIONAL DIRECTOR","ORD","30-001-03-00005-14","1","2023-07-03 16:33:29");
INSERT INTO dept VALUES("15","ASSISTANT REGIONAL DIRECTOR","ARD","30-001-03-00005-15","1","2023-07-03 16:33:36");



#
# Delete any existing table `employee`
#

DROP TABLE IF EXISTS `employee`;


#
# Table structure of table `employee`
#



CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO employee VALUES("18","CHERRYLOU L. LARA","CHIEF HRS","1","2023-07-24 15:20:46");
INSERT INTO employee VALUES("19","ZARAH Z. ARROYO","CHIEF HRS","1","2023-07-24 15:21:28");
INSERT INTO employee VALUES("20","ATTY. DAISY BRAGAIS","DIRECTOR IV","1","2023-07-24 15:23:00");
INSERT INTO employee VALUES("21","SHARLAINE L. PRIETO","CHIEF HRS","1","2023-07-26 14:10:42");
INSERT INTO employee VALUES("22","MA. DOLORES D. SALUD","DIRECTOR II","1","2023-07-31 21:37:34");
INSERT INTO employee VALUES("23","JOCELYN L. MARIFOSQUE","DIRECTOR II","1","2023-07-26 14:14:19");
INSERT INTO employee VALUES("24","CHRISTIAN C. ANTIQUIERA","HRS II","1","2023-07-26 14:14:58");
INSERT INTO employee VALUES("25","ALVIN S. BARBACENA","HRS I","1","2023-08-07 16:47:55");
INSERT INTO employee VALUES("29","ATTY. MARY JANE N. ORPIADA","ATTORNEY VI","1","2023-11-07 09:00:05");
INSERT INTO employee VALUES("30","CHARMAINE C. BALABIS","ADMIN OFFICER IV","1","2023-11-08 08:09:28");
INSERT INTO employee VALUES("31","ATTY. ALICIA P. SALINAS","ACTING DIRECTOR II","1","2023-11-29 10:14:50");
INSERT INTO employee VALUES("32","MARIFE LUZURIAGA","ACTING DIRECTOR II","1","2023-11-29 10:16:04");
INSERT INTO employee VALUES("33","SHARON FARIDA A. FLORES","DIRECTOR II","1","2023-11-29 10:17:12");
INSERT INTO employee VALUES("34","LILIA A. JADIE","CHIEF HRS","1","2023-12-21 11:01:19");
INSERT INTO employee VALUES("35","JELETE S. ITURRALDE","CHIEF HRS","1","2023-12-21 11:05:45");



#
# Delete any existing table `ics_category`
#

DROP TABLE IF EXISTS `ics_category`;


#
# Table structure of table `ics_category`
#



CREATE TABLE `ics_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ics_code` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ics_category VALUES("1","A1","MOTOR VEHICLE","2023-11-03 14:50:39");
INSERT INTO ics_category VALUES("2","A2","AUTO ACCESSORIES","2023-11-03 15:47:51");



#
# Delete any existing table `ris_entry`
#

DROP TABLE IF EXISTS `ris_entry`;


#
# Table structure of table `ris_entry`
#



CREATE TABLE `ris_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ris_no` varchar(50) NOT NULL,
  `fund` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `rcc` varchar(50) NOT NULL,
  `stock_no` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `unit_cost` varchar(100) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `req_by` varchar(50) NOT NULL,
  `app_by` varchar(50) NOT NULL,
  `iss_by` varchar(50) NOT NULL,
  `req_desig` varchar(50) DEFAULT NULL,
  `app_desig` varchar(50) DEFAULT NULL,
  `iss_desig` varchar(50) DEFAULT NULL,
  `iar_no` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=523 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ris_entry VALUES("460","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0007","2","3143","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("461","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0008","3","45","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("462","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0009","10","502","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("463","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0010","3","80","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("464","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0011","3","82","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("465","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0012","1","87","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("466","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0013","6","1026","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("467","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0014","8","749","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("468","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0015","6","499","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("469","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0016","2","158","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("470","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0017","3","258","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("471","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0018","25","15.50","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("472","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0019","3","1380","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("473","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0020","5","107","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("474","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0021","10","40","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("475","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0022","1","590","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("476","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0023","2","97","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("477","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0024","1","445","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("478","2023-11-0008","F-103A","MSD","30-001-03-00005-02","103A-0025","1","73","","Supplies and materials for repairs and maintenance of CSC AFO Building","CHERRYLOU L. LARA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICE IV","2023-103A-1","2023-11-07 15:22:25");
INSERT INTO ris_entry VALUES("482","2023-11-0010","F-103","HRD","30-001-03-00005-01","103-0009","56","120","","Lanyard for CSC RO V Employees Day","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-1","2023-11-14 14:19:29");
INSERT INTO ris_entry VALUES("486","2023-11-0012","F-103","HRD","30-001-03-00005-01","103-0010","200","18","","Token for integration for the conduct of Bicol Tech Summit","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-2","2023-11-21 09:48:35");
INSERT INTO ris_entry VALUES("487","2023-11-0013","F-103A","ESD","30-001-03-00005-03","103A-0026","1","4690","","Electrical Supplies and materials for COMEX network setup","SHARLAINE L. PRIETO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103A-20","2023-11-21 10:01:36");
INSERT INTO ris_entry VALUES("488","2023-11-0013","F-103A","ESD","30-001-03-00005-03","103A-0027","2","75","","Electrical Supplies and materials for COMEX network setup","SHARLAINE L. PRIETO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103A-20","2023-11-21 10:01:36");
INSERT INTO ris_entry VALUES("489","2023-11-0014","F-103","HRD","30-001-03-00005-01","103-0007","200","21.61","","Supplies and materials for the conduct of Bicol Tech Summit ","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-3","2023-11-21 14:58:27");
INSERT INTO ris_entry VALUES("490","2023-11-0014","F-103","HRD","30-001-03-00005-01","103-0008","4","99","","Supplies and materials for the conduct of Bicol Tech Summit ","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-3","2023-11-21 14:58:27");
INSERT INTO ris_entry VALUES("491","2023-11-0014","F-103","HRD","30-001-03-00005-01","103-0012","1","30","","Supplies and materials for the conduct of Bicol Tech Summit ","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-3","2023-11-21 14:58:27");
INSERT INTO ris_entry VALUES("492","2023-11-0015","F-103","HRD","30-001-03-00005-01","103-0006","200","45","","Training kits for the conduct of the Bicol Tech Summit","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-6","2023-11-24 08:17:19");
INSERT INTO ris_entry VALUES("493","2023-11-0016","F-103A","AFO","30-001-03-00005-07","103A-0028","1","36498.75","","Index card cabinet for CSC RO V Field Offices","SHARON FARIDA A. FLORES","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","DIRECTOR II","CHIEF HRS","ADMIN OFFICER IV","2023-103A-22","2023-11-29 10:18:13");
INSERT INTO ris_entry VALUES("494","2023-11-0017","F-103A","CSFO","30-001-03-00005-10","103A-0028","1","36498.75","","Index card cabinet for CSC RO V Field Offices","MA. DOLORES D. SALUD","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","DIRECTOR II","CHIEF HRS","ADMIN OFFICER IV","2023-103A-23","2023-11-29 10:18:13");
INSERT INTO ris_entry VALUES("495","2023-11-0018","F-103A","SFO","30-001-03-00005-11","103A-0028","1","36498.75","","Index card cabinet for CSC RO V Field Offices","MARIFE LUZURIAGA","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","ACTING DIRECTOR II","CHIEF HRS","ADMIN OFFICER IV","2023-103A-24","2023-11-29 10:18:13");
INSERT INTO ris_entry VALUES("496","2023-11-0019","F-103A","MFO","30-001-03-00005-12","103A-0028","1","36498.75","","Index card cabinet for CSC RO V Field Offices","JOCELYN L. MARIFOSQUE","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","DIRECTOR II","CHIEF HRS","ADMIN OFFICER IV","2023-103A-25","2023-11-29 10:18:13");
INSERT INTO ris_entry VALUES("497","2023-11-0020","F-103A","CNFO","30-001-03-00005-09","103A-0028","1","36498.75","","Index card cabinet for CSC RO V Field Offices","ATTY. ALICIA P. SALINAS","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","ACTING DIRECTOR II","CHIEF HRS","ADMIN OFFICER IV","2023-103A-26","2023-11-29 10:18:13");
INSERT INTO ris_entry VALUES("498","2023-12-0021","F-103","HRD","30-001-03-00005-01","103-0013","6","69.75","","Supply for the conduct of CSC RO V Family Day","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-7","2023-12-05 10:19:23");
INSERT INTO ris_entry VALUES("499","2023-12-0021","F-103","HRD","30-001-03-00005-01","103-0014","56","10.75","","Supply for the conduct of CSC RO V Family Day","ZARAH Z. ARROYO","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-7","2023-12-05 10:19:23");
INSERT INTO ris_entry VALUES("516","2023-12-0022","F-101","HRD","30-001-03-00005-01","101-0003","10","12.50","","1","CHARMAINE C. BALABIS","CHARMAINE C. BALABIS","ALVIN S. BARBACENA","ADMIN OFFICER IV","ADMIN OFFICER IV","HRS I","2023-101-6","2023-12-15 14:13:04");
INSERT INTO ris_entry VALUES("517","2023-12-0022","F-101","HRD","30-001-03-00005-01","101-0008","5","450","","1","CHARMAINE C. BALABIS","CHARMAINE C. BALABIS","ALVIN S. BARBACENA","ADMIN OFFICER IV","ADMIN OFFICER IV","HRS I","2023-101-6","2023-12-15 14:13:04");
INSERT INTO ris_entry VALUES("518","2023-12-0023","F-101","PSED","30-001-03-00005-05","101-0003","6","10","","2","CHRISTIAN C. ANTIQUIERA","ALVIN S. BARBACENA","JOCELYN L. MARIFOSQUE","HRS II","HRS I","DIRECTOR II","2023-101-8","2023-12-15 14:13:19");
INSERT INTO ris_entry VALUES("519","2023-12-0023","F-101","PSED","30-001-03-00005-05","101-0008","7","430","","2","CHRISTIAN C. ANTIQUIERA","ALVIN S. BARBACENA","JOCELYN L. MARIFOSQUE","HRS II","HRS I","DIRECTOR II","2023-101-8","2023-12-15 14:13:19");
INSERT INTO ris_entry VALUES("520","2023-12-0024","F-101","ESD","30-001-03-00005-03","101-0003","13","13","","12","JOCELYN L. MARIFOSQUE","JOCELYN L. MARIFOSQUE","JOCELYN L. MARIFOSQUE","DIRECTOR II","DIRECTOR II","DIRECTOR II","2023-101-10","2023-12-15 14:13:32");
INSERT INTO ris_entry VALUES("521","2023-12-0025","F-103","PSED","30-001-03-00005-05","103-0015","30","700","","Customize mug and gift bags for the conduct of CSC RO V Regional Advisory Council Members","LILIA A. JADIE","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103-9","2023-12-21 11:02:40");
INSERT INTO ris_entry VALUES("522","2023-12-0026","F-103A","PALD","30-001-03-00005-06","103A-0029","30","450","","Customize tumblr for Media Day","JELETE S. ITURRALDE","CHERRYLOU L. LARA","CHARMAINE C. BALABIS","CHIEF HRS","CHIEF HRS","ADMIN OFFICER IV","2023-103A-27","2023-12-21 11:06:18");



#
# Delete any existing table `stock_tbl`
#

DROP TABLE IF EXISTS `stock_tbl`;


#
# Table structure of table `stock_tbl`
#



CREATE TABLE `stock_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fund` varchar(50) NOT NULL,
  `inv_type` varchar(50) NOT NULL,
  `exp_type` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `stock_no` varchar(50) NOT NULL,
  `stock_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO stock_tbl VALUES("22","F-103A","OFFICE SUPPLIES INVENTORY","N/A","PAPER","ream","103A-0001","LONG");
INSERT INTO stock_tbl VALUES("23","F-101","OFFICE SUPPLIES INVENTORY","N/A","PAPER","ream","101-0001","LEGAL, 80 gsm");
INSERT INTO stock_tbl VALUES("24","F-103","OFFICE SUPPLIES INVENTORY","N/A","PAPER","ream","103-0001","A4");
INSERT INTO stock_tbl VALUES("25","CFAG","OFFICE SUPPLIES INVENTORY","N/A","FOLDER","ream","C-0001","LEGAL");
INSERT INTO stock_tbl VALUES("26","F-103","OFFICE SUPPLIES INVENTORY","N/A","BALLPEN","box","103-0002","RED SIGNPEN");
INSERT INTO stock_tbl VALUES("27","F-101","OFFICE SUPPLIES INVENTORY","N/A","PAPER","ream","101-0002","A4");
INSERT INTO stock_tbl VALUES("28","F-101","FUEL, OIL AND LUBRICANTS INVENTORY","N/A","ALCHOHOL","gal","101-0003","ETHYL");
INSERT INTO stock_tbl VALUES("29","F-103","OFFICE SUPPLIES INVENTORY","N/A","PAPER CLIP","box","103-0003","JUMBO");
INSERT INTO stock_tbl VALUES("30","CFAG","OFFICE SUPPLIES INVENTORY","N/A","TAPE","roll","C-0002","MASKING TAPE");
INSERT INTO stock_tbl VALUES("31","F-103A","OFFICE SUPPLIES INVENTORY","N/A","INSECTICIDE","can","103A-0002","Aerosol type");
INSERT INTO stock_tbl VALUES("32","F-103A","OFFICE SUPPLIES INVENTORY","N/A","ENVELOPE","pc","103A-0003","LONG");
INSERT INTO stock_tbl VALUES("33","F-101","OFFICE SUPPLIES INVENTORY","N/A","INK","bottle","101-0004","Black");
INSERT INTO stock_tbl VALUES("43","F-101","N/A","Awards/Rewards Expenses ","PLAQUE","PC","101-0005","Color gold");
INSERT INTO stock_tbl VALUES("50","F-101","ACCOUNTABLE FORMS, PLATES AND STICKERS INVENTORY","N/A","Binder Clips","box","101-0007","50mm");
INSERT INTO stock_tbl VALUES("55","F-103","ACCOUNTABLE FORMS, PLATES AND STICKERS INVENTORY","N/A","ALCHOHOL","ream","103-0004","big");
INSERT INTO stock_tbl VALUES("62","F-101","ACCOUNTABLE FORMS, PLATES AND STICKERS INVENTORY","N/A","BALLPEN","pc","101-0008","1");
INSERT INTO stock_tbl VALUES("64","F-103","N/A","Training Expenses ","Notebook","pcs","103-0005","Customized Notebook");
INSERT INTO stock_tbl VALUES("65","F-103","N/A","Training Expenses ","Button Pin","pc","103-0006","3 inches in diameter");
INSERT INTO stock_tbl VALUES("66","F-101","FUEL, OIL AND LUBRICANTS INVENTORY","N/A","Fuel","liters","101-0009"," ");
INSERT INTO stock_tbl VALUES("67","F-101","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","battery terminal ","pc","101-0010","for generator");
INSERT INTO stock_tbl VALUES("68","F-103","OFFICE SUPPLIES INVENTORY","N/A","PEN","pc/s","103-0007","Gel Pen, (0.5mm, Blue)");
INSERT INTO stock_tbl VALUES("69","F-103","OFFICE SUPPLIES INVENTORY","N/A","CERTIFICATE FRAME","pc/s","103-0008","Certificate frame, A4 size");
INSERT INTO stock_tbl VALUES("71","F-103A","N/A","N/A","s","s","103A-0004","s");
INSERT INTO stock_tbl VALUES("73","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Scanner","unit","103A-0005","Hi-speed A4 color image scanner, up to 40ppm, Automatic Document Feeder (ADF) of up to 100 sheets, Daily Duty Cycle of 4000 pages, 1200 dpi scanning with ultrasonic sensor which prevents double-feeding; USB 2.0, rated voltage AC 100-240V; Rated frequency 50-60Hz; Output Resolution 50dpi- 4800dpi (1 dpi increments), 7200 dpi and 9600 dpi; Max Document Size:216 x 297mm (Epson DS-780N)");
INSERT INTO stock_tbl VALUES("74","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Puncher","pc","103A-0006","Heavy duty, 2 hole");
INSERT INTO stock_tbl VALUES("75","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Paint","pail","103A-0007","Semi Gloss");
INSERT INTO stock_tbl VALUES("76","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Paintbrush","pcs","103A-0008","#2");
INSERT INTO stock_tbl VALUES("77","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Corrugated roofing sheet (yero)","pc","103A-0009","24ft x 8ft");
INSERT INTO stock_tbl VALUES("78","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Nails","kil","103A-0010","4 inches");
INSERT INTO stock_tbl VALUES("79","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Nails","kilo","103A-0011","3 inches");
INSERT INTO stock_tbl VALUES("80","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Nails","kilo","103A-0012","1 1/2 inches");
INSERT INTO stock_tbl VALUES("81","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Good Lumber","pcs","103A-0013","2x4x12");
INSERT INTO stock_tbl VALUES("82","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Good Lumber","pcs","103A-0014","2x3x12");
INSERT INTO stock_tbl VALUES("83","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Good Lumber","pcs","103A-0015","2x2x12");
INSERT INTO stock_tbl VALUES("84","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","RSB","pcs","103A-0016","10mm");
INSERT INTO stock_tbl VALUES("85","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Cement","sack","103A-0017","Green packaging");
INSERT INTO stock_tbl VALUES("86","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Concrete Hollow Blocks","pcs","103A-0018","4"");
INSERT INTO stock_tbl VALUES("87","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","GI Pipe","pcs","103A-0019","#2");
INSERT INTO stock_tbl VALUES("88","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Welding Rod","kilo","103A-0020","rod");
INSERT INTO stock_tbl VALUES("89","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Cutting Disk","pcs","103A-0021","#4");
INSERT INTO stock_tbl VALUES("90","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Sand","cubic m.","103A-0022","sand");
INSERT INTO stock_tbl VALUES("91","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Nail","kilo","103A-0023","Umbrella nail");
INSERT INTO stock_tbl VALUES("92","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Marine plywood","pc","103A-0024","1/4 thick
");
INSERT INTO stock_tbl VALUES("93","F-103A","OTHER SUPPLIES AND MATERIALS INVENTORY","N/A","Grinding","pc","103A-0025","Stone");
INSERT INTO stock_tbl VALUES("94","F-103","OFFICE SUPPLIES INVENTORY","N/A","lanyard","pc","103-0009","Customized Lanyard with text "Civil Servive Commission"");
INSERT INTO stock_tbl VALUES("95","F-103","OFFICE SUPPLIES INVENTORY","N/A","Keychain","pc","103-0010","Acrylic with metal ring customize keychain");
INSERT INTO stock_tbl VALUES("96","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Electric Wire","box","103A-0026","3.5mm stranded wire");
INSERT INTO stock_tbl VALUES("97","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Tape","pc","103A-0027","Electric Tape Big");
INSERT INTO stock_tbl VALUES("99","F-103","OFFICE SUPPLIES INVENTORY","N/A","Pen","pc","103-0011","Gel Pen 0.5 blue");
INSERT INTO stock_tbl VALUES("100","F-103","OFFICE SUPPLIES INVENTORY","N/A","Paper","pack","103-0012","Special Board Paper A4 (10 packs)");
INSERT INTO stock_tbl VALUES("101","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Cabinet","unit","103A-0028","Index card cabinet 24 drawers, 6rows & 4column; over all dimension 80.58cm(h) & 76.5cm(w)Card size 5" x 8"");
INSERT INTO stock_tbl VALUES("102","F-103","N/A","Training Expenses ","Paper","pack","103-0013","Glossy Photopaper (A4) 10pcs per pack");
INSERT INTO stock_tbl VALUES("103","F-103","OFFICE SUPPLIES INVENTORY","N/A","Card Case","pcs","103-0014","103mm x 150mm thickness 40cm");
INSERT INTO stock_tbl VALUES("104","F-103","OFFICE SUPPLIES INVENTORY","N/A","Mugs","pc","103-0015","w/ Laser engraved");
INSERT INTO stock_tbl VALUES("105","F-103A","OFFICE SUPPLIES INVENTORY","N/A","Tumbler","pc","103A-0029","customize with CSC RO V Logo");



#
# Delete any existing table `tbl_iar`
#

DROP TABLE IF EXISTS `tbl_iar`;


#
# Table structure of table `tbl_iar`
#



CREATE TABLE `tbl_iar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ent_name` varchar(50) NOT NULL,
  `fund_c` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `po_no` int(100) NOT NULL,
  `po_date` date NOT NULL,
  `dept` varchar(10) NOT NULL,
  `rc_code` varchar(100) NOT NULL,
  `iar_no` varchar(100) NOT NULL,
  `date_iar` date NOT NULL,
  `delivery_no` varchar(100) NOT NULL,
  `date_delivery` varchar(100) NOT NULL,
  `qty` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




#
# Delete any existing table `uacs_exp`
#

DROP TABLE IF EXISTS `uacs_exp`;


#
# Table structure of table `uacs_exp`
#



CREATE TABLE `uacs_exp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acct_title` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO uacs_exp VALUES("3","Training Expenses ","50202010","2023-05-30 13:22:07");
INSERT INTO uacs_exp VALUES("4","Awards/Rewards Expenses ","50206010","2023-05-30 13:22:20");
INSERT INTO uacs_exp VALUES("5","Printing and Publication Expenses","50299020","2023-05-30 13:22:53");
INSERT INTO uacs_exp VALUES("6","Repairs and Maintenance - Buildings and Other Structures","50213040","2023-05-30 13:25:03");
INSERT INTO uacs_exp VALUES("7","Repairs and Maintenance - Machinery and Equipment","50213050","2023-05-30 13:25:16");
INSERT INTO uacs_exp VALUES("8","Repairs and Maintenance - Transportation Equipment","50213060","2023-05-30 13:25:26");
INSERT INTO uacs_exp VALUES("9","Repairs and Maintenance - Furniture and Fixtures","50213070","2023-05-30 13:25:38");
INSERT INTO uacs_exp VALUES("10","Other Maintenance and Operating Expenses","50299990","2023-05-30 13:25:48");



#
# Delete any existing table `uacs_inv`
#

DROP TABLE IF EXISTS `uacs_inv`;


#
# Table structure of table `uacs_inv`
#



CREATE TABLE `uacs_inv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acct_title` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO uacs_inv VALUES("1","OFFICE SUPPLIES INVENTORY","1040401000","2023-05-29 11:05:30");
INSERT INTO uacs_inv VALUES("2","ACCOUNTABLE FORMS, PLATES AND STICKERS INVENTORY","1040402000","2023-05-29 11:15:09");
INSERT INTO uacs_inv VALUES("9","FUEL, OIL AND LUBRICANTS INVENTORY","1040408000","2023-05-29 11:15:18");
INSERT INTO uacs_inv VALUES("10","OTHER SUPPLIES AND MATERIALS INVENTORY","1040499000","2023-05-29 11:15:30");
INSERT INTO uacs_inv VALUES("11","SEMI-EXPENDABLE MACHINERY","1040501000","2023-05-29 11:18:31");
INSERT INTO uacs_inv VALUES("12","SEMI-EXPENDABLE OFFICE EQUIPMENT","1040502000","2023-05-29 11:19:47");
INSERT INTO uacs_inv VALUES("13","SEMI-EXPENDABLE INFORMATION AND COMMUNICATION TEC","1040503000","2023-05-29 11:20:05");
INSERT INTO uacs_inv VALUES("14","SEMI-EXPENDABLE COMMUNICATION EQUIPMENT","1040507000","2023-05-29 11:20:27");
INSERT INTO uacs_inv VALUES("15","SEMI-EXPENDABLE OTHER MACHINERY AND EQUIPMENT","1040519000","2023-05-29 11:21:02");
INSERT INTO uacs_inv VALUES("16","SEMI-EXPENDABLE FURNITURE AND FIXTURES","1040601000","2023-05-29 11:21:22");
INSERT INTO uacs_inv VALUES("17","SEMI-EXPENDABLE BOOKS","1040602000","2023-05-29 11:21:48");



#
# Delete any existing table `users`
#

DROP TABLE IF EXISTS `users`;


#
# Table structure of table `users`
#



CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("3","superadmin","21232f297a57a5a743894a0e4a801fc3","admin","2023-07-12 11:00:57");
INSERT INTO users VALUES("4","user","ee11cbb19052e40b07aac0ca060c23ee","user","2023-07-12 11:05:26");
INSERT INTO users VALUES("12","marc","97e1e59c0375e0f55c10d4314db20466","user","2023-07-26 14:24:33");
INSERT INTO users VALUES("13","marcadmin","21232f297a57a5a743894a0e4a801fc3","admin","2023-07-26 14:25:19");
INSERT INTO users VALUES("14","Ñee","a011a78a0c8d9e4f0038a5032d7668ab","user","2023-07-27 15:29:06");

