<h3>Установка темы с демонстрационными данными на существующий сайт</h3>
<p class="alert alert-danger">
    <span>Установка темы с демонстрационными данными заменит все существующее содержимое и настройки вашего сайта на собственные!</span>
</p>
<p class="alert alert-warning">
    <span>Мы настоятельно рекомендуем вам <a href="/help/ru/phpmyadmin-how-to-backup-a-database.html" target="_blank">создать
            резервную копию базы данных</a> Drupal перед установкой темы с использованием снапшота.</span>
</p>
<p>Если у вас уже есть работающий сайт на Drupal, но вы все же хотите установить тему с демонстрационными данными,
    выполните следующие действия:</p>
<ol class="index-list">
    <li>Скопируйте содержимое папки <strong>sample_data/sites/all/</strong> из архива с шаблоном в папку <strong>sites/all/</strong>
        Drupal-сайта на вашем сервере.
    </li>
    <li>Скопируйте содержимое папки <strong>sample_data/sites/default/</strong> из архива с шаблоном в папку <strong>sites/default/</strong>
        Drupal-сайта на вашем сервере.
    </li>
    <p class="alert alert-danger">
        <span>Будьте осторожны с заменой файлов! Ни в коем случае не заменяйте файлы settings.php и default.settings.php, иначе вам придется устанавливать Drupal заново!</span>
    </p>
    <li>Войдите на сайт в качестве администратора.</li>
    <li>В панели администрирования сайта зайдите на страницу <strong>Configuration > File system (Настройки >
            Файловая система)</strong> или перейдите по ссылке <strong>http://www.example.com/?q=admin/config/media/file-system</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>В поле <strong>Private file system path (Конфиденциальный путь файловой системы)</strong> установите значение
        <strong>sites/default/private/files</strong>.
    </li>
    <li>Зайдите на страницу <strong>Modules (Модули)</strong> панели администрирования или перейдите по ссылке <strong>http://www.example.com/?q=admin/modules</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>Убедитесь, что модуль <strong>Demonstration site</strong> включен.</li>
    <li>Зайдите на страницу <strong>Structure > Snapshots (Структура > Снапшоты)</strong> панели
        администрирования и перейдите на вкладку <strong>Reset (Восстановить)</strong> или перейдите по ссылке <strong>http://www.example.com/?q=admin/structure/demo/reset</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>Выберите снапшот <strong>theme###</strong>, где ### - номер приобретенной вами темы.</li>
    <figure class="img-polaroid">
        <img src="img/inst-demo-exs-site-01.png" alt="Select snapshot">
    </figure>
    <li>Нажмите кнопку <strong>Reset (Восстановить)</strong>. Затем подтвердите действие.</li>
    <li>Войдите на сайт в качестве администратора.</li>
    <p class="alert alert-warning">
        <span>Чтоб зайти на сайт в качестве администратора после установки демонстрационных данных, используйте имя пользователя <strong>admin</strong> и пароль <strong>admin123</strong>. В целях безопасности мы рекомендуем вам сменить пароль сразу же после установки.</span>
    </p>
    <li>Последнее, что необходимо сделать, - обновить таблицы базы данных. В адресной строке браузера введите <strong>http://www.example.com/update.php</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>Следуйте инструкциям на экране.</li>
    <li>После обновления перейдите по одной из ссылок: <strong>Front page (Главная страница сайта)</strong> или <strong>Administration
            pages (Панель администрирования сайта)</strong>.
    </li>
</ol>
<p>Вы можете просмотреть следующие инструкции:</p>
<ul class="marked-list">
    <li><a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. Как установить тему

        </a>
    <li><a href="/help/ru/how-to-install-drupal-7-theme-sample-data.html" target="_blank">Drupal 7.x. Как установить
            демонстрационные данные

        </a>
</ul>