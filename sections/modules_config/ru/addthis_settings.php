<h3>Настройки кнопок "Поделиться"</h3>
<p class="alert alert-info">
	<span>За включение/отключение блока кнопок "Поделиться в социальных сетях" отвечает модуль <strong>AddThis</strong>.</span>
</p>

<p>Чтобы изменить глобальные настройки блока "Поделиться в социальных сетях", в панели администрирования зайдите на
	страницу <strong>Configuration > User interface > AddThis (Конфигурация > Пользовательский
	интерфейс > AddThis)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/config/user-interface/addthis</strong>,
	где <strong>www.example.com</strong> - адрес вашего сайта.</p>
<p>Данные настройки в большей мере относятся к блоку "AddThis", которым вы можете управлять как обычным блоком.</p>

<p class="alert alert-warning">
	<span>Не меняйте ничего в настройках, если вы не уверены.</span>
</p>

<p>Чтобы изменить настройки блока "Поделиться в социальных сетях" в типе содержимого <strong>Blog Entry (Запись
	блога)</strong>, выполните следующие инструкции:</p>
<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong> Structure > Content types > Blog entry
		(Структура > Типы материалов > Запись блога)</strong> и перейдите на вкладку <strong>Manage
		display (Управление отображением)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/types/manage/blog/display</strong>,
		где <strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		Выберите пункт <strong>Full content (Полная страница)</strong>.
	</li>
	<li>
		Нажмите на пиктограмму шестеренки напротив поля <strong>AddThis</strong>.
	</li>
	<li>
		<p>Измените набор иконок (полный список доступен на <a
		href="http://www.addthis.com/services/list">www.addthis.com</a>, через запятую укажите необходимые значения
		из колонки Code), размер иконок, ориентацию, при необходимости укажите дополнительный класс. Нажмите кнопку
		<strong>Update (Обновить)</strong>.</p>
		
		<figure class="img-polaroid">
			<img src="img/addthis-settings-01.png" alt="AddThis Settings">
		</figure>
	</li>
</ol>

<p>Чтобы удалить кнопки "Поделиться" из типа содержимого <strong>Blog Entry (Запись блога)</strong>, выполните следующие
	инструкции:</p>
<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong> Structure > Content types > Blog entry
		(Структура > Типы материалов > Запись блога)</strong> и перейдите на вкладку <strong>Manage fields
		(Управление полями)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/types/manage/blog/fields</strong>,
		где <strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		<p>Нажмите на ссылку <strong>delete (удалить)</strong> напротив поля <strong>AddThis</strong>, после чего
		подтвердите действие.</p>
		
		<figure class="img-polaroid">
			<img src="img/addthis-settings-02.png" alt="Delete AddThis field">
		</figure>
	</li>
</ol>

<p>Чтобы добавить кнопки "Поделиться" в любой другой тип материала, выполните следующие действия:</p>
<ol class="index-list">
	<li>
		В панели администрирования зайдите на страницу <strong> Structure > Content types > Content type name
		(Структура > Типы материалов > Имя типа материала)</strong>, где Content type name - имя
		необходимого типа материала.
	</li>
	<li>
		Перейдите на вкладку <strong>Manage fields (Управление полями)</strong>
	</li>
	<li>
		<p>В строке <strong>Add new field (Добавить новое поле)</strong> введите следующие параметры:</p>

		<ul class="marked-list">
			<li>
				<dl class="inline-term">
					<dt>label</dt>
					<dd>имя поля, любое удобное для вас название;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>машинное имя</dt>
					<dd>служебное название поля, генерируется автоматически, однако при необходимости вы можете изменить его;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>type of data to store</dt>
					<dd>тип данных, здесь необходимо выбрать <strong><em>AddThis</em></strong>;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>form element to edit the data</dt>
					<dd>тип элемента формы для управления полем, выберите <strong><em>AddThis button</em></strong>.</dd>
				</dl>
			</li>
		</ul>

		<figure class="img-polaroid">
			<img src="img/addthis-settings-03.png" alt="Add AddThis field">
		</figure>
	</li>
	<li>
		Нажмите кнопку <strong>Save (Сохранить)</strong>.
	</li>
	<li>
		Для настройки внешнего вида кнопок выполните действия, аналогичные действиям при настройке кнопок "Поделиться"
		для типа материала <em>Blog entry (Запись блога)</em>.
	</li>
</ol>