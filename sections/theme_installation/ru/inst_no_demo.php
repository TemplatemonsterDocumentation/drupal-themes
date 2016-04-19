<h3>Установка темы без демонстрационных данных</h3>
<p>Для установки темы без демонстрационных данных выполните следующие указания:</p>
<ol class="index-list">
	<li>
		<p>Скопируйте содержимое папки <strong>sample_data/sites/all/themes/</strong> из архива с шаблоном в папку
			<strong>sites/all/themes/</strong>
			Drupal-сайта на вашем сервере.</p>

		<p class="alert alert-warning">
			<span>Обратите внимание, что некоторые элементы шаблона реализованы с помощью модулей. На данном этапе установки модули не подключаются, поэтому внешний вид и функционал темы может несколько отличаться от того, что вы видели на странице предварительного просмотра шаблона.</span>
		</p>
	</li>
	<li>
		Для установки модулей вам необходимо скопировать папки <strong>sample_data/sites/all/modules/</strong> и
		<strong>sample_data/sites/all/libraries/</strong> из архива с шаблоном в папку <strong>sites/all/</strong>
		Drupal-сайта на вашем сервере. Если вы не хотите устанавливать использованные в шаблоне модули, пропустите
		данный шаг.
	</li>
	<li>
		Введите адрес вашего сайта в адресной строке браузера, чтобы начать процедуру установки Drupal.
	</li>
	<li>
		<p>На начальной странице установки вам будет предложено выбрать профиль установки. Выберите <strong>Standard
		(Стандартный)</strong> и нажмите кнопку <strong>Save and Continue (Сохранить и продолжить)</strong>.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01-0.png" alt="Select Standard">
		</figure>
	</li>
	<li>
		<p>На следующем шаге заполните поле имени, имени пользователя, пароля и хоста базы данных, полученных при ее
		создании.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01-1.png" alt="Fill DB data">
		</figure>
	</li>
	<li>
		<p>Зарегистрируйте администратора сайта.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01-2.png" alt="Register site administrator">
		</figure>
	</li>
	<li>
		<p>Нажмите на ссылку <strong>Visit your new site (Посетите свой новый сайт)</strong> или в адресной строке браузера
		наберите <strong>http://www.example.com/?q=user/login</strong>, где <strong>www.example.com</strong> - адрес
		вашего сайта. Для входа на сайт используйте имя пользователя и пароль, указанные в предыдущем шаге.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-02-1.png" alt="Click 'Visit your new site'">
		</figure>
	</li>
	<li>
		В панели администрирования сайта перейдите на страницу <strong>Appearance (Оформление)</strong> либо в адресной
		строке браузера наберите <strong>http://www.example.com/?q=admin/appearance</strong>, где <strong>www.example.com</strong>
		- адрес вашего сайта.
	</li>
	<li>
		<p>Найдите только что добавленную тему и нажмите кнопку <strong>Enable and set default (Активировать и установить
		по умолчанию)</strong>.</p>

		<figure class="img-polaroid">
			<img src="img/inst-no-demo-01.png" alt="Enable theme">
		</figure>
	</li>
	<li>
		Если на втором шаге вы скопировали папки с модулями, зайдите на страницу <strong>Modules (Модули)</strong> в
		панели администрирования сайта либо в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/modules</strong>,
		где <strong>www.example.com</strong> - адрес вашего сайта. Активируйте добавленные модули. Для более подробной
		информации смотрите раздел <a href="?lang=ru&section=modules_config#modules_settings">"Настройка модулей"</a>.
	</li>
</ol>
<p>Вы можете просмотреть следующие инструкции: </p>
<ul class="marked-list">
	<li>
		<a href="/help/ru/how-upload-and-install-drupal-server.html" target="_blank">Drupal 7.x. Как установить движок</a>
	</li>
	<li>
		<a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. Как установить тему</a>
	</li>
</ul>