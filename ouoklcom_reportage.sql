--
-- Veritabanı: `ouoklcom_reportage`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Answers`
--

CREATE TABLE IF NOT EXISTS `Answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;



--
-- Tablo için tablo yapısı `Questions`
--

CREATE TABLE IF NOT EXISTS `Questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Tablo için tablo yapısı `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `sort` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;


