<h3>Управление меню</h3>
<p>В шаблоне могут быть использованы следующие типы меню:</p>
<ul class="marked-list">
	<li>
		<strong>Main menu (Главное меню)</strong> содержит ссылки на основные страницы сайта;
	</li>
	<li>
		<strong>User menu (Пользовательское меню)</strong> содержит ссылки, связанные с учетной записью пользователя, такие как "Зарегистрироваться", "Войти" и пр.;
	</li>
	<li>
		<strong>Footer menu (Меню в подвале сайта)</strong> дублирует главное меню.
	</li>
</ul>
<p>Рассмотрим каждое из них более детально.</p>

<h4>Главное меню</h4>
<p><strong>Чтобы отредактировать ссылки главного меню, выполните следующие действия:</strong></p>
<p>В панели администрирования зайдите на страницу <strong>Structure > Menus (Структура > Меню)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/menu</strong>, где <strong>www.example.com</strong> - адрес вашего сайта.</p>
<p>Напротив данного меню нажмите на ссылку <strong>List links (Просмотреть ссылки)</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-01.png" alt="Click 'List links'">
</figure>

<p>Чтобы добавить ссылку, нажмите <strong>Add link (Добавить ссылку)</strong> вверху страницы.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-02.png" alt="Click 'Add link'">
</figure>

<p>Чтобы отредактировать ссылку, нажмите <strong>Edit (Редактировать)</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-03.png" alt="Click 'Edit'">
</figure>

<p>Чтобы удалить ссылку, нажмите <strong>Delete (Удалить)</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-04.png" alt="Click 'delete'">
</figure>

<p>Чтобы изменить порядок ссылок, перетащите ссылку в нужную позицию, а затем нажмите кнопку <strong>Save configuration (Сохранить конфигурацию)</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-05.png" alt="Drag&amp;Drop link">
</figure>

<p><strong>Чтобы настроить выпадающее меню, выполните следующие инструкции:</strong></p>

<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong>Structure > Blocks (Структура > Блоки)</strong>
		или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block</strong>, где
		<strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		Найдите блок с названием данного меню.
	</li>
	<li>
		Нажмите на ссылку <strong>Configure (Настроить)</strong> напротив данного блока.
	</li>
	<li>
		<p>Внесите изменения в разделе <strong>Superfish settings (Настройки Superfish)</strong>.</p>

		<figure class="img-polaroid">
			<img src="img/menu-manage-06.png" alt="Fill Superfish settings">
		</figure>
	</li>
	<li>
		Нажмите кнопку <strong>Save block (Сохранить блок)</strong>.
	</li>
</ol>

<p><strong>Чтобы переместить меню, выполните следующие инструкции:</strong></p>
<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong>Structure > Blocks (Структура > Блоки)</strong>
		или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block</strong>, где
		<strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		Найдите блок с названием данного меню.
	</li>
	<li>
		Переместите блок меню в нужный регион так же, как обычный блок.
	</li>
	<li>
		Нажмите кнопку <strong>Save blocks (Сохранить блоки)</strong>.
	</li>
</ol>

<h4>Пользовательское меню</h4>
<p>Пользовательское меню - это стандартное меню Drupal. Оно не имеет выпадающих вложенных меню. Чтобы отредактировать
	или переместить данное меню, вы можете воспользоваться теми же инструкциями, что и для главного меню.</p>

<h4>Меню в подвале сайта</h4>
<p>Меню в подвале сайта дублирует главное меню. Чтобы настроить данное меню, выполните следующие инструкции:</p>
<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong>Structure > Blocks (Структура > Блоки)</strong>
		или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block</strong>, где
		<strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		Найдите блок с названием данного меню.
	</li>
	<li>
		Нажмите на ссылку <strong>Configure (Настроить)</strong> напротив данного блока.
	</li>
	<li>
		<p>На открывшейся странице, кроме стандартных полей блока, заполните следующие поля:</p>

		<ul class="marked-list">
			<li>
				<strong>Menu (Меню)</strong> - название меню, которое следует дублировать;
			</li>
			<li>
				<strong>Starting level (Начальный уровень)</strong> - видимость блока на странице. Блоки, которые
				начинаются с первого уровня, всегда будут видны. Блоки, которые начинаются со второго и более уровня,
				будут видны на страницах, где данные пункты меню будут активными.
			</li>
			<li>
				<strong>Maximum depth (Максимальная глубина)</strong> - количество отображаемых уровней меню. Поставьте
				1, чтоб исключить все подменю.
			</li>
		</ul>
	</li>
	<li>
		<p>Нажмите кнопку <strong>Save block (Сохранить блок)</strong>.</p>

		<figure class="img-polaroid">
			<img src="img/menu-manage-07.png" alt="Fill block options">
		</figure></li>
</ol>

<p>Вы также можете посмотреть следующие инструкции:</p>
<ul class="marked-list">
	<li>
		<a target="_blank" href="/help/ru/drupal-7-how-to-install-drop-down-menu-module.html"> Drupal 7. Как установить
		модуль выпадающего меню (Superfish) <i class="icon-external-link"></i></a>
	</li>
	<li>
		<a href="/help/ru/drupal-7-how-to-add-a-new-page-and-a-new-menu-button.html" target="_blank"> Drupal 7. Как
		добавить новую страницу и кнопку меню <i class="icon-external-link"></i></a>
	</li>
	<li>
		<a href="https://drupal.org/node/754652" target="_blank">Документация по модулю Superfish
		<i class="icon-external-link"></i></a>
	</li>
</ul>