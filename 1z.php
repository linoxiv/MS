<?php
$txt=preg_split("/[\s.,!:?-]+/", "Чиполлино был сыном Чиполлоне. И было у него семь братьев: Чиполлетто, Чиполлотто, Чиполлочча, Чиполлучча и так далее - самые подходящие имена для честной луковой семьи. Люди они были хорошие, надо прямо сказать, да только не везло им в жизни. Что ж поделаешь: где лук, там и слезы. Чиполлоне, его жена и сыновья жили в деревянной лачуге чуть побольше ящичка для огородной рассады. Если богачам случалось попадать в эти места, они недовольно морщили носы, ворчали: Фу, как несет луком! - и приказывали кучеру ехать быстрее. Однажды бедную окраину собрался посетить сам правитель страны, принц Лимон. Придворные ужасно беспокоились, не ударит ли луковый запах в нос его высочеству. Что скажет принц, когда почувствует этот запах бедности? Можно опрыскать бедняков духами! - предложил Старший Камергер.");
$words = array();
foreach ($txt as $a) {
    @$words[$a]++;
}
print_r($words);
echo "Всего слов: ";
print_r (count($txt)-1);