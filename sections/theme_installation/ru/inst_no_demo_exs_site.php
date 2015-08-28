<h3>Установка темы без демонстрационных данных на существующий сайт</h3>
<p>Для установки темы без демонстрационных данных на существующий сайт выполните следующие указания:</p>
<ol class="index-list">
    <li><p>Скопируйте содержимое папки <strong>sample_data/sites/all/themes/</strong> из архива с шаблоном в папку
            <strong>sites/all/themes/</strong>
            Drupal-сайта на вашем сервере.</p>

        <p class="alert alert-warning">
            <span>Обратите внимание, что некоторые элементы шаблона реализованы с помощью модулей. На данном этапе установки модули не подключаются, поэтому внешний вид и функционал темы может несколько отличаться от того, что вы видели на странице предварительного просмотра шаблона.</span>
        </p>
    </li>
    <li>Для установки модулей вам необходимо скопировать папки <strong>sample_data/sites/all/modules/</strong> и
        <strong>sample_data/sites/all/libraries/</strong> из архива с шаблоном в папку <strong>sites/all/</strong>
        Drupal-сайта на вашем сервере. Если вы не хотите устанавливать использованные в шаблоне модули, пропустите
        данный шаг.
    </li>
    <li>Войдите на свой сайт в качестве администратора.</li>
    <li>В панели администрирования сайта перейдите на страницу <strong>Appearance (Оформление)</strong> либо в адресной
        строке браузера наберите <strong>http://www.example.com/?q=admin/appearance</strong>, где <strong>www.example.com</strong>
        - адрес вашего сайта.
    </li>
    <li><p>Найдите только что добавленную тему и нажмите кнопку <strong>Enable and set default (Активировать и
                установить
                по умолчанию)</strong>.</p>

        <figure class="img-polaroid">
            <img src="img/inst-no-demo-01.png" alt="Enable theme">
        </figure>
    </li>
    <li>Если на втором шаге вы добавили папки с модулями, зайдите на страницу <strong>Modules (Модули)</strong> в панели
        администрирования сайта либо в адресной строке браузера наберите
        <strong>http://www.example.com/?q=admin/modules</strong>, где <strong>www.example.com</strong> - адрес вашего
        сайта. Активируйте добавленные модули. Для более подробной информации смотрите раздел <a
            href="#modules_settings">"Настройка модулей"</a></li>
</ol>
<p>Вы можете просмотреть следующие инструкции:</p>
<ul class="marked-list">
    <li><a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. Как установить тему

        </a></li>
</ul>