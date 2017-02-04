<?php

if (!defined('FORUM')) die();

$lang_fancy_stop_spam = array(
	'Error many links' 					=> 'Слишком много ссылок в сообщении. Разрешено %s ссылок. Уменьшите количество ссылок.',
	'Name'								=> 'Настройки Fancy Stop SPAM',

	'First Post Max Links' 				=> 'Ссылок в первом сообщении',
	'First Post Max Links Help'			=> 'Максимум ссылок в первом сообщении. Если значение < 0 — проверка отключена.',
	'First Post Guest Max Links'		=> 'Ссылок в первом сообщении гостя',
	'First Post Guest Max Links Help'	=> 'Максимум ссылок в сообщении гостя. Если значение < 0 — проверка отключена.',

	'Go to settings'					=> 'Настройки',
	'Settings Name'						=> 'Настройки Fancy Stop SPAM',

	'Register form'					=> 'Форма регистрации',
	'Login form'					=> 'Форма входа',
	'Post form'						=> 'Форма сообщения',
	'Other Methods'					=> 'Другие способы',
	'First Post Methods'			=> 'Проверка первого сообщения',
	'Signature Check Method'		=> 'Проверка времени подписи',
	'Submit Check Method'			=> 'Проверка на автозаполнение',

	'Enable Honeypot'				=> 'Включить защиту скрытыми полями',
	'Enable Timeout'				=> 'Включить отслеживание времени заполнения формы',
	'Enable Timezone'				=> 'Включить проверку часового пояса (UTC-12:00)',
	'Enable Check Identical'		=> 'Проверять одинаковые сообщения',

	'Enable SFS Email'				=> 'Проверять эл. почту через StopForumSpam',
	'Enable SFS IP'					=> 'Проверять IP-адрес через StopForumSpam',

	'Register bot message'			=> 'Извините, мы думаем что вы бот. Вы не можете зарегистрироваться на форуме.',
	'Register bot timeout message'	=> 'Извините, мы думаем что вы бот, потому что вы заполнили форму слишком быстро. Подождите несколько секунд и повторите отправку.',
	'Register bot timezone message'	=> 'Извините, мы думаем что вы бот, потому что выбрали часовой пояс UTC-12:00. В этом часовом поясе нет поселений людей. Выберите другой часовой пояс.',
	'Register bot sfs email message'	=> 'Извините, но ваш адрес электронной почты известен как спамерский. Вы не можете зарегистрироваться на форуме.',
	'Register bot sfs email ip message'	=> 'В течении последнего часа с вашего IP-адреса была попытка регистрации спамера. Для предотвращения массовых регистраций между регистрациями с одного IP-адреса должно пройти не менее часа. Приносим извинения за неудобства.',
	'Register bot sfs ip message'	=> 'Извините, но ваш IP-адрес известен как спамерский. Вы не можете зарегистрироваться на форуме.',
	'Login bot message'				=> 'Извините, мы думаем что вы бот. Вы не можете войти на форум.',
	'Post bot message'				=> 'Извините, мы думаем что вы бот. Вы не можете отправлять сообщения на форум.',
	'Post Identical message'		=> 'Извините, но не можете отправлять одинаковые сообщения. Измените сообщение и отправьте его снова.',
	'Activate bot message'			=> 'Извините, мы думаем что вы бот. Вы не можете активировать свою учетную запись.',

	'Honey field'					=> 'АнтиСПАМ',
	'Honey field help'				=> 'Оставьте это поле пустым.',

	'Enable Logs'					=> 'Записывать события спама в журнал',

	'Section antispam'				=> 'Антиспам',
	'Section antispam welcome'		=> 'Проверка антиспама',
	'Section antispam welcome user'	=> 'Проверка антиспама %s',
	'Status'						=> 'Статус',
	'Status found'					=> 'спамер, найден в базе',
	'Status not found'				=> 'чисто, не найден в базе',
	'Status error'					=> 'Не удалось получить данные от сервера StopForumSpam',
	'Frequency'						=> 'Частота',
	'Last seen'						=> 'Последняя активность',

	'Admin section antispam'			=> 'Антиспам',
	'Admin submenu information'			=> 'Информация',
	'Admin submenu information header'	=> 'Добро пожаловать в панель управления Fancy Stop Spam',

	'Admin submenu logs'				=> 'Журнал',
	'Admin submenu logs header'			=> 'Обнаруженные события спама (последние 100)',

	'Admin submenu new users'			=> 'Новые пользователи',
	'Admin submenu new users header'	=> '15 последних зарегистрированных пользователей',

	'Admin submenu suspicious users'		=> 'Подозрительные пользователи',
	'Admin submenu suspicious users header'	=> 'Подозрительные пользователи',

	'Admin logs disabled message'			=> 'Журналирование событий Fancy Stop Spam отключено %s.',
	'Admin logs disabled message settings'	=> 'в настройках',
	'Admin logs empty message'				=> '',

	'log event name unknown'				=> 'Неизвестно',
	'log event name 0'						=> 'Системное сообщение',
	'log event name 1'						=> 'Регистрация с автозаполнением',
	'log event name 2'						=> 'Регистрация без задержки',
	'log event name 3'						=> 'Регистрация в часовом поясе',
	'log event name 4'						=> 'Регистрация с заполнением скрытых полей',
	'log event name 5'						=> 'Регистрация с пустыми скрытыми полями',
	'log event name 6'						=> 'Регистрация на адрес эл. почты SFS',
	'log event name 7'						=> 'Регистрация на адрес эл. почты SFS (кэшированный)',
	'log event name 8'						=> 'Регистрация на адрес эл. почты с IP SFS (кэшированный)',
	'log event name 9'						=> 'Регистрация с IP-адреса SFS',
	'log event name 10'						=> 'Регистрация с IP-адреса SFS (кэшированного)',
	'log event name 11'						=> 'Регистрация с подбором заполнения скрытых полей',

	'log event name 70'						=> 'Активация с автозаполнением',
	'log event name 71'						=> 'Активация с заполнением скрытых полей',
	'log event name 72'						=> 'Активация с пустыми скрытыми полями',

	'log event name 20'						=> 'Отправка сообщения с автозаполнением',
	'log event name 21'						=> 'Отправка сообщения без задержки',
	'log event name 22'						=> 'Отправка сообщения с заполнением скрытых полей',
	'log event name 23'						=> 'Отправка сообщения с пустыми скрытыми полями',

	'log event name 30'						=> 'Отправка одинаковых сообщений',

	'log event name 40'						=> 'Вход на форум с заполнением скрытых полей',
	'log event name 41'						=> 'Вход на форум с пустыми скрытыми полями',

	'log event name 60'						=> 'Скрытая подпись',

	'Time'									=> 'Время',
	'IP'									=> 'IP',
	'Comment'								=> 'Коментарий',
	'Type'									=> 'Тип',
	'User'									=> 'Пользователь',

	'No activity'							=> 'Нет записей об активности спамеров.',
	'No suspicious_users'					=> 'Нет подозрительных пользователей.',

	'Number posts'							=> 'Сообщений',

	'Email check'							=> 'Проверка эл. почты',
	'IP check'								=> 'Проверка IP-адреса',

	'SFS API Key'							=> 'Ключ API',
	'SFS API Key Help'						=> 'Ключ API StopForumSpam для сообщений о спамерах',
	'Report to sfs'							=> 'Отправить данные спамеров сервису StopForumSpam',

	'Identical check repeated event'		=> 'Повторяющиеся сообщения — пользователь отмечен как подозрительный',
);

?>
