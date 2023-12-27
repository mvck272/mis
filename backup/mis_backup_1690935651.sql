# MIS : MySQL database backup
#
# Generated: Wednesday 2. August 2023
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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `unit_cost` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO delivery_entry VALUES("45","2023-101-1","F-101","AFO","00012","2023-06-15","Legazpi General Merchandise","TN 2023-05-0007","2023-06-13","101-0005","2","5000","2023-06-15 09:57:07");
INSERT INTO delivery_entry VALUES("46","2023-101-1","F-101","AFO","00012","2023-06-15","Legazpi General Merchandise","TN 2023-05-0007","2023-06-13","101-0004","20","4000","2023-06-15 09:57:07");
INSERT INTO delivery_entry VALUES("47","2023-101-1","F-101","AFO","00012","2023-06-15","Legazpi General Merchandise","TN 2023-05-0007","2023-06-13","101-0003","12","1200","2023-06-15 09:57:07");
INSERT INTO delivery_entry VALUES("48","2023-101-4","F-101","AFO","0013","2023-06-16","Legazpi General Merchandise","TN 2023-05-0007","2023-06-13","101-0001","4","500","2023-06-15 10:38:19");
INSERT INTO delivery_entry VALUES("49","2023-101-4","F-101","AFO","0013","2023-06-16","Legazpi General Merchandise","TN 2023-05-0007","2023-06-13","101-0002","8","800","2023-06-15 10:38:19");
INSERT INTO delivery_entry VALUES("50","2023-103-1","F-103","MSD","1234","2023-06-15","PixelBoards, Inc.","TN 2023-06-0008","2023-06-01","103-0003","5","150","2023-06-15 14:46:44");
INSERT INTO delivery_entry VALUES("51","2023-103-1","F-103","MSD","1234","2023-06-15","PixelBoards, Inc.","TN 2023-06-0008","2023-06-01","103-0002","10","8","2023-06-15 14:46:44");
INSERT INTO delivery_entry VALUES("54","2023-103A-1","F-103A","MSD","01034","2023-07-19","Legazpi General Merchandise","TR 2023-07-0022","2023-07-11","103A-0003","500","2500","2023-07-19 13:46:16");
INSERT INTO delivery_entry VALUES("55","2023-103A-1","F-103A","MSD","01034","2023-07-19","Legazpi General Merchandise","TR 2023-07-0022","2023-07-11","103A-0001","5","1000","2023-07-19 13:46:16");
INSERT INTO delivery_entry VALUES("56","2023-103A-1","F-103A","MSD","01034","2023-07-19","Legazpi General Merchandise","TR 2023-07-0022","2023-07-11","103A-0002","6","480","2023-07-19 13:46:16");
INSERT INTO delivery_entry VALUES("57","2023-CFAG-1","CFAG","HRD","2012","2023-07-19","Family Audio-Video Center","G 2023-06-0015","2023-07-12","C-0001","2","1000","2023-07-19 14:25:46");
INSERT INTO delivery_entry VALUES("58","2023-CFAG-1","CFAG","HRD","2012","2023-07-19","Family Audio-Video Center","G 2023-06-0015","2023-07-12","CFAG-0003","3","300","2023-07-19 14:25:46");
INSERT INTO delivery_entry VALUES("59","2023-CFAG-1","CFAG","HRD","2012","2023-07-19","Family Audio-Video Center","G 2023-06-0015","2023-07-12","C-0002","10","1600","2023-07-19 14:25:46");
INSERT INTO delivery_entry VALUES("60","2023-101-6","F-101","LSD","1010","2023-07-20","Pandayan Bookshop, Inc","TN 2023-07-0010","2023-07-18","101-0003","2","400","2023-07-20 18:12:27");
INSERT INTO delivery_entry VALUES("61","2023-101-6","F-101","LSD","1010","2023-07-20","Pandayan Bookshop, Inc","TN 2023-07-0010","2023-07-18","101-0004","2","300","2023-07-20 18:12:28");
INSERT INTO delivery_entry VALUES("62","2023-101-6","F-101","LSD","1010","2023-07-20","Pandayan Bookshop, Inc","TN 2023-07-0010","2023-07-18","101-0001","2","500","2023-07-20 18:12:28");
INSERT INTO delivery_entry VALUES("63","2023-101-6","F-101","LSD","1010","2023-07-20","Pandayan Bookshop, Inc","TN 2023-07-0010","2023-07-18","101-0005","2","1000","2023-07-20 18:12:28");
INSERT INTO delivery_entry VALUES("74","2023-103-3","F-103","PALD","1","2023-07-11","Denver's Computer Shopee, Inc.","TN 2023-08-0001","2023-08-01","103-0002","12","34344","2023-07-31 20:13:11");
INSERT INTO delivery_entry VALUES("75","2023-103-3","F-103","PALD","1","2023-07-11","Denver's Computer Shopee, Inc.","TN 2023-08-0001","2023-08-01","103-0001","2","1000","2023-07-31 20:13:11");
INSERT INTO delivery_entry VALUES("76","2023-103-3","F-103","PALD","1","2023-07-11","Denver's Computer Shopee, Inc.","TN 2023-08-0001","2023-08-01","103-0003","5","90","2023-07-31 20:13:11");



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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO employee VALUES("18","CHERRYLOU L. LARA","CHIEF HRS","1","2023-07-24 15:20:46");
INSERT INTO employee VALUES("19","ZARAH Z. ARROYO","CHIEF HRS","1","2023-07-24 15:21:28");
INSERT INTO employee VALUES("20","ATTY. DAISY BRAGAIS","DIRECTOR IV","1","2023-07-24 15:23:00");
INSERT INTO employee VALUES("21","SHARLAINE L. PRIETO","CHIEF HRS","1","2023-07-26 14:10:42");
INSERT INTO employee VALUES("22","MA. DOLORES D. SALUD","DIRECTOR II","1","2023-07-31 21:37:34");
INSERT INTO employee VALUES("23","JOCELYN L. MARIFOSQUE","DIRECTOR II","1","2023-07-26 14:14:19");
INSERT INTO employee VALUES("24","CHRISTIAN C. ANTIQUIERA","HRS II","1","2023-07-26 14:14:58");



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
  `stock_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO stock_tbl VALUES("22","F-103A","OFFICE SUPPLIES INVENTORY","N/A","PAPER","REAM","103A-0001","LONG");
INSERT INTO stock_tbl VALUES("23","F-101","OFFICE SUPPLIES INVENTORY","N/A","PAPER","REAM","101-0001","LEGAL, 80 gsm");
INSERT INTO stock_tbl VALUES("24","F-103","OFFICE SUPPLIES INVENTORY","N/A","PAPER","REAM","103-0001","A4");
INSERT INTO stock_tbl VALUES("25","CFAG","OFFICE SUPPLIES INVENTORY","N/A","FOLDER","REAM","C-0001","LEGAL");
INSERT INTO stock_tbl VALUES("26","F-103","OFFICE SUPPLIES INVENTORY","N/A","BALLPEN","BOX","103-0002","RED SIGNPEN");
INSERT INTO stock_tbl VALUES("27","F-101","OFFICE SUPPLIES INVENTORY","N/A","PAPER","REAM","101-0002","A4");
INSERT INTO stock_tbl VALUES("28","F-101","FUEL, OIL AND LUBRICANTS INVENTORY","N/A","ALCHOHOL","GAL","101-0003","ETHYL");
INSERT INTO stock_tbl VALUES("29","F-103","OFFICE SUPPLIES INVENTORY","N/A","PAPER CLIP","box","103-0003","JUMBO");
INSERT INTO stock_tbl VALUES("30","CFAG","OFFICE SUPPLIES INVENTORY","N/A","TAPE","roll","C-0002","MASKING TAPE");
INSERT INTO stock_tbl VALUES("31","F-103A","OFFICE SUPPLIES INVENTORY","N/A","INSECTICIDE","can","103A-0002","Aerosol type");
INSERT INTO stock_tbl VALUES("32","F-103A","OFFICE SUPPLIES INVENTORY","N/A","ENVELOPE","pc","103A-0003","LONG");
INSERT INTO stock_tbl VALUES("33","F-101","OFFICE SUPPLIES INVENTORY","N/A","INK","bottle","101-0004","Black");
INSERT INTO stock_tbl VALUES("43","F-101","N/A","Awards/Rewards Expenses ","PLAQUE","PC","101-0005","Color gold");
INSERT INTO stock_tbl VALUES("50","F-101","ACCOUNTABLE FORMS, PLATES AND STICKERS INVENTORY","N/A","Binder Clips","box","101-0007","50mm");



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
INSERT INTO uacs_exp VALUES("17","sample UACS-Expenses","111","2023-07-25 11:42:40");



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

