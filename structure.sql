--
-- Database: `db_comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_comments`
--

CREATE TABLE `tbl_user_comments` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `create_at_timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_comments`
--

INSERT INTO `tbl_user_comments` (`id`, `username`, `message`, `create_at_timestamp`) VALUES
(1, 'William', 'Have a Nice Day', '2022-07-14 16:22:46'),
(2, 'Richard', 'Wonderful Experience', '2022-07-14 16:23:43'),
(3, 'Rita', 'Glad to meet you', '2022-07-14 16:24:07');

--
-- Indexes for table `tbl_user_comments`
--
ALTER TABLE `tbl_user_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_comments`
--
ALTER TABLE `tbl_user_comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;
