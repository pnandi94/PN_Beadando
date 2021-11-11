-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Nov 11. 11:35
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `hatoslotto`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `postdate` date NOT NULL,
  `author` text NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `news`
--

INSERT INTO `news` (`id`, `postdate`, `author`, `title`, `content`) VALUES
(1, '2021-11-07', 'Mor Zsolt', 'Felpörögtek az események a tőzsdén', 'Ha csak az egyedi cégeket nézzük akkor látszik hogy az Nvidia értéke is ugrásszerűen nőtt a vizsgált időszakban 44 százalékkal emelkedett a technológiai vállalat piaci kapitalizációja. Itt viszont nem a gyorsjelentéshez van köze a ralinak, hiszen csak november 17-én fogja közzétenni legfrissebb számait a cég. Az Nvidia részvényei 12 százalékkal történelmi csúcsra emelkedtek csütörtökön miután a Wells Fargo úgy látja hogy a chipgyártó jövő kedden elindítja az Omniverse Enterprise-t, amely a metaverzum alkalmazások széles skáláját teszi elérhetővé. A Meta Platforms (korábban Facebook) és a Microsoft is nagy jövőt lát a magával ragadó virtuális valóságban.'),
(2, '2021-10-26', 'Zsíros B. Ödön', 'Még nincs nyertes', 'Már háromhete nincs nyertesünk. Így a hatoslottó össznyereménye tovább emelkedett.'),
(3, '2021-09-15', 'Gipsz Jakab', 'Milyen gyakran érdemes megnézni hogy állnak a befektetéseink?', 'Richard Dobatse egy alig 32 éves San Diegoban élő orvos imádott tőzsdézni. Minden nap számos alkalommal megnyitotta a Robinhood app-ot ahol folyamatosan kereskedett. A felesége arról panaszkodott, hogy a piac és portfóliójának szüntelen követése teljesen kikészítette az idegeit nem evett és éjjelente ha végre el tudott aludni szörnyű rémálmai voltak. A három gyerekes apuka azonban eleinte nagyon sikeres volt a számokat tekintve és összesen 45 000 dolláros befektetését főleg opciós kereskedésnek köszönhetően több mint 1 millió dolláros számlaegyenlegre változtatta. Aztán szinte az egészet pár hét alatt elveszítette és portfóliójának értéke 7 000 dollár alá esett. Csak ekkor tudatosult benne hogy mániája mennyire súlyos volt.'),
(4, '2021-09-14', 'Mor Zsolt', 'E-sport?', 'Az elektronikus sport (röviden e-sport) résztvevői amatőr vagy professzionális módon versenyszerűen foglalkoznak az egyes videójátékokkal ebből fakadóan a játékos megjelölés mellett e-sportolóknak is nevezik őket. Valószínűleg a Wii játékkonzoltól ered a sport elnevezés mert a mai e-sportot jelölő játékokban nincs szinte semmi fizikai munka nem a testi fizikummal kell teljesítenie az embernek.\r\nAz „e-” az „elektronikus” szó rövidítése. Magyarországon kb. 2005-2006 óta van a köztudatban a kifejezés de csak a 2010-es évek utánra nőtte ki magát annyira hogy többen is elismerik e szó valódi értelmét. Ahogy a rendes sportban itt is vannak „sportolók” akik pár éve már rendes bejelentett munkahelynek veszik ezt a tevékenységet és fizetéssel járó bejegyzett munkahely hiányában „gamer ház”-akban laknak. Ez azt jelenti hogy egy csapat játékosai összeköltöznek egy házba ahol a támogatók és saját maguk megépítik a felkészüléshez szükséges helyet. Itt egy normális házról van szó ami tartalmazza a kellő mennyiségű és teljesítményű számítógépet. 2017-ben az e-sport-közösség összesen mintegy 385 millió embert foglalt magába világszerte.'),
(9, '2021-11-11', 'admin', 'A hírfeltöltés funkció működik', 'Ezt a hírt a hírfeltöltés oldalon töltötte fel az admin, a többi felhasználó is tud posztolni ezentúl.'),
(11, '2021-11-11', 'user', 'Tényleg működik?', 'Tesztelem, hogy valóban sikerült-e az adminnak megjavítania ezt a funkciót.');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
