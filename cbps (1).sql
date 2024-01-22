-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 06:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbps`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `featureImg` varchar(225) NOT NULL,
  `postbody` longtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `featureImg`, `postbody`, `category`, `createdBy`, `createdAt`) VALUES
(5, 'Our Newly Launched Website', '1705899495_c31f0acd2292addc9337.png', '<p>We are thrilled to announce the grand unveiling of our new digital home &ndash; www.christianabedellschool.com! At Christiana Bedell Preparatory School, we believe in embracing innovation not only in the classroom but also in the online sphere, and our new website reflects our commitment to providing an enriched and accessible online experience for our students, parents, and community.</p>\r\n\r\n<p>**Sleek Design, Intuitive Navigation:**<br />\r\nStep into a world of sophistication with our sleek and modern website design. Navigating through the various sections is now more intuitive than ever, allowing you to effortlessly explore the wealth of information about our school&#39;s programs, values, and achievements.</p>\r\n\r\n<p><iframe allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/P7SknKWYcAo?si=D36x-FDXaPHMQ-Ax\" title=\"YouTube video player\" width=\"560\"></iframe></p>\r\n\r\n<p>**Discover Our Programs:**<br />\r\nWhether you&#39;re a prospective student or a parent seeking information, our new website is your gateway to discovering the diverse range of programs offered at Christiana Bedell Preparatory School. From innovative computer courses to hands-on culinary arts, our programs are designed to nurture well-rounded individuals ready to face the challenges of the future.</p>\r\n\r\n<p>**News and Events:**<br />\r\nStay connected with the heartbeat of our school through the latest news and events section. From academic achievements to exciting extracurricular activities, our blog keeps you informed and engaged. Be a part of our school&#39;s journey and celebrate the successes of our students and faculty.</p>\r\n\r\n<p>**Interactive Admissions Portal:**<br />\r\nExploring enrollment opportunities at Christiana Bedell Preparatory School has never been easier. Our interactive admissions portal guides you through the application process, providing all the information you need to join our vibrant community of learners.</p>\r\n\r\n<p>**Engage with Us:**<br />\r\nConnect with us beyond the classroom through our social media links and interactive features. Share your thoughts, stay updated on school events, and become a part of the Christiana Bedell Preparatory School digital community.</p>\r\n\r\n<p>**Responsive Design for Any Device:**<br />\r\nExperience the new website seamlessly across devices. Our responsive design ensures that whether you&#39;re browsing on a desktop, tablet, or smartphone, you have the same exceptional experience, highlighting our dedication to accessibility.</p>\r\n\r\n<p>As we take this step into the digital realm, we invite you to explore our new website and witness the essence of Christiana Bedell Preparatory School online. Thank you for being a part of our journey as we continue to strive for excellence and innovation in education.</p>\r\n\r\n<p>Visit www.christianabedellschool.com today and embark on a digital journey with Christiana Bedell Preparatory School! ????????✨</p>\r\n', 'News', '1', '2024-01-18'),
(6, 'Unveiling Our Facebook Page', '1705709194_efd2eb4714df477492d6.png', '<p>???? **Engage, Connect, Inspire:** We are delighted to extend our digital presence to Facebook, bringing the spirit of Christiana Bedell Preparatory School to the vibrant social media community. Join us on our Facebook page as we embark on a journey of connection, engagement, and inspiration.</p>\r\n\r\n<p>???? **Stay Informed, Stay Connected:** Our Facebook page is your go-to destination for the latest updates, announcements, and a behind-the-scenes look into the dynamic life at Christiana Bedell Preparatory School. From event highlights to student achievements, we invite you to stay informed and connected with our school community.</p>\r\n\r\n<p>???? **Showcasing Excellence:** Discover the excellence that defines Christiana Bedell Preparatory School through captivating stories, images, and videos. Follow our page to witness the accomplishments of our students, the dedication of our faculty, and the innovative programs that set us apart.</p>\r\n\r\n<p>???? **A Digital Community of Learners:** Engage with fellow parents, students, and educators in our digital community. Share your thoughts, celebrate achievements, and be a part of the conversations that shape our school culture. Our Facebook page is a space for collaboration, support, and celebration.</p>\r\n\r\n<p>???? **Exclusive Insights and Events:** Be the first to know about upcoming events, open houses, and exclusive insights into the daily life at Christiana Bedell Preparatory School. Our Facebook page is your backstage pass to the exciting happenings within our school community.</p>\r\n\r\n<p>???? **Connect with Us:** Join us on Facebook and become a part of the Christiana Bedell Preparatory School family. Like our page, share your experiences, and let&#39;s build a digital community that reflects the warmth, excellence, and camaraderie that defines our school.</p>\r\n\r\n<p>Ready to dive into the digital world of Christiana Bedell Preparatory School? Follow us on Facebook, and let&#39;s embark on a journey of connection, collaboration, and celebration together!</p>\r\n\r\n<p>???? [Christiana Bedell Preparatory School Facebook Page](#)</p>\r\n', 'News', '1', '2024-01-10'),
(7, 'Role of Vocational Education', '1705709548_203b9228f1a17fe29584.jpg', '<p>In a world that celebrates diversity and values a spectrum of skills, vocational education emerges as a powerhouse, shaping the future of both individuals and society. At Christiana Bedell Preparatory School, we recognize the profound importance of vocational education in fostering well-rounded, capable individuals ready to contribute meaningfully to the world.</p>\r\n\r\n<p>???? **Addressing Real-World Needs:**<br />\r\nVocational education aligns seamlessly with the practical demands of the real world. It provides students with hands-on skills and specialized knowledge that are directly applicable to various industries. From culinary arts to computer programming, vocational education addresses the evolving needs of our dynamic job market.</p>\r\n\r\n<p>????️ **Building Practical Competence:**<br />\r\nIn a vocational education setting, students don&#39;t just learn theory; they immerse themselves in the practical application of their chosen field. Whether it&#39;s mastering a trade, honing technical skills, or gaining proficiency in a specific craft, vocational education emphasizes practical competence, preparing students for successful and fulfilling careers.</p>\r\n\r\n<p>???? **Diverse Career Pathways:**<br />\r\nVocational education opens doors to a myriad of career pathways. It recognizes that success is not confined to a singular academic route. By providing alternative avenues for success, vocational education empowers students to explore their passions, find their niche, and excel in areas that align with their unique talents and interests.</p>\r\n\r\n<p>???? **Fostering Entrepreneurial Spirit:**<br />\r\nVocational education nurtures an entrepreneurial spirit by encouraging students to think creatively and independently. Whether they aspire to be chefs, electricians, or graphic designers, vocational programs instill a sense of ownership and innovation, cultivating a mindset that is essential for success in any professional endeavor.</p>\r\n\r\n<p>???? **Meeting Global Challenges:**<br />\r\nIn a world faced with evolving challenges, vocational education plays a vital role in addressing global issues. From sustainable agriculture practices to green energy solutions, vocational programs equip students with the skills to contribute to a more sustainable and resilient future.</p>\r\n\r\n<p>At Christiana Bedell Preparatory School, we champion the significance of vocational education as an integral part of holistic learning. By embracing the diversity of skills and talents, we prepare our students not just for jobs but for fulfilling careers that contribute to the betterment of society. Join us in recognizing and celebrating the transformative power of vocational education! ????????????</p>\r\n', 'Article', '1', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `postId` int(225) NOT NULL,
  `posted_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `email`, `comment`, `postId`, `posted_at`) VALUES
