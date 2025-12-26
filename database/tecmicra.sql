

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecmicra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'chatterjee2014@gmail.com', '$2y$10$/4fU4VRIZnqDeTXFSF7XdeXNDYBUN1sjpy1NZpJ2tk4mYJzUL/lbK'),
(3, 'sonikachauhan@gmail.com', '$2y$10$cBac2Up0eSVcbQlhacpVluLSEd4z6z97A7owba6stwKqZMoOuhj1K');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `image`, `created_at`) VALUES
(31, 'pronobendu', 'sougatastore16@gmail.com', '9062983118', 'header(\"Location: ../admin/dashboard.php\");\r\nexit;', '694a6f6917e1e.jpg', '2025-12-23 10:31:05'),
(32, 'pronobendu', 'sougatacode@gmail.com', '9062983118', 'code --install-extension bmewburn.vscode-intelephense-client\r\ncode --install-extension xdebug.php-debug\r\ncode --install-extension neilbrayfield.php-docblocker\r\ncode --install-extension christian-kohler.path-intellisense\r\ncode --install-extension cweijan.vscode-mysql-client2\r\ncode --install-extension HansUXdev.bootstrap5-snippets', '694a70b83d643.jpg', '2025-12-23 10:36:40'),
(33, 'pronobendu', 'sougatastore16@gmail.com', '9062983118', ' <a href=\"contact_form.php\" class=\"btn btn-success mt-3 px-4\">\r\n                            ← Back to Form\r\n                        </a>', '694a71f1c8b58.jpg', '2025-12-23 10:41:53'),
(34, 'pronobendu', 'sougatacode@gmail.com', '9062983118', ' <a href=\"contact_form.php\" class=\"btn btn-success mt-3 px-4\">\r\n                            ← Back to Form\r\n                        </a>', '694a729590be2.jpg', '2025-12-23 10:44:37'),
(35, 'pronobendu', 'sougatacode@gmail.com', '9062983118', ' <a href=\"contact_form.php\" class=\"btn btn-success mt-3 px-4\">\r\n                            ← Back to Form\r\n                        </a>', '694a73507439e.jpg', '2025-12-23 10:47:44'),
(36, 'pronobendu', 'sougatacode@gmail.com', '9062983118', 'admin\\dashboard.php', '694a736ebebec.jpg', '2025-12-23 10:48:14'),
(37, 'pronobendu', 'sougatastore16@gmail.com', '9062983118', 'Mobile Number', '694a7568d4398.jpg', '2025-12-23 10:56:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
