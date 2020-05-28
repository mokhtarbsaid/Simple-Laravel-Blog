-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 10:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'General', 'This is General', '2020-05-20 12:01:02', '2020-05-20 12:01:02'),
(2, 'Nature', 'This For Share a  Nature Exclusive and Amazing info', '2020-05-20 12:28:18', '2020-05-20 12:28:18'),
(3, 'Animal', 'This For Share a  Animal Exclusive and Amazing info', '2020-05-20 12:28:44', '2020-05-20 12:28:44'),
(4, 'Trees and Flowers', 'This For Share a  Trees And Flowers Exclusive and Amazing info', '2020-05-20 12:29:43', '2020-05-20 12:29:43'),
(5, 'Foods', 'This For Share a  Food Exclusive and Amazing info', '2020-05-20 12:30:12', '2020-05-20 12:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('moderated','approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'moderated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `post_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aboubakar Bensaid', 'aboubakar@gmail.com', 2, 'Great!!\r\n<br>I love This Animale Too Because It\'s Soo Cute', 'approved', '2020-05-21 08:10:00', '2020-05-21 08:25:00'),
(2, 'Redhouan Said', 'ali@bensaid.com', 2, 'I love kangaroo', 'approved', '2020-05-21 12:39:11', '2020-05-21 13:23:40'),
(3, 'Redhouan Said', 'ali@bensaid.com', 2, 'I love kangaroo', 'approved', '2020-05-21 12:40:04', '2020-05-21 13:28:38'),
(4, 'Redhouan Said', 'ali@bensaid.com', 2, 'aaezrere', 'moderated', '2020-05-21 13:39:20', '2020-05-21 13:39:20'),
(5, 'Mokhtar Bensaid', 'mokhtar1992bensaid@gmail.com', 2, 'azerrt(yrtutyuiuyoliu', 'approved', '2020-05-21 13:39:35', '2020-05-21 18:24:14'),
(6, 'General', 'mokhtarfollowing@gmail.com', 2, 'aeztfgtergrt', 'approved', '2020-05-21 13:39:58', '2020-05-21 18:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rami', 'Ali', 'rami@ali.com', 'Thanks Message', 'THhanks You Very Much for your Content', '2020-05-21 23:00:00', '2020-05-21 23:00:00'),
(2, 'Mohammed', 'Aichoui', 'mohamed@gmail.com', 'I need work', 'Hi\r\nI need to work with you as i writer', '2020-05-22 09:18:01', '2020-05-22 09:18:01'),
(3, 'Mohammed', 'Aichoui', 'mohamed@gmail.com', 'I need work', 'Hi\r\nI need to work with you as i writer', '2020-05-22 09:18:31', '2020-05-22 09:18:31'),
(4, 'Mohammed', 'Aichoui', 'mokhtar1992bensaid@gmail.com', 'I need work', 'I need work', '2020-05-25 10:51:08', '2020-05-25 10:51:08'),
(5, 'Mohammed', 'Aichoui', 'ali@bensaid.com', 'I need work', 'I need work', '2020-05-25 12:26:42', '2020-05-25 12:26:42'),
(6, 'Mohammed', 'Aichoui', 'mokhtar1992bensaid@gmail.com', 'I need work', 'I need work', '2020-05-25 13:06:53', '2020-05-25 13:06:53'),
(7, 'Mohammed', 'Aichoui', 'mokhtar1992bensaid@gmail.com', 'I need work', 'I need work', '2020-05-25 13:08:13', '2020-05-25 13:08:13'),
(9, 'Mohammed', 'Aichoui', 'ali@bensaid.com', 'I need work', 'I need work', '2020-05-25 13:11:27', '2020-05-25 13:11:27'),
(10, 'Mohammed', 'Aichoui', 'mokhtar1992bensaid@gmail.com', 'I need work', 'I need work', '2020-05-25 13:13:34', '2020-05-25 13:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_17_130213_create_categories_table', 1),
(5, '2020_05_17_131532_create_posts_table', 1),
(6, '2020_05_18_123518_add_soft_delete_column_to_posts_table', 1),
(7, '2020_05_19_080926_create_tags_table', 1),
(8, '2020_05_19_105628_create_post_tag_table', 1),
(9, '2020_05_20_090342_create_profiles_table', 1),
(11, '2020_05_21_081951_create_comments_table', 2),
(12, '2020_05_22_083725_create_contacts_table', 3),
(13, '2020_05_22_162231_create_newsletters_table', 4),
(14, '2020_05_23_195901_create_views_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(7, 'mokhtar1992bensaid@gmail.com', '2020-05-25 05:29:25', '2020-05-25 05:29:25'),
(8, 'ali@bensaid.com', '2020-05-25 08:27:52', '2020-05-25 08:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `image`, `user_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '10 Kangaroo Facts You Didn\'t Know', '<div>I always like to tell people that if you don’t see a kangaroo in the wild on your trip to <a href=\"https://www.goeco.org/area/volunteer-in-australasia/australia\"><strong>Australia</strong></a>, then you probably didn’t have much more than Bondi Beach and the Opera House on your itinerary. But, if a trip through the outback is a little outside your budget or timeframe, then volunteering at a <a href=\"https://www.goeco.org/area/volunteer-in-australasia/australia/wild-animal-rescue\"><strong>wild animal sanctuary</strong></a> with kangaroos, is a mighty fine way to get up close and personal with these comical creatures.</div>', '<div><strong>Let me officially introduce to you the ‘roo’:</strong></div><ul><li>Kangaroos are marsupials aka they carry their young in a pouch. &nbsp;</li><li>Although the kangaroo has many brothers that look like it i.e. wallabies and wallaroos, the term kangaroo technically describes the largest of the bunch and includes the red kangaroo, the eastern grey kangaroo, the western grey kangaroo and the antilopine kangaroo.</li></ul><div><br></div><ul><li>A group of kangaroos is called a mob. A male is a boomer and a female is a jill.</li><li>Babies are referred to as joeys, like all other marsupial babies. If you’re into your sports, see how many Aussie sports teams you can find that use the kangaroo and its affiliates as their mascots.&nbsp;</li><li>Kangaroos are indigenous to Australia (seriously this should be higher on your list of things to see than a beach!)&nbsp;</li><li>Kangaroos are strict herbivores, however they hardly release any methane, unlike most cattle.&nbsp;</li><li>Kangaroo meat is commonly found in Australia and is considered to be a healthier and more sustainable option than other types of meat.&nbsp;</li></ul><div><strong>With this is mind, are kangaroos actually endangered?</strong><br><br>This is quite a controversial question to answer.<br><br>Kangaroos are hunted for their skin and meat, however some would say that it is done to control the population, protect farmer’s crops, and homes, if a kangaroo were to enter and become aggressive (although a 6ft muscular roo can be quite striking, they are unlikely to pose an actual threat).<br><br></div><div>What is certain is that environmental factors such as global warming are impacting on their food resources and that accidents involving humans, are also impacting on the kangaroo population.<br><br>As with most conservation initiatives, it is always best to start with what we can do on a personal level, which can be more effective than signing petitions and adding Facebook likes to all causes.<br><br></div><div><strong>Here are a few tips on how you can help the kangaroo on your trip in Australia:</strong><br><br><strong>Don’t feed the kangaroo your fries</strong>. Beach bum kangaroos are sometimes seen and can be very friendly and approachable. But, like a dog, they just want to be fed. Now, how should I put it lightly? Please, DO NOT FEED THE KANGAROO MCDONALDS. No matter the puppy dog eyes that you may think you are seeing, this is not an opportunity for you to share your lunch. Kangaroos will do just fine with grass, so no need to increase their sodium and carbohydrate intake (as well as preservatives and whatever else is in that packet).<br><br><strong>Don’t drive at night in the Outback</strong>. Kangaroos account for over 80% of animal collisions and can cause severe damage to both the car and the animal. The chance of an accident is so high, that most rental car insurance policies won’t cover you if you travel between dusk and dawn in the Outback.<br><br><strong>Do check the pouch for joeys</strong>. If you find a roo on the road or you unfortunately hit one, make sure that you check the pouch of a female to see if there’s a baby. These can often be saved with the right care.<br><br></div>', 'uploads/posts/shjDygqdgYzRfUnOYn6vLedWVjF71IoWg2UPGV1K.jpeg', 1, 3, '2020-05-20 13:41:11', '2020-05-20 14:34:41', NULL),
(3, 'Here Are The 10 Most Incredible Natural Wonders In Mississippi', '<div>Residents of the Magnolia State are lucky enough to experience the wonder that is Mississippi on a daily basis. So rather than focus on that, we decided to take things a bit more literally – <em>natural wonders</em>. From historically significant sites to amazing formations, Mississippi has a lot to offer. Need proof? Read on and see for yourself.</div>', '<div><strong>1. Petrified Forest, Flora:<br></strong>Estimated to be about a thousand years old, these petrified trees formed as a result of severe floods, which tore down everything in their paths – including large trees. Over the years, subsequent floods deposited sand and silt over these sunken giants and, in turn, the petrification process began. Today, we are left with amazing fossils that exhibit perfectly preserved details.</div><div><strong><br>2. Tishomingo State Park, Tishomingo<br></strong>In terms of natural beauty, not much has changed at this state park since the days when Indians inhabited this very land. Located in the foothills of the Appalachian Mountains, Tishomingo offers a breathtaking landscape made up of massive rock formations and fern-filled crevices that can’t be found anywhere else in the world.<br><strong><br>3. Gulf Islands National Seashore, Jackson County/Harrison County<br></strong>Part of the National Parks Service, this national seashore features beaches, historic sites, wildlife sanctuaries, islands, bayous, nature trails, and campgrounds. While most of the seashore is accessible only by boat, the Davis Bayou area can be accessed by automobile.</div><div><strong><br>4. The Mississippi River<br></strong>From Native Americans to European travelers to the Civil War, this historically significant river has played a major role in our country. At a little over 2,300 miles, the Mighty Mississippi is slightly shorter than the Missouri River; however, the two rivers combined form the longest river system in North America. The wonder that is the Mississippi River can be observed in numerous places in the state, including Tunica, Clarksdale, Rosedale, Greenville, Vicksburg, Port Gibson, Lorman, Fayette, Natchez, and Woodville.</div>', 'uploads/posts/QNZNVMGD2VRM7p4ORx6xcqenIDMFDnWJB726cS5Q.jpeg', 1, 1, '2020-05-20 15:17:02', '2020-05-20 15:17:02', NULL),
(4, 'GROWING TULIPS', '<div>HOW TO PLANT, GROW, AND CARE FOR TULIPS</div>', '<div>Long live the tulip! This brightly colored jewel brightens our days in early spring. We truly look forward to seeing those blue-green leaves start to emerge as the Earth awakens from its winter sleep! Here are our tips on how to plant and care for tulips.<br><br></div><div><br></div><div>Tulips normally begin emerging from the ground in March. If mild winter weather causes premature growth, the danger is not as great as it may seem. Tulips (and daffodils) have braved these cold temperatures before and quite tolerant. If winter temperatures return, it may delay growth. The snow is helpful, discouraging additional growth and protecting the foliage from extreme cold.&nbsp;<br><br></div><div><strong>Plant in the Fall for Spring Bloom<br></strong><br></div><div>Tulip bulbs are planted in the autumn before the ground freezes. By planting varieties with different bloom times, you can have tulips blooming from early to late spring. Some types are good for forcing into bloom indoors and most are excellent for cut flowers, too.<br><br></div><div>Tulip flowers are usually cup-shaped with three petals and three sepals. There’s a tulip for every setting, from small “species” tulips in naturalized woodland areas to larger tulips that fit formal garden plantings from beds to borders. The upright flowers may be single or double, and vary in shape from simple cups, bowls, and goblets to more complex forms. Height ranges from 6 inches to 2 feet. One tulip grows on each stem, with two to six broad leaves per plant.<br><br></div><div>ARE TULIPS ANNUAL OR PERENNIAL BULBS?</div><div>Although tulips are a perennial from a botanical perspective, many centuries of hybridizing means that the bulb’s ability to come back year after year has weakened. Therefore, many gardeners treat them as annuals, planting new bulbs every autumn. The North American climate and soil can’t replicate the ancient Anatolian and southern Russian conditions of their birth. Gardeners in the western mountain region of the U.S. come closest to this climate, and may have more success perennializing their tulips.<br><br></div><div><br></div><div>PLANTING</div><div>SELECTING A PLANTING SITE</div><ul><li>Tulips prefer a site with full or afternoon sun. In Zones 7 and 8, choose a shady site or one with morning sun only, as tulips don’t like a lot of heat.</li><li>Soil must be well-draining, neutral to slightly acidic, fertile, and dry or sandy. All tulips dislike areas with excessive moisture.&nbsp;</li><li>Tall varieties should be sheltered from strong winds.</li><li>You’ll want to space bulbs 4 to 6 inches apart, so choose a large enough planting site.</li></ul><div>WHEN TO PLANT TULIPS</div><ul><li>Plant tulip bulbs in the fall, 6 to 8 weeks before a hard, ground-freezing frost is expected. The bulbs need time to establish themselves. Planting too early leads to disease problems. See local <a href=\"http://www.almanac.com/gardening/frostdates\">frost dates</a>.&nbsp;<ul><li>A good rule of thumb is to plant bulbs when the average nighttime temperatures in your area are in the 40- to 50-degree range.</li><li>In colder northern climates, plant in September or October. In warmer climates, plant bulbs in December (or even later).</li><li>To find the best dates, consult our <a href=\"http://www.almanac.com/content/autumn-plants-planting-fall-bulbs\">fall bulb planting chart</a>.</li></ul></li><li>Nature never intended for bulbs to loll about above ground, so don’t delay planting the bulbs after purchase.</li><li>In southern climates with mild winters, plant bulbs in late November or December. The bulbs will need to be chilled in the refrigerator for about 12 weeks before planting. (Bulb suppliers often offer pre-chilled bulbs for sale, too.)</li><li>If you miss planting your bulbs at the optimal time, don’t wait for spring or next fall. Bulbs aren’t like seeds. Even if you find an unplanted sack of tulips or daffodils in January or February, plant them and take your chances. See more about <a href=\"https://www.almanac.com/news/gardening/life-garden/planting-tulip-bulbs-winter\">planting tulips in winter</a>.&nbsp;</li></ul><div>HOW TO PLANT TULIPS</div><ul><li>Prepare the garden bed by using a garden fork or tiller to loosen the soil to a depth of 12 to 15 inches, then mix in a 2- to 4-inch layer of compost.</li><li>Plant bulbs deep—at least 8 inches, measuring from the base of the bulb. And that means digging even deeper, to loosen the soil and allow for drainage, or creating raised beds. Remember, the bigger the bulb, the deeper the hole it needs.</li><li>Set the bulb in the hole with the pointy end up. Cover with soil and press soil firmly.</li><li>Water bulbs right after planting. Although they can’t bear wet feet, bulbs need water to trigger growth.</li><li>If you’re planning to raise perennial tulips, feed them a balanced fertilizer when you plant them in the fall. Bulbs are their own complete storage system and contain all of the nutrients they need for one year. Use organic material, compost, or a balanced time-release bulb food.</li><li>To deter <a href=\"http://www.almanac.com/pest/mice\">mice</a> and <a href=\"http://www.almanac.com/pest/moles\">moles</a>—if they have been a problem—put <a href=\"http://www.almanac.com/blog/gardening/gardening/happy-holly-days\">holly</a> or any other thorny leaves in the planting holes. Some gardeners use kitty litter or crushed gravel. If ravenous <a href=\"http://www.almanac.com/pest/voles\">voles</a> and rodents are a real problem, you may need to take stronger measures, such as planting bulbs in buried wire cages.</li><li>Don’t lose hope if you’re planting your tulips later in the season—just follow <a href=\"http://www.almanac.com/blog/gardening-blog/you-can-still-plant-tulips\">these tips</a>.</li></ul>', 'uploads/posts/355SH95AdRAjdZmsQWLqqWNiHpTSPyt39w8P4XPF.jpeg', 1, 4, '2020-05-20 15:20:01', '2020-05-20 15:20:01', NULL),
(5, 'What are the health benefits of mineral water?', '<div>As the name suggests, mineral water contains high quantities of minerals, especially <a href=\"https://www.medicalnewstoday.com/articles/286839.php\">magnesium</a>, <a href=\"https://www.medicalnewstoday.com/articles/248958.php\">calcium</a>, and sodium. But is mineral water better than regular water, and what are its benefits?</div><div>This article discusses some possible health benefits associated with drinking mineral water.</div>', '<h1>Mineral water vs. regular water</h1><div><br></div><div>People often choose mineral water because of its possible health benefits.</div><div>All living organisms need water to survive. Not only does water support essential physical functions, it also provides vital nutrients that the body does not produce on its own.<br><br></div><div>While most people in the United States have access to clean drinking water, many people choose bottled mineral water for its perceived purity and potential health benefits.</div><div><br>How does mineral water compare with regular water? Based on the current evidence, the differences are not very significant.<br><br></div><div>Both types contain minerals and undergo some form of processing. However, by definition, mineral water must contain a certain amount of minerals, and the bottling process takes place at the source.</div><div><br>We discuss the differences between tap water and mineral water below.<br><br></div><div><strong>Tap water</strong></div><div>The water in household taps comes either from surface or underground sources.</div><div><br>In the U.S., tap water must meet the <a href=\"https://www.epa.gov/laws-regulations/summary-safe-drinking-water-act\">Safe Drinking Water Act</a> standards established by the Environmental Protection Agency (EPA). These regulations limit the number of contaminants present in water supplied to homes.</div><div><br>Public water suppliers move water from its source to treatment plants, where it undergoes chemical disinfection. The clean water ultimately gets delivered to households through a system of underground pipes.</div><div>Tap water contains added minerals, including calcium, magnesium, and <a href=\"https://www.medicalnewstoday.com/articles/287212.php\">potassium</a>. Hard tap water has higher mineral contents, which some consider more healthful. However, minerals in hard water form deposits that can corrode pipes or restrict the flow.</div><div><br>Also, despite the efforts of public water suppliers, contaminants from rusted or leaking pipes can pollute drinking water.<br><br></div><div><strong>Mineral water</strong></div><div>Mineral water comes from natural underground reservoirs and mineral springs, giving it a higher mineral content than tap water.<br><br></div><div>According to the Food and Drug Administration (FDA), mineral water must contain at least <a href=\"https://www.accessdata.fda.gov/scripts/cdrh/cfdocs/cfcfr/CFRSearch.cfm?fr=165.110&amp;SearchTerm=bottled%20water\">250 parts per million of total dissolved solids</a>. The FDA prohibit these manufacturers from adding minerals to their products.<br><br></div><div>Minerals that are often present in mineral water include:<br><br></div><ul><li>calcium</li><li>magnesium</li><li>potassium</li><li>sodium</li><li>bicarbonate</li><li>iron</li><li>zinc</li></ul><div>Unlike tap water, mineral water is bottled at the source. Some people prefer mineral water due to its perceived purity and the lack of chemical disinfection treatments.<br><br></div><div>However, mineral water may undergo some processing. This can include adding or removing carbon dioxide (CO2) gas or eliminating toxic substances, such as arsenic.</div><div><br>CO2 helps prevent oxidation and limits bacterial growth in mineral water. Naturally carbonated water gets its CO2 from the source. Manufacturers can also infuse their water with CO2 after extraction.<br><br></div><div><br>The next sections discuss five potential benefits of drinking mineral water.<br><br></div>', 'uploads/posts/SQwP9Iri0QeChN7tR23uncplDGsTuaNIivYEulrl.jpeg', 1, 2, '2020-05-20 15:25:58', '2020-05-20 15:25:58', NULL),
(6, 'The benefits of organic food', '<div>How your food is grown or raised can have a major impact on your mental and emotional health as well as the environment. Organic foods often have more beneficial nutrients, such as antioxidants, than their conventionally-grown counterparts and people with allergies to foods, chemicals, or preservatives often find their symptoms lessen or go away when they eat only organic foods.</div>', '<div><strong>Organic produce contains fewer pesticides.</strong> Chemicals such as fungicides, herbicides, and insecticides are widely used in conventional agriculture and residues remain on (and in) the food we eat.<br><br></div><div><strong>Organic food is often fresher </strong>because it doesn’t contain preservatives that make it last longer. Organic produce is often (but not always, so watch where it is from) produced on smaller farms near where it is sold.<br><br></div><div><strong>Organic farming is better for the environment.</strong> Organic farming practices reduce pollution, conserve water, reduce soil erosion, increase soil fertility, and use less energy. Farming without pesticides is also better for nearby birds and animals as well as people who live close to farms.<br><br></div><div><strong>Organically raised animals are NOT given antibiotics, growth hormones, or fed animal byproducts.</strong> Feeding livestock animal byproducts increases the risk of mad cow disease (BSE) and the use of antibiotics can create antibiotic-resistant strains of bacteria. Organically-raised animals are given more space to move around and access to the outdoors, which help to keep them healthy.<br><br></div><div><strong>Organic meat and milk are richer in certain nutrients.</strong> Results of a 2016 European study show that levels of certain nutrients, including omega-3 fatty acids, were up to 50 percent higher in organic meat and milk than in conventionally raised versions.<br><br></div><div><strong>Organic food is GMO-free. </strong>Genetically Modified Organisms (GMOs) or genetically engineered (GE) foods are plants whose DNA has been altered in ways that cannot occur in nature or in traditional crossbreeding, most commonly in order to be resistant to pesticides or produce an insecticide.<br><br></div><div><strong>Organic food vs. locally-grown food<br></strong><br></div><div>Unlike organic standards, there is no specific definition for “local food”. It could be grown in your local community, your state, your region, or your country. During large portions of the year it is usually possible to find food grown close to home at places such as a farmer’s market.</div><div><br><strong>The benefits of locally grown food<br></strong><br></div><div><strong>Financial:</strong> Money stays within the local economy. More money goes directly to the farmer, instead of to things like marketing and distribution.<br><br></div><div><strong>Transportation:</strong> In the U.S., for example, the average distance a meal travels from the farm to the dinner plate is over 1,500 miles. Produce must be picked while still unripe and then gassed to “ripen” it after transport. Or the food is highly processed in factories using preservatives, irradiation, and other means to keep it stable for transport.<br><br></div><div><strong>Freshness:</strong> Local food is harvested when ripe and thus fresher and full of flavor.<br><br></div><div>Small local farmers often use organic methods but sometimes cannot afford to become certified organic. Visit a farmer’s market and talk with the farmers to find out what methods they use.<br><br></div>', 'uploads/posts/JB9ns6GOnRfwcKGNEQR9e7LEH3femtkGqimfhcvH.jpeg', 1, 5, '2020-05-20 15:33:39', '2020-05-20 15:33:39', NULL),
(7, 'How Much Water Should You Drink Per Day?', '<div>The body is about 60% water, give or take.</div><div>You are constantly losing water from your body, primarily via urine and sweat. To prevent dehydration, you need to drink adequate amounts of water.</div>', '<div>There are many different opinions on how much water you should be drinking every day.</div><div>Health authorities commonly recommend eight 8-ounce glasses, which equals about 2 liters, or half a gallon. This is called the 8×8 rule and is very easy to remember.</div><div>However, some health gurus believe that you need to sip on water constantly throughout the day, even when you’re not thirsty.</div><div>As with most things, this depends on the individual. Many factors (both internal and external) ultimately affect your need for water.</div><div>This article takes a look at some water intake studies to separate fact from fiction and explains how to easily match water intake to your individual needs.<br><br></div><div><strong>Does Water Intake Affect Energy Levels and Brain Function?<br></strong>Many people claim that if you don’t stay hydrated throughout the day, your energy levels and brain function start to suffer.And there are plenty of studies to support this.One study in women showed that a fluid loss of 1.36% after exercise impaired mood and concentration and increased the frequency of headaches (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/22190027\">1Trusted Source</a>).Other studies show that mild dehydration (1–3% of body weight) caused by exercise or heat can harm many other aspects of brain function (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/14681710\">2Trusted Source</a>, <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/3355239\">3Trusted Source</a>, <a href=\"http://www.sciencedirect.com/science/article/pii/S0167876001001428\">4</a>).Keep in mind that just 1% of body weight is a fairly significant amount. This happens primarily when you’re sweating a lot.Mild dehydration can also negatively affect physical performance, leading to reduced endurance (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/14681709\">5Trusted Source</a>, <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/11055570\">6Trusted Source</a>, <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/17887814\">7Trusted Source</a>).</div><blockquote><strong>SUMMARY</strong></blockquote><div>Mild dehydration caused by exercise or heat can have negative effects on both your physical and mental performance.<br><br></div><div><strong>Does Drinking a Lot of Water Help You Lose Weight?<br></strong>There are many claims that increased water intake may reduce body weight by increasing your metabolism and reducing your appetite.According to two studies, drinking 17 ounces (500 ml) of water can temporarily boost metabolism by 24–30% (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/14671205\">8Trusted Source</a>).The image below shows this effect. The top line shows how 17 ounces (500 ml) of water increased metabolism. Notice how this effect decreases before the 90-minute mark (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/17519319\">9Trusted Source</a>):The researchers estimated that drinking 68 ounces (2 liters) in one day increased energy expenditure by about 96 calories per day.Additionally, it may be beneficial to drink cold water because your body will need to expend more calories to heat the water to body temperature.Drinking water about a half hour before meals can also reduce the number of calories you end up consuming, especially in older individuals (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/18589036\">10Trusted Source</a>, <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/17228036\">11Trusted Source</a>).One study showed that dieters who drank 17 ounces (500 ml) of water before each meal lost 44% more weight over 12 weeks, compared to those who didn’t (<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/19661958\">12Trusted Source</a>).Overall, it seems that drinking adequate amounts of water, particularly before meals, may have a <a href=\"https://www.healthline.com/nutrition/drinking-water-helps-with-weight-loss\">significant weight loss benefit</a>, especially when combined with a healthy diet.What’s more, adequate water intake has a number of <a href=\"https://www.healthline.com/nutrition/7-health-benefits-of-water\">other health benefits</a>.</div><blockquote><strong>SUMMARY</strong><br>Drinking water can cause mild, temporary increases in metabolism, and drinking it about a half hour before each meal can make you automatically eat fewer calories. Both of these effects contribute to weight loss.</blockquote><div><br></div>', 'uploads/posts/z9o0FeObnbsYk2TyAvLqBH5rxLRYYYTb0kVuvsz7.jpeg', 1, 2, '2020-05-22 17:06:58', '2020-05-22 17:06:58', NULL),
(8, 'Fifteen benefits of drinking water', '<div>Around <a href=\"https://water.usgs.gov/edu/propertyyou.html\">60 percent</a> of the body is made up of water, and around <a href=\"http://water.usgs.gov/edu/earthhowmuch.html\">71 percent</a> of the planet’s surface is covered by water.</div><div>Perhaps it is the ubiquitous nature of water that means drinking enough each day is not at the top of many people’s lists of priorities.</div>', '<div>To function properly, all the cells and organs of the body need water.</div><div>Here are <a href=\"https://water.usgs.gov/edu/propertyyou.html\">some reasons</a> our body needs water:</div><div><br><strong>1. It lubricates the joints</strong></div><div>Cartilage, found in joints and the disks of the spine, contains around 80 percent water. Long-term <a href=\"https://www.medicalnewstoday.com/articles/153363.php\">dehydration</a> can reduce the joints’ shock-absorbing ability, leading to joint pain.<br><br></div><div><strong>2. It forms saliva and mucus</strong></div><div>Saliva helps us digest our food and keeps the mouth, nose, and eyes moist. This prevents friction and damage. Drinking water also keeps the mouth clean. Consumed instead of sweetened beverages, it can also reduce tooth decay.</div><div><strong>3. It delivers oxygen throughout the body</strong></div><div>Blood is more than 90 percent water, and blood carries oxygen to different parts of the body.</div><div><strong>4. It boosts skin health and beauty<br><br></strong>With dehydration, the skin can become more vulnerable to skin disorders and premature wrinkling.<br><br></div><div><strong>5. It cushions the brain, spinal cord, and other sensitive tissues</strong></div><div>Dehydration can affect brain structure and function. It is also involved in the production of hormones and neurotransmitters. Prolonged dehydration can lead to problems with thinking and reasoning.<br><br></div><div><strong>6. It regulates body temperature</strong></div><div>Water that is stored in the middle layers of the skin <a href=\"https://www.rush.edu/health-wellness/discover-health/how-body-regulates-heat\">comes to the skin’s surface</a> as sweat when the body heats up. As it evaporates, it cools the body. In sport.</div><div>Some scientists have <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/9694412\">suggested that</a> when there is too little water in the body, heat storage increases and the individual is less able to tolerate heat strain.</div><div>Having a lot of water in the body may reduce physical strain if heat <a href=\"https://www.medicalnewstoday.com/articles/145855.php\">stress</a> occurs during exercise. However, more research is needed into these effects.<br><br></div><div><strong>7, The digestive system depends on it</strong><br>The bowel needs water to work properly. Dehydration can lead to digestive problems, <a href=\"https://www.medicalnewstoday.com/articles/150322.php\">constipation</a>, and an overly acidic stomach. This increases the risk of <a href=\"https://www.medicalnewstoday.com/articles/9151.php\">heartburn</a> and stomach ulcers.<br><br></div><div><strong>8. It flushes body waste</strong></div><div>Water is needed in the processes of sweating and removal of urine and feces.<br><br></div><div><strong>9. It helps maintain blood pressure</strong></div><div>A lack of water can cause blood to become thicker, increasing <a href=\"https://www.medicalnewstoday.com/articles/270644.php\">blood pressure</a>.<br><br></div><div><strong>10. The airways need it</strong></div><div>When dehydrated, airways are restricted by the body in an effort to minimize water loss. This can make <a href=\"https://www.medicalnewstoday.com/info/asthma/\">asthma</a> and allergies worse.<br><br></div><div><strong>11. It makes minerals and nutrients accessible</strong></div><div>These <a href=\"https://www.mayoclinic.org/healthy-lifestyle/nutrition-and-healthy-eating/multimedia/functions-of-water-in-the-body/img-20005799\">dissolve in water</a>, which makes it possible for them to reach different parts of the body.<br><br></div><div><strong>12. It prevents kidney damage</strong></div><div>The kidneys regulate fluid in the body. Insufficient water can lead to <a href=\"https://www.medicalnewstoday.com/articles/154193.php\">kidney stones</a> and other problems.<br><br></div><div><strong>13. It boosts performance during exercise</strong></div><div>Share on Pinterest</div><div>Dehydration during exercise may hinder performance.</div><div>Some scientists have proposed that consuming more water might enhance performance during strenuous activity.</div><div>More research is needed to confirm this, but one <a href=\"https://www.sciencedirect.com/science/article/pii/S2095254615000046\">review found that</a> dehydration reduces performance in activities lasting longer than 30 minutes.</div><div><br><strong>14. Weight loss</strong></div><div>Water may also help with weight loss, if it is consumed instead of sweetened juices and sodas. “Preloading” with water before meals can help prevent overeating by creating a sense of fullness.<br><br></div><div><strong>15. It reduces the chance of a hangover</strong></div><div>When partying, unsweetened soda water with ice and lemon alternated with alcoholic drinks can help prevent overconsumption of alcohol.<br><br></div>', 'uploads/posts/SFIZAkiKTcamCNvmAfWXX3uKYuxSEH7eguVhy4K7.jpeg', 1, 1, '2020-05-22 17:12:25', '2020-05-23 04:08:38', '2020-05-23 04:08:38'),
(9, 'Fifteen benefits of drinking water', '<div>Around <a href=\"https://water.usgs.gov/edu/propertyyou.html\">60 percent</a> of the body is made up of water, and around <a href=\"http://water.usgs.gov/edu/earthhowmuch.html\">71 percent</a> of the planet’s surface is covered by water.</div><div>Perhaps it is the ubiquitous nature of water that means drinking enough each day is not at the top of many people’s lists of priorities.</div>', '<div>To function properly, all the cells and organs of the body need water.</div><div>Here are <a href=\"https://water.usgs.gov/edu/propertyyou.html\">some reasons</a> our body needs water:</div><div><br><strong>1. It lubricates the joints</strong></div><div>Cartilage, found in joints and the disks of the spine, contains around 80 percent water. Long-term <a href=\"https://www.medicalnewstoday.com/articles/153363.php\">dehydration</a> can reduce the joints’ shock-absorbing ability, leading to joint pain.<br><br></div><div><strong>2. It forms saliva and mucus</strong></div><div>Saliva helps us digest our food and keeps the mouth, nose, and eyes moist. This prevents friction and damage. Drinking water also keeps the mouth clean. Consumed instead of sweetened beverages, it can also reduce tooth decay.</div><div><strong>3. It delivers oxygen throughout the body</strong></div><div>Blood is more than 90 percent water, and blood carries oxygen to different parts of the body.</div><div><strong>4. It boosts skin health and beauty<br><br></strong>With dehydration, the skin can become more vulnerable to skin disorders and premature wrinkling.<br><br></div><div><strong>5. It cushions the brain, spinal cord, and other sensitive tissues</strong></div><div>Dehydration can affect brain structure and function. It is also involved in the production of hormones and neurotransmitters. Prolonged dehydration can lead to problems with thinking and reasoning.<br><br></div><div><strong>6. It regulates body temperature</strong></div><div>Water that is stored in the middle layers of the skin <a href=\"https://www.rush.edu/health-wellness/discover-health/how-body-regulates-heat\">comes to the skin’s surface</a> as sweat when the body heats up. As it evaporates, it cools the body. In sport.</div><div>Some scientists have <a href=\"https://www.ncbi.nlm.nih.gov/pubmed/9694412\">suggested that</a> when there is too little water in the body, heat storage increases and the individual is less able to tolerate heat strain.</div><div>Having a lot of water in the body may reduce physical strain if heat <a href=\"https://www.medicalnewstoday.com/articles/145855.php\">stress</a> occurs during exercise. However, more research is needed into these effects.<br><br></div><div><strong>7, The digestive system depends on it</strong><br>The bowel needs water to work properly. Dehydration can lead to digestive problems, <a href=\"https://www.medicalnewstoday.com/articles/150322.php\">constipation</a>, and an overly acidic stomach. This increases the risk of <a href=\"https://www.medicalnewstoday.com/articles/9151.php\">heartburn</a> and stomach ulcers.<br><br></div><div><strong>8. It flushes body waste</strong></div><div>Water is needed in the processes of sweating and removal of urine and feces.<br><br></div><div><strong>9. It helps maintain blood pressure</strong></div><div>A lack of water can cause blood to become thicker, increasing <a href=\"https://www.medicalnewstoday.com/articles/270644.php\">blood pressure</a>.<br><br></div><div><strong>10. The airways need it</strong></div><div>When dehydrated, airways are restricted by the body in an effort to minimize water loss. This can make <a href=\"https://www.medicalnewstoday.com/info/asthma/\">asthma</a> and allergies worse.<br><br></div><div><strong>11. It makes minerals and nutrients accessible</strong></div><div>These <a href=\"https://www.mayoclinic.org/healthy-lifestyle/nutrition-and-healthy-eating/multimedia/functions-of-water-in-the-body/img-20005799\">dissolve in water</a>, which makes it possible for them to reach different parts of the body.<br><br></div><div><strong>12. It prevents kidney damage</strong></div><div>The kidneys regulate fluid in the body. Insufficient water can lead to <a href=\"https://www.medicalnewstoday.com/articles/154193.php\">kidney stones</a> and other problems.<br><br></div><div><strong>13. It boosts performance during exercise</strong></div><div>Share on Pinterest</div><div>Dehydration during exercise may hinder performance.</div><div>Some scientists have proposed that consuming more water might enhance performance during strenuous activity.</div><div>More research is needed to confirm this, but one <a href=\"https://www.sciencedirect.com/science/article/pii/S2095254615000046\">review found that</a> dehydration reduces performance in activities lasting longer than 30 minutes.</div><div><br><strong>14. Weight loss</strong></div><div>Water may also help with weight loss, if it is consumed instead of sweetened juices and sodas. “Preloading” with water before meals can help prevent overeating by creating a sense of fullness.<br><br></div><div><strong>15. It reduces the chance of a hangover</strong></div><div>When partying, unsweetened soda water with ice and lemon alternated with alcoholic drinks can help prevent overconsumption of alcohol.<br><br></div>', 'uploads/posts/JLUdgbvKpUb0iI6TDB5YdmMVLW4hOczy8GgxPMjr.jpeg', 1, 2, '2020-05-22 17:12:44', '2020-05-22 17:12:44', NULL),
(10, 'How is organic food better for your health ?', '<div>It is becoming very necessary to improve the part-run and unhealthy lifestyle of today’s time. Many such diseases, such as irregular daily routine and inorganic food, bring in our body by gripping it and bringing it to such a point where it is difficult to recover from it. If you want to keep your body healthy then definitely include Organic Foods in your diet. With so many benefits you can make your life healthy all the way. Today we are telling you about the countless benefits of consuming organic food. On seeing the properties, the nutritionist is also advising to include it in his diet.</div>', '<div><strong>1. Improves Immune System</strong><br>In order to improve the yield of fruits and vegetables grown in the fields, no pesticides or chemical fertilizers are used. Nor do any kind of chemicals be used to increase or cook them during the time during these fruits and vegetables. Organic foods prepared with this kind of yield are helpful in improving our body’s immune system and various studies conducted in it show that they have actually proved to be very beneficial for the pregnant women and the elderly.</div><div><br>How organic food helps in developing your immune system: When you start consuming organic food, your body’s ability to fight diseases increases. By strengthening the immune system in the body, it eliminates the infections of viruses and bacteria that occur. By which our body is always healthy.</div><div><br><strong>2. Assistant to our environment</strong><br>When a product is good for the environment, it is good for us. Organic farming works to create a positive effect on our ecosystem so that the foods we eat have a good effect on the body. Organic farming is largely based on a double formula; One, it helps in maintaining soil fertility and is also useful for the prevention of pests. With the help of organic farming, we not only get healthy foods but also get rid of environmental problems like water pollution and topsoil degradation.</div><div><br><strong>3. Help also for farmers</strong><br>Organic food If you go directly from the farmer, then you can get a lot of advantage as you can get a fresh product with less cost than the price you get from the market, and the other will also benefit the farmers directly. it happens. By taking direct sale, the profit margin of the farmer increases, they do not have to pay any shares to the third party in direct sales.</div><div><br><strong>4. Organic food is better in taste</strong><br>Have you ever thought about the decreasing quality of your food and the taste? That’s the reason for its being low. This is due to all genetic modifications. Now you might be wondering how organic food tastes can be better? So we tell you about it. The production of organic food is according to the traditional method. It is grown without using any synthetic insecticide, which increases the number of antioxidant elements in the plant. When the ingredients of antioxidant reach higher levels, organic food starts giving healthier results as they are delicious in food mines.</div><div><br></div><div><strong>5. Organic foods are naturally fresh</strong><br>Organic food is very good for our body. Because they do not use any kind of chemical product. Due to the lack of chemical and artificial flavors, natural flavor is high. They do not last long enough to last long.</div><div><br><strong>6. Rich with Antioxidant Elements</strong><br>The main difference between synthetic food and organic food is that biological food is rich in natural properties due to the high levels of antioxidant found in them. Organic food items usually contain high levels of antioxidants, which in turn result in enhancing the immunity of the body, increase organogenic properties. Body fat does not grow. And we are free from many diseases. These food items remain fresh and tender with a good aroma as long as it is safe.</div><div><br><strong>7. Reduces the Chances of Chronic Diseases</strong><br>If you want to keep your lifestyle healthy, eat organic foods. Due to being rich with nutritious ingredients, you help keep you completely healthy. The nutritious ingredients found in Organic Foods help in reducing the levels of the growing diseases in the body. Therefore it is advisable to use it by looking at its usefulness.</div><div><br><strong>8. No insecticide</strong><br>Organic food is natural. And they are not sprayed with any kind of chemical pesticide. It is produced without the use of organic fuels, chemicals, and pesticides. Farmers can produce good crops by using natural means to protect the plants from worms and weeds. Therefore, consuming these foods gives people a chance to see the same diseases.</div><div><br></div><div><strong>Advantages of Insecticide-Free Organic Products:</strong></div><div>Pesticides in crops are used to eliminate the use of pests and weeds, which also make our food poisonous. Most recently, scientific research has considered such foods as the cause of fatal diseases. Eating organic food cannot be possible for you from any lethal disease. Therefore, knowing its benefits, the doctor also recommends using it.</div><div><br><strong>Price of organic product</strong><br>The cost of organic products found in the market is much higher than normal food items, mainly because its demand is high and the yield is low. Usually, most farmers prefer to cultivate traditional methods rather than organic farming. Apart from this, their certification is also expensive and no subsidy is available. But according to your pocket, there are also some low-priced organic food items that can be used with help.</div><div><br>• banana<br>• Blue Barries<br>• Broccoli<br>• potato<br>• tomatoes<br>• Spinach<br>• sugar beets</div><div><br>With the information given by us, you may have learned about its usefulness. If you want to improve your health, then add organic food rich in natural properties to your lifestyle.</div><div><br>Methods of bringing and keeping Organic Foods from the market<br>• See it in the market around you<br>• Buy as much as you need, according to your need. Do not store it and do not keep it.<br>• Try to buy directly from those farmers where it is cultivated.<br>• You can search for low-priced organic food on the internet.<br>• If you want, you can also garden it yourself if you have a suffix.</div>', 'uploads/posts/CxiqLb0knA2LzOUPGyCHfR11amo7bR7g26kQRNt4.jpeg', 1, 5, '2020-05-22 17:18:31', '2020-05-22 17:18:31', NULL),
(11, '4 Science-Backed Health Benefits of Eating Organic', '<div>The organic food industry is a booming business, and with the recent sale of natural-foods giant Whole Foods <a href=\"https://time.com/money/4825394/amazon-buying-whole-foods-change-store-customers-prices/\">to Amazon</a>, it’s expected to grow even larger in the near future. While some consumers buy organic because they believe it’s better for the environment, even more do so for health-related reasons, according to one <a href=\"https://www.comparethemarket.com.au/health-insurance/is-organic-food-worth-it/\">2016 survey</a>.</div>', '<div>What, exactly, are the health benefits of going organic? That depends on who you ask and which studies you consult. But if you do choose to buy organic foods, here are some science-backed bonuses you’re likely to get in return.<br><br></div><div><strong>Fewer pesticides and heavy metals</strong></div><div>Fruits, vegetables and grains labeled organic are grown without the use of most synthetic pesticides or artificial fertilizers. (The National Organic Standard Board does allow <a href=\"https://www.usda.gov/media/blog/2012/01/25/organic-101-allowed-and-prohibited-substances\">some synthetic substances</a> to be used.) While such chemicals have been deemed safe in the quantities used for conventional farming, health experts still warn about the potential harms of repeated exposure.<br><br></div><div>For example, the commonly used herbicide Roundup has been classified as a <a href=\"https://time.com/4711846/roundup-weed-killer-cancer/\">“probable human carcinogen,”</a> and the insecticide chlorpyrifos has been associated with <a href=\"http://fortune.com/2017/07/06/states-sue-epa-dow-pesticide/\">developmental delays</a> in infants. Studies have also suggested that pesticide residues—at levels commonly found in the urine of kids in the U.S.—may <a href=\"http://content.time.com/time/health/article/0,8599,1989564,00.html\">contribute to ADHD prevalence</a>; they’ve also been linked to <a href=\"https://time.com/3763648/pesticides-diet-fertility/\">reduced sperm quality</a> in men.<br><br></div><div>A <a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4141693/\">2014 meta-analysis</a> in the <em>British Journal of Nutrition</em> found that organically grown crops were not only less likely to contain detectable levels of pesticides, but because of differences in fertilization techniques, they were also 48% less likely to test positive for cadmium, a toxic heavy metal that accumulates in the liver and kidneys.<br><strong><br>More healthy fats</strong></div><div>When it comes to meat and milk, organic products can have about 50% <a href=\"http://www.health.com/food/organic-milk-and-meat-have-higher-nutrient-levels-study\">more omega-3 fatty acids</a>, a type of unsaturated healthy fat, than conventionally produced products, according to a 2016 study in the <em>British Journal of Nutrition. </em>Organic milk tested in the study also had less saturated fat than non-organic.</div><div>These differences may come from the way organic livestock is raised, with a grass-fed diet and more time spent outdoors, say the study’s authors. They believe that switching from conventional to organic products would raise consumers’ omega-3 intake without increasing overall calories or saturated fat.<br><br></div><div><strong>No antibiotics or synthetic hormones</strong></div><div>Conventional livestock can be fed antibiotics to protect against illness, making it easier for farmers to raise animals in crowded or unsanitary conditions. The FDA limited the use of certain antibiotics for livestock earlier this year, but <a href=\"http://www.businessinsider.com/fda-rule-livestock-medically-important-antibiotics-2017-1\">loopholes in the legislation</a> still exist. And <a href=\"http://www.health.com/food/9-most-confusing-words-on-chicken-labels\">with the exception of poultry</a>, conventionally raised animals can also be injected with synthetic growth hormones, so they’ll gain weight faster or produce more milk.<br>But traces of these substances can make their way to consumers, says Rolf Halden, professor and director of the Biodesign Center for Environmental Security at Arizona State University. Drug residue is believed to contribute to <a href=\"https://time.com/4545243/antibiotics-food/\">widespread antibiotic resistance</a>, he says, and organic foods—which are produced without antibiotics—“are intrinsically safer in this respect.” Organic meat and dairy also cannot contain synthetic hormones, which have been linked to an <a href=\"http://www.health.com/health/gallery/0,,20471167,00.html#more-about-organic-milk-0\">increased risk of cancer</a>.<br><br></div><div><strong>More antioxidants, in some cases</strong></div><div>In a recent six-year study in the <em>Journal of Agricultural and Food Chemistry</em>, researchers found that organic onions had about a <a href=\"http://pubs.acs.org/doi/abs/10.1021/acs.jafc.7b01352\">20% higher antioxidant content</a> than conventionally grown onions. They also theorized that previous analyses—several of which have <a href=\"http://healthland.time.com/2012/09/04/is-organic-food-more-nutritious-and-healthier-than-conventional-varieties/\">found no difference</a> in conventional versus organic antioxidant levels—may have been thwarted by too-short study periods and confounding variables like weather.</div><div>The research was “very well done,” says Guy Crosby, adjunct associate professor of Nutrition at the Harvard Chan School of Public Health. But he points out that this specific study “takes just one aspect of phytochemicals and shows they can be improved under organic conditions.” The question of whether organic foods are truly more nutritious is still debatable, he adds. “Had the researchers chosen to measure a different vitamin or mineral, they may have found a different result.”</div>', 'uploads/posts/MRq7btGVye0faI7YlLA2ckblcwzAtBNXb8AD5SzC.jpeg', 1, 5, '2020-05-22 17:25:47', '2020-05-22 17:25:47', NULL),
(12, 'May diary', '<div>May diary</div>', '<div>May diary</div>', 'uploads/posts/QtNqq5Wh5ouRPxxwDWWXlw31dji1HWAWIjyVQlXb.jpeg', 1, 2, '2020-05-23 05:09:25', '2020-05-23 05:24:21', '2020-05-23 05:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 3, 1, NULL, NULL),
(7, 3, 3, NULL, NULL),
(8, 3, 5, NULL, NULL),
(9, 3, 6, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 4, 4, NULL, NULL),
(12, 4, 5, NULL, NULL),
(13, 4, 8, NULL, NULL),
(14, 5, 1, NULL, NULL),
(15, 5, 5, NULL, NULL),
(16, 5, 6, NULL, NULL),
(17, 5, 7, NULL, NULL),
(18, 6, 1, NULL, NULL),
(19, 6, 3, NULL, NULL),
(20, 6, 4, NULL, NULL),
(21, 6, 9, NULL, NULL),
(22, 7, 5, NULL, NULL),
(23, 7, 6, NULL, NULL),
(24, 7, 7, NULL, NULL),
(25, 9, 1, NULL, NULL),
(26, 9, 6, NULL, NULL),
(27, 9, 7, NULL, NULL),
(28, 10, 1, NULL, NULL),
(29, 10, 9, NULL, NULL),
(30, 11, 1, NULL, NULL),
(31, 11, 5, NULL, NULL),
(32, 11, 9, NULL, NULL),
(33, 12, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `about`, `picture`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Developer: PHP &MYSQL, Laravel, Wordpress, MVC', 'uploads/profiles/wLzL94v42wVcXSIMrQxL9hQyd4cMobTYWvfh6s0n.webp', 'facebook.com', 'twitter.com', '2020-05-20 10:09:41', '2020-05-20 10:42:50'),
(2, 2, NULL, 'http://gravatar.com/avatar/caf9a0bda02e1ac8e3081c214b48b7b7', NULL, NULL, '2020-05-20 10:56:24', '2020-05-20 10:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'nature', '2020-05-20 12:01:25', '2020-05-20 12:01:25'),
(2, 'animal', '2020-05-20 12:25:54', '2020-05-20 12:25:54'),
(3, 'trees', '2020-05-20 12:26:09', '2020-05-20 12:26:09'),
(4, 'forest', '2020-05-20 12:26:21', '2020-05-20 12:26:21'),
(5, 'planet', '2020-05-20 12:26:30', '2020-05-20 12:26:30'),
(6, 'water', '2020-05-20 12:26:52', '2020-05-20 12:26:52'),
(7, 'mineral', '2020-05-20 12:27:10', '2020-05-20 12:27:10'),
(8, 'flowers', '2020-05-20 12:30:24', '2020-05-20 12:30:24'),
(9, 'foods', '2020-05-20 12:30:33', '2020-05-20 12:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('writer','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'writer',
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `about`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mokhtar Bensaid', 'mokhtar1992bensaid@gmail.com', 'admin', NULL, NULL, '$2y$10$YUw9JOfNuS/m/TfzTCcH6.o.urk3J51S2g7OfjL801Edgadizd2ve', NULL, '2020-05-20 10:09:41', '2020-05-20 10:09:41'),
(2, 'Ali Akbar', 'ali@bensaid.com', 'writer', NULL, NULL, '$2y$10$oiX1pjFZPr17dwrNRHPOOuDqQADvfRvOQ7chX5e6XWCrtiRJnuzEi', NULL, '2020-05-20 10:56:24', '2020-05-20 10:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\Post', 11, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:13:21'),
(2, 'App\\Models\\Post', 11, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:13:55'),
(3, 'App\\Models\\Post', 11, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:21:00'),
(4, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:21:25'),
(5, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:24:31'),
(6, 'App\\Models\\Post', 11, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:25:07'),
(7, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:25:50'),
(8, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:26:06'),
(9, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:26:13'),
(10, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:26:29'),
(11, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:26:43'),
(12, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:27:05'),
(13, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:27:34'),
(14, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:28:18'),
(15, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:28:51'),
(16, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:29:26'),
(17, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:31:12'),
(18, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:32:15'),
(19, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 19:32:22'),
(20, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:10:40'),
(21, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:10:54'),
(22, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:11:54'),
(23, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:13:27'),
(24, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:13:40'),
(25, 'App\\Models\\Post', 4, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:14:31'),
(26, 'App\\Models\\Post', 6, '7g6i6n3JOatUjKv5OBy3h4SdyNlyFSPRqTkMOPNXNXzbcfjWwH87lcmIGz2bZu9L2bVpo1vk0m5n0U2p', NULL, '2020-05-23 20:15:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
