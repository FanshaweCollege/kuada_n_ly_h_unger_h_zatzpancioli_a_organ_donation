-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 05:38 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE IF NOT EXISTS `tbl_story` (
  `story_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_title` varchar(75) CHARACTER SET utf8 NOT NULL,
  `story_author` varchar(75) CHARACTER SET utf8 NOT NULL,
  `story_img` varchar(75) CHARACTER SET utf8 NOT NULL DEFAULT 'default-story.jpg',
  `story_text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `story_title`, `story_author`, `story_img`, `story_text`) VALUES
(7, 'A New Heart for Eddie’s Abuela', 'Amalia', 'story6.jpg', 'Amalia and her husband Eduardo are very busy; they have four grandchildren to watch after school until their parents can pick them up. The couple dishes out the fresh fruit snacks and gets the kids started on their homework.Amalia, a hard worker all her life, was in her 50s when she began to feel weak, tired and frequently out of breath. Doctors diagnosed her problem; she had heart disease, and would need to be put on the transplant waiting list.\r\nHer condition worsened, with several serious incidents. Ultimately, she was moved into the hospital to wait for a donor organ. “I knew I was in my final days,” says Amalia.Then, just in time, she received a heart transplant. But the gift was hard for her to accept. “I knew for me, it was a new life. But for some other family, there had been a great sadness.”Amalia remains grateful for her new heart.\r\nWhile she hasn’t been able to meet or thank her donor’s family, Amalia placed a memorial to her donor in the garden of their home. “I just wanted a way to remember and say ‘thank you, for giving me new life’.”\r\nToday Amalia tries to honor her donor by helping others. She volunteers at her church; she even donated her hair for cancer victims. But most of all, her family is grateful to have their “Abuela” back.  If not for her heart transplant, Amalia would have missed watching her family grow up and her sons launch businesses. She wouldn’t have been there for the return of her son, a fighter pilot, from Afghanistan—or to see the new grandchild on the way.It is a reminder of just how many lives are transformed when someone donates the gift of life.'),
(8, 'A New Life at Full Throttle', 'George', 'story3.jpg', 'A car enthusiast and organ recipient, George put his passions into full throttle when he customized a \'67 Chevy Impala dedicated to his second chance at life.\r\n\r\nIn order to promote organ and tissue donation in his community, George spent more than 2 years perfecting the car, named “Second Life,” which is painted blue and green and adorned with the Donate Life logo. The number 213 is painted on the back of the car, representing that George was the 213th patient to receive a heart transplant at University Medical Center in Tucson.\r\n\r\nGeorge contracted rheumatic fever as a child, damaging his heart. After graduating from high school, he was placed on the national transplant waiting list. Less than a year later, in December 1989, he received his new heart.\r\n\r\nTen years later, he was diagnosed with renal failure and spent 3 years on dialysis before receiving a kidney transplant in March 2003.'),
(9, 'Saving a Young Woman Named America', 'America', 'story5.jpg', 'America stands in the kitchen of her family\'s restaurant, helping her mother make tortillas and fresh salsa in the short break before customers start arriving for dinner. Out in the dining area, America\'s father and younger brother get ready for a quick bite to eat.\r\n\r\nThey chat happily together about plans for the future. America\'s older sister is due to have a baby any day now. And America is about to finish her last semester of college and get her business degree.\r\n\r\nJust a few years ago, this scene would have been almost unimaginable. America\'s first kidney transplant—which she had received at age 13—had begun to fail. She became very sick and her parents were frightened for their daughter\'s life.\r\n\r\n\"They were so worried for me,\" says America. \"They were starting their restaurant, and I know they kept their concerns about the business to themselves. I was too sick to do anything to help. It was hard on all of us. I never knew if I\'d have another day with my family.\"\r\n\r\nAmerica had been on the transplant waiting list for four years. She and her family all knew that there was a chance she wouldn\'t receive a second kidney transplant in time. As they drove to a transplant center for one of her regular checkups, they discussed dialysis again and what to do if the worst happened. But while they were at the center, America\'s phone rang. A kidney was available, right then and there.\r\n\r\n\"We went for a checkup and came home with a kidney. It was a miracle,\" says Luz, America\'s mother.\r\n\r\nToday, America is healthy and back to helping at her family’s restaurant. She wants to put her degree to good use, returning someday to help the family business prosper. America\'s regular customers, her church family, and her community are thrilled to have her back.\r\n\r\nAmerica, who is bilingual, often talks to others on the transplant waiting list. \"It\'s an honor for me to talk about my transplant,\" she says. \"Maybe I can lighten the load that they carry inside.\" \r\n\r\nAmerica\'s family speaks out, too, about donation. \"It\'s important for people to know about organ donation and signing up. A lot of people don\'t understand,\" says Alfonso, America\'s father. \"I\'ve been a registered organ donor since I got my driver\'s license. And I call on all of us to help one another and save lives.\"\r\n\r\n\"This kidney is really many gifts in one,\" says America. \"The most beautiful gift is that I can share the love of my family for one more day.\"'),
(10, 'Getting a Second Chance', 'Chris', 'story1.jpg', 'Chris, just back from a morning run, bounces his young son on his knee, and helps his wife and child get out the door in the morning rush.You’d never suspect that a few years ago, Chris was extremely ill, on dialysis, and desperately in need of a kidney transplant. He’d originally sought a doctor’s advice because of depression and fatigue that he couldn’t overcome—and the diagnosis of kidney failure took him by surprise. “They told me I had end-stage renal disease, and that basically, if I didn’t do dialysis, and if I didn’t get a transplant, I was going to die.”Chris spent 2 years on the waiting list, until at last the call came. They had found a match. “I started packing, I called my mom, and my siblings and said ‘I’m going to get a kidney!” he remembers.  After the successful transplant, Chris paid serious attention to his overall health, and had to take a number of medications. He began to wonder if exercise could help him cut back on his medications. That’s when he found a true passion in running. “I started running, and found out I could compete. The 5Ks became 10Ks, became marathons, became triathlons, became Ironman(R) competitions...” Today, Chris has medals and plaques from dozens of his events, and can add “Ironman” to his name three times.Every day is a pleasure to Chris. “Your well-being changes from loss of hope...to hope...to better times ahead,” he says. “I married my wife, I had a son. And the little things? Nothing bothers me. I’m alive!”'),
(11, 'A New Heart Brings a Promising New Life', 'Brittany', 'story2.jpg', 'Today, Brittany is a confident young girl with goals and promise, thanks to the gift of life. But her young life has been filled with challenges.\r\n\r\nSince birth, Brittany has experienced many serious health issues. Born with a congenital heart defect, she had open-heart surgery at the age of two, and again at the age of four.\r\n\r\nThe surgeries had limited success and her health continued to deteriorate. By the time Brittany was eight years old, she would often become tired, without enough energy to make it through the day. Doctors told her family that Brittany’s heart was enlarged and she would need a transplant to survive. Brittany was placed on the national transplant waiting list for a heart.\r\n\r\nWhen she was nine, Brittany was taken to the hospital for a cauterization procedure, however, she ended up being admitted for six months, waiting for a donor heart. While she was there, a donor heart became available. A 13-year-old girl had passed away after being hit by a car.\r\n\r\nBrittany does not know her donor’s family. However, if she had the opportunity to speak with her donor, she would say, “Thank you. I know that I am not just reaching my goals, but your goals as well.”\r\n\r\nBrittany comments that her family is very proud of her. “Any situation where they have to introduce me or my story, they love it,” says Brittany.'),
(12, 'Young Ian\'s Journey to Happiness', 'Ian', 'story4.jpg', 'Ian was born with a rare liver condition called biliary atresia, with no known cause or cure. He had his first surgery at eight weeks old, with the hope of keeping him from needing a liver transplant until he was older and stronger. Unfortunately, the surgery failed and he went into liver failure. He was then listed for a transplant in December 2010 at seven months old. Never in a million years did we think we\'d be put into a situation where our son would need a life-saving liver transplant. It was terrifying to be told there was a real possibility that he would become too sick to undergo a transplant, that the wait for the perfect liver would be undetermined or possibly never happen. At our initial assessment, we were told that being listed during Christmas time could be promising for a quicker match for Ian. But unfortunately, Christmas passed without much hope. By the middle of January he started becoming sicker and we were preparing ourselves for the possibility he would not make it to transplant. At the end of January, my phone rang, and after the first ring, I knew it was the big call we were waiting for. I answered and the woman on the other end had an offer of a liver for Ian. This began our crazy roller coaster ride of transplant and hope.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(8, 'Helen', 'MasterBuilder', '$2y$10$VZRhd/5bSxiFbLkDsbmvt.8jRqtV7pV2Z4mZ0swJnC8BWTMFdy7YS', 'master@builder.ca', '2019-03-25 21:47:23', 'no'),
(9, 'd', 'd', '$2y$10$WYINxuLTCc57hFl6eeXX8e..zawkPztbxihS.qyMWYybMnWbjhGSG', 'dake@dake.ca', '2019-03-25 21:49:34', 'no'),
(10, 'Admin', 'admin', '123', 'admin@gmail.com', '2019-03-26 05:28:14', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
