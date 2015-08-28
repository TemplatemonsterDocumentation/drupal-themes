<h3>Настройка подгрузки изображений (LazyLoad)</h3>
<p class="alert alert-info">
    <span>За включение/отключение постепенной подгрузки изображений отвечает модуль <strong>TM Lazy
            Load</strong>.</span>
</p>
<p>Для настройки постепенной подгрузки изображений выполните следующие действия:</p>
<ol class="index-list">
    <li>В панели администрирования зайдите на страницу <strong>Configuration > TM Lazyload (Настройка > TM
            Lazyload)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/config/tm_lazyload</strong>,
        где <strong>www.example.com</strong> - адрес вашего сайта.
    </li>
    <li>
        <p>Внесите необходимые изменения в следующие поля:</p>

        <ul class="marked-list">
            <li>
                <dl class=" inline-term">
                    <dt>Enabled (Включен)</dt>
                    <dd>включить/отключить постепенную подгрузку изображений.</dd>
                </dl>
            </li>
            <li>
                <dl class=" inline-term">
                    <dt>Distance (Расстояние)</dt>
                    <dd>расстояние от изображения до видимой части окна браузера перед тем, как изображение загрузится.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class=" inline-term">
                    <dt>Placeholder Image (Изображение прелоадера)</dt>
                    <dd>путь к изображению прелоавдера. Оставьте пустым, чтоб использовать прелоадеры по умолчанию.</dd>
                </dl>
            </li>
            <li>
                <dl class=" inline-term">
                    <dt>Loader Icon (Иконка прелоадера)</dt>
                    <dd>доступные варианты прелоадеров.</dd>
                </dl>
            </li>
            <li>
                <dl class=" inline-term">
                    <dt>Excluded Pages (Исключенные страницы)</dt>
                    <dd>перечень страниц, на которых постепенная подгрузка изображений должна быть отключена.</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>После того, как все необходимые изменения будут сделаны, нажмите кнопку <strong>Save (Сохранить)</strong>.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/lazyload-settings-01.png" alt="LazyLoad settings">
</figure>