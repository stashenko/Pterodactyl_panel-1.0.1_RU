<?php

return [
    'key' => [
        'warning' => 'Похоже, вы уже настроили ключ шифрования приложения. Продолжая этот процесс, перезапишите этот ключ и вызовите повреждение любых существующих зашифрованных данных. НЕ ПРОДОЛЖАЙТЕ, ЕСЛИ ВЫ НЕ ЗНАЕТЕ, ЧТО ВЫ ДЕЛАЕТЕ.',
        'confirm' => 'Я понимаю последствия выполнения этой команды и беру на себя всю ответственность за потерю зашифрованных данных.',
        'final_confirm' => 'Вы уверены, что хотите продолжить? Смена ключа шифрования приложения ПРИВЕДЕТ К ПОТЕРЕ ДАННЫХ.',
    ],
    'location' => [
        'no_location_found' => 'Не удалось найти запись, соответствующую указанному короткому коду.',
        'ask_short' => 'Расположение короткого кода',
        'ask_long' => 'Описание расположения',
        'created' => 'Успешно создано новое расположение (:name) с идентификатором :id.',
        'deleted' => 'Запрошенное расположение удалено.',
    ],
    'user' => [
        'search_users' => 'Введите имя пользователя, UUID или адрес электронной почты',
        'select_search_user' => 'ID пользователя для удаления (введите \'0\' для повторного поиска)',
        'deleted' => 'Пользователь успешно удален из Панели.',
        'confirm_delete' => 'Вы уверены, что хотите удалить этого пользователя из Панели?',
        'no_users_found' => 'По заданному запросу не найдено ни одного пользователя.',
        'multiple_found' => 'Для указанного пользователя было найдено несколько учетных записей, которые не могут удалить пользователя из-за флага --no-Interaction.',
        'ask_admin' => 'Этот пользователь является администратором?',
        'ask_email' => 'Адрес электронной почты',
        'ask_username' => 'Имя пользователя',
        'ask_name_first' => 'Имя',
        'ask_name_last' => 'Фамилия',
        'ask_password' => 'Пароль',
        'ask_password_tip' => 'Если вы хотите создать учетную запись со случайным паролем, отправленным пользователю по электронной почте, повторно запустите эту команду (CTRL + C) и передайте флаг `--no-password`.',
        'ask_password_help' => 'Пароли должны состоять не менее чем из 8 символов и содержать как минимум одну заглавную букву и одну цифру.',
        '2fa_help_text' => [
            'Эта команда отключит двухфакторную аутентификацию для учетной записи пользователя, если она включена. Это следует использовать только как команду восстановления учетной записи, если пользователь заблокирован для своей учетной записи.',
            'Если это не то, что вы хотели сделать, нажмите CTRL+C, чтобы выйти из этого процесса.',
        ],
        '2fa_disabled' => 'Двухфакторная аутентификация отключена для :email.',
    ],
    'schedule' => [
        'output_line' => 'Расписание для первой задачи `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Удаление файла резервной копии службы :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Запрос на восстановление для ":name" (#:id) на узле ":node" завершился ошибкой: :message',
        'reinstall' => [
            'failed' => 'Запрос на повторную установку ":name" (#:id) на узле ":node" завершился ошибкой: :message',
            'confirm' => 'Вы собираетесь выполнить переустановку на группе серверов. Вы хотите продолжить?',
        ],
        'power' => [
            'confirm' => 'Вы собираетесь выполнить :action против серверов :count. Вы хотите продолжить?',
            'action_failed' => 'Запрос на действие по питанию для ":name" (#:id) на узле ":node" завершился ошибкой: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Хост (пример smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Порт',
            'ask_smtp_username' => 'SMTP Пользователь',
            'ask_smtp_password' => 'SMTP Пароль',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Какой драйвер следует использовать для отправки писем?',
            'ask_mail_from' => 'Электронные письма с адресом электронной почты должны исходить от',
            'ask_mail_name' => 'Имя, от которого должны отправляться электронные письма',
            'ask_encryption' => 'Используемый метод шифрования',
        ],
        'database' => [
            'host_warning' => 'Настоятельно рекомендуется не использовать "localhost" в качестве хоста базы данных, поскольку мы часто сталкивались с проблемами подключения к сокетам. Если вы хотите использовать локальное соединение, вам следует использовать "127.0.0.1".',
            'host' => 'Хост базы данных',
            'port' => 'Порт базы данных',
            'database' => 'Database Name',
            'username_warning' => 'Использование учетной записи "root" для подключений MySQL не только не одобряется, но и не допускается этим приложением. Вам необходимо создать пользователя MySQL для этого программного обеспечения.',
            'username' => 'Имя пользователя базы данных',
            'password_defined' => 'Похоже, у вас уже есть пароль для подключения к MySQL. Хотите его изменить?',
            'password' => 'Пароль базы данных',
            'connection_error' => 'Невозможно подключиться к серверу MySQL с использованием предоставленных учетных данных. Возвращенная ошибка ":error".',
            'creds_not_saved' => 'Ваши учетные данные для подключения НЕ были сохранены. Прежде чем продолжить, вам нужно будет предоставить действительную информацию о подключении.',
            'try_again' => 'Вернуться и попробовать еще раз?',
        ],
        'app' => [
            'settings' => 'Включить редактор настроек на основе пользовательского интерфейса?',
            'author' => 'Электронная почта автора яйца',
            'author_help' => 'Укажите адрес электронной почты, с которого должны быть отправлены яйца, экспортируемые этой панелью. Это должен быть действующий адрес электронной почты.',
            'app_url_help' => 'URL-адрес приложения ДОЛЖЕН начинаться с https:// или http:// в зависимости от того, используете ли вы SSL или нет. Если вы не укажете схему, ваши электронные письма и другой контент будут ссылаться не на то место.',
            'app_url' => 'URL приложения',
            'timezone_help' => 'Часовой пояс должен соответствовать одному из часовых поясов, поддерживаемых PHP. Если вы не уверены, пожалуйста обратитесь http://php.net/manual/en/timezones.php.',
            'timezone' => 'Часовой пояс приложения',
            'cache_driver' => 'Драйвер кеша',
            'session_driver' => 'Драйвер сеанса',
            'queue_driver' => 'Драйвер очереди',
            'using_redis' => 'Вы выбрали драйвер Redis для одного или нескольких вариантов. Укажите действительную информацию о подключении ниже. В большинстве случаев вы можете использовать предоставленные значения по умолчанию, если вы не изменили настройки.',
            'redis_host' => 'Хост Redis',
            'redis_password' => 'Пароль Redis',
            'redis_pass_help' => 'По умолчанию у экземпляра сервера Redis нет пароля, поскольку он работает локально и недоступен для внешнего мира. В этом случае просто нажмите Enter, не вводя значения.',
            'redis_port' => 'Порт Redis',
            'redis_pass_defined' => 'Кажется, что пароль для Redis уже определен, вы хотите его изменить?',
        ],
    ],
];
