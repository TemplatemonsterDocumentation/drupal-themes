<h3>Настройка и использование анимации</h3>
<p class="alert alert-info">
    <span>За включение/отключение анимации отвечает модуль <strong>TM Animate</strong>. Также, в зависимости от того, где вы собираетесь использовать анимации, вам может понадобиться модуль <strong>Block
            class</strong> или <strong>Views</strong>.</span>
</p>
<p>Чтобы повесить анимацию на один из блоков, выполните следующее действия:</p>
<ol class="index-list">
    <li>В панели администрирования зайдите на страницу <strong> Structure > Blocks (Структура >
            Блоки)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>Напротив необходимого блока нажмите ссылку <strong>configure (настроить)</strong>.</li>
    <li>В поле <strong>CSS class(es) (CSS-класс(ы))</strong> добавьте через пробел два класса: <strong>
            <em>wow</em>
        </strong>, чтобы анимация проигрывалась, когда блок появляется в зоне видимости, и класс анимации.
    </li>
    <li>Сохраните сделанные изменения.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/animate-settings-01.png" alt="Add animate classes">
</figure>
<p>Чтобы повесить анимацию на одно из представлений, выполните следующее действия:</p>
<ol class="index-list">
    <li>В панели администрирования зайдите на страницу <strong> Structure > Views (Структура >
            Представления)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/views</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>Напротив необходимого блока нажмите ссылку <strong>edit (редактировать)</strong>.</li>
</ol>
<p class="alert alert-info">
    <span>Актуально только для представлений с форматом <strong>Semantic Views</strong>.</span>
</p>
<ol class="index-list">
    <li><p>В настройках напротив поля <strong>Format (Формат)</strong> нажмите на ссылку <strong>settings
                (Настройки)</strong>.</p>

        <figure class="img-polaroid">
            <img src="img/animate-settings-02.png" alt="Click 'Settings'">
        </figure>
    </li>

    <li><p>В блоке <strong>Row (Ряд)</strong> найдите поле <strong>Class attribute (Атрибут класса)</strong> и введите
            в него класс анимации и класс <strong>wow</strong>.</p>

        <figure class="img-polaroid">
            <img src="img/animate-settings-03.png" alt="Enter classes">
        </figure>
    </li>

    <li>Нажмите кнопку <strong>Apply (Применить)</strong>.</li>
    <li>Сохраните представление.</li>
</ol>
<p class="alert alert-info">
    <span>Все доступные классы можно посмотреть на <a href="http://daneden.github.io/animate.css/">daneden.github.io</a></span>
</p>