(1, 'Tarnue', 'admin@gmail.com', 'This is amazing to see my self commenting on my own application like hell', 2, '2023-12-25'),
(3, 'Prince Bunah', 'admin@gmail.com', 'it is so amazing and very much good. What a nice application to use in this kindo of eara. You\'re doing well&lt;script&gt;alert(\'ok\')&lt;/script&gt;', 2, '2023-12-25'),
(4, 'Tarnue', 'mathematics104@gmail.com', 'Thank you for the comments and I lookforward to hearing from you', 2, '2023-12-25'),
(5, 'Tarnue', 'mathematics104@gmail.com', 'Thank you for the comments and I lookforward to hearing from you', 2, '2023-12-25'),
(6, 'Tarnue', 'garmai@gmail.com', 'it is so amazing and very much good. What a nice application to use in this kindo of eara. You\'re doing well&lt;script&gt;alert(\'ok\')&lt;/script&gt;', 2, '2023-12-25'),
(7, 'Tarnue', 'admin@gmail.com', 'This Article is very helpful and I look forward to getting more content like this. ', 4, '2024-01-06'),
(8, 'Tarnue', 'garmai@gmail.com', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser', 1, '2024-01-21'),
(9, 'Tarnue', 'fake@gmail.com', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser', 6, '2024-01-21'),
(10, 'James Morlu', 'james@gmail.com', 'I really like this website and love the way it is laid out. Thank to the administration for publishing this amazing website. ', 5, '2024-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(225) NOT NULL,
  `post_category` varchar(20) NOT NULL,
  `description` varchar(225) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `post_category`, `description`, `createdAt`) VALUES
(1, 'Vocational Education', 'Posts that has to do with vocational Courses', '2024-01-20 03:02:59'),
(2, 'News', 'All posts that has to deal with news, events etc', '2024-01-20 03:03:31'),
(4, 'Article', 'Posts that has to do with sharing of insight on issues', '2024-01-20 03:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `coursestable`
--

CREATE TABLE `coursestable` (
  `courseId` int(225) NOT NULL,
  `courseImage` varchar(225) NOT NULL,
  `courseTitle` varchar(225) NOT NULL,
  `courseCategory` varchar(50) NOT NULL,
  `aboutCourse` longtext NOT NULL,
  `instructorPic` varchar(225) NOT NULL,
  `instructorName` varchar(50) NOT NULL,
  `courseCreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `numOfStudents` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursestable`
--

INSERT INTO `coursestable` (`courseId`, `courseImage`, `courseTitle`, `courseCategory`, `aboutCourse`, `instructorPic`, `instructorName`, `courseCreatedAt`, `numOfStudents`) VALUES
(5, '1705706475_51773a4cbab57f62f5c4.jpg', 'Computer Science', 'Financial Motivation', '<p>At the Christiana Bedell Preparatory School, we believe in equipping young minds with the essential skills needed to thrive in the digital age. Our specialized computer courses for elementary and junior high students go beyond traditional education, introducing students to the exciting world of technology in a fun and engaging manner.</p>\r\n\r\n<h4>????&zwj;???? **Hands-On Learning:</h4>\r\n\r\n<p>Our courses are designed to be hands-on and interactive, ensuring that students not only understand the fundamentals of computing but also get the chance to apply their knowledge in real-world scenarios. From basic coding principles to creative digital projects, our curriculum sparks curiosity and fosters a love for learning.</p>\r\n\r\n<h4>???? **Digital Literacy for the Future:</h4>\r\n\r\n<p>In today&#39;s fast-paced world, digital literacy is a crucial skill. Our computer courses lay the foundation for a solid understanding of technology, preparing students for the challenges and opportunities that lie ahead. Whether it&#39;s coding, problem-solving, or navigating digital platforms responsibly, our program sets the stage for future success.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>???? **Exploring Creativity:</h4>\r\n\r\n<p>Our courses go beyond the screen, encouraging students to unleash their creativity through technology. From designing games to crafting multimedia projects, we inspire students to see the endless possibilities that technology offers as a tool for expression and innovation.</p>\r\n\r\n<h4>???? **Building a Tech Community:</h4>\r\n\r\n<p>At CBPS we foster a supportive and collaborative tech community. Students not only learn from our experienced instructors but also from each other, creating an environment where knowledge-sharing and teamwork thrive.</p>\r\n\r\n<p>Join us on a journey to empower the next generation with the skills they need to navigate and shape the digital landscape. Enroll your child in our computer courses and let&#39;s embark on a path of discovery, learning, and digital mastery together! ????????&zwj;????????</p>\r\n', 'instructor.jpg', 'Tarnue P. Borbor', '2024-01-20 01:26:31', 200),
(6, '1705706832_04d2e293dca6975bc177.jpg', 'Architectural Drafting', 'Growth', '<p>Welcome to Christiana Bedell Preparatory School, where we blend creativity with precision! Our specialized drafting courses for elementary and junior high students are crafted to inspire young minds to explore the fascinating world of design and engineering.</p>\r\n\r\n<h3>???? **Hands-On Design Experience:**</h3>\r\n\r\n<p><br />\r\nAt Christiana Bedell Preparatory School, students embark on an exciting journey into drafting and design, experiencing hands-on learning with various tools and technologies. From sketching their first blueprints to mastering cutting-edge drafting software, our curriculum empowers students to bring their creative ideas to life.</p>\r\n\r\n<h3>???? **Bridging Tradition with Technology:**</h3>\r\n\r\n<p><br />\r\nOur courses bridge the gap between traditional drafting techniques and modern digital tools. Students not only learn the timeless fundamentals of manual drafting but also gain proficiency in computer-aided design (CAD), unlocking a world of possibilities for their future endeavors.</p>\r\n\r\n<h3>????️ **Crafting Future Architects and Engineers:**</h3>\r\n\r\n<p><br />\r\nWhether envisioning architectural marvels or engineering innovative solutions, our drafting courses at Christiana Bedell Preparatory School provide the foundation for aspiring architects and engineers. Through engaging projects, students develop problem-solving skills and a keen eye for detail, preparing them for the challenges of tomorrow&#39;s design landscape.</p>\r\n\r\n<h3>???? **Fostering Creative Expression:**</h3>\r\n\r\n<p><br />\r\nDrafting is not just about precision; it&#39;s an art form. Our courses emphasize the importance of creativity in design. Students explore their artistic side, learning how to balance functionality with aesthetics, and discovering the joy of turning concepts into tangible creations.</p>\r\n\r\n<h3>???? **Collaborative Design Community:**</h3>\r\n\r\n<p><br />\r\nAt Christiana Bedell Preparatory School, we cultivate a collaborative learning environment. Students work together on design challenges, sharing ideas and insights. This community approach not only enhances their drafting skills but also instills teamwork and communication &ndash; vital skills in the professional design world.</p>\r\n\r\n<p>Embark on a journey of creativity and precision with our drafting courses at Christiana Bedell Preparatory School. Join us in nurturing the architects and designers of tomorrow! ????????????️</p>\r\n', 'instructor.jpg', 'Tarnue P. Borbor', '2024-01-20 01:26:35', 270),
(7, '1705707242_df73cc3d0e522f18107c.jpg', 'Catering', 'PLSCU Updates', '<p>Our specialized catering courses for elementary and junior high students focus on the art of food preparation and baking, ensuring that every student becomes a maestro in the kitchen.</p>\r\n\r\n<p>???? **Hands-On Culinary Mastery:**<br />\r\nOur catering courses immerse students in the heart of the kitchen, providing hands-on experiences in the fine art of food preparation. From knife skills to precise measurements, students learn the essentials of culinary craftsmanship, preparing them to create culinary masterpieces for events of all kinds.</p>\r\n\r\n<p>???? **The Sweet Symphony of Baking:**<br />\r\nUnleash the magic of baking with our dedicated courses that delve into the world of sweet delights. Students master the science and art of baking, from crafting the perfect pastry to decorating cakes with precision. Our curriculum ensures a well-rounded understanding of the baking process, enabling students to create delectable treats for any occasion.</p>\r\n\r\n<p>???? **Tailored for Event Catering:**<br />\r\nAt Christiana Bedell Preparatory School, our catering courses are tailored for the dynamic world of event catering. Students learn the intricacies of menu planning, organization, and efficient cooking techniques to cater to diverse palates. It&#39;s not just about cooking; it&#39;s about creating memorable culinary experiences for events big and small.</p>\r\n\r\n<p>???? **Nurturing Culinary Passion:**<br />\r\nBeyond the skills, our courses ignite a passion for the culinary arts. Students are encouraged to explore their creativity, experiment with flavors, and develop their unique culinary style. It&#39;s a journey of self-expression through the delicious medium of food.</p>\r\n\r\n<p>????&zwj;???? **Chef-Driven Learning Community:**<br />\r\nChristiana Bedell Preparatory School fosters a community where aspiring chefs collaborate, share culinary insights, and support one another in their culinary journey. Our focus on teamwork prepares students not just to excel in the kitchen but also to thrive in the collaborative environment of the culinary world.</p>\r\n\r\n<p>Embark on a flavorful journey with our catering courses at Christiana Bedell Preparatory School. Join us in shaping the next generation of culinary artists, ready to delight taste buds and create lasting memories! ????????????&zwj;????</p>\r\n', 'instructor.jpg', 'Tarnue P. Borbor', '2024-01-20 01:26:38', 600);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(225) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `position` varchar(30) NOT NULL,
  `posCategory` text NOT NULL,
  `profileSummary` longtext NOT NULL,
  `profileImg` varchar(225) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fullName`, `qualification`, `email`, `position`, `posCategory`, `profileSummary`, `profileImg`, `createdAt`) VALUES
(1, 'Tarnue P. Borbor', 'Bsc, Computer Science', 'tarnueatalx@gmail.com', 'Computer Instructor', 'Supportive', 'over five years of teaching computer with bsc in computer science, Tarnue is a professional computer instructor', 'instructor.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(225) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(225) NOT NULL,
  `userRole` varchar(10) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `fbHandle` varchar(225) NOT NULL,
  `xHandle` varchar(225) NOT NULL,
  `linkinHandle` varchar(225) NOT NULL,
  `profileImg` varchar(225) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fullName`, `email`, `passwd`, `userRole`, `profession`, `fbHandle`, `xHandle`, `linkinHandle`, `profileImg`, `createdAt`) VALUES
(1, 'Tarnue P. Borbor', 'mathematics104@gmail.com', '$2y$10$Fa70ywBhmsEjVfv/qdplGemACF4zwqSeMbK9qA27YSv4JbkSqtpCO', 'SUDO', 'Web Master', 'http://facebook.com/tarnuea', '', '', '1705897772_ba9eca3ffdd61a4c0eca.jpg', '2023-12-24 15:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_title` varchar(30) NOT NULL,
  `customer_testimoney` varchar(225) NOT NULL,
  `customer_pic` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_name`, `customer_title`, `customer_testimoney`, `customer_pic`) VALUES
(1, 'Jassa Dorley ', 'Lawer, Temple of Justices', '\"Christiana Bedell Prep has been an incredible journey for me. The supportive teachers and engaging curriculum have not only broadened my academic horizons but also fueled my passion for learning. The vibrant community here m', 'student2.jpg'),
(2, 'Miatta Kamara', 'Grade 9', '\"As a new student, Christiana Bedell Prep instantly felt like home. The teachers are not just educators; they\'re mentors who guide us towards success. The hands-on approach to learning has made subjects like science and math ', 'student1.jpg'),
(3, 'James Gaye', 'Grade 9', '\"Transitioning into junior high at Christiana Bedell Prep has been a transformative experience. The challenging academics, coupled with the supportive environment, have empowered me to explore my interests.', 'student3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursestable`
--
ALTER TABLE `coursestable`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursestable`
--
ALTER TABLE `coursestable`
  MODIFY `courseId` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
