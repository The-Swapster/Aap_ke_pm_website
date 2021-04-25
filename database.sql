-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 25, 2021 at 04:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `onthisday`
--

-- --------------------------------------------------------

--
-- Table structure for table `onthisday`
--

CREATE TABLE `onthisday` (
  `Day` date NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `onthisday`
--

INSERT INTO `onthisday` (`Day`, `info`) VALUES
('2020-01-01', 'Birth anniversary of Satyendra Nath Bose.'),
('2020-01-02', 'Fatal bomb blast in Samastipur leading to fatul injuries to Lalit Narayan Mishra, Railways minister.'),
('2020-01-03', 'Birth aniversary of Savitribai Phule.'),
('2020-01-04', 'Lord Wilingdon arrested Nehru and Mahatma Gandhi in 1932.'),
('2020-01-05', 'Launch of GSAT-14 satelite by ISRO in 2014.'),
('2020-01-06', 'Indira Gandhi wins elections in 1980.'),
('2020-10-01', 'Andhra Pradesh was formed in 1958'),
('2020-10-02', 'Birth Aniversary of Mahatma Gandhi and Lal Bahadur Shastri'),
('2020-10-03', 'Indira Gandhi was arrested on curruption charges in 1977'),
('2020-10-04', 'Atal Bihari Vajpayee gives his speach in the UN General Assemly in Hindi  in 1977 as the External Affairs Minister of India'),
('2020-10-05', 'Birth Aniversary of Rani Durgawati'),
('2020-10-06', 'Death aniversary of Nana Saheb and V. K. Krishnmenon'),
('2020-10-07', 'Chandigadh is declared as the capital of Punjab in 1952'),
('2020-10-08', 'Death aniversary of Jayprakash Narayan'),
('2020-10-09', 'Death Aniversary of Kanshi Ram, founder of BSP'),
('2020-10-10', 'Birth Aniversary of R. K. Narayan'),
('2020-10-11', 'Indian Army starts operation Pawan in Sri Lanka in 1987'),
('2020-10-12', 'Death Aniversay of Dr. Ram Manohar Lohiya'),
('2020-10-13', 'Atal Bihari Vajpayee takes oath as the Prime Minister of India for the third time in 1999'),
('2020-10-14', 'Dr. Bhim Rao Ambedkar converts to Budhism along with 3,85,000 followers in 1956'),
('2020-10-15', 'Tripura becomes an integrated part of India'),
('2020-10-16', 'Partition of Bengal by Lord Curzon in 1905'),
('2020-10-17', 'Mahatma Gandhi goes on Satyagrah in 1940'),
('2020-10-18', 'Virapan was encountered in 2004'),
('2020-10-19', 'MIG 21 was inducted in the Indian Airforce in 1970'),
('2020-10-20', 'Birth Aniversary of Sidharth Shankar Ray'),
('2020-10-21', 'Netaji Subhash Shankar Bose forms the Indian National Army in Singapore in 1934'),
('2020-10-22', 'Jawaharlal Nehru inogrates Bhakhra Nagal Dam in 1962'),
('2020-10-23', 'Mahatma Gandhi resigns from the INC in 1934'),
('2020-10-24', 'Birth aniversary of Lakshmi Sehgal'),
('2020-10-25', 'First General elections comence in India in 1951'),
('2020-10-26', 'Dr. S. Radhakrishnan anounces national emergency for first time after China attacks India'),
('2020-10-27', 'Birth aniversary of K. R. Narayan'),
('2020-10-28', 'Birth Aniversary of Urjit Patel'),
('2020-10-29', 'Zakir Hussain\'s attempts lead to the establishment of Jamiya Milya Islamiya'),
('2020-10-30', 'India becomes a member of United Nations in 1945'),
('2020-10-31', 'Birth aniversary of Sardar Valabhbhai Patel and Death aniversary of Indira Gandhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `onthisday`
--
ALTER TABLE `onthisday`
  ADD PRIMARY KEY (`Day`);
