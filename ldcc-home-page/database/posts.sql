-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2022 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ldcc-homepage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `levers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `levers_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruitment_office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruitment_office_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_requirements` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `home_post` tinyint(4) NOT NULL DEFAULT 0,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `hot_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_by_type` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `case_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challenges_and_needs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outcome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `position`, `location`, `levers`, `levers_name`, `recruitment_office`, `recruitment_office_name`, `job_description`, `job_requirements`, `start_date`, `end_date`, `category_id`, `title`, `sub_title`, `content`, `slug`, `thumbnail`, `keyword`, `tag`, `status`, `type`, `rating`, `home_post`, `author_name`, `publish_date`, `hot_post`, `created_by`, `created_by_type`, `created_at`, `updated_at`, `case_name`, `case_description`, `our_client`, `challenges_and_needs`, `our_work`, `outcome`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Lotte Data Communication Vietnam enables successful business transformation with AWS', 'Has the pandemic changed the way LDCV does business in Vietnam and', '<p>Has the pandemic changed the way LDCV does business in Vietnam and supports businesses in their transformation and operational efficiency with AWS?</p>\r\n\r\n<p>In 2020, LDCV had its revenues reduced by 12 per cent. Nonetheless, we have resiliently adapted and brought our business back to normal during 2021. By implementing an onsite task force for 24/7 support during the lockdowns, we, together with our clients, have overcome such a challenging time while ensuring high service quality.<br />\r\n<br />\r\nFurthermore, our service portfolio has been expanded to include more digital services to accommodate the increasing demand in the market.<br />\r\n<br />\r\nAlso, for AWS-related projects, for example for one of our clients in South Korea, we helped to decrease resource usage by half while increasing performance by 20 per cent leveraging native libraries on the AWS system. In another case for a global retail client, we supported to lower response time by 75 per cent through applying AWS&#39;s hosting service and advanced content delivery network.<br />\r\n<br />\r\nAdditionally, AWS used to be seen as an expensive platform for large businesses. However, LDCV has helped many small- and medium-sized businesses go to the cloud effortlessly and inexpensively. With the experience of AWS in optimising and monitoring, we have helped clients run businesses flexibly to scale in peak seasons with optimised costs.<br />\r\n<br />\r\nWe perceive an increasing need for digital transformation across all industries to cope with the pandemic, especially for banking and retail industries. Based on conversations with our clients, we have decided to change our strategic direction to emphasise digitalisation services, including cloud and software as a service (SaaS).<br />\r\n<br />\r\nWithin the increasing needs for digital transformation, we see the shift towards cloud usage the most clearly. During lockdowns, companies are unable to manage on-premise servers and networks while still needing to maintain their operations. On-cloud virtual office applications, as a result, are highly demanded to satisfy the remote work trend that is also expected to stay.<br />\r\n<br />\r\nAdditionally, the booming demand for online shopping during social distancing has forced e-commerce and delivery companies to migrate towards cloud platforms to ensure cost-effective operations.<br />\r\n<br />\r\nFor more detailed information about the article, please refer to the following link.<br />\r\n<br />\r\n<a href=\"https://vir.com.vn/lotte-data-communication-vietnam-enables-successful-business-transformation-with-aws-90628.html\">https://vir.com.vn/lotte-data-communication-vietnam-enables-successful-business-transformation-with-aws-90628.html</a></p>', 'lotte-data-communication-vietnam-enables-successful-business-transformation-with-aws', '/img/thumbnails/I3BYcVXRmqeSkf7tNoGDRuf8SHFGbqsJxzY38pJB.jpg', NULL, '', 1, 1, '', 0, 'Manager', '2022-10-18', 'false', 5, 1, '2022-10-18 03:56:12', '2022-10-19 12:41:48', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Lotte starts Vietnam\'s eco smart city landmark project', 'Lotte Group Chairman Shin Dong-bin, right, shakes hands with Ho Chi Minh City People\'s Committee Chairman Phan Van Mai', '<p>Lotte Group Chairman Shin Dong-bin, right, shakes hands with Ho Chi Minh City People&#39;s Committee Chairman Phan Van Mai, at the groundbreaking ceremony for Thu Thiem Eco Smart City held in Ho Chi Minh City, Vietnam, Friday. / Courtesy of Lotte Group.</p>\r\n\r\n<p>By Kim Hyun-bin<br />\r\n<br />\r\nLotte Chairman Shin Dong-bin has kick-started a Southeast Asian landmark project to build an integrated smart logistics center in Vietnam, according to the company, Sunday.<br />\r\n<br />\r\nThe company held a groundbreaking ceremony for the Thu Thiem Eco Smart City project in the Thu Thiem District of Ho Chi Minh City in time for Vietnam&#39;s Independence Day on Sept. 2.<br />\r\n<br />\r\n&quot;This year marks the 30th anniversary of diplomatic relations between Korea and Vietnam. With the Thu Thiem Eco Smart City Project as a starting point, Lotte Group will further expand its investment in Vietnam.&quot; Lotte Group Chairman Shin Dong-bin said.<br />\r\n<br />\r\nThe groundbreaking ceremony was attended by Lotte Group officials, including Lotte Chairman Shin Dong-bin. From the Vietnamese side, more than 380 people, including Ho Chi Minh City People&#39;s Committee Chairman Phan Van Mai, attended.<br />\r\n<br />\r\n&quot;The eco smart city will have five floors below ground level and 60 stories above, and will become a landmark representing Vietnam in the future by arranging smart residential facilities and distribution facilities that embed Lotte&#39;s capabilities,&quot; Shin said.<br />\r\n<br />\r\nThe Thu Thiem Eco Smart City is a complex that will consist of a shopping mall, offices, a hotel, housing and a cinema.<br />\r\n<br />\r\nThu Thiem District is an area that Ho Chi Minh City is developing as an economic hub representing Southeast Asia by taking inspiration from Pudong District in Shanghai, China. Thu Thiem District is in an excellent location as it is densely populated with high-end residential facilities and is adjacent to the east-west expressway.<br />\r\n<br />\r\nLotte plans to invest $900 million in total into the project to complete Thu Thiem Eco Smart City, Vietnam&#39;s first smart complex.<br />\r\n<br />\r\nFor more detailed information about the article, please refer to the following link.<br />\r\n<br />\r\n<a href=\"https://www.koreatimes.co.kr/www/tech/2022/09/129_335538.html\">https://www.koreatimes.co.kr/www/tech/2022/09/129_335538.html</a></p>', 'lotte-starts-vietnams-eco-smart-city-landmark-project', '/img/thumbnails/1dmTDQU12o1k91vqClgvXx5rmofkS0D1MfmG3rDh.jpg', NULL, '', 1, 1, '', 0, 'Manager', '2022-10-18', 'false', 5, 1, '2022-10-18 05:51:54', '2022-10-19 12:40:06', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'President suggests Lotte Group invest more in Vietnam', 'President Nguyen Xuan Phuc welcomed Lotte Group’s investment of nearly 5 billion USD in Vietnam', '<p>President Nguyen Xuan Phuc welcomed Lotte Group&rsquo;s investment of nearly 5 billion USD in Vietnam and suggested the Republic of Korea&rsquo;s conglomerate further invest in Vietnam&rsquo;s large projects, while hosting Lotte Chairman Shin Dong-bin in Hanoi on August 31.</p>\r\n\r\n<p>Expressing his delight at the two nations&rsquo; strategic partnership being consolidated across fields, particularly trade, investment and political trust, he noted RoK firms are taking the lead in terms of FDI volume in Vietnam with a total capital of 80 billion USD.<br />\r\n<br />\r\nBilateral trade value has reached 78 billion USD, with the RoK now the third largest trade partner of Vietnam.<br />\r\n<br />\r\nThe State leader thanked Lotte for helping Vietnam in pandemic prevention and control, notably an aid worth 3.7 billion VND (157,766 USD), discount programmes for necessities, and the provision of face-mask and gifts for workers.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input alt=\"\" src=\"/ckfinder/userfiles/files/lotte_vietnam_nguyen_xuan_phuc.jpg\" style=\"height:402px; width:620px\" type=\"image\" /><img alt=\"\" src=\"http://127.0.0.1:5500/assets/image/Event/lotte_vietnam_nguyen_xuan_phuc.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For his part, Shin thanked the Vietnamese Government, ministries, sectors and localities for their support for his group over the past time.<br />\r\n<br />\r\nHe informed his host on a number of Lotte&rsquo;s projects earmarked for Hanoi, including a shopping centre expected to attract some 10 million visitors annually.<br />\r\n<br />\r\nLotte also wants to promote the building of a startup ecosystem in support of Vietnamese youth and invest in Vietnamese start-ups, Shin affirmed.<br />\r\n<br />\r\nAccording to him, since 1996, the group has invested in Vietnam across many fields, with its capital totaling 40 trillion VND and current number of employees exceeding 20,000.<br />\r\n<br />\r\nAgreeing with the group&rsquo;s investment orientations, particularly those involving start-up development and job creation, President Phuc hoped Lotte will contribute to enhancing the nations&rsquo; economic cooperation toward 100 billion USD in bilateral trade revenue.<br />\r\n<br />\r\nLotte&#39;s projects have helped to meet the growing needs of Vietnamese people given a rapidly expansion of the local middle class and of 200,000 Koreans living and working in Vietnam, he said.<br />\r\n<br />\r\nHe went on stressing that the two countries&rsquo; businesses play an important role in lifting the Vietnam &ndash; RoK relations to new heights this year in celebration of the 30th anniversary of their diplomatic relations./.<br />\r\n<br />\r\nFor more detailed information about the article, please refer to the following link.<br />\r\n<br />\r\n<a href=\"https://en.vietnamplus.vn/president-suggests-lotte-group-invest-more-in-vietnam/236597.vnp\">https://en.vietnamplus.vn/president-suggests-lotte-group-invest-more-in-vietnam/236597.vnp</a></p>\r\n\r\n<p>&nbsp;</p>', 'president-suggests-lotte-group-invest-more-in-vietnam', '/img/thumbnails/fLQehfFPJIOZmGxxYHt7bMjG1dTgchog7MRZBXA5.jpg', NULL, '', 1, 1, '', 0, 'Manager', '2022-10-18', 'false', 5, 1, '2022-10-18 05:59:24', '2022-10-27 04:49:41', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
