-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2021 at 05:29 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `application` varchar(500) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `type`, `employee_id`, `full_name`, `date`, `subject`, `application`, `status`) VALUES
(1, 'Leave', '1', 'Dr. Elissa Langworth', '2007-09-01', 'Prayer for leave application', 'Magnam nesciunt laborum nam architecto sint ea. Consequatur adipisci corporis enim quaerat animi est. Culpa libero earum itaque consequuntur sunt.', 2),
(2, 'Leave', '2', 'Juanita Huels V', '1984-12-30', 'Prayer for leave application', 'Placeat at et voluptatum non ut. Dolores eum nam tempore quibusdam quasi quos cum quis. Itaque asperiores fugiat ut cum saepe.', 1),
(3, 'Leave', '3', 'Prof. Sammie Pagac', '2014-04-12', 'Prayer for leave application', 'Quo fugiat non aut non nostrum repellat qui eum. Molestiae est nulla et illum iusto fugiat. Est et numquam minus. Vero facere sit officiis accusamus error.', 0),
(4, 'Leave', '4', 'Gerardo Kilback', '2016-02-04', 'Prayer for leave application', 'Iure temporibus atque quo. Nulla illo numquam quod laudantium tenetur.', 1),
(5, 'Leave', '5', 'Verla Keeling I', '2003-12-20', 'Prayer for leave application', 'Doloribus ut nostrum maxime aliquam. Eum unde tempora veniam et. Sit qui enim possimus est architecto qui vel.', 1),
(6, 'Leave', '6', 'Ms. Mylene Pollich', '1972-12-21', 'Prayer for leave application', 'Veritatis alias voluptatibus reiciendis eius molestiae. Totam qui alias sit et rerum odit enim.', 1),
(7, 'Leave', '7', 'Guido Rohan', '2007-07-12', 'Prayer for leave application', 'Tempore voluptas nam officiis. Cumque illum adipisci dolores quae nobis quia. Ut quibusdam ratione harum minima corporis id. Eaque ducimus velit cum id.', 0),
(8, 'Leave', '8', 'Alfonzo Schinner', '1980-03-27', 'Prayer for leave application', 'Sed et amet magni eveniet. Voluptas dignissimos omnis et magni blanditiis soluta maxime. Sunt itaque eius culpa eveniet error omnis. Totam ad nam aut et aut quibusdam et dolorem.', 2),
(9, 'Leave', '9', 'Prof. Benedict Hodkiewicz', '2011-05-30', 'Prayer for leave application', 'Aut reprehenderit sed aut. Exercitationem deleniti et accusantium at iusto qui. Labore est corporis sequi enim maxime.', 0),
(10, 'Leave', '10', 'Dr. Lennie Deckow PhD', '1996-04-08', 'Prayer for leave application', 'Vel iure harum voluptatum ullam culpa dignissimos explicabo. Voluptatem dicta occaecati sed enim eaque est. Sint autem fuga iure debitis voluptatem recusandae accusantium voluptas.', 2),
(11, 'Leave', '11', 'Noemy Macejkovic', '2004-01-13', 'Prayer for leave application', 'Dignissimos minus minus qui architecto ex sit corporis esse. Fugiat recusandae numquam vel ducimus earum culpa. Aspernatur quis dolorem adipisci qui ea quos.', 1),
(12, 'Leave', '12', 'Jack Lang', '2005-09-20', 'Prayer for leave application', 'Rem sed sunt cum ducimus. Cumque pariatur officia error. Aut vero vitae id omnis omnis et. Dignissimos possimus aliquid illum sed.', 2),
(13, 'Leave', '13', 'Freeda Harvey', '1977-10-31', 'Prayer for leave application', 'Aperiam id voluptatum perspiciatis quo dolor nam. Dolores provident deleniti et dolor ut veniam dolores. Et natus amet sit ipsa magni in. Aliquid non vero molestias ut fugit voluptates.', 1),
(14, 'Leave', '14', 'Brendan Wunsch', '1970-07-29', 'Prayer for leave application', 'Quod sapiente sed numquam nam molestias qui. Adipisci non reiciendis id error similique sit. Iure sunt amet tenetur expedita non nihil.', 1),
(15, 'Leave', '15', 'Patsy Hauck', '2003-03-07', 'Prayer for leave application', 'Dolore esse quia voluptas hic. Maiores et ut eum ratione. Tempore molestiae eum et ut quia dolorum. Et quibusdam eaque earum maiores tempore qui quaerat.', 1),
(16, 'Leave', '16', 'Robbie Fahey Jr.', '1991-08-12', 'Prayer for leave application', 'Dolor aperiam autem est. Provident omnis nihil iure et quia sunt enim est. Est suscipit molestias eum porro.', 0),
(17, 'Leave', '17', 'Nash Douglas IV', '1982-02-16', 'Prayer for leave application', 'Exercitationem et maiores rerum ullam dicta reiciendis. Repellendus quo neque et maiores numquam consectetur eligendi. Perspiciatis ipsum quibusdam quis ipsum et repellat.', 2),
(18, 'Leave', '18', 'Vidal Towne', '1990-12-06', 'Prayer for leave application', 'Ut adipisci consectetur dolore ea est. Veniam incidunt aut doloribus quos.', 0),
(19, 'Leave', '19', 'Miss Loraine Grady', '2008-08-26', 'Prayer for leave application', 'Expedita asperiores aut quas qui illo. Aspernatur voluptatem et aliquam fuga doloribus. Saepe minus rem eius et aut in nostrum mollitia. Et similique et quibusdam et sed.', 2),
(20, 'Leave', '20', 'Alba Jerde', '1981-04-04', 'Prayer for leave application', 'Vero reprehenderit qui ullam blanditiis rerum pariatur. Esse beatae et officia illo explicabo aut. A vitae sit ut est dolores. Amet et adipisci necessitatibus.', 1),
(21, 'Leave', '21', 'Pearline Botsford', '2007-01-13', 'Prayer for leave application', 'Non ipsa qui modi alias. Possimus eos et odio sit veritatis dolore. Officiis libero necessitatibus voluptate nobis odio pariatur.', 2),
(22, 'Leave', '22', 'Shanel Kozey', '1978-09-11', 'Prayer for leave application', 'Facere est et et sit distinctio rem tempore. Sapiente amet mollitia eum blanditiis. Quia libero non ipsa.', 1),
(23, 'Leave', '23', 'Jessica Schowalter', '1985-11-28', 'Prayer for leave application', 'Animi expedita laudantium atque. Doloremque repudiandae provident eum sapiente assumenda.', 1),
(24, 'Leave', '24', 'Keeley Koelpin', '2006-05-30', 'Prayer for leave application', 'Laboriosam placeat mollitia possimus excepturi. Est provident quae rerum autem laborum. Animi est voluptatibus est.', 0),
(25, 'Leave', '25', 'Ms. Marilie Rempel II', '1989-09-19', 'Prayer for leave application', 'Quidem et suscipit molestias beatae rerum. Voluptatibus natus hic et nemo. Id quibusdam qui quae ab. Qui nihil eligendi voluptate voluptates quae voluptatibus et laboriosam.', 2),
(26, 'Leave', '26', 'Rosalyn Walker', '2019-05-19', 'Prayer for leave application', 'Magni neque nisi ipsum. Et ratione debitis ut. Delectus omnis velit id culpa. Dolor id nesciunt recusandae animi et. Ex eligendi molestiae libero facilis iste quo voluptates.', 0),
(27, 'Leave', '27', 'Darion Graham', '2018-11-22', 'Prayer for leave application', 'Et similique aut illo atque dolor in magnam. Et est et omnis eligendi. Quibusdam mollitia omnis quae dignissimos ab non et.', 1),
(28, 'Leave', '28', 'Elwyn Kessler', '2017-05-04', 'Prayer for leave application', 'Sapiente ipsum quibusdam sunt at non accusantium. Facere placeat animi laborum illo voluptas assumenda rerum. Quam quia labore nulla magnam voluptatem aut. Aut debitis nesciunt et et omnis sit.', 1),
(29, 'Leave', '29', 'Kiarra Barrows', '1974-12-30', 'Prayer for leave application', 'Quis sapiente officiis nisi laborum reprehenderit et dicta. Dolorum est ipsa autem ut aspernatur. Quo numquam est cum iusto nihil.', 2),
(30, 'Leave', '30', 'Marcia Kerluke DVM', '2007-10-01', 'Prayer for leave application', 'Esse optio vero mollitia quod. Quos omnis sed nemo nemo maxime et. Vero dignissimos itaque qui in.', 0),
(31, 'Leave', '31', 'Miss Alaina Brakus V', '1975-01-20', 'Prayer for leave application', 'Ab vero rem quo dolorum accusamus. Asperiores qui ipsa non facere eaque. At soluta assumenda voluptatum molestias architecto unde dolores. Sint autem eius similique omnis.', 1),
(32, 'Leave', '32', 'Nyah Schmeler', '1987-07-15', 'Prayer for leave application', 'Quasi iste in adipisci. Labore sequi odio dignissimos odio fugiat voluptatem quo. Omnis omnis excepturi sit repellendus natus.', 2),
(33, 'Leave', '33', 'Manuela Roob', '1975-08-14', 'Prayer for leave application', 'Perferendis aut soluta cupiditate qui. Sit quia in placeat accusantium. Omnis tenetur quis enim quibusdam commodi. Ullam quia et doloremque est reprehenderit.', 1),
(34, 'Leave', '34', 'Danial Schimmel', '1992-04-17', 'Prayer for leave application', 'Dicta in quia repellat odit voluptatem commodi. Praesentium esse aut mollitia sit laborum occaecati. Ea dolorum illum itaque ea itaque.', 2),
(35, 'Leave', '35', 'Dr. Laurence Lubowitz', '1976-02-24', 'Prayer for leave application', 'Ea saepe quo est officia qui occaecati est. Nihil qui sapiente rerum eius eum nobis. Molestiae et eos nobis sed at quo sit.', 2),
(36, 'Leave', '36', 'Dahlia Botsford', '2008-02-02', 'Prayer for leave application', 'In harum at voluptates dolorem laborum et quisquam. Nam veniam laboriosam nemo officiis nisi tenetur. Maxime velit ut nesciunt dolore dolorem fuga.', 0),
(37, 'Leave', '37', 'Elenor McGlynn', '2018-10-13', 'Prayer for leave application', 'Praesentium repellat ipsa in facere maxime. Voluptatem sequi totam vel consequuntur. Fugiat maxime labore minus id ex.', 2),
(38, 'Leave', '38', 'Lamont Gottlieb', '1984-10-02', 'Prayer for leave application', 'Illum quos voluptatum maxime officia inventore. Libero quibusdam autem optio nulla. Minus ullam eius quasi rerum qui. Nisi maxime impedit asperiores sint et.', 1),
(39, 'Leave', '39', 'Darrin Huels', '2004-08-04', 'Prayer for leave application', 'Porro neque nobis dolor commodi sapiente debitis suscipit. Perspiciatis sint at doloremque voluptas qui eaque consequatur eum. Sint a sit enim doloremque totam unde aut.', 2),
(40, 'Leave', '40', 'Charlotte Frami', '1995-01-20', 'Prayer for leave application', 'Reiciendis magni ullam quidem ea sit aut harum maxime. Maiores illo officia eligendi eaque quia. Quaerat adipisci qui dolor voluptatum sit.', 1),
(41, 'Leave', '41', 'Kariane Hill', '1992-10-20', 'Prayer for leave application', 'Autem nulla est et quis maiores eveniet sit. Quis pariatur quod veritatis qui doloribus. Quia ut optio enim adipisci fugit. Consequatur et dolore laborum id tempora officiis.', 1),
(42, 'Leave', '42', 'Prof. Weston Goldner DDS', '1988-08-17', 'Prayer for leave application', 'Ea placeat nisi reiciendis. Illum quod consequatur minus numquam natus sit. In debitis voluptas asperiores modi sed.', 0),
(43, 'Leave', '43', 'Katrina Ferry', '1984-01-22', 'Prayer for leave application', 'Iusto in accusamus sit inventore sint aut blanditiis. Quam consectetur nam id. Et est doloremque sint.', 2),
(44, 'Leave', '44', 'Aaliyah Thiel III', '1987-12-18', 'Prayer for leave application', 'Eius consequatur omnis et autem et nam labore. Eos animi officiis eum et repudiandae. Modi accusamus quaerat aut et. Sit nisi impedit doloremque excepturi rerum.', 2),
(45, 'Leave', '45', 'Miss Hallie Mante IV', '2014-11-29', 'Prayer for leave application', 'Sed omnis inventore reprehenderit reprehenderit autem. Est deleniti nam quos aperiam ipsam officia consequatur. Impedit incidunt rerum placeat optio.', 0),
(46, 'Leave', '46', 'Jerod Hackett', '1984-12-17', 'Prayer for leave application', 'Corrupti rem voluptas accusantium. Rerum aut sequi quo hic voluptatem nemo quaerat. Aut veritatis nihil facilis id iusto quia. Alias quo nostrum dolorem soluta et nemo.', 1),
(47, 'Leave', '47', 'Rebecca Kertzmann', '2020-05-29', 'Prayer for leave application', 'Dolore occaecati saepe qui dicta. Explicabo nobis assumenda placeat omnis. Ab rem fugit aut qui atque sint inventore saepe. Dolorum sed debitis possimus ea ut a.', 2),
(48, 'Leave', '49', 'Anastacio Brakus', '2013-04-27', 'Prayer for leave application', 'Quia harum corporis quia. Debitis eaque est non expedita et. Dolor iusto quod non.', 1),
(49, 'Leave', '50', 'Amanda Nicolas', '1976-09-18', 'Prayer for leave application', 'Aut dolorem est officia molestias amet velit. Enim qui iste delectus molestiae sunt atque. Earum autem ea eos et laborum dolor. Cum autem unde sit in.', 2),
(50, 'Leave', '51', 'Dr. Claudine Streich', '2005-03-14', 'Prayer for leave application', 'Voluptatem non consequatur libero atque veniam. Eligendi eveniet sint vel culpa. Et aut quia voluptas nesciunt quis et.', 0),
(51, 'Leave', '52', 'Ricky Anderson PhD', '1976-01-24', 'Prayer for leave application', 'Qui non aut quo iste veritatis. Voluptates harum quis error repudiandae. Necessitatibus at expedita omnis in asperiores. Dolorum deleniti perferendis deleniti enim ea rerum.', 1),
(52, 'Leave', '53', 'Joesph Will', '2010-03-17', 'Prayer for leave application', 'Quidem illum ea et minima omnis adipisci nostrum. Velit cupiditate tenetur at nesciunt nostrum quam dolore occaecati.', 1),
(53, 'Leave', '54', 'Dr. Frank Jast I', '2010-07-24', 'Prayer for leave application', 'Quia sint quaerat aut delectus ut saepe labore. Error nisi nisi iure totam incidunt. Neque ut ut eum officiis magni at.', 1),
(54, 'Leave', '55', 'Adell Toy', '1995-11-25', 'Prayer for leave application', 'Minus ut rerum omnis. Ad rerum quia minima dolore laboriosam. Aut est nulla quia et. Dignissimos maxime ut eligendi nobis laboriosam voluptatem eveniet.', 0),
(55, 'Leave', '56', 'Mr. Major Rempel', '2013-08-31', 'Prayer for leave application', 'Quae nihil autem et aut. Ad libero ut exercitationem aspernatur. Optio et vel est quod nulla. Accusantium quae neque ea veniam ut.', 2),
(56, 'Leave', '57', 'Leann Satterfield', '1996-10-29', 'Prayer for leave application', 'Praesentium exercitationem et et tenetur velit rerum. Aliquid quo magni quisquam sequi velit. Et numquam non sint quis quasi est rerum nostrum. Numquam eaque et dolores rem.', 2),
(57, 'Leave', '58', 'Suzanne Hodkiewicz', '1972-04-21', 'Prayer for leave application', 'Aut voluptatem et sed ipsam. Rerum voluptas at quis molestiae. Est aut eveniet adipisci. Reiciendis assumenda porro eum non rem ut distinctio neque.', 0),
(58, 'Leave', '59', 'Khalid Romaguera', '1984-01-15', 'Prayer for leave application', 'Eum sit consequatur quod aut sit qui. Atque aliquid consequatur natus ut a quis. Inventore eos quia veritatis aliquid dolore. Accusamus perferendis non occaecati eligendi.', 2),
(59, 'Leave', '60', 'Dr. Kailyn Boyer MD', '1994-02-14', 'Prayer for leave application', 'Quia et magni aut sunt eligendi. Omnis animi est fugit corrupti quis. Suscipit inventore ea rerum.', 0),
(60, 'Leave', '61', 'Verdie Graham Jr.', '1970-09-08', 'Prayer for leave application', 'Autem eveniet laborum recusandae est itaque et. Suscipit distinctio cumque facere in provident. Illo aut perferendis ut exercitationem sed.', 1),
(61, 'Leave', '62', 'Pearl Pollich', '2001-05-25', 'Prayer for leave application', 'Fugiat sint at inventore laboriosam aut est iure. Molestiae et eligendi dolore quasi.', 0),
(62, 'Leave', '63', 'Theodora Ziemann', '2011-01-11', 'Prayer for leave application', 'Est consectetur ut quia reprehenderit. Suscipit nesciunt fuga magnam fugit. Deserunt modi nesciunt minima natus ea necessitatibus.', 1),
(63, 'Leave', '64', 'Nyasia Satterfield', '1983-06-30', 'Prayer for leave application', 'Eaque placeat officiis dolore sunt est fugiat. Maxime exercitationem veniam cumque sint sint. Sed doloremque dolores dolor impedit esse sequi. Quaerat quia temporibus et sit ipsam vitae quo eos.', 0),
(64, 'Leave', '65', 'Prof. Kirsten Dicki', '2002-06-15', 'Prayer for leave application', 'Iste repudiandae sunt est quia ullam deserunt. Quis vel esse vel sunt. Aut rerum excepturi qui. Reiciendis dignissimos autem doloremque omnis occaecati deleniti.', 1),
(65, 'Leave', '66', 'Ward Corwin', '2016-03-16', 'Prayer for leave application', 'Suscipit itaque nam et qui. Numquam est blanditiis nesciunt blanditiis minus. Non nihil vero consectetur laboriosam et. Non occaecati architecto molestias recusandae sit magni fugit qui.', 1),
(66, 'Leave', '67', 'Caesar Considine', '1999-12-10', 'Prayer for leave application', 'Et tempora veniam veniam. Ea animi accusantium laboriosam rerum. Officiis voluptatum quod cum ut minus harum. Enim nisi numquam eius. Et expedita quia officiis.', 0),
(67, 'Leave', '68', 'Mr. Lafayette Ruecker', '2008-06-17', 'Prayer for leave application', 'Fugit velit odio et sapiente. Error non excepturi similique ipsa minima quam. Dolorem quo sit exercitationem rerum temporibus rerum.', 0),
(68, 'Leave', '69', 'Bethel Collins', '2003-12-12', 'Prayer for leave application', 'Consequuntur commodi qui vel beatae odio laudantium recusandae et. Ut voluptatem tenetur explicabo nesciunt ipsam doloremque. Qui et ducimus rerum aliquid.', 1),
(69, 'Leave', '70', 'Ms. Evie Prohaska PhD', '1997-04-17', 'Prayer for leave application', 'Commodi commodi sapiente maiores maxime a. Et voluptas dolores laborum inventore. Odit voluptas suscipit cum non. Beatae atque vel et.', 2),
(70, 'Leave', '71', 'Audie Runte Sr.', '1993-08-17', 'Prayer for leave application', 'Deleniti atque molestiae in recusandae voluptatibus. Veritatis voluptatem impedit voluptatem et. Velit fugiat dolores nesciunt. Ipsa cumque est suscipit non numquam amet.', 0),
(71, 'Leave', '72', 'Dr. Maida Predovic DVM', '1979-06-17', 'Prayer for leave application', 'Dolor voluptatum et molestias similique aut cupiditate et. Molestiae possimus provident aut est accusamus.', 2),
(72, 'Leave', '73', 'Carey Cruickshank', '2017-02-05', 'Prayer for leave application', 'Minus sint culpa fugiat. Sed velit dolores et nihil. Eum voluptatem itaque quam quas voluptatem.', 0),
(73, 'Leave', '74', 'Julie Kessler', '2007-05-23', 'Prayer for leave application', 'Illo velit quisquam corporis magnam impedit et aut. Facere maiores numquam enim libero nostrum. Mollitia soluta amet sed optio ut.', 1),
(74, 'Leave', '75', 'Dr. Kiley Sporer', '1995-10-26', 'Prayer for leave application', 'Ut error quibusdam voluptas dolorem eius consequatur sit. Nemo esse sunt ducimus et nostrum quasi. Sapiente et et quibusdam consequatur enim sed.', 0),
(75, 'Leave', '76', 'Griffin Strosin PhD', '1987-09-24', 'Prayer for leave application', 'Fugiat quidem laboriosam eum ut voluptatem aperiam ut. Unde quaerat qui commodi recusandae quae exercitationem quae. Tempora eos est est quo.', 0),
(76, 'Leave', '77', 'Uriel Buckridge', '1979-06-04', 'Prayer for leave application', 'Ullam molestiae quidem aut. Dolorum similique debitis possimus qui iusto rem consequuntur. Temporibus sit consequatur corrupti dignissimos tempora consequuntur aut. Unde soluta quisquam cumque est.', 2),
(77, 'Leave', '78', 'Evalyn Upton II', '1996-04-01', 'Prayer for leave application', 'Error omnis facere quis. Illo eveniet sed qui excepturi. Omnis vel minima magni et.', 1),
(78, 'Leave', '79', 'Sadie Ullrich', '1976-09-17', 'Prayer for leave application', 'Quaerat qui quia sed nulla libero. Architecto laudantium tempora natus et consequatur. Odio voluptatem modi inventore ut a ut. Itaque dolor et facilis voluptas quod culpa et.', 2),
(79, 'Leave', '80', 'Faustino Adams', '2014-05-29', 'Prayer for leave application', 'Ipsam sapiente eius autem voluptatibus et. Omnis et mollitia sapiente ducimus. Accusantium rerum aut et velit illo.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `attendance_date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `full_name`, `attendance_date`, `status`) VALUES
(1, '1', 'Md Aslam', '2021-04-19', 'A'),
(2, '2', 'Md Aslam 2', '2021-04-19', 'P'),
(3, '3', 'Prof. Sammie Pagac', '2021-04-19', 'A'),
(4, '4', 'Gerardo Kilback', '2021-04-19', 'A'),
(5, '5', 'Verla Keeling I', '2021-04-19', 'A'),
(6, '6', 'Ms. Mylene Pollich', '2021-04-19', 'A'),
(7, '7', 'Guido Rohan', '2021-04-19', 'A'),
(8, '8', 'Alfonzo Schinner', '2021-04-19', 'A'),
(9, '9', 'Prof. Benedict Hodkiewicz', '2021-04-19', 'A'),
(10, '10', 'Dr. Lennie Deckow PhD', '2021-04-19', 'A'),
(11, '11', 'Noemy Macejkovic', '2021-04-19', 'A'),
(12, '12', 'Jack Lang', '2021-04-19', 'A'),
(13, '13', 'Freeda Harvey', '2021-04-19', 'A'),
(14, '14', 'Brendan Wunsch', '2021-04-19', 'A'),
(15, '15', 'Patsy Hauck', '2021-04-19', 'A'),
(16, '16', 'Robbie Fahey Jr.', '2021-04-19', 'A'),
(17, '17', 'Nash Douglas IV', '2021-04-19', 'A'),
(18, '18', 'Vidal Towne', '2021-04-19', 'A'),
(19, '19', 'Miss Loraine Grady', '2021-04-19', 'A'),
(20, '20', 'Alba Jerde', '2021-04-19', 'A'),
(21, '21', 'Pearline Botsford', '2021-04-19', 'A'),
(22, '22', 'Shanel Kozey', '2021-04-19', 'A'),
(23, '23', 'Keeley Koelpin', '2021-04-19', 'A'),
(24, '24', 'Ms. Marilie Rempel II', '2021-04-19', 'A'),
(25, '25', 'Rosalyn Walker', '2021-04-19', 'A'),
(26, '26', 'Elwyn Kessler', '2021-04-19', 'A'),
(27, '27', 'Miss Alaina Brakus V', '2021-04-19', 'A'),
(28, '28', 'Danial Schimmel', '2021-04-19', 'A'),
(29, '29', 'Dr. Laurence Lubowitz', '2021-04-19', 'A'),
(30, '30', 'Dahlia Botsford', '2021-04-19', 'A'),
(31, '31', 'Lamont Gottlieb', '2021-04-19', 'A'),
(32, '32', 'Darrin Huels', '2021-04-19', 'A'),
(33, '33', 'Charlotte Frami', '2021-04-19', 'A'),
(34, '34', 'Kariane Hill', '2021-04-19', 'A'),
(35, '35', 'Prof. Weston Goldner DDS', '2021-04-19', 'A'),
(36, '36', 'Katrina Ferry', '2021-04-19', 'A'),
(37, '37', 'Aaliyah Thiel III', '2021-04-19', 'A'),
(38, '38', 'Miss Hallie Mante IV', '2021-04-19', 'A'),
(39, '39', 'Jerod Hackett', '2021-04-19', 'A'),
(40, '40', 'Rebecca Kertzmann', '2021-04-19', 'A'),
(41, '41', 'Anastacio Brakus', '2021-04-19', 'A'),
(42, '42', 'Amanda Nicolas', '2021-04-19', 'A'),
(43, '43', 'Dr. Claudine Streich', '2021-04-19', 'A'),
(44, '44', 'Ricky Anderson PhD', '2021-04-19', 'A'),
(45, '45', 'Joesph Will', '2021-04-19', 'A'),
(46, '46', 'Dr. Frank Jast I', '2021-04-19', 'A'),
(47, '47', 'Adell Toy', '2021-04-19', 'A'),
(48, '48', 'Mr. Major Rempel', '2021-04-19', 'A'),
(49, '49', 'Leann Satterfield', '2021-04-19', 'A'),
(50, '50', 'Suzanne Hodkiewicz', '2021-04-19', 'A'),
(51, '51', 'Khalid Romaguera', '2021-04-19', 'A'),
(52, '52', 'Dr. Kailyn Boyer MD', '2021-04-19', 'A'),
(53, '53', 'Verdie Graham Jr.', '2021-04-19', 'A'),
(54, '54', 'Pearl Pollich', '2021-04-19', 'A'),
(55, '55', 'Theodora Ziemann', '2021-04-19', 'A'),
(56, '56', 'Nyasia Satterfield', '2021-04-19', 'A'),
(57, '57', 'Prof. Kirsten Dicki', '2021-04-19', 'A'),
(58, '58', 'Ward Corwin', '2021-04-19', 'A'),
(59, '59', 'Caesar Considine', '2021-04-19', 'A'),
(60, '60', 'Mr. Lafayette Ruecker', '2021-04-19', 'A'),
(61, '61', 'Bethel Collins', '2021-04-19', 'A'),
(62, '62', 'Ms. Evie Prohaska PhD', '2021-04-19', 'A'),
(63, '63', 'Audie Runte Sr.', '2021-04-19', 'A'),
(64, '64', 'Dr. Maida Predovic DVM', '2021-04-19', 'A'),
(65, '65', 'Carey Cruickshank', '2021-04-19', 'A'),
(66, '66', 'Julie Kessler', '2021-04-19', 'A'),
(67, '67', 'Dr. Kiley Sporer', '2021-04-19', 'A'),
(68, '68', 'Griffin Strosin PhD', '2021-04-19', 'A'),
(69, '69', 'Uriel Buckridge', '2021-04-19', 'A'),
(70, '70', 'Evalyn Upton II', '2021-04-19', 'A'),
(71, '71', 'Faustino Adams', '2021-04-19', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` bigint(100) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `birth_day` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `education` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `full_name`, `father_name`, `mother_name`, `birth_day`, `gender`, `contact`, `email`, `blood_group`, `education`, `present_address`, `permanent_address`, `password`, `job_type`, `photo`) VALUES
(1, 'Md Aslam', 'Father Name', 'Mother Name', '1994-08-06', 'Male', '+880 1680607293', 'user@gmail.com', 'O+', 'CSE', 'Agrabad, Chittagong, 4100, Bangladesh', 'Agrabad, Chittagong, 4100, Bangladesh', 'user@123', 'Software Developer', 'assets/profilePicture/aslam.jpg'),
(2, 'Md Aslam 2', 'Father Name', 'Mother Name', '1994-08-06', 'Male', '+880 1558102860', 'aslam@gmail.com', 'O+', 'CSE', 'Agrabad, Chittagong, 4100, Bangladesh', 'Agrabad, Chittagong, 4100, Bangladesh', 'aslam@123', 'IT Project Manager', 'assets/profilePicture/aslam2.jpg'),
(3, 'Prof. Sammie Pagac', 'Aric Hagenes', 'Prof. Maude Bayer', '1979-09-03', 'Male', '+1-498-568-6567', 'dluettgen@okon.net', 'A+', 'CSE', '4176 Santa Pike\nSouth Elzaside, HI 66996-9929', '7093 Wuckert Corner\nGreenstad, FL 09956-2036', '6MqQ29iI', 'Software Developer', ''),
(4, 'Gerardo Kilback', 'Yessenia Lockman', 'Paris Mayer', '1987-07-05', 'Female', '1-663-214-9441 x726', 'kling.alfonso@moore.org', 'O-', 'SSC', '15183 Kohler Walks Suite 349\nCurtismouth, VT 13637', '3582 Lowe Estate\nNorth Reyna, AR 70054-7210', 'AUby94Xe', 'Systems Analyst', ''),
(5, 'Verla Keeling I', 'Mr. Kolby Bergstrom', 'Darren Ebert', '1976-12-23', 'Female', '(651) 982-4530 x0331', 'deondre.pollich@gmail.com', 'B-', 'SSC', '4599 Liam Lodge Suite 349\nReillyport, FL 65721', '9594 Quinton Shoal\nBernhardshire, DC 91957', 'sY3qgQCM', 'Security Analyst', ''),
(6, 'Ms. Mylene Pollich', 'Newell Feil', 'Madelyn Stoltenberg', '1991-07-21', 'Other', '435-870-3638 x94211', 'kuhlman.rosendo@stamm.com', 'B-', 'MBA', '6348 Alysson Trace Suite 738\nEast Estrellaview, CT 90004', '78079 Tessie Crossing\nNorth Keyshawn, CA 95206-1890', 'XW9UsvOt', 'Network Architect', ''),
(7, 'Guido Rohan', 'Sallie Okuneva', 'Eudora Rohan Jr.', '1992-06-15', 'Male', '565-940-9412 x472', 'vmertz@rice.info', 'O+', 'BBA', '660 Kuhn Roads\nSouth Carolanne, MS 42967', '130 Brekke Dam\nEast Chanelfort, AR 82539', 'v7N4kTCM', 'Software Developer', ''),
(8, 'Alfonzo Schinner', 'Prof. Lou Mann DVM', 'Mr. Porter Schinner DDS', '1976-04-30', 'Male', '+1-865-963-9642', 'zcummerata@anderson.biz', 'A+', 'MBA', '8115 Kuhn Rue Suite 594\nNew Lisa, NV 94428', '74948 Deon Springs Apt. 487\nEast Dorthaburgh, MS 53640', 'uU6qwm7H', 'Systems Analyst', ''),
(9, 'Prof. Benedict Hodkiewicz', 'Mr. Noel Cruickshank', 'Mrs. Rylee Collier', '1974-10-02', 'Male', '673.578.6679', 'homenick.nelda@daniel.biz', 'O-', 'EEE', '2200 Boehm Ranch Suite 554\nEast Kobehaven, ND 66968-3895', '5269 Beth Shores\nPort Karelle, SC 94555-6652', 'V5APDQ4F', 'Database Administrator', ''),
(10, 'Dr. Lennie Deckow PhD', 'Prof. Newton Padberg', 'Michel Sanford Jr.', '1985-07-24', 'Male', '+1-505-581-5444', 'aniya43@kiehn.net', 'B-', 'Law', '3376 Marlene Hollow\nLake Bretmouth, MN 51304-9258', '4713 Greg Estates\nCaraville, AR 93683', 'RE9pn1Gm', 'Systems Analyst', ''),
(11, 'Noemy Macejkovic', 'Colleen Nienow', 'Luella McKenzie', '1982-02-04', 'Other', '+1 (485) 514-1374', 'wauer@hotmail.com', 'A+', 'SSC', '4889 Jerde Ramp Suite 814\nReubenshire, UT 11770', '7978 Jerel Court Apt. 248\nWest Cotyport, PA 68893-5887', 'npbQvsuk', 'Web Developer', ''),
(12, 'Jack Lang', 'Dr. London Boyer', 'Marguerite Harris', '1984-01-10', 'Male', '239-832-9954 x53661', 'twila20@hotmail.com', 'O-', 'EEE', '211 Marcelo Mountain Apt. 520\nKutchmouth, CO 93602-4799', '715 Curt Corners Suite 387\nWest Novella, OH 39614', 'WkDE90aU', 'Software Developer', ''),
(13, 'Freeda Harvey', 'Myrtice Rowe', 'Dr. Vickie Stanton', '1975-08-12', 'Female', '1-802-249-6038', 'hand.linnie@roob.org', 'AB+', 'ENG', '904 Kiehn Ridge\nCortezton, NH 79765', '53278 Kayden Mills Apt. 079\nHeloisemouth, ID 94362', 'MLNQumEO', 'Systems Analyst', ''),
(14, 'Brendan Wunsch', 'Miracle Bashirian', 'Herman McCullough', '1986-01-15', 'Female', '1-985-218-1923 x710', 'queen.ledner@hotmail.com', 'B-', 'EEE', '86142 Welch Stravenue Suite 789\nSouth Nyasia, TX 61890', '68662 Nakia Spur Suite 693\nPort Annabelshire, IA 70186', 'yoh4zuAn', 'Security Analyst', ''),
(15, 'Patsy Hauck', 'Justen Larson', 'Hilda Hane', '1980-01-04', 'Male', '1-817-363-7564 x0007', 'ericka13@gmail.com', 'A-', 'CSE', '87486 Meaghan Port Suite 519\nHodkiewiczton, OR 57198-2217', '6292 Hayes Mews Apt. 081\nPort Augustusside, NV 66993', 'eO70RX4W', 'Software Developer', ''),
(16, 'Robbie Fahey Jr.', 'Mr. Brant Beer III', 'Graciela Senger', '1971-07-23', 'Other', '1-456-370-6595 x812', 'jammie.rippin@hotmail.com', 'AB-', 'BBA', '7919 Muller Drives Suite 083\nLake Abraham, GA 13711', '750 Schmitt Square Apt. 627\nNew Germaine, IL 66722-2732', 'hTjErG7k', 'Software Developer', ''),
(17, 'Nash Douglas IV', 'Prof. Arjun Erdman', 'Dagmar Hirthe III', '1989-01-06', 'Other', '(890) 492-0274', 'zieme.russell@rohan.biz', 'A+', 'EEE', '939 Hill Garden\nKerlukeborough, FL 38295-4576', '51378 Kiera Inlet\nNorth Hazleville, SC 60352-5820', 'T0a8EVmC', 'Web Developer', ''),
(18, 'Vidal Towne', 'Marvin Gibson', 'Dillon Wisozk', '1976-02-03', 'Male', '1-818-932-8055 x75581', 'uquigley@gmail.com', 'B+', 'Law', '9958 Nitzsche Mall\nBashirianbury, IA 54355-5038', '1701 Altenwerth Underpass Suite 173\nPort Bertafort, LA 51734', 'ILX1ps0G', 'Software Developer', ''),
(19, 'Miss Loraine Grady', 'Wilhelmine Bogisich', 'Mr. Antwon Kreiger IV', '1991-07-01', 'Male', '874.268.9286', 'will.jacinto@wolf.com', 'AB-', 'HSC', '90801 Huel Landing\nNorth Brett, IN 59263-7652', '147 Gracie Parkway Suite 455\nSouth Ervin, WI 69751', 'GvMdHo7s', 'IT Project Manager', ''),
(20, 'Alba Jerde', 'Kameron Weber', 'Mrs. Molly Lebsack DDS', '1973-12-30', 'Female', '1-780-870-5993 x8224', 'mante.mack@wehner.com', 'O+', 'ENG', '2820 Cheyanne Ford\nPort Rowanfurt, ND 73390-4879', '481 Graham Cliff Suite 183\nBernardburgh, WA 43443', 'xrqJpv61', 'Database Administrator', ''),
(21, 'Pearline Botsford', 'Mercedes Bartell II', 'Adrain Gleichner', '1993-05-10', 'Female', '+14892289721', 'cecilia.bogisich@gmail.com', 'O-', 'CSE', '60996 Price Walk Apt. 530\nWest Vida, OK 31994', '230 Lucie Field Suite 878\nSengerhaven, IN 84741-3273', 'GXbCF2IV', 'Database Administrator', ''),
(22, 'Shanel Kozey', 'Rosa Swaniawski', 'Marquise Flatley', '1986-07-24', 'Other', '512-712-0104 x666', 'laurel86@morar.info', 'A-', 'SSC', '96288 Donnelly Turnpike Apt. 886\nAliciabury, NJ 54637', '35115 Bode Place Apt. 625\nSusanastad, TN 06186-2850', 'z3DK87mu', 'Database Administrator', ''),
(23, 'Keeley Koelpin', 'Alba Howell', 'Prof. Leanne Bosco', '1985-08-31', 'Male', '+1 (648) 925-5749', 'nora46@gmail.com', 'B-', 'HSC', '1029 Lance Hill\nWest Tyrell, VT 76894', '7610 Mann Causeway\nNorth Matildastad, TN 58760', 'rx9U5wBY', 'IT Project Manager', ''),
(24, 'Ms. Marilie Rempel II', 'Lisa Lesch', 'Al Russel', '1990-08-02', 'Female', '+1 (480) 965-8961', 'itromp@schumm.com', 'A-', 'CSE', '819 Jerald Vista\nPort Trey, WY 61670-7180', '6301 McGlynn Groves\nDickensstad, CA 55986', 'rLFghq3a', 'Systems Analyst', ''),
(25, 'Rosalyn Walker', 'Prof. Rylee Emmerich', 'Moriah Nicolas', '1978-08-19', 'Female', '1-987-725-1905 x8600', 'zcrist@yahoo.com', 'B+', 'CSE', '553 Nader Forks\nBeattyhaven, OH 10793', '58056 Bosco Haven\nSkilestown, CT 10492-4770', 'Jo2EK8fS', 'Network Architect', ''),
(26, 'Elwyn Kessler', 'Meredith Walsh', 'Phyllis Koepp', '1981-08-19', 'Other', '1-463-403-6857 x643', 'hammes.winona@gmail.com', 'AB-', 'EEE', '7465 Jones Plain Apt. 543\nHerbertfort, AZ 89596', '47525 Dietrich Valley\nEast Maureenmouth, ME 04424-5505', 'NOiFeR0Z', 'Database Administrator', ''),
(27, 'Miss Alaina Brakus V', 'Leann Brakus', 'Bernadette Lubowitz', '1972-10-09', 'Other', '1-559-585-2616 x8040', 'ivory81@gmail.com', 'B+', 'SSC', '838 Rodriguez Ferry Apt. 906\nCummeratamouth, SC 60900-5957', '17424 Padberg Ramp\nHerzogshire, NJ 20114-3471', 'kIlxVmg9', 'Web Developer', ''),
(28, 'Danial Schimmel', 'Dr. Angus Rowe DDS', 'Ally Johns', '1980-12-11', 'Female', '625.428.8886 x999', 'qbruen@armstrong.com', 'AB-', 'BBA', '954 Modesto Mills\nNorth Crystelville, SC 87911-6931', '830 Janet Glens\nNorth Mylene, NE 63358-9387', 'Ep0JTkjR', 'Software Developer', ''),
(29, 'Dr. Laurence Lubowitz', 'Mr. Nicholas Schoen IV', 'Mavis Heaney', '1971-11-20', 'Other', '+1-546-829-8267', 'anissa.thiel@conroy.info', 'O-', 'MBA', '182 Robel Viaduct Suite 194\nDinaport, NJ 29642', '2252 Samson Mission Suite 127\nNorth Arvillabury, AK 34595-6072', 'J78yNInC', 'IT Project Manager', ''),
(30, 'Dahlia Botsford', 'Carrie Rice', 'Tyree Hagenes', '1987-12-14', 'Other', '426.743.3085 x669', 'newton60@christiansen.com', 'AB-', 'ENG', '9120 Alva Flat Suite 829\nWest Malvinaland, OR 20821-7067', '1662 Volkman Meadow\nPort Frank, RI 08565', 'OzWM8ywV', 'Web Developer', ''),
(31, 'Lamont Gottlieb', 'Jeanie Kulas', 'Eli Emmerich PhD', '1971-03-22', 'Other', '1-598-488-5270', 'neva.rath@eichmann.com', 'B-', 'MBA', '630 Dooley Turnpike Suite 479\nPort Laila, NJ 50024', '94002 Miller Ports\nSouth Nikostad, IA 01433', 'edGahWIg', 'IT Project Manager', ''),
(32, 'Darrin Huels', 'Mrs. Claudine Mraz DDS', 'Dr. Sammie Walter III', '1986-10-05', 'Male', '+1-301-833-2547', 'mattie52@hotmail.com', 'AB+', 'MBA', '9747 Bryon Bypass\nBergnaumfurt, WI 04385-6781', '68056 Novella Drive\nCristview, KS 74948', 'aLz7gm8N', 'Web Developer', ''),
(33, 'Charlotte Frami', 'Warren Macejkovic', 'Mateo Wiza', '1987-01-20', 'Female', '+13933403742', 'runolfsdottir.london@hotmail.com', 'AB+', 'Law', '6351 Chelsea Light\nNapoleonside, MS 20507', '20930 Alva Parks Suite 157\nPfefferport, MS 09894', 'DCTSqJRy', 'Database Administrator', ''),
(34, 'Kariane Hill', 'Jarret Fay', 'Mrs. Yadira Simonis PhD', '1993-09-17', 'Other', '+1-697-232-4147', 'ilarkin@kuphal.info', 'AB-', 'EEE', '8178 Adriel Cove Suite 222\nPort Juliet, NE 35810', '39933 Johnston Wall\nLupefort, AK 09788', 'WFoEuHO1', 'Security Analyst', ''),
(35, 'Prof. Weston Goldner DDS', 'Aditya Fahey Jr.', 'Darrell Wolff', '1979-11-03', 'Other', '704.353.0301 x0552', 'kuvalis.miguel@lebsack.com', 'AB+', 'Law', '62308 Larson Loop Suite 685\nNew Carolefort, SD 31495', '78232 Maeve Bypass Apt. 425\nLynchberg, NC 06035', 'fLo1e9FZ', 'Systems Analyst', ''),
(36, 'Katrina Ferry', 'Deja Conn', 'Ms. Loma Schuster III', '1989-09-01', 'Other', '+1 (768) 598-7373', 'idubuque@gutmann.com', 'B-', 'Law', '5277 Valentin Vista Apt. 363\nNew Roderickbury, NY 09789-5028', '8599 Denesik Port\nEast Salmashire, NC 52534-9715', 'SyHcT1g8', 'Database Administrator', ''),
(37, 'Aaliyah Thiel III', 'Jules Powlowski', 'Jabari Koepp', '1982-12-10', 'Female', '608.959.4199', 'alexane.barrows@yahoo.com', 'O+', 'Law', '94472 Hilpert Islands\nNorth Ivyborough, IA 04892', '4321 Hills Causeway\nPort Shemar, MD 34450-5176', 'smSeNrVk', 'Database Administrator', ''),
(38, 'Miss Hallie Mante IV', 'Izaiah Greenfelder', 'Miss Brenda Bogisich V', '1970-12-04', 'Female', '(302) 583-2840 x739', 'michaela.bogisich@west.com', 'O+', 'HSC', '64907 Nienow Walks\nPort Terrence, RI 68921-7050', '25233 Turner Valleys\nWest Dejon, CO 52981', 'IwDj9hif', 'Web Developer', ''),
(39, 'Jerod Hackett', 'Jacinto Crist', 'Laisha Walsh', '1977-11-07', 'Male', '283.644.4744 x8625', 'bkunde@yahoo.com', 'B+', 'CSE', '175 Amelie Drive Suite 154\nNorth Cristalfort, NJ 82379-2560', '479 Harvey Pines\nNorth Elfrieda, NY 56031-8728', 'JTIxXbo7', 'IT Project Manager', ''),
(40, 'Rebecca Kertzmann', 'Orland Swaniawski', 'Dr. Sven Beatty', '1990-12-08', 'Male', '663-282-1207 x93100', 'alva.hane@corkery.com', 'O-', 'Law', '82057 Klein Ville\nBreitenbergfort, VA 86398-2036', '979 Demarcus Views\nTerryland, VT 77371-1615', 'shba9nN1', 'IT Project Manager', ''),
(41, 'Anastacio Brakus', 'Elwyn Schulist', 'Lew Daugherty', '1980-02-27', 'Male', '262-787-4180', 'williamson.cierra@hayes.com', 'AB-', 'EEE', '941 Wilderman Parks Apt. 197\nEast Clarabelle, WV 09661', '26065 Quigley Hill Apt. 569\nNorth Zander, IA 94526', 'uNfVBPaH', 'Software Developer', ''),
(42, 'Amanda Nicolas', 'Katlyn Dicki', 'Gerda Ernser I', '1972-12-09', 'Female', '423.330.8271', 'schaden.clay@gmail.com', 'AB-', 'Law', '630 Weber Freeway Suite 896\nJusticefurt, VT 63857-7642', '96639 Danny Place\nCornellchester, VA 00186', 'u8esiLoI', 'Network Architect', ''),
(43, 'Dr. Claudine Streich', 'Berneice Klocko', 'Celine Kohler DDS', '1975-03-10', 'Male', '292.657.2210 x60152', 'clement27@connelly.net', 'B+', 'CSE', '604 Osinski Forges\nWest Cassandre, MA 39620-8232', '73043 Roob Isle\nSouth Oswald, WA 26891', 'pP2DXjON', 'Security Analyst', ''),
(44, 'Ricky Anderson PhD', 'Jacey Gulgowski', 'Prof. Lloyd Lowe II', '1982-11-19', 'Female', '1-642-429-5493 x962', 'lindgren.kade@hotmail.com', 'O+', 'ENG', '93894 Beer Locks Apt. 272\nWolfview, NV 82994-2963', '21523 Riley Mills\nDonnellyberg, VT 19041-0670', 'K81quZBQ', 'IT Project Manager', ''),
(45, 'Joesph Will', 'Noel Davis', 'Prof. Randall Roberts Jr.', '1985-08-15', 'Female', '+1-895-452-4760', 'goyette.valentina@yahoo.com', 'AB+', 'SSC', '42547 Jaycee Ranch Apt. 289\nLake Presley, VA 85045', '17177 Elissa Cape Apt. 480\nStanleyport, WA 33553-0112', 'ZMVBS9KX', 'Network Architect', ''),
(46, 'Dr. Frank Jast I', 'Annetta Hahn PhD', 'Hildegard Walsh', '1981-02-23', 'Female', '271.510.9348', 'elmira.lemke@gmail.com', 'O+', 'BBA', '2345 Spencer Parkways Apt. 032\nHayesstad, NM 71910', '380 Kirlin Falls\nJaylanfurt, WI 77173-5652', '0Dip8ATX', 'IT Project Manager', ''),
(47, 'Adell Toy', 'Mr. Lucio Pollich Jr.', 'Shanel Zemlak II', '1993-01-21', 'Other', '1-952-448-2916', 'triston46@yahoo.com', 'A-', 'SSC', '108 Dewitt Harbor\nSouth Guadalupeborough, WI 26627-0965', '9096 Hamill Station Suite 028\nPort Hoytberg, ME 28910', 'PoWb6jVw', 'Database Administrator', ''),
(48, 'Mr. Major Rempel', 'Alba Heidenreich Sr.', 'Misty West', '1973-06-14', 'Male', '(265) 573-0406 x624', 'rodolfo.johnston@gmail.com', 'A-', 'BBA', '5714 Rozella Village Suite 380\nWest Hank, CA 03620', '57408 Pasquale Throughway Suite 081\nNew Lewisside, ND 43565-1868', 'hXfbMYCt', 'Software Developer', ''),
(49, 'Leann Satterfield', 'Chet Kuhn', 'Dr. Zachariah Bosco III', '1974-04-20', 'Other', '652.331.8405 x31061', 'green.nikolas@mertz.biz', 'O-', 'HSC', '33714 Gerlach View Apt. 903\nWest Rosella, CO 13297', '64162 Felicita Lights Apt. 358\nNorth Aracelyhaven, ID 63730', 'cCXJaWGf', 'Security Analyst', ''),
(50, 'Suzanne Hodkiewicz', 'Rory Ritchie', 'Vita Luettgen', '1979-11-12', 'Female', '+1.645.610.0435', 'antonietta15@hotmail.com', 'A+', 'ENG', '2547 Rasheed Shores Apt. 002\nGilbertoburgh, AL 80709-0770', '5669 Florine Manor Apt. 957\nLake Kristopherberg, ND 73572-6191', 'ZHLnTM7E', 'Network Architect', ''),
(51, 'Khalid Romaguera', 'Florence Mohr V', 'Sebastian Torphy I', '1977-07-10', 'Male', '+1-506-778-0391', 'crawford.monahan@yahoo.com', 'B-', 'Law', '35425 Marian Motorway\nGersonville, DE 58323-6605', '78856 Carleton Ford\nKalebshire, WV 11370-9638', '0NoBLXlS', 'Database Administrator', ''),
(52, 'Dr. Kailyn Boyer MD', 'Annabelle Streich', 'Noemi Blanda', '1989-09-23', 'Male', '228-946-2633 x5682', 'abayer@kautzer.biz', 'AB+', 'Law', '2776 Goodwin Bypass Apt. 351\nTiffanymouth, AL 96054-1636', '1912 Jaylan Prairie Apt. 202\nSouth Damien, TX 23762-8005', 'Lmp4VUDR', 'Security Analyst', ''),
(53, 'Verdie Graham Jr.', 'Hal Jerde', 'Prof. Shaina Mann', '1971-02-16', 'Female', '+1-865-291-0661', 'alexanne06@cole.org', 'A-', 'Law', '3745 Blanda Meadow Apt. 837\nMaeganburgh, SD 29426', '764 Kris Wells Apt. 271\nTheresaton, IN 44879', 'xDV8njpf', 'Database Administrator', ''),
(54, 'Pearl Pollich', 'Maryjane Witting PhD', 'Albertha Windler', '1984-09-15', 'Female', '1-598-780-5259 x8578', 'jenkins.lazaro@yahoo.com', 'O+', 'BBA', '203 Alec Isle\nMarlenstad, SD 05580', '47162 Schamberger Mountains\nSmithammouth, AZ 54606-7723', 'TqAI41ts', 'Network Architect', ''),
(55, 'Theodora Ziemann', 'Garth Gutmann PhD', 'Bernice Roob', '1985-09-25', 'Female', '263-892-3307 x7737', 'lucinda.zemlak@shanahan.com', 'AB-', 'SSC', '78639 Dorris Crossroad Apt. 643\nAbbottchester, SC 74671', '116 Felicity Flat\nPort Faeview, IA 79528-3163', 'y2CnZKYp', 'Network Architect', ''),
(56, 'Nyasia Satterfield', 'Princess Will', 'Gregory Hickle', '1974-11-24', 'Female', '452-466-2350 x3547', 'rwyman@witting.com', 'O+', 'MBA', '1461 Anya Station\nJakobshire, AL 84783', '6741 Kohler Summit\nMiachester, AL 73700-2231', 'DILzKWqw', 'Database Administrator', ''),
(57, 'Prof. Kirsten Dicki', 'Rose Barrows', 'Garett Schroeder', '1981-04-07', 'Other', '+1-968-502-6908', 'xfranecki@smitham.com', 'B+', 'MBA', '739 Zachary View Apt. 672\nWest Wendell, IN 34706-1427', '169 Waelchi View\nWest Leonie, KY 33862-9803', 'h4mjzHrD', 'Web Developer', ''),
(58, 'Ward Corwin', 'Rey Gulgowski', 'Prof. Rickie Becker', '1983-02-17', 'Male', '1-617-382-8748', 'darrion72@gutmann.com', 'AB-', 'EEE', '3748 Brakus Summit Apt. 570\nNew Noeliafort, WV 30902-4038', '948 Bennett Valleys Apt. 945\nHirtheshire, DC 73669', 'zJ5NxjBi', 'Web Developer', ''),
(59, 'Caesar Considine', 'Barbara Rice', 'Joel Emard', '1988-12-30', 'Female', '1-828-304-9716 x3060', 'lhalvorson@gmail.com', 'B+', 'CSE', '676 Strosin Coves Suite 104\nWest Karolann, SD 04660-8434', '91925 Sarina Crossroad Apt. 938\nLoyaltown, UT 86079', 'BZEmdx9Y', 'Database Administrator', ''),
(60, 'Mr. Lafayette Ruecker', 'Ms. Burdette Johnson DDS', 'Makayla Davis', '1989-08-08', 'Other', '742.316.9403 x2946', 'abbie72@hotmail.com', 'AB-', 'HSC', '70264 Turcotte Crossing Suite 944\nJakeport, KS 94103', '776 Madelynn Flats Suite 868\nNorth Norvalstad, AL 01180-0786', 'XbIV9eAf', 'Systems Analyst', ''),
(61, 'Bethel Collins', 'Brennon Braun', 'Paul Feeney I', '1993-07-22', 'Female', '663-975-1945', 'myah.koch@streich.com', 'O+', 'SSC', '93375 Veum Light Suite 264\nWest Mavis, WY 85408', '19388 Harvey Plaza\nEast Ricoport, CT 15721', 'PTJm2CYa', 'Software Developer', ''),
(62, 'Ms. Evie Prohaska PhD', 'Evalyn McCullough', 'Wilson Kozey', '1990-05-17', 'Other', '1-746-378-2967 x511', 'jorge.gerhold@yahoo.com', 'B-', 'EEE', '843 Alena Views Apt. 736\nPort Lillyborough, FL 20501', '63346 Mitchell Rapids Apt. 470\nPort Minaborough, LA 78042', 'nWbgiHEr', 'Database Administrator', ''),
(63, 'Audie Runte Sr.', 'Ena Schamberger', 'Efren Skiles', '1986-12-14', 'Female', '636-479-4800', 'osbaldo34@gmail.com', 'AB+', 'ENG', '4884 Daren Estates\nCorkeryfort, MS 17717-6845', '920 Garfield Causeway Apt. 741\nNorth Tess, MA 42588-0082', 'NlHyI6mn', 'Systems Analyst', ''),
(64, 'Dr. Maida Predovic DVM', 'General Becker V', 'Meredith Schamberger', '1982-12-05', 'Male', '543.770.0698', 'xstamm@howe.info', 'O-', 'ENG', '8292 Daniel Rest Suite 606\nLake Kennabury, TN 03881', '53383 Keely Drive\nEast Ardella, DE 59306-8915', 'hfCRPklL', 'Network Architect', ''),
(65, 'Carey Cruickshank', 'Hank Gulgowski II', 'Brenden Stracke Sr.', '1978-09-14', 'Male', '974-650-9097 x18384', 'wdickinson@hotmail.com', 'O+', 'MBA', '47878 Monahan Glens\nRodriguezburgh, IL 94417', '863 DuBuque Knoll\nDeronchester, NJ 27753-0575', 'B9HiQR25', 'Network Architect', ''),
(66, 'Julie Kessler', 'Adriel Heathcote', 'Sincere Jacobson', '1991-07-16', 'Male', '(647) 832-3469 x538', 'riley80@hotmail.com', 'O+', 'Law', '499 Skyla Greens\nBrownfort, MS 86588-1692', '7719 Kayleigh Ferry\nWatersberg, MO 43988', 'OYi4vBdI', 'IT Project Manager', ''),
(67, 'Dr. Kiley Sporer', 'Skye Thiel', 'Annabel Ullrich', '1992-02-17', 'Male', '+1.445.939.8586', 'jazmyne81@boehm.biz', 'AB+', 'BBA', '7647 Sister Ridges\nRafaelhaven, UT 45375', '8228 Jeramy Lock\nNew Dorothystad, NM 67966-9153', 'rjU5wVFo', 'Web Developer', ''),
(68, 'Griffin Strosin PhD', 'Mr. Mustafa Bode DVM', 'Dennis Swaniawski', '1988-01-08', 'Male', '912.251.9801 x1586', 'pmurazik@yahoo.com', 'B-', 'MBA', '124 Lloyd Road\nLake Lethamouth, MS 81337-5958', '472 Ivy Glens Suite 478\nMonahanberg, OR 69629-5724', 'fhjARPd4', 'Security Analyst', ''),
(69, 'Uriel Buckridge', 'Bradly Little', 'Otis Doyle', '1989-03-25', 'Female', '1-368-986-5757 x19135', 'ryann.bernhard@johnston.net', 'AB+', 'EEE', '7038 Chanelle Spurs\nMatildaside, OR 68704', '4713 Robel Cliffs\nAniyachester, KY 82001-3432', 'RBs50rHn', 'IT Project Manager', ''),
(70, 'Evalyn Upton II', 'Aglae Jacobson DVM', 'Janessa Kozey', '1986-12-17', 'Other', '391.278.1043 x827', 'jeffrey.runte@dickinson.info', 'A-', 'BBA', '2400 Karine Pine Suite 080\nSouth Blancaborough, TX 20827-3043', '6844 Senger Highway Apt. 414\nSouth Tina, MI 12274-7467', 'ab9zYGmQ', 'IT Project Manager', ''),
(72, 'Md Karin ', 'Mother', 'Father', '1991-08-08', 'Male', '01680607293', 'karim@gmail.com', 'O+', 'CSE', 'Agrabad', 'Agrabad', 'G2QBK3NALT', 'Web Developer', 'profilePicture/G2QBK3NALT_Md Karin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(30) NOT NULL,
  `date` date NOT NULL,
  `holiday` varchar(100) NOT NULL,
  `about` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `date`, `holiday`, `about`) VALUES
(11, '2019-03-17', ' 	Sheikh Mujibur Rahman`s birthday 	', '								Father of Nation of Bangladesh 									'),
(12, '2019-03-26', 'Independence Day 	', '				 	Declaration of Independence from Pakistan in 1971 													'),
(13, '2019-04-14', 'Bengali New Year', '			 	 	Festival marking the start of the Bengali year 														'),
(14, '2019-04-22', 'Shab e-Barat', '						 	 	Night of Records 											'),
(15, '2019-05-01', ' 	May Day 	', '								International Labour Day 									'),
(16, '2019-05-18', 'Buddha Purnima ', 'Birth of Buddha. Observed on the day of the full moon in May 												'),
(17, '2019-05-31', 'Jumatul Bidah 	', '					 	Last Friday of the month of Ramadan 												'),
(18, '2019-06-01', 'Night of Destiny', '														 	 	Celebrated on the 27th day of Ramadan 			'),
(19, '2019-06-05', 'Eid ul-Fitr', '					 	 	End of Ramadan 												'),
(20, '2019-06-06', ' 	Eid ul-Fitr Holiday', 'Eid-ul-Fitr is one of the two biggest religious festivals of Islam													'),
(21, '2019-12-16', 'Victory Day', '					 	 	Commemorates the surrender of the Pakistani army to the Mukti Bahini 												');

-- --------------------------------------------------------

--
-- Table structure for table `salary_bonus`
--

CREATE TABLE `salary_bonus` (
  `id` int(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `salary_month` date NOT NULL,
  `salary` int(30) NOT NULL,
  `bonus` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_bonus`
--

INSERT INTO `salary_bonus` (`id`, `employee_id`, `full_name`, `salary_month`, `salary`, `bonus`) VALUES
(1, '1', 'Dr. Elissa Langworth', '1975-01-19', 7039, 3833),
(2, '2', 'Juanita Huels V', '2000-02-10', 13086, 3841),
(3, '3', 'Prof. Sammie Pagac', '1991-01-12', 10174, 4450),
(4, '4', 'Gerardo Kilback', '1971-07-27', 14237, 2824),
(5, '5', 'Verla Keeling I', '2019-10-30', 8869, 2165),
(6, '6', 'Ms. Mylene Pollich', '2016-08-09', 11854, 3837),
(7, '7', 'Guido Rohan', '2019-03-08', 6962, 4826),
(8, '8', 'Alfonzo Schinner', '2014-07-05', 10517, 3970),
(9, '9', 'Prof. Benedict Hodkiewicz', '1986-12-29', 5762, 1446),
(10, '10', 'Dr. Lennie Deckow PhD', '1987-01-10', 14436, 1407),
(11, '11', 'Noemy Macejkovic', '2002-11-22', 9503, 1357),
(12, '12', 'Jack Lang', '2020-06-04', 10955, 1188),
(13, '13', 'Freeda Harvey', '1970-12-26', 14547, 4472),
(14, '14', 'Brendan Wunsch', '2018-10-22', 8542, 3013),
(15, '15', 'Patsy Hauck', '2016-09-21', 6236, 1341),
(16, '16', 'Robbie Fahey Jr.', '2020-09-02', 9626, 2819),
(17, '17', 'Nash Douglas IV', '1983-03-09', 12485, 1974),
(18, '18', 'Vidal Towne', '1979-02-17', 10463, 1108),
(19, '19', 'Miss Loraine Grady', '1971-03-13', 14347, 4187),
(20, '20', 'Alba Jerde', '1994-12-11', 6744, 3805),
(21, '21', 'Pearline Botsford', '1997-11-03', 5136, 3425),
(22, '22', 'Shanel Kozey', '2016-07-27', 5469, 4286),
(23, '23', 'Jessica Schowalter', '2009-09-07', 11886, 2201),
(24, '24', 'Keeley Koelpin', '2002-11-05', 8372, 2039),
(25, '25', 'Ms. Marilie Rempel II', '2001-03-08', 8468, 1054),
(26, '26', 'Rosalyn Walker', '2006-05-22', 7594, 1466),
(27, '27', 'Darion Graham', '2004-11-14', 14713, 3135),
(28, '28', 'Elwyn Kessler', '2005-05-07', 7599, 4321),
(29, '29', 'Kiarra Barrows', '1986-01-23', 13975, 3289),
(30, '30', 'Marcia Kerluke DVM', '1977-07-16', 7510, 4496),
(31, '31', 'Miss Alaina Brakus V', '2005-01-29', 5695, 4414),
(32, '32', 'Nyah Schmeler', '2014-07-23', 8237, 3097),
(33, '33', 'Manuela Roob', '1987-02-28', 9015, 2298),
(34, '34', 'Danial Schimmel', '1995-10-01', 5761, 4665),
(35, '35', 'Dr. Laurence Lubowitz', '1975-12-03', 9754, 4167),
(36, '36', 'Dahlia Botsford', '2015-12-23', 11836, 3473),
(37, '37', 'Elenor McGlynn', '1980-11-16', 5284, 3683),
(38, '38', 'Lamont Gottlieb', '1971-07-02', 8898, 2415),
(39, '39', 'Darrin Huels', '2017-05-21', 9870, 3262),
(40, '40', 'Charlotte Frami', '1979-03-16', 13347, 1415),
(41, '41', 'Kariane Hill', '1992-07-08', 10547, 4940),
(42, '42', 'Prof. Weston Goldner DDS', '2015-06-27', 14647, 1061),
(43, '43', 'Katrina Ferry', '1999-10-28', 5482, 4190),
(44, '44', 'Aaliyah Thiel III', '2004-11-19', 13206, 1796),
(45, '45', 'Miss Hallie Mante IV', '2008-09-09', 9853, 2767),
(46, '46', 'Jerod Hackett', '1989-01-31', 5310, 3370),
(47, '47', 'Rebecca Kertzmann', '1998-11-09', 11750, 1457),
(48, '49', 'Anastacio Brakus', '1993-11-23', 8896, 4490),
(49, '50', 'Amanda Nicolas', '1988-04-10', 14375, 4234),
(50, '51', 'Dr. Claudine Streich', '2008-01-27', 9623, 3388),
(51, '52', 'Ricky Anderson PhD', '1979-04-22', 10035, 3061),
(52, '53', 'Joesph Will', '2008-10-09', 7766, 2040),
(53, '54', 'Dr. Frank Jast I', '2019-04-10', 7195, 3431),
(54, '55', 'Adell Toy', '2012-01-08', 11377, 1943),
(55, '56', 'Mr. Major Rempel', '2009-11-26', 9192, 4714),
(56, '57', 'Leann Satterfield', '1972-03-26', 8416, 2377),
(57, '58', 'Suzanne Hodkiewicz', '2008-04-02', 11379, 4209),
(58, '59', 'Khalid Romaguera', '1974-03-04', 5762, 4411),
(59, '60', 'Dr. Kailyn Boyer MD', '1970-02-04', 13234, 4657),
(60, '61', 'Verdie Graham Jr.', '1973-01-24', 10695, 1328),
(61, '62', 'Pearl Pollich', '1975-04-07', 11923, 1616),
(62, '63', 'Theodora Ziemann', '2013-05-01', 13515, 4143),
(63, '64', 'Nyasia Satterfield', '1978-04-11', 11710, 3966),
(64, '65', 'Prof. Kirsten Dicki', '2018-12-13', 12534, 3855),
(65, '66', 'Ward Corwin', '2006-03-24', 12192, 3987),
(66, '67', 'Caesar Considine', '2015-07-21', 7661, 4110),
(67, '68', 'Mr. Lafayette Ruecker', '2020-03-17', 5017, 1792),
(68, '69', 'Bethel Collins', '1997-02-18', 9508, 1261),
(69, '70', 'Ms. Evie Prohaska PhD', '1988-05-18', 9788, 3143),
(70, '71', 'Audie Runte Sr.', '1987-04-25', 7637, 2940),
(71, '72', 'Dr. Maida Predovic DVM', '2017-01-27', 14711, 2901),
(72, '73', 'Carey Cruickshank', '1997-03-07', 13480, 4268),
(73, '74', 'Julie Kessler', '1991-11-27', 14212, 3892),
(74, '75', 'Dr. Kiley Sporer', '1997-09-30', 10474, 4338),
(75, '76', 'Griffin Strosin PhD', '1972-08-03', 14244, 2682),
(76, '77', 'Uriel Buckridge', '1978-12-12', 12340, 2090),
(77, '78', 'Evalyn Upton II', '2009-01-09', 8809, 4391),
(78, '79', 'Sadie Ullrich', '1977-12-31', 8935, 4869),
(79, '80', 'Faustino Adams', '1972-09-02', 12898, 3679),
(80, '3', 'Prof. Sammie Pagac', '2021-03-19', 12000, 5000),
(81, '5', 'Verla Keeling I', '2021-03-16', 11000, 500),
(82, '6', 'Ms. Mylene Pollich', '2021-03-07', 12000, 5000),
(83, '10', 'Dr. Lennie Deckow PhD', '2021-03-16', 11000, 2040),
(84, '35', 'Prof. Weston Goldner DDS', '2021-03-09', 13000, 1420),
(85, '46', 'Dr. Frank Jast I', '2021-03-10', 12000, 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_bonus`
--
ALTER TABLE `salary_bonus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `salary_bonus`
--
ALTER TABLE `salary_bonus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
