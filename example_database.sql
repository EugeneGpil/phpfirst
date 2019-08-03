-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 03 2019 г., 09:26
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
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `image`, `text`, `categories_id`, `pubdate`, `views`) VALUES
(1, 'Как приготовить суп?', 'how_to_cook_soup', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, '2019-05-19 22:45:40', 1561),
(2, 'План питания для похудения', 'diet_plan_for_weight_loss', 'test2.png', 'Aliquam, ornare magnis nisl, quam sapien etiam nibh, rutrum. Hendrerit netus mollis fringilla. Hymenaeos justo. Pulvinar turpis aliquam suspendisse conubia sem placerat inceptos venenatis non. Lectus mi venenatis lorem mus consequat diam morbi erat id augue leo rhoncus curae; pulvinar fames eros diam elementum vehicula cubilia. Hendrerit tortor a faucibus, dictumst nonummy sollicitudin vehicula fusce nisi sollicitudin nisl pulvinar Ac blandit non taciti faucibus hendrerit fusce hymenaeos. Blandit potenti conubia nec euismod a mi. Sagittis. Turpis. Habitant porttitor, suscipit hac mollis urna feugiat feugiat tristique orci. Pharetra nec est augue malesuada. Potenti egestas nascetur. Lectus sodales metus, mollis hendrerit.\r\n\r\nElit nascetur lorem nulla mus dapibus convallis a ipsum taciti convallis proin fames. Cum proin sociis hymenaeos primis ipsum luctus volutpat commodo cras laoreet. Fringilla. Neque. Curae; vel. Placerat, pede litora, cum, blandit. Porta mus dui morbi platea ridiculus quis porttitor mollis nunc a porta fames montes ultricies nostra sociosqu aliquam eget hymenaeos tincidunt potenti scelerisque ultrices.\r\n\r\nVenenatis. Consectetuer eros nisi feugiat curabitur, gravida, risus vitae gravida consequat, egestas porttitor. Libero. Quis erat arcu aptent blandit porttitor suspendisse. Nibh nisl nisl ultrices lectus nunc, vehicula sapien vitae semper cum accumsan est, nulla tempor donec sollicitudin ridiculus egestas. Metus mi porta senectus.', 1, '2019-05-19 22:48:18', 1548),
(3, 'Купить машину', 'buy_a_car', 'test2.png', 'Rutrum, laoreet congue nullam odio. Est, nostra Mus nonummy. Urna porttitor adipiscing augue nonummy sit Morbi enim platea, convallis torquent faucibus vehicula cursus pretium lacinia lobortis duis ut accumsan sapien Tellus. Egestas elit dictumst massa pretium porta euismod auctor duis dignissim nunc dapibus nibh senectus class morbi blandit Convallis.\r\n\r\nAt quam etiam litora, litora mollis blandit id Leo maecenas cubilia pharetra hac bibendum. Euismod netus ullamcorper ac iaculis tortor. Tellus ad laoreet nibh hac commodo consectetuer, vel turpis mattis enim pellentesque facilisis primis fringilla libero rutrum, risus, congue metus. Ultrices cursus pellentesque tempus penatibus tristique. Metus. Platea nostra Risus et.', 3, '2019-05-19 22:50:22', 1552),
(4, 'Hello World', 'hello_world', 'test1.jpg', 'Rutrum, laoreet congue nullam odio. Est, nostra Mus nonummy. Urna porttitor adipiscing augue nonummy sit Morbi enim platea, convallis torquent faucibus vehicula cursus pretium lacinia lobortis duis ut accumsan sapien Tellus. Egestas elit dictumst massa pretium porta euismod auctor duis dignissim nunc dapibus nibh senectus class morbi blandit Convallis.\r\n\r\nAt quam etiam litora, litora mollis blandit id Leo maecenas cubilia pharetra hac bibendum. Euismod netus ullamcorper ac iaculis tortor. Tellus ad laoreet nibh hac commodo consectetuer, vel turpis mattis enim pellentesque facilisis primis fringilla libero rutrum, risus, congue metus. Ultrices cursus pellentesque tempus penatibus tristique. Metus. Platea nostra Risus et.', 4, '2019-05-19 22:51:47', 1487),
(5, 'Охота снежного леопарда', 'snow_leopard_hunting', 'test3.jpg', 'Hac tempus dolor dolor hendrerit semper ridiculus aliquet. Morbi porttitor suscipit conubia iaculis erat maecenas mus erat parturient natoque justo blandit ligula vel curae; scelerisque. Iaculis primis donec ullamcorper. Dapibus. Habitasse. Gravida amet lorem montes suscipit cubilia nostra pede erat sed egestas ultrices tempor mollis taciti erat cras varius non a porta sociis erat tempus auctor in, lectus, vehicula pretium pretium dignissim maecenas tellus penatibus urna platea hac ante nibh mauris. Volutpat non parturient, est elementum nisl vivamus. Odio congue porta nisi, ut euismod leo.\r\n\r\nCommodo curabitur. Magna in odio ac ac consectetuer aenean, sit varius cursus viverra hac commodo aptent. Egestas id commodo Eleifend enim viverra, sollicitudin. Sociis blandit mattis congue venenatis habitant fames urna adipiscing torquent nonummy fames ultricies blandit Cum quam nostra vitae.\r\n\r\nCondimentum, mattis vulputate. Nec in. Tempor natoque amet. Sollicitudin venenatis. Sociosqu consectetuer convallis. Cras accumsan orci nam tempus per nibh metus per consectetuer conubia hymenaeos pretium elementum, imperdiet congue commodo Malesuada arcu Natoque euismod suscipit sociis posuere turpis integer nisi praesent ornare amet pharetra Cras cum id arcu dui felis, ornare convallis, consectetuer natoque nisi rutrum.\r\n\r\nPretium laoreet, parturient duis. Elementum curabitur ipsum ultricies iaculis pretium aenean molestie rhoncus. Vestibulum nostra justo ultrices et iaculis velit dis scelerisque duis mollis taciti feugiat proin. Ridiculus fusce dis elementum etiam Mauris cum.\r\n\r\nNisl suspendisse. Donec magna porttitor gravida venenatis natoque augue suspendisse nostra, rhoncus dui dictumst hac dictum rhoncus, ligula maecenas dolor integer. Est nulla Cubilia morbi ultrices mi vitae phasellus rhoncus pede duis feugiat aenean fringilla vehicula hendrerit eleifend nam sapien maecenas semper nibh gravida. Erat. Mus. Taciti massa imperdiet iaculis Ultrices platea metus id inceptos. Senectus sem, duis sit. Dignissim aptent Parturient varius faucibus habitant orci duis. At nostra odio Ipsum interdum consequat imperdiet Dui quam dapibus dolor posuere sit, proin fusce tellus, dignissim.', 5, '2019-05-19 23:25:41', 1533),
(9, 'Как правильно?', 'how_correct', 'test3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat suscipit velit, vitae blandit orci luctus gravida. Aliquam eget lorem felis. Aliquam aliquet consectetur orci, a congue nisi lacinia id. Curabitur viverra ligula ac est tincidunt gravida. Sed convallis turpis in efficitur facilisis. Pellentesque venenatis velit vitae sem fringilla, nec tincidunt diam porta. Quisque quis purus et quam suscipit finibus. Nulla sollicitudin luctus neque eu hendrerit. Quisque ac ultricies ante, ac tristique est. Etiam quis risus nec sem ornare sollicitudin. Donec in vulputate eros, ac sagittis libero. Mauris quis turpis nisl. Nullam condimentum sagittis nulla ut placerat. Etiam in tortor elementum, iaculis sapien eget, auctor nunc. Praesent a congue erat. Phasellus at ex quis massa tempus vulputate.\r\n\r\nNunc porta tellus a dolor consectetur, quis gravida turpis iaculis. Quisque ut odio vitae lectus laoreet imperdiet a id elit. Curabitur accumsan vitae libero sit amet commodo. Nam ultrices odio tincidunt tortor condimentum tristique. Duis efficitur facilisis bibendum. Sed sed odio ac enim feugiat tincidunt. Phasellus rutrum varius lectus vitae placerat. Donec sed metus a nulla pretium porttitor. Phasellus ac nisl ipsum. Praesent tristique pellentesque ligula, id cursus leo facilisis non. Proin vel lacus at justo dictum eleifend.\r\n\r\nMorbi non aliquam lorem. Pellentesque faucibus massa non arcu sagittis, quis porttitor sem pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sit amet iaculis justo, eu pellentesque dui. Praesent ac fermentum risus. Aliquam blandit, tellus at varius suscipit, lacus dolor accumsan tellus, sit amet condimentum enim diam id elit. Proin ut mollis quam, vitae bibendum purus. Etiam vitae eleifend mi. Suspendisse tincidunt, lacus sit amet consectetur sodales, urna odio tristique velit, id consequat arcu ex id ex. Quisque scelerisque mauris sit amet tincidunt accumsan. Curabitur et turpis vulputate nibh viverra tincidunt. Proin pellentesque diam vitae mauris fermentum, id iaculis sem vehicula. Aliquam et elit volutpat, ultricies neque eu, efficitur arcu. Suspendisse ultricies lobortis mollis. Fusce sodales, mauris ut dignissim euismod, urna magna tempor metus, eu sollicitudin metus dolor in lectus. Ut ut risus magna.\r\n\r\nInteger eget molestie nibh. Praesent ac sollicitudin leo, ac blandit neque. Curabitur at velit vitae quam dictum malesuada quis eget purus. Donec placerat elementum eros a vulputate. Suspendisse id maximus elit, eget blandit sapien. Etiam ac cursus nisi, vehicula tincidunt nisi. Cras imperdiet mauris non metus porta, ac sollicitudin orci fermentum. Morbi luctus mollis condimentum. Nulla in massa aliquam, elementum quam eu, varius tortor. Nullam a viverra nunc. Sed maximus in ante at cursus.\r\n\r\nAenean gravida posuere leo. Nam tincidunt vulputate lectus, a aliquet elit sodales at. Mauris in accumsan metus, sit amet tempus mauris. Sed cursus turpis sed orci eleifend, nec gravida enim rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie dapibus dolor vel convallis. Cras tincidunt turpis venenatis eros ultricies, ut aliquet leo tempus. Integer interdum rhoncus felis at suscipit. Nullam at consectetur eros. Donec et enim gravida, rhoncus nibh eu, suscipit erat. Sed feugiat nibh dui, et pretium ligula porttitor in. Etiam sit amet ligula malesuada, sagittis elit in, tristique nulla. Donec congue, risus eget mattis venenatis, est metus tincidunt elit, eu cursus felis urna eget dui. Praesent fringilla ac arcu sed feugiat. Suspendisse sit amet augue euismod, tincidunt magna in, sagittis nibh. Curabitur sed magna elit.', 2, '2019-06-03 18:59:06', 1670),
(11, 'Длинный заголовок уууууууууууууууууууу ууууууууууууууууууу', 'long_title_uuuuuuuuuuuuuuuuuuuuu_uuuuuuuuuuuuuuuuuuuu', 'test2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim leo quis blandit mollis. Donec eu nulla ultrices, dapibus nibh vitae, semper erat. Sed tempor vulputate vehicula. Vestibulum malesuada turpis nec sem pretium pellentesque ut a ante. Maecenas felis arcu, fringilla quis gravida non, varius egestas turpis. Etiam vel lorem felis. Vivamus pharetra, mauris et vulputate rhoncus, sem tellus luctus mauris, sit amet ultricies leo leo vitae nunc. In hac habitasse platea dictumst. Sed sed vestibulum odio. Nam tincidunt felis sem, eget ornare arcu mattis porta. Duis molestie facilisis diam vitae ultrices.\r\n\r\nCras cursus molestie diam, lacinia semper est cursus quis. Morbi condimentum ac metus sit amet egestas. Nam vitae lectus laoreet, elementum tortor sit amet, vulputate libero. Aliquam vel augue in quam euismod laoreet sed ac orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus aliquam justo. Quisque aliquam id elit at egestas.\r\n\r\nPhasellus non varius lorem. Donec pellentesque ante sem, at imperdiet felis posuere ut. Donec vitae dictum enim. Curabitur sit amet malesuada mauris. Duis vel tortor non massa faucibus ullamcorper. Vestibulum ac eros at nunc blandit placerat eget a metus. Ut id scelerisque justo. Quisque vel pretium ligula. Maecenas vitae rutrum odio, nec scelerisque nisi. Nullam et sapien vel purus feugiat interdum ac sit amet turpis. Aliquam et nibh a mi tincidunt posuere.', 4, '2019-06-03 19:01:28', 2488),
(12, 'Пониженное давление', 'low_pressure', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque ipsum sit amet placerat tempor. In convallis euismod nisi, nec aliquam mi imperdiet et. Sed ac iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas varius vehicula ultrices. Proin quis lectus id elit luctus dignissim. Proin et tellus nisi. Sed faucibus neque eget hendrerit placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec faucibus lacus. Aenean pretium quam magna, nec condimentum metus molestie id. Suspendisse condimentum magna mauris, eu lobortis ex faucibus ac. Integer maximus felis est, at posuere tellus lobortis et. Curabitur sit amet nunc tincidunt, convallis nibh vitae, fringilla lorem.\r\n\r\nMaecenas id tempus lectus, et rutrum felis. Sed nec sem nec diam efficitur pulvinar in ut velit. Praesent at dignissim mauris, eu rhoncus arcu. Proin ullamcorper dapibus enim a porttitor. Aliquam a erat eu massa bibendum ultrices. Fusce nec dolor semper, molestie nisl congue, pulvinar dolor. Vivamus et vestibulum enim, eget mollis dolor. In euismod quam non velit placerat commodo. Nulla consectetur ante quis nisl vestibulum bibendum. Ut orci ante, malesuada molestie sagittis bibendum, efficitur vel lorem. Aenean iaculis, lectus vel semper varius, nisi eros pulvinar sapien, in auctor nisi justo eu quam. Etiam tristique est quis ullamcorper egestas. Cras egestas sem in dui tempus, non rutrum ante posuere. Curabitur augue dui, consequat sed diam sit amet, pharetra feugiat nisl. Maecenas placerat nibh non fringilla sagittis.\r\n\r\nNulla ullamcorper augue tincidunt porta fringilla. Integer auctor feugiat mattis. Vivamus mi ligula, malesuada vitae congue ut, fringilla interdum neque. Donec sed dictum dui. Mauris vehicula turpis tortor, eu interdum turpis accumsan quis. Sed libero lectus, bibendum sit amet ornare sit amet, elementum sed magna. Duis eget ullamcorper mi, id pharetra dui.\r\n\r\nVestibulum elementum lacus at sapien commodo laoreet. Aliquam mi libero, pretium et rutrum id, egestas non mauris. Ut pellentesque et erat eget bibendum. Pellentesque venenatis, ante id vestibulum pulvinar, ante augue feugiat purus, a ultricies nibh tortor commodo purus. Pellentesque quis egestas magna. Curabitur eros quam, mollis quis diam ut, tincidunt elementum ex. Nullam dapibus tortor diam, vitae convallis mauris bibendum quis. Nunc et felis rhoncus, tincidunt sapien quis, ultricies metus. Quisque imperdiet, urna vitae facilisis efficitur, metus nisi aliquet velit, non congue lectus quam nec nisi. Nullam tempor gravida ex, molestie blandit purus consectetur vitae. Nulla convallis ut nulla vitae maximus. Aenean sed luctus odio. Sed lobortis leo quis dapibus iaculis. Aliquam blandit tristique libero et lacinia. Nullam sodales dui velit, id ornare nisi vulputate eget.\r\n\r\nMorbi dapibus ante sed venenatis pulvinar. Ut convallis vulputate quam vitae vehicula. Donec rhoncus, ex ac pharetra porta, velit lacus lobortis turpis, eu pulvinar ante nisl maximus elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam eros libero, convallis a mauris vel, scelerisque volutpat sapien. Maecenas massa ante, condimentum vel metus quis, vestibulum volutpat velit. Sed posuere justo a nibh facilisis sollicitudin. Cras non ex diam. Fusce dapibus sem non eros ornare, sed congue nisl molestie. Proin pharetra libero nec blandit porta. Aenean ac felis non tortor vehicula cursus eu in ipsum. Cras euismod at augue blandit fermentum. Nulla quis diam sed eros eleifend posuere non lacinia dui. Fusce ultrices tincidunt ipsum, vel dignissim nisi lacinia id.\r\n\r\nSuspendisse at aliquet nibh, ac condimentum nisl. Mauris ac ligula sed est pulvinar interdum. Nulla laoreet, velit et condimentum cursus, felis tellus fringilla ex, vitae dictum mi dolor quis lacus. Fusce rutrum id velit vel euismod. Mauris hendrerit nunc ex, eget molestie massa accumsan ut. Morbi iaculis ornare turpis. Vestibulum facilisis a mi nec imperdiet. Pellentesque eu neque at mi vulputate facilisis. Maecenas tincidunt faucibus libero sit amet commodo.\r\n\r\nInteger leo ex, maximus porta consectetur pellentesque, porta ut nibh. Morbi suscipit, nibh in dapibus aliquam, orci nisi gravida arcu, quis commodo mauris massa et nibh. Integer non erat nec enim vestibulum faucibus. Nunc tortor nulla, dictum vitae mi ut, pulvinar bibendum sem. Fusce lacinia semper augue, et porttitor nulla luctus sit amet. Donec et tellus id eros accumsan lobortis. Morbi sed dapibus enim. Maecenas eget est suscipit, ultrices sem et, efficitur quam. Quisque pharetra efficitur nisi, eu congue diam fringilla sit amet. Pellentesque vulputate egestas metus, a tincidunt risus vehicula eu.', 6, '2019-06-03 19:13:07', 1642),
(13, 'Путешествие по России', 'travel_to_russia', 'test3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus quam libero, eu tristique tellus dignissim eu. Donec quam augue, fermentum nec eleifend eget, accumsan nec justo. Nulla finibus pellentesque neque nec eleifend. Vestibulum magna leo, facilisis nec est quis, hendrerit aliquam massa. Nulla varius elit ac nisi ornare, non feugiat nisl blandit. Donec dapibus, nunc a pharetra tristique, odio odio molestie metus, a facilisis leo diam fermentum turpis. Maecenas euismod pulvinar urna, sed viverra mi condimentum nec. Sed ac nibh ac ligula ornare vehicula. Fusce sit amet diam ultrices, mattis eros vel, ultricies enim. Maecenas vel purus vitae orci maximus egestas eget id arcu. Etiam congue at turpis sed sodales. Nunc commodo neque nunc. Duis blandit pretium pharetra.\r\n\r\nNam posuere, urna id varius mattis, ligula nibh tincidunt magna, quis bibendum lorem lorem ut mauris. Duis fringilla arcu eu mi maximus, eget hendrerit mi pretium. Phasellus ultricies condimentum lorem quis elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vel nulla venenatis, aliquet ipsum a, accumsan felis. Duis interdum posuere felis, in dignissim ligula sollicitudin sit amet. Phasellus scelerisque ex nec lectus luctus, et dapibus purus auctor. Morbi maximus rhoncus tortor. Donec varius dui porta tellus eleifend, eu pretium mauris lacinia. Suspendisse at finibus neque. Nam scelerisque mollis sem vitae dignissim.\r\n\r\nMorbi vitae convallis lacus. Sed eleifend, risus eget fringilla sagittis, risus odio gravida dolor, sed suscipit lorem risus eget nulla. Pellentesque consectetur molestie ligula sit amet tristique. Donec eleifend lectus ac condimentum dictum. Quisque nec porta tortor. Curabitur nulla mauris, congue sit amet turpis vel, ultrices fringilla dolor. Nullam metus nibh, fringilla nec ante in, eleifend fringilla ipsum. Quisque odio tortor, porta eu orci at, sagittis eleifend enim. Aliquam eu velit non neque varius finibus. Fusce lacinia lorem non felis egestas fermentum. Donec suscipit, lectus quis vestibulum auctor, ipsum massa hendrerit libero, vitae ultrices velit erat id tortor. Nam vestibulum metus et ipsum sodales laoreet nec sit amet nisl. Proin sed varius felis.\r\n\r\nPhasellus maximus ligula ut neque pulvinar bibendum. Curabitur in erat facilisis, mattis enim sit amet, convallis arcu. Sed convallis laoreet risus vitae auctor. Fusce eget ex maximus, tincidunt nisl et, interdum nisl. Suspendisse et nibh dui. Nunc sit amet vehicula nibh. Proin vestibulum viverra est. Vivamus sollicitudin egestas eros eget egestas. Nunc accumsan ipsum vitae nibh euismod condimentum. Sed rhoncus elit nec quam ultrices, a viverra elit pellentesque. Donec nec ipsum fermentum, malesuada orci eu, egestas lectus. Proin a elementum sem. Pellentesque ut urna venenatis, ultrices metus et, faucibus risus.\r\n\r\nNunc eu nisl in quam vehicula pharetra vel quis velit. Sed quis auctor sem. Vivamus nisl dui, dignissim id elit nec, aliquet porta metus. Suspendisse eu risus porta, porttitor magna quis, dignissim lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fermentum volutpat nisl ut finibus. Proin a lectus suscipit, malesuada ex id, tincidunt dui. Duis enim ante, rhoncus at est vitae, accumsan faucibus urna. Duis rutrum consequat diam, quis venenatis leo ultricies dapibus. Aliquam congue lacinia nulla, eget rhoncus ex rhoncus vitae. Nulla porttitor lobortis arcu, id pulvinar metus euismod eu.\r\n\r\nDonec efficitur congue ultrices. Donec consectetur diam tellus, et vestibulum mi gravida ac. In ac faucibus lectus. Morbi non augue condimentum, pharetra ligula et, aliquet tellus. Integer nec est vitae nulla tempus faucibus. Vestibulum vehicula ut felis sollicitudin condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed scelerisque ex sit amet libero commodo, quis molestie lacus finibus. Ut dapibus nunc eget purus eleifend, at venenatis mi condimentum. Mauris elit lacus, mollis sed tellus eget, efficitur mollis nunc. Ut luctus faucibus justo sed sagittis.', 3, '2019-06-03 19:14:03', 1605),
(14, 'Программирование на листочке', 'programming_on_a_piece_of_paper', 'test2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt enim ante, vitae rutrum libero tincidunt ut. Integer vestibulum commodo dui. Vestibulum fringilla quam metus, id porttitor nunc consequat at. Suspendisse ut erat hendrerit, viverra lectus at, dignissim lacus. Integer felis erat, egestas vitae suscipit at, lobortis eu purus. Pellentesque suscipit lectus orci, a elementum turpis varius non. Ut eros libero, aliquam nec massa eget, condimentum fringilla elit. Vestibulum cursus ligula nec tortor vehicula, non vestibulum leo sodales. Vivamus elementum neque est. Donec tempus felis lectus, non facilisis lacus imperdiet nec. Duis molestie leo in enim dignissim venenatis. Donec scelerisque magna massa, et scelerisque nisi viverra et. Nam mollis dapibus mi, accumsan finibus dolor consequat eu. Donec ornare semper sapien, eget pharetra nisl pretium pretium. Nam feugiat, tellus non sodales semper, nisi sem vehicula augue, eu finibus nunc elit ac dui.\r\n\r\nDuis ut sapien id ex suscipit sodales. Praesent a quam elementum, commodo sapien eu, tempor dui. Suspendisse varius, magna vitae cursus posuere, eros sem condimentum ligula, at varius nisl nulla a magna. Pellentesque euismod non dolor eu finibus. Nulla in lectus at lectus pharetra aliquet. Ut facilisis laoreet est non commodo. Nullam rhoncus, tellus nec venenatis accumsan, quam augue auctor neque, nec convallis arcu felis ac ante. Morbi semper ullamcorper ultricies. Nam venenatis lectus a luctus convallis.', 1, '2019-06-03 19:14:54', 6043),
(15, 'Кому доверить свои сбережения?', 'who_to_entrust_your_savings', 'test1.jpg', '<p class=\"main-content__article-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet pulvinar dui. Nam gravida neque egestas cursus bibendum. Nam luctus convallis efficitur. Vestibulum aliquet risus ac mi egestas, in malesuada felis rutrum. Maecenas ultrices faucibus nulla nec ullamcorper. Vestibulum vehicula lacinia nunc. Mauris pretium congue nunc sit amet dignissim. Etiam commodo sem eget tempus pellentesque.</p>\r\n\r\n<p class=\"main-content__article-text\">Donec eleifend turpis eros, sed iaculis odio mollis facilisis. Ut dapibus sem quis sagittis aliquam. Quisque iaculis semper ultricies. Mauris sit amet mi dolor. Praesent vitae nunc et magna bibendum sodales. Nulla commodo blandit tortor nec malesuada. Phasellus rutrum consectetur dui, eget finibus ex consectetur eget. Sed non orci vel est viverra convallis eu efficitur ex. Duis feugiat nisi mi, sit amet eleifend lorem suscipit vel. Quisque eget quam id ligula iaculis molestie id sed lectus.</p>\r\n\r\n<p class=\"main-content__article-text\">Donec ultricies felis ut ex molestie sollicitudin. Nam et tellus id enim dapibus venenatis. Nam sed maximus augue, commodo luctus velit. Cras non turpis id erat scelerisque pellentesque quis eu justo. Aenean in maximus felis, nec facilisis velit. Nulla semper eros dui, at tempus sapien aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce commodo velit eros, ac elementum quam auctor a. Aenean vel massa condimentum, cursus massa ac, ornare mauris.</p>\r\n\r\n<p class=\"main-content__article-text\">Nulla pellentesque lobortis diam, non facilisis risus porttitor a. Curabitur sed ligula faucibus, pretium diam vitae, bibendum nulla. Etiam at euismod sapien, non aliquam diam. Maecenas consectetur feugiat commodo. Cras a ullamcorper libero. Etiam sit amet metus in felis elementum elementum. Proin interdum hendrerit ipsum sit amet bibendum. Nullam arcu odio, iaculis at bibendum laoreet, interdum posuere massa. Maecenas eget accumsan dui.</p>\r\n\r\n<p class=\"main-content__article-text\">Etiam ut maximus ante. Curabitur venenatis ultricies facilisis. In eget efficitur massa. Aliquam at consequat diam. Nunc aliquet sem eget enim hendrerit aliquam. Vivamus cursus at felis ut lobortis. Nulla fringilla nibh at porta eleifend. Nulla molestie dolor nulla, vel commodo tortor aliquet sed. Etiam id ex vulputate, ornare ligula quis, mattis nisi. Suspendisse ultrices sem id tellus faucibus, a ultricies orci vehicula. Nullam lacinia enim dolor, iaculis ornare metus sollicitudin at.</p>\r\n\r\n<p class=\"main-content__article-text\">Duis nec ligula eget nunc gravida facilisis vel vitae metus. Nulla vel porttitor augue, eu sodales metus. In laoreet, mi nec euismod tempus, mauris diam commodo tellus, vitae cursus urna ipsum sed urna. Praesent semper eu nunc non dignissim. Integer id rhoncus metus. Ut ac leo pulvinar, tempor nibh a, ullamcorper arcu. Curabitur fringilla orci eros, sed pulvinar enim congue eget. Aenean condimentum efficitur justo a imperdiet. Vivamus posuere congue volutpat. Phasellus dictum dictum velit, vel tincidunt libero ultricies in. Morbi quam neque, rutrum nec neque eget, semper molestie tortor. Sed sit amet lobortis lorem, id efficitur augue. Aliquam erat volutpat. Etiam porttitor magna sit amet odio pulvinar, id mattis massa laoreet. Curabitur faucibus commodo turpis vitae varius.</p>\r\n\r\n<p class=\"main-content__article-text\">Vestibulum magna ante, interdum in dictum congue, fermentum eu lectus. Duis ultricies ac sapien ac molestie. Sed id mi ante. Quisque semper congue justo, in finibus arcu. Nullam varius porta mattis. Pellentesque porta condimentum rhoncus. Morbi arcu nibh, sodales sed neque vel, fermentum lacinia diam. Mauris ultrices imperdiet quam, fermentum pellentesque libero lobortis vitae. Duis quis rutrum magna. Vestibulum mollis elit volutpat tellus semper, ac eleifend sem rhoncus. Mauris eleifend turpis pretium massa eleifend semper. Maecenas laoreet leo vel imperdiet euismod.</p>\r\n\r\n<p class=\"main-content__article-text\">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus varius augue sed leo fringilla, et interdum purus congue. Cras sed leo sit amet neque placerat efficitur. Suspendisse vitae enim eu nibh accumsan placerat vitae ut enim. Integer ornare, tellus nec dictum commodo, mi enim posuere est, non fringilla mauris dui id ipsum. Aenean et sodales magna. Nam dictum viverra orci in pellentesque. Aenean elementum ipsum ac urna condimentum, in luctus urna imperdiet. Fusce iaculis ornare sapien eu sollicitudin. Donec efficitur sem in condimentum ultricies.</p>', 5, '2019-06-03 19:15:57', 2162),
(16, 'Теперь жизнь станет легче!', 'now_life_will_be_easier', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisi orci, laoreet eget cursus quis, malesuada ut turpis. Sed orci augue, aliquam fringilla lorem aliquet, sodales vehicula sem. Curabitur odio dolor, ultricies eget aliquam et, mollis sed libero. Cras a eleifend velit. Sed eget lorem malesuada, auctor dui ut, mollis eros. Mauris quis rhoncus risus. Etiam ac nisi mi. Fusce et interdum tellus. Donec cursus in felis eu tempus. Integer quis cursus nibh, nec ultricies tellus. Donec nulla arcu, ultricies at lacinia non, laoreet a arcu. Fusce ornare elit vel felis ultrices, faucibus pharetra lorem sodales. Proin sagittis fringilla metus sit amet elementum. Phasellus eget magna et nisi vulputate consequat nec consectetur enim.\r\n\r\nAliquam luctus sodales est, vitae ullamcorper odio pulvinar eget. Pellentesque mattis enim mollis, vulputate tellus sed, venenatis nisl. Morbi semper sapien eu sem scelerisque, a interdum enim accumsan. Nam accumsan eu justo vel pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget velit in nibh efficitur tempor non et est. Nulla non aliquet diam. Donec eget rutrum mauris. Nam auctor tortor sed ex placerat, non porttitor turpis ultrices. Aliquam pharetra sed lectus nec aliquet. Phasellus ultricies lectus at est efficitur, nec aliquet est rutrum. Integer egestas ultrices imperdiet. Nunc iaculis rutrum libero eget rutrum.', 4, '2019-06-06 17:39:00', 1510),
(17, 'Сколько стоит?', 'how_much_is', 'test1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum placerat pulvinar. Nulla nec porttitor ipsum. In bibendum nunc id nunc luctus, a luctus libero pellentesque. Suspendisse scelerisque varius leo, non malesuada nunc faucibus vitae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed ullamcorper diam ac efficitur imperdiet. Donec eu metus felis. Vestibulum eu accumsan orci. Mauris posuere ac ipsum a pellentesque. Proin tempor odio aliquam mollis lobortis. Phasellus scelerisque consectetur tincidunt. Nam aliquam nibh ac nibh malesuada ultrices.\r\n\r\nFusce rhoncus ut elit nec varius. Vestibulum dictum egestas ultrices. Cras vel sollicitudin lacus. Nullam mollis arcu vitae magna commodo euismod. Pellentesque quis dui nibh. Etiam condimentum nibh at nunc aliquet elementum. Fusce bibendum tempus posuere. Phasellus eu luctus massa. In luctus nulla orci, eget lacinia justo bibendum vitae.\r\n\r\nDuis ut lacus vitae dolor dignissim pretium in nec risus. In hendrerit arcu id metus varius, nec imperdiet orci laoreet. Donec quis nulla id turpis venenatis rhoncus. Donec varius tempus leo, vel feugiat erat ultrices nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque dictum eros ut ipsum varius, in iaculis nisi facilisis. In consectetur ligula aliquam commodo ullamcorper. In vel purus nec elit sodales interdum. Quisque congue lacinia fermentum. Donec in urna et augue sagittis posuere. Sed blandit vel felis sed tempus. Donec luctus in diam eget placerat. Integer suscipit vestibulum justo. Nullam quis purus odio. Ut id erat ac diam interdum imperdiet.\r\n\r\nDonec dui odio, efficitur tristique lorem non, pharetra tristique magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eget semper mi, at fermentum lacus. Cras in justo vitae lorem scelerisque lobortis non at quam. Donec ultrices arcu ac lacus dapibus suscipit. Ut aliquet in urna vitae luctus. Cras at sagittis libero. Ut quis tristique arcu. Phasellus semper justo nunc, et venenatis nulla pellentesque id. Nullam consectetur orci non ultrices fringilla.\r\n\r\nUt et efficitur tortor, quis fermentum augue. Etiam pharetra posuere urna ac pellentesque. Fusce viverra urna nec magna lacinia vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In congue eget lacus nec fringilla. Pellentesque ornare dui dolor, at iaculis odio mattis et. Maecenas non pharetra eros. Nulla mattis elit a porttitor rhoncus. Sed nec erat sit amet massa facilisis laoreet non nec nisi. Pellentesque tellus sapien, condimentum quis eleifend et, suscipit in dui. Morbi sed magna convallis, iaculis mauris sit amet, aliquam turpis. Nulla vestibulum, sem quis imperdiet luctus, turpis ipsum tincidunt neque, eu euismod massa risus nec est.', 4, '2019-07-05 17:31:31', 1372),
(18, 'Куда пойти?', 'where_to_go', 'test3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ut leo ut accumsan. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam blandit, ipsum eget pretium accumsan, felis nisi tincidunt libero, eget volutpat tellus lectus at lorem. In malesuada placerat nulla sed condimentum. Praesent porta sapien eget eros tincidunt ullamcorper. Cras vel diam vel magna feugiat tincidunt ut eu lectus. Curabitur justo mauris, ornare ac eleifend eu, interdum sed ex. Sed vitae fermentum arcu.\r\n\r\nVivamus ut ligula nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin nec lectus nisl. Nulla ac cursus ligula. Morbi ipsum nibh, condimentum et nunc ut, laoreet facilisis erat. Sed posuere sapien mauris, sit amet pretium lorem vehicula in. Vestibulum pellentesque erat a lorem tempor, dictum faucibus elit euismod. Sed lacinia, massa eu suscipit luctus, lectus tellus laoreet enim, in porttitor velit augue ac sem.\r\n\r\nMaecenas vel sapien cursus, fermentum elit at, mollis urna. Aliquam viverra pretium est, hendrerit venenatis elit finibus vitae. Fusce egestas nisl enim, id mollis leo bibendum non. Curabitur eget tempus justo, sit amet dictum neque. In pellentesque neque nec arcu maximus, at dapibus velit ullamcorper. Nulla facilisi. Nam rutrum eros a posuere interdum. Aliquam erat volutpat. Vestibulum ut finibus mi, a facilisis odio. Nam id urna consectetur, finibus justo quis, dignissim nisi. Phasellus ac semper mauris. Etiam ligula odio, gravida ac orci quis, cursus consectetur tellus. Proin finibus faucibus turpis vel elementum. Nullam vehicula ante sit amet metus sollicitudin commodo.', 4, '2019-07-05 17:33:28', 1372);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`, `url`) VALUES
(1, 'спорт', 'sport'),
(2, 'кулинария', 'cooking'),
(3, 'автомобили', 'cars'),
(4, 'программирование', 'programming'),
(5, 'природа', 'nature'),
(6, 'безопасность', 'security');

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
(26, 'Alex', 'Ничего не понятно! Объясните конкретнее!', '2019-06-06 18:10:10', 3),
(27, 'Vladimir', 'sss', '2019-06-10 22:43:53', 14),
(28, 'Vladimir', 'вв', '2019-06-12 20:17:22', 1),
(29, 'Mihail', 'Меня зовут Михаил', '2019-06-12 20:17:47', 1),
(30, 'Mihail', 'Меня зовут Михаил', '2019-06-12 20:19:22', 1),
(31, 'Mihail', 'Меня зовут Михаил', '2019-06-12 20:19:26', 1),
(32, 'Alex', 'е', '2019-06-12 20:19:35', 1),
(33, 'Alex', 'е', '2019-06-12 20:20:01', 1),
(34, 'Alex', 'е', '2019-06-12 20:20:18', 1),
(35, 'Alex', 'е', '2019-06-12 20:21:34', 1),
(36, 'Vladimir', 'ы', '2019-06-12 20:21:39', 1),
(37, 'Vladimir', 'ы', '2019-06-12 20:21:41', 1),
(38, 'Vladimir', 'ы', '2019-06-12 20:21:42', 1),
(39, 'Vladimir', 'цццц', '2019-06-12 20:22:15', 1),
(40, 'Vladimir', 'цццц', '2019-06-12 20:22:20', 1),
(41, 'Vladimir', 'цццц', '2019-06-12 20:36:59', 1),
(42, 'Vladimir', 'цццц', '2019-06-12 20:37:27', 1),
(43, 'Vladimir', 'цццц', '2019-06-12 20:37:40', 1),
(44, 'Vladimir', 'цццц', '2019-06-12 20:38:34', 1),
(45, 'Vladimir', 'ff', '2019-06-12 21:23:56', 1),
(46, 'Vladimir', 'ff', '2019-06-12 21:24:28', 1),
(47, 'Vladimir', 'Кто здесь?', '2019-06-12 21:27:38', 1),
(48, 'Mihail', 'вау', '2019-07-04 08:33:22', 9),
(49, 'Mihail', 'вау', '2019-07-04 08:33:37', 9),
(50, 'Mihail', 'вау', '2019-07-04 08:34:18', 9),
(51, 'Mihail', 'вау', '2019-07-04 08:34:44', 9),
(52, 'Mihail', 'вау', '2019-07-04 08:36:51', 9),
(53, 'Mihail', 'вау', '2019-07-04 08:36:59', 9),
(54, 'Vladimir', 'ццц', '2019-07-04 10:13:52', 16),
(55, 'Vladimir', 'ццц', '2019-07-04 10:13:57', 16),
(56, 'Vladimir', 'ццц', '2019-07-04 10:14:15', 16),
(57, 'Alex', 'йййй', '2019-07-04 10:17:22', 16),
(58, 'Alex', 'йййй', '2019-07-04 10:17:59', 16),
(59, 'Vladimir', 'ыввыв', '2019-07-04 10:24:19', 16),
(60, 'Vladimir', 'ыввыв', '2019-07-04 10:24:46', 16),
(61, 'Vladimir', 'сссс', '2019-07-04 12:03:24', 16),
(62, 'Vladimir', 'sfdwfgds', '2019-07-04 12:09:53', 16),
(63, 'Vladimir', 'wsdf', '2019-07-06 17:42:53', 1),
(64, 'Vladimir', 'sssssss', '2019-07-06 17:43:23', 1),
(65, 'Alex', 'aaaaaaaaaaaa', '2019-07-06 17:48:26', 1),
(66, 'Vladimir', 'ысыфмырв', '2019-07-06 18:15:15', 1),
(67, 'Vladimir', 'ыавыы', '2019-07-06 18:16:36', 1),
(68, 'Vladimir', 'drgdg', '2019-07-06 18:18:21', 1),
(69, 'Vladimir', 'drgdg', '2019-07-06 18:19:04', 1),
(70, 'Vladimir', 'sdsfafdsa', '2019-07-06 18:19:13', 1),
(71, 'Vladimir', 'sdasdsaf', '2019-07-06 18:20:26', 1),
(72, 'Vladimir', 'dfsfwe', '2019-07-06 18:21:29', 1),
(73, 'Vladimir', 'dadsfasdf', '2019-07-06 18:23:41', 1),
(74, 'Alex', 'fdsfff', '2019-07-06 18:23:58', 1),
(75, 'Vladimir', 'qwert', '2019-07-08 14:25:20', 18),
(76, 'Vladimir', 'йвфвфы', '2019-07-09 14:38:03', 14),
(77, 'Vladimir', 'dd', '2019-07-12 14:01:49', 18),
(78, 'Vladimir', 'asfsdf', '2019-07-12 14:03:09', 18),
(79, 'Vladimir', 'dfsfvd', '2019-07-12 14:03:17', 18),
(80, 'Vladimir', 'cvsd', '2019-07-12 14:03:34', 18),
(81, 'Vladimir', 'xczcxz', '2019-07-12 14:03:58', 18),
(82, 'Vladimir', 'bdcg', '2019-07-12 14:13:23', 18),
(83, 'Vladimir', 'sdfsdf', '2019-07-20 15:41:35', 11),
(84, 'Vladimir', 'efefef', '2019-07-20 17:01:06', 12),
(85, 'Vladimir', 'asfaaf', '2019-07-20 17:01:51', 12),
(86, 'Vladimi', '111', '2019-07-29 12:41:16', 17),
(87, 'Vladimi', 'qqq', '2019-07-29 12:41:42', 17),
(88, '1', 'dsfsdf', '2019-07-30 17:33:02', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `show_email` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar1.jpg',
  `registration_data` date NOT NULL DEFAULT current_timestamp(),
  `confirmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `email`, `show_email`, `avatar`, `registration_data`, `confirmed`) VALUES
('1', '111111qQ', 'gpilligrim@gmail.com', 0, 'avatar1.jpg', '2019-07-30', 13144),
('Alex', '2', 'Alex@gmail.com', 0, 'avatar1.jpg', '2019-07-29', 0),
('Grigoriy', '111111qQ', '1@1.1', 0, 'avatar1.jpg', '2019-07-29', 0),
('Mihail', '1', 'Mihail@gmail.com', 0, 'avatar2.jpg', '2019-07-29', 0),
('Vladimi', '111111qQ', '1@1.1', 0, 'avatar1.jpg', '2019-07-29', 0),
('Vladimir', '3', 'Vladimir@gmail.com', 0, 'avatar3.jpg', '2019-07-29', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
