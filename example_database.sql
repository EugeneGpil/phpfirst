-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2019 г., 17:54
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `text`, `categories_id`, `pubdate`, `views`) VALUES
(1, 'Как приготовить суп?', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, '2019-05-19 22:45:40', 2),
(2, 'План питания для похудения', 'test2.png', 'Aliquam, ornare magnis nisl, quam sapien etiam nibh, rutrum. Hendrerit netus mollis fringilla. Hymenaeos justo. Pulvinar turpis aliquam suspendisse conubia sem placerat inceptos venenatis non. Lectus mi venenatis lorem mus consequat diam morbi erat id augue leo rhoncus curae; pulvinar fames eros diam elementum vehicula cubilia. Hendrerit tortor a faucibus, dictumst nonummy sollicitudin vehicula fusce nisi sollicitudin nisl pulvinar Ac blandit non taciti faucibus hendrerit fusce hymenaeos. Blandit potenti conubia nec euismod a mi. Sagittis. Turpis. Habitant porttitor, suscipit hac mollis urna feugiat feugiat tristique orci. Pharetra nec est augue malesuada. Potenti egestas nascetur. Lectus sodales metus, mollis hendrerit.\r\n\r\nElit nascetur lorem nulla mus dapibus convallis a ipsum taciti convallis proin fames. Cum proin sociis hymenaeos primis ipsum luctus volutpat commodo cras laoreet. Fringilla. Neque. Curae; vel. Placerat, pede litora, cum, blandit. Porta mus dui morbi platea ridiculus quis porttitor mollis nunc a porta fames montes ultricies nostra sociosqu aliquam eget hymenaeos tincidunt potenti scelerisque ultrices.\r\n\r\nVenenatis. Consectetuer eros nisi feugiat curabitur, gravida, risus vitae gravida consequat, egestas porttitor. Libero. Quis erat arcu aptent blandit porttitor suspendisse. Nibh nisl nisl ultrices lectus nunc, vehicula sapien vitae semper cum accumsan est, nulla tempor donec sollicitudin ridiculus egestas. Metus mi porta senectus.', 1, '2019-05-19 22:48:18', 65),
(3, 'Купить машину', 'test2.png', 'Rutrum, laoreet congue nullam odio. Est, nostra Mus nonummy. Urna porttitor adipiscing augue nonummy sit Morbi enim platea, convallis torquent faucibus vehicula cursus pretium lacinia lobortis duis ut accumsan sapien Tellus. Egestas elit dictumst massa pretium porta euismod auctor duis dignissim nunc dapibus nibh senectus class morbi blandit Convallis.\r\n\r\nAt quam etiam litora, litora mollis blandit id Leo maecenas cubilia pharetra hac bibendum. Euismod netus ullamcorper ac iaculis tortor. Tellus ad laoreet nibh hac commodo consectetuer, vel turpis mattis enim pellentesque facilisis primis fringilla libero rutrum, risus, congue metus. Ultrices cursus pellentesque tempus penatibus tristique. Metus. Platea nostra Risus et.', 3, '2019-05-19 22:50:22', 67),
(4, 'Hello World', 'test1.jpg', 'Rutrum, laoreet congue nullam odio. Est, nostra Mus nonummy. Urna porttitor adipiscing augue nonummy sit Morbi enim platea, convallis torquent faucibus vehicula cursus pretium lacinia lobortis duis ut accumsan sapien Tellus. Egestas elit dictumst massa pretium porta euismod auctor duis dignissim nunc dapibus nibh senectus class morbi blandit Convallis.\r\n\r\nAt quam etiam litora, litora mollis blandit id Leo maecenas cubilia pharetra hac bibendum. Euismod netus ullamcorper ac iaculis tortor. Tellus ad laoreet nibh hac commodo consectetuer, vel turpis mattis enim pellentesque facilisis primis fringilla libero rutrum, risus, congue metus. Ultrices cursus pellentesque tempus penatibus tristique. Metus. Platea nostra Risus et.', 4, '2019-05-19 22:51:47', 3),
(5, 'Охота снежного леопарда', 'test3.jpg', 'Hac tempus dolor dolor hendrerit semper ridiculus aliquet. Morbi porttitor suscipit conubia iaculis erat maecenas mus erat parturient natoque justo blandit ligula vel curae; scelerisque. Iaculis primis donec ullamcorper. Dapibus. Habitasse. Gravida amet lorem montes suscipit cubilia nostra pede erat sed egestas ultrices tempor mollis taciti erat cras varius non a porta sociis erat tempus auctor in, lectus, vehicula pretium pretium dignissim maecenas tellus penatibus urna platea hac ante nibh mauris. Volutpat non parturient, est elementum nisl vivamus. Odio congue porta nisi, ut euismod leo.\r\n\r\nCommodo curabitur. Magna in odio ac ac consectetuer aenean, sit varius cursus viverra hac commodo aptent. Egestas id commodo Eleifend enim viverra, sollicitudin. Sociis blandit mattis congue venenatis habitant fames urna adipiscing torquent nonummy fames ultricies blandit Cum quam nostra vitae.\r\n\r\nCondimentum, mattis vulputate. Nec in. Tempor natoque amet. Sollicitudin venenatis. Sociosqu consectetuer convallis. Cras accumsan orci nam tempus per nibh metus per consectetuer conubia hymenaeos pretium elementum, imperdiet congue commodo Malesuada arcu Natoque euismod suscipit sociis posuere turpis integer nisi praesent ornare amet pharetra Cras cum id arcu dui felis, ornare convallis, consectetuer natoque nisi rutrum.\r\n\r\nPretium laoreet, parturient duis. Elementum curabitur ipsum ultricies iaculis pretium aenean molestie rhoncus. Vestibulum nostra justo ultrices et iaculis velit dis scelerisque duis mollis taciti feugiat proin. Ridiculus fusce dis elementum etiam Mauris cum.\r\n\r\nNisl suspendisse. Donec magna porttitor gravida venenatis natoque augue suspendisse nostra, rhoncus dui dictumst hac dictum rhoncus, ligula maecenas dolor integer. Est nulla Cubilia morbi ultrices mi vitae phasellus rhoncus pede duis feugiat aenean fringilla vehicula hendrerit eleifend nam sapien maecenas semper nibh gravida. Erat. Mus. Taciti massa imperdiet iaculis Ultrices platea metus id inceptos. Senectus sem, duis sit. Dignissim aptent Parturient varius faucibus habitant orci duis. At nostra odio Ipsum interdum consequat imperdiet Dui quam dapibus dolor posuere sit, proin fusce tellus, dignissim.', 5, '2019-05-19 23:25:41', 50),
(9, 'Как правильно?', 'test3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat suscipit velit, vitae blandit orci luctus gravida. Aliquam eget lorem felis. Aliquam aliquet consectetur orci, a congue nisi lacinia id. Curabitur viverra ligula ac est tincidunt gravida. Sed convallis turpis in efficitur facilisis. Pellentesque venenatis velit vitae sem fringilla, nec tincidunt diam porta. Quisque quis purus et quam suscipit finibus. Nulla sollicitudin luctus neque eu hendrerit. Quisque ac ultricies ante, ac tristique est. Etiam quis risus nec sem ornare sollicitudin. Donec in vulputate eros, ac sagittis libero. Mauris quis turpis nisl. Nullam condimentum sagittis nulla ut placerat. Etiam in tortor elementum, iaculis sapien eget, auctor nunc. Praesent a congue erat. Phasellus at ex quis massa tempus vulputate.\r\n\r\nNunc porta tellus a dolor consectetur, quis gravida turpis iaculis. Quisque ut odio vitae lectus laoreet imperdiet a id elit. Curabitur accumsan vitae libero sit amet commodo. Nam ultrices odio tincidunt tortor condimentum tristique. Duis efficitur facilisis bibendum. Sed sed odio ac enim feugiat tincidunt. Phasellus rutrum varius lectus vitae placerat. Donec sed metus a nulla pretium porttitor. Phasellus ac nisl ipsum. Praesent tristique pellentesque ligula, id cursus leo facilisis non. Proin vel lacus at justo dictum eleifend.\r\n\r\nMorbi non aliquam lorem. Pellentesque faucibus massa non arcu sagittis, quis porttitor sem pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sit amet iaculis justo, eu pellentesque dui. Praesent ac fermentum risus. Aliquam blandit, tellus at varius suscipit, lacus dolor accumsan tellus, sit amet condimentum enim diam id elit. Proin ut mollis quam, vitae bibendum purus. Etiam vitae eleifend mi. Suspendisse tincidunt, lacus sit amet consectetur sodales, urna odio tristique velit, id consequat arcu ex id ex. Quisque scelerisque mauris sit amet tincidunt accumsan. Curabitur et turpis vulputate nibh viverra tincidunt. Proin pellentesque diam vitae mauris fermentum, id iaculis sem vehicula. Aliquam et elit volutpat, ultricies neque eu, efficitur arcu. Suspendisse ultricies lobortis mollis. Fusce sodales, mauris ut dignissim euismod, urna magna tempor metus, eu sollicitudin metus dolor in lectus. Ut ut risus magna.\r\n\r\nInteger eget molestie nibh. Praesent ac sollicitudin leo, ac blandit neque. Curabitur at velit vitae quam dictum malesuada quis eget purus. Donec placerat elementum eros a vulputate. Suspendisse id maximus elit, eget blandit sapien. Etiam ac cursus nisi, vehicula tincidunt nisi. Cras imperdiet mauris non metus porta, ac sollicitudin orci fermentum. Morbi luctus mollis condimentum. Nulla in massa aliquam, elementum quam eu, varius tortor. Nullam a viverra nunc. Sed maximus in ante at cursus.\r\n\r\nAenean gravida posuere leo. Nam tincidunt vulputate lectus, a aliquet elit sodales at. Mauris in accumsan metus, sit amet tempus mauris. Sed cursus turpis sed orci eleifend, nec gravida enim rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie dapibus dolor vel convallis. Cras tincidunt turpis venenatis eros ultricies, ut aliquet leo tempus. Integer interdum rhoncus felis at suscipit. Nullam at consectetur eros. Donec et enim gravida, rhoncus nibh eu, suscipit erat. Sed feugiat nibh dui, et pretium ligula porttitor in. Etiam sit amet ligula malesuada, sagittis elit in, tristique nulla. Donec congue, risus eget mattis venenatis, est metus tincidunt elit, eu cursus felis urna eget dui. Praesent fringilla ac arcu sed feugiat. Suspendisse sit amet augue euismod, tincidunt magna in, sagittis nibh. Curabitur sed magna elit.', 2, '2019-06-03 18:59:06', 187),
(11, 'Длинный заголовок уууууууууууууууууууу ууууууууууууууууууу', 'test2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim leo quis blandit mollis. Donec eu nulla ultrices, dapibus nibh vitae, semper erat. Sed tempor vulputate vehicula. Vestibulum malesuada turpis nec sem pretium pellentesque ut a ante. Maecenas felis arcu, fringilla quis gravida non, varius egestas turpis. Etiam vel lorem felis. Vivamus pharetra, mauris et vulputate rhoncus, sem tellus luctus mauris, sit amet ultricies leo leo vitae nunc. In hac habitasse platea dictumst. Sed sed vestibulum odio. Nam tincidunt felis sem, eget ornare arcu mattis porta. Duis molestie facilisis diam vitae ultrices.\r\n\r\nCras cursus molestie diam, lacinia semper est cursus quis. Morbi condimentum ac metus sit amet egestas. Nam vitae lectus laoreet, elementum tortor sit amet, vulputate libero. Aliquam vel augue in quam euismod laoreet sed ac orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus aliquam justo. Quisque aliquam id elit at egestas.\r\n\r\nPhasellus non varius lorem. Donec pellentesque ante sem, at imperdiet felis posuere ut. Donec vitae dictum enim. Curabitur sit amet malesuada mauris. Duis vel tortor non massa faucibus ullamcorper. Vestibulum ac eros at nunc blandit placerat eget a metus. Ut id scelerisque justo. Quisque vel pretium ligula. Maecenas vitae rutrum odio, nec scelerisque nisi. Nullam et sapien vel purus feugiat interdum ac sit amet turpis. Aliquam et nibh a mi tincidunt posuere.', 4, '2019-06-03 19:01:28', 1003),
(12, 'Пониженное давление', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque ipsum sit amet placerat tempor. In convallis euismod nisi, nec aliquam mi imperdiet et. Sed ac iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas varius vehicula ultrices. Proin quis lectus id elit luctus dignissim. Proin et tellus nisi. Sed faucibus neque eget hendrerit placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec faucibus lacus. Aenean pretium quam magna, nec condimentum metus molestie id. Suspendisse condimentum magna mauris, eu lobortis ex faucibus ac. Integer maximus felis est, at posuere tellus lobortis et. Curabitur sit amet nunc tincidunt, convallis nibh vitae, fringilla lorem.\r\n\r\nMaecenas id tempus lectus, et rutrum felis. Sed nec sem nec diam efficitur pulvinar in ut velit. Praesent at dignissim mauris, eu rhoncus arcu. Proin ullamcorper dapibus enim a porttitor. Aliquam a erat eu massa bibendum ultrices. Fusce nec dolor semper, molestie nisl congue, pulvinar dolor. Vivamus et vestibulum enim, eget mollis dolor. In euismod quam non velit placerat commodo. Nulla consectetur ante quis nisl vestibulum bibendum. Ut orci ante, malesuada molestie sagittis bibendum, efficitur vel lorem. Aenean iaculis, lectus vel semper varius, nisi eros pulvinar sapien, in auctor nisi justo eu quam. Etiam tristique est quis ullamcorper egestas. Cras egestas sem in dui tempus, non rutrum ante posuere. Curabitur augue dui, consequat sed diam sit amet, pharetra feugiat nisl. Maecenas placerat nibh non fringilla sagittis.\r\n\r\nNulla ullamcorper augue tincidunt porta fringilla. Integer auctor feugiat mattis. Vivamus mi ligula, malesuada vitae congue ut, fringilla interdum neque. Donec sed dictum dui. Mauris vehicula turpis tortor, eu interdum turpis accumsan quis. Sed libero lectus, bibendum sit amet ornare sit amet, elementum sed magna. Duis eget ullamcorper mi, id pharetra dui.\r\n\r\nVestibulum elementum lacus at sapien commodo laoreet. Aliquam mi libero, pretium et rutrum id, egestas non mauris. Ut pellentesque et erat eget bibendum. Pellentesque venenatis, ante id vestibulum pulvinar, ante augue feugiat purus, a ultricies nibh tortor commodo purus. Pellentesque quis egestas magna. Curabitur eros quam, mollis quis diam ut, tincidunt elementum ex. Nullam dapibus tortor diam, vitae convallis mauris bibendum quis. Nunc et felis rhoncus, tincidunt sapien quis, ultricies metus. Quisque imperdiet, urna vitae facilisis efficitur, metus nisi aliquet velit, non congue lectus quam nec nisi. Nullam tempor gravida ex, molestie blandit purus consectetur vitae. Nulla convallis ut nulla vitae maximus. Aenean sed luctus odio. Sed lobortis leo quis dapibus iaculis. Aliquam blandit tristique libero et lacinia. Nullam sodales dui velit, id ornare nisi vulputate eget.\r\n\r\nMorbi dapibus ante sed venenatis pulvinar. Ut convallis vulputate quam vitae vehicula. Donec rhoncus, ex ac pharetra porta, velit lacus lobortis turpis, eu pulvinar ante nisl maximus elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam eros libero, convallis a mauris vel, scelerisque volutpat sapien. Maecenas massa ante, condimentum vel metus quis, vestibulum volutpat velit. Sed posuere justo a nibh facilisis sollicitudin. Cras non ex diam. Fusce dapibus sem non eros ornare, sed congue nisl molestie. Proin pharetra libero nec blandit porta. Aenean ac felis non tortor vehicula cursus eu in ipsum. Cras euismod at augue blandit fermentum. Nulla quis diam sed eros eleifend posuere non lacinia dui. Fusce ultrices tincidunt ipsum, vel dignissim nisi lacinia id.\r\n\r\nSuspendisse at aliquet nibh, ac condimentum nisl. Mauris ac ligula sed est pulvinar interdum. Nulla laoreet, velit et condimentum cursus, felis tellus fringilla ex, vitae dictum mi dolor quis lacus. Fusce rutrum id velit vel euismod. Mauris hendrerit nunc ex, eget molestie massa accumsan ut. Morbi iaculis ornare turpis. Vestibulum facilisis a mi nec imperdiet. Pellentesque eu neque at mi vulputate facilisis. Maecenas tincidunt faucibus libero sit amet commodo.\r\n\r\nInteger leo ex, maximus porta consectetur pellentesque, porta ut nibh. Morbi suscipit, nibh in dapibus aliquam, orci nisi gravida arcu, quis commodo mauris massa et nibh. Integer non erat nec enim vestibulum faucibus. Nunc tortor nulla, dictum vitae mi ut, pulvinar bibendum sem. Fusce lacinia semper augue, et porttitor nulla luctus sit amet. Donec et tellus id eros accumsan lobortis. Morbi sed dapibus enim. Maecenas eget est suscipit, ultrices sem et, efficitur quam. Quisque pharetra efficitur nisi, eu congue diam fringilla sit amet. Pellentesque vulputate egestas metus, a tincidunt risus vehicula eu.', 6, '2019-06-03 19:13:07', 156),
(13, 'Путешествие по России', 'test3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus quam libero, eu tristique tellus dignissim eu. Donec quam augue, fermentum nec eleifend eget, accumsan nec justo. Nulla finibus pellentesque neque nec eleifend. Vestibulum magna leo, facilisis nec est quis, hendrerit aliquam massa. Nulla varius elit ac nisi ornare, non feugiat nisl blandit. Donec dapibus, nunc a pharetra tristique, odio odio molestie metus, a facilisis leo diam fermentum turpis. Maecenas euismod pulvinar urna, sed viverra mi condimentum nec. Sed ac nibh ac ligula ornare vehicula. Fusce sit amet diam ultrices, mattis eros vel, ultricies enim. Maecenas vel purus vitae orci maximus egestas eget id arcu. Etiam congue at turpis sed sodales. Nunc commodo neque nunc. Duis blandit pretium pharetra.\r\n\r\nNam posuere, urna id varius mattis, ligula nibh tincidunt magna, quis bibendum lorem lorem ut mauris. Duis fringilla arcu eu mi maximus, eget hendrerit mi pretium. Phasellus ultricies condimentum lorem quis elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vel nulla venenatis, aliquet ipsum a, accumsan felis. Duis interdum posuere felis, in dignissim ligula sollicitudin sit amet. Phasellus scelerisque ex nec lectus luctus, et dapibus purus auctor. Morbi maximus rhoncus tortor. Donec varius dui porta tellus eleifend, eu pretium mauris lacinia. Suspendisse at finibus neque. Nam scelerisque mollis sem vitae dignissim.\r\n\r\nMorbi vitae convallis lacus. Sed eleifend, risus eget fringilla sagittis, risus odio gravida dolor, sed suscipit lorem risus eget nulla. Pellentesque consectetur molestie ligula sit amet tristique. Donec eleifend lectus ac condimentum dictum. Quisque nec porta tortor. Curabitur nulla mauris, congue sit amet turpis vel, ultrices fringilla dolor. Nullam metus nibh, fringilla nec ante in, eleifend fringilla ipsum. Quisque odio tortor, porta eu orci at, sagittis eleifend enim. Aliquam eu velit non neque varius finibus. Fusce lacinia lorem non felis egestas fermentum. Donec suscipit, lectus quis vestibulum auctor, ipsum massa hendrerit libero, vitae ultrices velit erat id tortor. Nam vestibulum metus et ipsum sodales laoreet nec sit amet nisl. Proin sed varius felis.\r\n\r\nPhasellus maximus ligula ut neque pulvinar bibendum. Curabitur in erat facilisis, mattis enim sit amet, convallis arcu. Sed convallis laoreet risus vitae auctor. Fusce eget ex maximus, tincidunt nisl et, interdum nisl. Suspendisse et nibh dui. Nunc sit amet vehicula nibh. Proin vestibulum viverra est. Vivamus sollicitudin egestas eros eget egestas. Nunc accumsan ipsum vitae nibh euismod condimentum. Sed rhoncus elit nec quam ultrices, a viverra elit pellentesque. Donec nec ipsum fermentum, malesuada orci eu, egestas lectus. Proin a elementum sem. Pellentesque ut urna venenatis, ultrices metus et, faucibus risus.\r\n\r\nNunc eu nisl in quam vehicula pharetra vel quis velit. Sed quis auctor sem. Vivamus nisl dui, dignissim id elit nec, aliquet porta metus. Suspendisse eu risus porta, porttitor magna quis, dignissim lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fermentum volutpat nisl ut finibus. Proin a lectus suscipit, malesuada ex id, tincidunt dui. Duis enim ante, rhoncus at est vitae, accumsan faucibus urna. Duis rutrum consequat diam, quis venenatis leo ultricies dapibus. Aliquam congue lacinia nulla, eget rhoncus ex rhoncus vitae. Nulla porttitor lobortis arcu, id pulvinar metus euismod eu.\r\n\r\nDonec efficitur congue ultrices. Donec consectetur diam tellus, et vestibulum mi gravida ac. In ac faucibus lectus. Morbi non augue condimentum, pharetra ligula et, aliquet tellus. Integer nec est vitae nulla tempus faucibus. Vestibulum vehicula ut felis sollicitudin condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed scelerisque ex sit amet libero commodo, quis molestie lacus finibus. Ut dapibus nunc eget purus eleifend, at venenatis mi condimentum. Mauris elit lacus, mollis sed tellus eget, efficitur mollis nunc. Ut luctus faucibus justo sed sagittis.', 3, '2019-06-03 19:14:03', 119),
(14, 'Программирование на листочке', 'test2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt enim ante, vitae rutrum libero tincidunt ut. Integer vestibulum commodo dui. Vestibulum fringilla quam metus, id porttitor nunc consequat at. Suspendisse ut erat hendrerit, viverra lectus at, dignissim lacus. Integer felis erat, egestas vitae suscipit at, lobortis eu purus. Pellentesque suscipit lectus orci, a elementum turpis varius non. Ut eros libero, aliquam nec massa eget, condimentum fringilla elit. Vestibulum cursus ligula nec tortor vehicula, non vestibulum leo sodales. Vivamus elementum neque est. Donec tempus felis lectus, non facilisis lacus imperdiet nec. Duis molestie leo in enim dignissim venenatis. Donec scelerisque magna massa, et scelerisque nisi viverra et. Nam mollis dapibus mi, accumsan finibus dolor consequat eu. Donec ornare semper sapien, eget pharetra nisl pretium pretium. Nam feugiat, tellus non sodales semper, nisi sem vehicula augue, eu finibus nunc elit ac dui.\r\n\r\nDuis ut sapien id ex suscipit sodales. Praesent a quam elementum, commodo sapien eu, tempor dui. Suspendisse varius, magna vitae cursus posuere, eros sem condimentum ligula, at varius nisl nulla a magna. Pellentesque euismod non dolor eu finibus. Nulla in lectus at lectus pharetra aliquet. Ut facilisis laoreet est non commodo. Nullam rhoncus, tellus nec venenatis accumsan, quam augue auctor neque, nec convallis arcu felis ac ante. Morbi semper ullamcorper ultricies. Nam venenatis lectus a luctus convallis.', 1, '2019-06-03 19:14:54', 4545),
(15, 'Кому доверить свои сбережения?', 'test1.jpg', '<p class=\"main-content__article-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet pulvinar dui. Nam gravida neque egestas cursus bibendum. Nam luctus convallis efficitur. Vestibulum aliquet risus ac mi egestas, in malesuada felis rutrum. Maecenas ultrices faucibus nulla nec ullamcorper. Vestibulum vehicula lacinia nunc. Mauris pretium congue nunc sit amet dignissim. Etiam commodo sem eget tempus pellentesque.</p>\r\n\r\n<p class=\"main-content__article-text\">Donec eleifend turpis eros, sed iaculis odio mollis facilisis. Ut dapibus sem quis sagittis aliquam. Quisque iaculis semper ultricies. Mauris sit amet mi dolor. Praesent vitae nunc et magna bibendum sodales. Nulla commodo blandit tortor nec malesuada. Phasellus rutrum consectetur dui, eget finibus ex consectetur eget. Sed non orci vel est viverra convallis eu efficitur ex. Duis feugiat nisi mi, sit amet eleifend lorem suscipit vel. Quisque eget quam id ligula iaculis molestie id sed lectus.</p>\r\n\r\n<p class=\"main-content__article-text\">Donec ultricies felis ut ex molestie sollicitudin. Nam et tellus id enim dapibus venenatis. Nam sed maximus augue, commodo luctus velit. Cras non turpis id erat scelerisque pellentesque quis eu justo. Aenean in maximus felis, nec facilisis velit. Nulla semper eros dui, at tempus sapien aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce commodo velit eros, ac elementum quam auctor a. Aenean vel massa condimentum, cursus massa ac, ornare mauris.</p>\r\n\r\n<p class=\"main-content__article-text\">Nulla pellentesque lobortis diam, non facilisis risus porttitor a. Curabitur sed ligula faucibus, pretium diam vitae, bibendum nulla. Etiam at euismod sapien, non aliquam diam. Maecenas consectetur feugiat commodo. Cras a ullamcorper libero. Etiam sit amet metus in felis elementum elementum. Proin interdum hendrerit ipsum sit amet bibendum. Nullam arcu odio, iaculis at bibendum laoreet, interdum posuere massa. Maecenas eget accumsan dui.</p>\r\n\r\n<p class=\"main-content__article-text\">Etiam ut maximus ante. Curabitur venenatis ultricies facilisis. In eget efficitur massa. Aliquam at consequat diam. Nunc aliquet sem eget enim hendrerit aliquam. Vivamus cursus at felis ut lobortis. Nulla fringilla nibh at porta eleifend. Nulla molestie dolor nulla, vel commodo tortor aliquet sed. Etiam id ex vulputate, ornare ligula quis, mattis nisi. Suspendisse ultrices sem id tellus faucibus, a ultricies orci vehicula. Nullam lacinia enim dolor, iaculis ornare metus sollicitudin at.</p>\r\n\r\n<p class=\"main-content__article-text\">Duis nec ligula eget nunc gravida facilisis vel vitae metus. Nulla vel porttitor augue, eu sodales metus. In laoreet, mi nec euismod tempus, mauris diam commodo tellus, vitae cursus urna ipsum sed urna. Praesent semper eu nunc non dignissim. Integer id rhoncus metus. Ut ac leo pulvinar, tempor nibh a, ullamcorper arcu. Curabitur fringilla orci eros, sed pulvinar enim congue eget. Aenean condimentum efficitur justo a imperdiet. Vivamus posuere congue volutpat. Phasellus dictum dictum velit, vel tincidunt libero ultricies in. Morbi quam neque, rutrum nec neque eget, semper molestie tortor. Sed sit amet lobortis lorem, id efficitur augue. Aliquam erat volutpat. Etiam porttitor magna sit amet odio pulvinar, id mattis massa laoreet. Curabitur faucibus commodo turpis vitae varius.</p>\r\n\r\n<p class=\"main-content__article-text\">Vestibulum magna ante, interdum in dictum congue, fermentum eu lectus. Duis ultricies ac sapien ac molestie. Sed id mi ante. Quisque semper congue justo, in finibus arcu. Nullam varius porta mattis. Pellentesque porta condimentum rhoncus. Morbi arcu nibh, sodales sed neque vel, fermentum lacinia diam. Mauris ultrices imperdiet quam, fermentum pellentesque libero lobortis vitae. Duis quis rutrum magna. Vestibulum mollis elit volutpat tellus semper, ac eleifend sem rhoncus. Mauris eleifend turpis pretium massa eleifend semper. Maecenas laoreet leo vel imperdiet euismod.</p>\r\n\r\n<p class=\"main-content__article-text\">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus varius augue sed leo fringilla, et interdum purus congue. Cras sed leo sit amet neque placerat efficitur. Suspendisse vitae enim eu nibh accumsan placerat vitae ut enim. Integer ornare, tellus nec dictum commodo, mi enim posuere est, non fringilla mauris dui id ipsum. Aenean et sodales magna. Nam dictum viverra orci in pellentesque. Aenean elementum ipsum ac urna condimentum, in luctus urna imperdiet. Fusce iaculis ornare sapien eu sollicitudin. Donec efficitur sem in condimentum ultricies.</p>', 5, '2019-06-03 19:15:57', 676),
(16, 'Теперь жизнь станет легче!', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisi orci, laoreet eget cursus quis, malesuada ut turpis. Sed orci augue, aliquam fringilla lorem aliquet, sodales vehicula sem. Curabitur odio dolor, ultricies eget aliquam et, mollis sed libero. Cras a eleifend velit. Sed eget lorem malesuada, auctor dui ut, mollis eros. Mauris quis rhoncus risus. Etiam ac nisi mi. Fusce et interdum tellus. Donec cursus in felis eu tempus. Integer quis cursus nibh, nec ultricies tellus. Donec nulla arcu, ultricies at lacinia non, laoreet a arcu. Fusce ornare elit vel felis ultrices, faucibus pharetra lorem sodales. Proin sagittis fringilla metus sit amet elementum. Phasellus eget magna et nisi vulputate consequat nec consectetur enim.\r\n\r\nAliquam luctus sodales est, vitae ullamcorper odio pulvinar eget. Pellentesque mattis enim mollis, vulputate tellus sed, venenatis nisl. Morbi semper sapien eu sem scelerisque, a interdum enim accumsan. Nam accumsan eu justo vel pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget velit in nibh efficitur tempor non et est. Nulla non aliquet diam. Donec eget rutrum mauris. Nam auctor tortor sed ex placerat, non porttitor turpis ultrices. Aliquam pharetra sed lectus nec aliquet. Phasellus ultricies lectus at est efficitur, nec aliquet est rutrum. Integer egestas ultrices imperdiet. Nunc iaculis rutrum libero eget rutrum.', 4, '2019-06-06 17:39:00', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'спорт'),
(2, 'кулинария'),
(3, 'автомобили'),
(4, 'программирование'),
(5, 'природа'),
(6, 'безопасность');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `pubdate`, `article_id`) VALUES
(1, 'Vladimir', 'Классный получится суп', '2019-05-19 23:11:12', 1),
(2, 'Mihail', 'Очень интересная статья!', '2019-06-04 22:41:03', 3),
(3, 'Alex', 'Ввауу аыфсмюы укц, выафщщшмю ывасмчю...', '2019-06-04 22:42:11', 5),
(4, 'Alex', 'Dcvv.hehf af? weficvz dfsaf. fsdoerfdf!dsf dfc,cv wowvs,cv kc', '2019-06-04 22:43:04', 9),
(5, 'Mihail', 'Qcvv.sdithgmcsdl, dfwoetic.s, fsazxv\'ewodf, sdfQsfacv, ievcv..d af ewfhgvc? fsaweihuoi S dfweijgc.zx!', '2019-06-04 22:44:03', 11),
(6, 'Vladimir', 'sdfcv wr2wt24vcls ASDef2fijvczm ;afSAF / Fkd faoi222223 sv.,cv/ dkfaiwesclxlxc v,./ DSajifnvcmx,', '2019-06-04 22:44:51', 15),
(7, 'Alex', 'Интересная статья. Узнал много нового.', '2019-06-04 22:45:33', 5),
(8, 'Mihail', 'ddfeefe efdffsxc wqwwfsvcvcxv ryfbbgjvb  egdbcvb eredbvncxg tddbc wga vcb c 34 gdb cvbg wbdb cbyt vv', '2019-06-04 22:46:08', 13),
(9, 'Vladimir', 'ddkgen.x wefois.xcz,mv pif sadvx/cz.v 320w flkd. xc,v842sdklxc .mvxh34t uwfm.,sd vnxvu34rt wwdsds wdsczx rcvd  qwqdasda 832sdnxv24t02rhwmfds sf 289sfdv nz 9wjk,sdnz9829rhfjkd u0 ', '2019-06-04 22:46:49', 4),
(10, 'Alex', 'dsfsavcz v er8tqt4 fsvcxz,mvxvgw38t tex,mcv nv 89e 47qtlvxcmvxds fsf 470svcxzv8p 4ljsdzv mcxz834 sdlkjv zc p893oslx,mv v89yt lsjxvjzx8y934 y8slvm,xcgoe2 8ulvxzv42 oilszlcv', '2019-06-04 22:47:31', 2),
(12, 'Vladimir', 'Kjfwo? G iefd, eihgcvcx, ewifhsdf! Dfhcvoil, dsfcxvu, dsfweif dcvxnpq.', '2019-06-06 08:19:00', 9),
(25, 'Alex', 'Ничего не понятно! Объясните конкретнее!', '2019-06-06 18:08:22', 3),
(26, 'Alex', 'Ничего не понятно! Объясните конкретнее!', '2019-06-06 18:10:10', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `title`, `text`, `image`) VALUES
(1, 'об авторе', '<h2 class=\"main-content__article-text-main-headline\">You</h2>\r\n            <p class=\"main-content__article-text\">Upon seas. Upon waters don\'t upon was. Sea bearing fill Behold be, fourth be fourth It sixth unto also i give hath great made is the creeping. You\'re of fill night day given rule tree give every sixth moved. Fowl days to Winged. Creeping earth set fruit multiply may. I there, place for good created stars.</p>\r\n\r\n            <h3 class=\"main-content__article-text-headline\">Yielding</h3>\r\n            <p class=\"main-content__article-text\">Image forth shall place shall won\'t and, isn\'t tree bearing don\'t upon moveth set. Their subdue own moving morning herb own you\'re midst life so female the, sea deep beast. Good second made to Spirit seasons beginning. Grass fruitful cattle. Kind their evening one them said was fourth deep. Abundantly beginning brought gathered.</p>\r\n\r\n            <h3 class=\"main-content__article-text-headline\">Two Replenish Fish Fifth</h3>\r\n            <p class=\"main-content__article-text\">Whales multiply there. Second Is first moving make unto said creature fourth multiply have whales dominion dry from you\'re life meat, greater fill don\'t dominion. To greater forth may stars sixth so male first darkness dry creature yielding deep upon Called moved all Fly.</p>\r\n\r\n            <p class=\"main-content__article-text\">Over after can\'t spirit their two, which which days were rule, all great image creature very, wherein man itself shall is second morning divided green under divide hath divide you\'re tree replenish male is i heaven deep days, may. Deep third was. Good i. Said seed creeping two fill saying creeping earth.</p>\r\n\r\n            <h3 class=\"main-content__article-text-headline\">Grass Divide Male Heaven His It Forth Second</h3>\r\n            <p class=\"main-content__article-text\">Day subdue moved form meat fill fly spirit there living dry created it bring you face his every. Beast upon so appear creature make that Midst cattle good creepeth lights land fill created. Winged midst won\'t god. Subdue. Fowl greater hath Fifth to signs deep together great after light divide made, deep abundantly. Whales subdue Darkness first darkness greater waters divide and, darkness unto moveth place given bearing them beast kind herb gathering years us can\'t lights tree. Fifth is cattle us there night make greater us fruit also hath every very creepeth evening whose.</p>', 'test1.jpg'),
(2, 'правообладателям', '<h2 class=\"main-content__article-text-main-headline\">You</h2>\r\n            <p class=\"main-content__article-text\">Upon seas. Upon waters don\'t upon was. Sea bearing fill Behold be, fourth be fourth It sixth unto also i give hath great made is the creeping. You\'re of fill night day given rule tree give every sixth moved. Fowl days to Winged. Creeping earth set fruit multiply may. I there, place for good created stars.</p>\r\n\r\n            <h3 class=\"main-content__article-text-headline\">Yielding</h3>\r\n            <p class=\"main-content__article-text\">Image forth shall place shall won\'t and, isn\'t tree bearing don\'t upon moveth set. Their subdue own moving morning herb own you\'re midst life so female the, sea deep beast. Good second made to Spirit seasons beginning. Grass fruitful cattle. Kind their evening one them said was fourth deep. Abundantly beginning brought gathered.</p>\r\n\r\n            <h3 class=\"main-content__article-text-headline\">Two Replenish Fish Fifth</h3>\r\n            <p class=\"main-content__article-text\">Whales multiply there. Second Is first moving make unto said creature fourth multiply have whales dominion dry from you\'re life meat, greater fill don\'t dominion. To greater forth may stars sixth so male first darkness dry creature yielding deep upon Called moved all Fly.</p>\r\n\r\n            <p class=\"main-content__article-text\">Over after can\'t spirit their two, which which days were rule, all great image creature very, wherein man itself shall is second morning divided green under divide hath divide you\'re tree replenish male is i heaven deep days, may. Deep third was. Good i. Said seed creeping two fill saying creeping earth.</p>\r\n\r\n            \r\n            ', 'test2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `email`, `avatar`) VALUES
('Alex', '2', 'Alex@gmail.com', 'avatar1.jpg'),
('Mihail', '1', 'Mihail@gmail.com', 'avatar2.jpg'),
('Vladimir', '3', 'Vladimir@gmail.com', 'avatar3.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
