<h3>Установка темы из Fullpackage</h3>
<p class="alert alert-danger">
	<span>В данном способе установки у Вас нет необходимости скачивать и устанавливать последнюю версию Drupal!</span>
</p>
<p>Для установки темы из Fullpackage выполните следующие действия:</p>
<ol class="index-list">
	<li>
		Создайте базу данных (см. раздел <a href="?lang=ru&section=prepare#db_creating">"Создание базы данных"</a>).
	</li>
	<li>
		Скопируйте содержимое архива <strong>fullpackage/fullpackage.zip</strong> в корневую папку Drupal-сайта
		на вашем сервере. Данный архив содержит ядро Drupal, файлы темы, модули, библиотеки, медиа-файлы, профиль,
		позволяющий установить демонстационные данные, а также некоторые правки, необходимые для коректной работы сайта.
	</li>
	<li>
		Введите адрес вашего сайта в адресной строке браузера, чтобы начать процедуру установки Drupal
	</li>
	<li>
		<p>На начальной странице установки вам будет предложено выбрать профиль установки. Выберите <strong>Demonstration
		site (Демонстрационный сайт)</strong> и нажмите кнопку <strong>Save and Continue (Сохранить и
		продолжить)</strong>.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01.png" alt="">
		</figure>
	</li>
	<li>
		<p>Следуйте инструкциям на экране. Заполните поле имени базы данных, имени пользователя, пароля и хоста базы
		данных, полученных при создании базы данных.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01-1.png" alt="">
		</figure>
	</li>
	<li>
		<p>На шаге <strong>Choose snapshot (Выберите снапшот)</strong> укажите снапшот с названием скачанной темы, как
		показано на рисунке ниже, и нажмите кнопку <strong>Restore (Восстановить)</strong>.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-02.png" alt="">
		</figure>
		
		<p class="alert alert-info">
			<span>Снапшот представляет собой копию базы данных с демонстрационными данными, а также файл с информацией об использованных модулях. Сохранен снапшот в формате базы данных MySQL.</span>
		</p>

		<p class="alert alert-warning">
			<span>Важно установить (развернуть) снапшот для того, чтобы заставить ваш сайт выглядеть так же, как на странице просмотра шаблона.</span>
		</p>
	</li>
	<li>
		<p>Нажмите на ссылку <strong>Visit your new site (Посетите свой новый сайт)</strong> или в адресной строке
		браузера наберите <strong>http://www.example.com/?q=user/login</strong>, где <strong>www.example.com</strong> - адрес
		вашего сайта.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-02-1.png" alt="">
		</figure>

		<p class="alert alert-warning">
			<span>Чтобы зайти на сайт в качестве администратора, используйте имя пользователя <strong>admin</strong> и пароль <strong>admin123</strong>. В целях безопасности мы рекомендуем вам сменить пароль сразу же после установки.</span>
		</p>
	</li>
	<li>
		Установка Drupal почти завершена. Последнее, что необходимо сделать, - обновить таблицы базы данных. В адресной
		строке браузера введите <strong>http://www.example.com/update.php</strong>, где <strong>www.example.com</strong>
		- адрес вашего сайта.
	</li>
	<li>
		Следуйте инструкциям на экране.
	</li>
	<li>
		После обновления перейдите по одной из ссылок: <strong>Front page (Главная страница сайта)</strong> или <strong>Administration
		pages (Панель администрирования сайта)</strong>.
	</li>
</ol>

<p>Вы можете просмотреть следующие инструкции:</p>
<ul class="marked-list">
	<li>
		<a href="/help/ru/how-to-install-drupal-template-using-demo-profile-possible-issues.html" target="_blank">Как
		установить шаблон Drupal с помощью демонстрационного профиля + возможные проблемы </a>
	</li>
</ul>