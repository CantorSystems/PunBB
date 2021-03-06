<?php

// Language definitions used in all admin files
$lang_admin_ext = array(

'Install extension'				=> 'Установить',
'Upgrade extension'				=> 'Обновить',
'Extensions available'			=> 'Расширения, доступные для установки',
'Hotfixes available'			=> 'Исправления, доступные для установки',
'Installed extensions'			=> 'Установленные расширения',
'Version'						=> 'Версия %s',
'Hotfix'						=> 'Исправление',
'Installed hotfixes'			=> 'Установленные исправления',
'Installed extensions warn'		=>	'<strong>ВНИМАНИЕ!</strong> Если удалить расширение, то данные, связанные с ним, будут удалены из базы данных и не смогут быть восстановлены путём повторной установки. Чтобы сохранить данные, просто отключите это расширение.',
'Uninstall extension'			=> 'Удаление расширения',
'Uninstall hotfix'				=> 'Удаление исправления',
'Uninstall'						=> 'Удалить',
'Uninstall extension confirm'	=> 'Вы уверены, что хотите удалить расширение «%s»?',
'Enable'						=> 'Включить',
'Disable'						=> 'Отключить',
'Extension error'				=> 'Ошибка',
'Extension loading error'		=> 'Ошибка загрузки расширения «%s».',
'Illegal ID'					=> 'ID должен содержать только буквенно-цифровые символы в нижнем регистре (a—z и 0—9) и символ подчёркивания (_).',
'Maxtestedon error'             => 'Данное расширение не совместимо с установленной версией форума.',
'Maxtestedon warning'			=> 'Данное расширение не тестировалось на этой версии форума и может быть с ней несовместимо.',
'Missing manifest'				=> 'Отсутствует manifest.xml.',
'Failed parse manifest'			=>	'Не удаётся прочитать manifest.xml.',
'extension root error'			=> 'Корневой элемент расширения неправильный или отсутствует.',
'extension/engine error'		=> 'Корневой элемент скрипта неправильный или отсутствует.',
'extension/engine error2'		=> 'Версия расширения не поддерживается.',
'extension/id error'			=> 'Элемент extension/id неправильный или отсутствует.',
'extension/id error2'			=> 'Неправильное имя папки элемента extension/id.',
'extension/title error'			=> 'Элемент extension/title неправильный или отсутствует.',
'extension/version error'		=> 'Элемент extension/version неправильный или отсутствует.',
'extension/description error'	=> 'Элемент extension/description неправильный или отсутствует.',
'extension/author error'		=> 'Элемент extension/author неправильный или отсутствует.',
'extension/minversion error'	=> 'Элемент extension/minversion неправильный или отсутствует.',
'extension/minversion error2'	=> 'Для этого дополнения требуется версия PunBB %s или более поздняя.',
'extension/maxtestedon error'	=> 'Элемент extension/maxtestedon неправильный или отсутствует.',
'extension/note error'			=> 'Неправильный элемент extension/note.',
'extension/note error2'			=> 'Элемент extension/note неверный или содержит неправильный атрибут.',
'extension/hooks/hook error'	=> 'Элемент extension/hooks/hook неправильный или отсутствует.',
'extension/hooks/hook error2'	=> 'Элемент extension/hooks/hook не содержит атрибут «id».',
'extension/hooks/hook error3'	=> 'Элемент extension/hooks/hook вне границ значения атрибута «приоритет».',
'extension/hooks/hook error4'	=> 'Элемент extension/hooks/hook имеет содержание, которое не заканчивается в режиме PHP.',
'No XML support'				=> 'PHP не имеет поддержки XML. Поддержка XML необходима для установки расширений.',
'No installed extensions'		=> 'Установленных расширений нет.',
'No installed hotfixes'			=> 'Установленных исправлений нет.',
'No available extensions'		=> 'Нет расширений, доступных для установки или обновления.',
'No available hotfixes'			=> 'Нет исправлений, доступных для установки.',
'Invalid extensions'			=> '<strong>ВАЖНО!</strong> Список расширений найден в папке <strong>Extensions</strong>, но их установка или обновление  невозможно, поскольку были обнаружены ошибки.',
'Extension installed'			=> 'Расширение установлено.',
'Hotfix installed'				=> 'Исправление установлено.',
'Extension installed info'		=> 'Расширение успешно установлено, однако есть предупреждения.',
'Extension uninstalled'			=> 'Расширение удалено.',
'Hotfix uninstalled'			=> 'Исправление удалено.',
'Extension uninstalled info'	=> 'Расширение удалено, однако есть предупреждения.',
'Install note'					=> 'Прочтите перед установкой',
'Uninstall note'				=> 'Прочтите перед удалением',
'Hotfix download failed'		=> 'Ошибка загрузки и установки исправления. Подождите несколько минут и попытайтесь снова.',
'Extension disabled'			=> 'Расширение отключено',
'Extension enabled'				=> 'Расширение включено.',
'Hotfix disabled'				=> 'Исправление отключено.',
'Hotfix enabled'				=> 'Исправление включено.',
'Extension by'					=> 'Разработчик: %s',
'Hotfix description'			=> 'Это исправление для PunBB обнаружено с помощью системы автоматического обновления.',
'Install hotfix'				=> 'Установка исправления',
'Missing dependency'			=>	'Это расширение не может быть установлено, пока «%s» не установлен и не включён',
'Uninstall dependency'			=> 'Это расширение нельзя удалить, пока «%s» установлено.',
'Disable dependency'			=> 'Это расширение нельзя отключить, пока «%s» включено.',
'Disabled dependency'			=> 'Это расширение нельзя включить, пока «%s» выключено.',
'Download latest version'		=> 'Загрузить последнюю версию',
'Version dependency error'		=> 'Расширение «%s» должно быть версии %s или выше',
'Install ext errors'			=> '<strong>Предупреждение!</strong> Перед установкой расширения должны быть исправлены следующие ошибки:',
'The minimum required version of PHP'   => 'Минимально необходимая версия PHP — ',
'The maximum required version of PHP'   => 'Максимально необходимая версия  PHP — ',
'PHP extension is required'             => 'Требуется расширение PHP — ',
);
