<h3>Управление представлениями (Views)</h3>
<p>Большая часть содержимого шаблона создана с помощью представлений, таких как:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>Archive (Архив)</dt>
			<dd>собирает тип материала "Blog entry" (Запись блога), группирует их по месяцам года и выводит в виде блока или страницы.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Banners (Баннеры)</dt>
			<dd>собирает записи материала типа "Banner" (Баннер) и отображает их в качестве блока.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Categories (Категории)</dt>
			<dd>собирает термины таксономии из словаря <em>"Blog categories" (Категории блога)</em> и выводит их в виде блока.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>FAQs (ЧАВО)</dt>
			<dd>собирает записи материала типа FAQs(ЧАВО) и выводит их в виде страницы.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Portfolio (Портфолио)</dt>
			<dd>собирает записи материала типа "Portfolio Item" (Элемент портфолио) и выводит их в виде страниц Portfolio (Gallery, Services) в две, три или четыре колонки.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Portfolio filter (Фильтр портфолио)</dt>
			<dd>создает блок фильтра для портфолио, используется в представлении "Portfolio" (Портфолио).</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Recent comments (Последние комментарии)</dt>
			<dd>собирает комментарии и выводит их в виде блока или страницы.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Recent posts (Последние записи)</dt>
			<dd>собирает записи материала типа "Blog entry" (Запись блога) и выводит их в виде блока.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Slider (Слайдер)</dt>
			<dd>собирает записи материала типа "Slide" (Слайд) и выводит их в виде блока слайдера.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Team (Команда)</dt>
			<dd>собирает записи материала типа "Employee" (Сотрудник) и выводит их в виде блока.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Testimonials (Отзывы)</dt>
			<dd>собирает записи материала типа "Testimonial" (Отзыв) и выводит их в виде страницы или блока.</dd>
		</dl>
	</li>
	<li>
		и прочие.
	</li>
</ul>
<p>Для управления представлениями выполните следующие действия:</p>
<ol class="index-list">
	<li>
		Чтоб просмотреть все существующие представления, в панели администрирования зайдите на страницу <strong>Structure >
		Views (Структура > Представления)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/views</strong>,
		где <strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		<p>Чтобы создать новое представление, нажмите на ссылку <strong>Add new view (Добавить новое
		представление)</strong> вверху открывшейся страницы.</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-01.png" alt="Click 'Add new view'">
		</figure>
	</li>
	<li>
		На открывшейся странице заполните название представления, тип материала, вид сортировки, в каком виде
		отображать.
	</li>
	<li>
		<p>Чтобы указать дополнительные параметры, нажмите кнопку <strong>Continue &amp; edit (Продолжить и
		редактировать)</strong>. Чтобы закончить создание представления, нажмите кнопку <strong>Save &amp; exit
		(Сохранить и выйти)</strong>.</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-02.png" alt="Fill view data">
		</figure>
	</li>
	<li>
		<p>Чтобы отредактировать существующее представление, выберите пункт <strong>Edit (Редактировать)</strong> в
		выпадающем списке напротив нужного представления.</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-03.png" alt="Click 'Edit'">
		</figure>

		<p class="alert alert-warning">
			<span>Не вносите изменения в существующие представления, если вы не уверены в том, что вы делаете.</span>
		</p>
	</li>
	<li>
		<p>Чтобы удалить существующее представление, выберите пункт <strong>Delete (Удалить)</strong> в выпадающем
		списке напротив нужного представления.</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-04.png" alt="Click 'Delete'">
		</figure>
	</li>
	<li>
		<p>Представлениями, которые отображены в виде блоков, можно управлять так же, как и обычными блоками. Вы также
		можете попасть на страницу настроек представления в виде блока со страниц своего сайта. Для этого наведите
		курсор мышки на нужный вам блок, затем нажмите на пиктограмму шестеренки в правом верхнем углу блока и
		выберите пункт <strong>Configure block (Настроить блок)</strong>:</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-05.png" alt="Click 'Edit view'">
		</figure>
	</li>
	<li>
		<p>Аналогичным образом настраиваются представления, которые отображены в виде страниц. Наведите курсор мышки на
		область содержимого нужной вам страницы, затем нажмите на пиктограмму шестеренки в правом верхнем углу
		страницы и выберите пункт <strong>Edit view (Настроить представление)</strong>:</p>

		<figure class="img-polaroid">
			<img src="img/views-manage-06.png" alt="Click 'Edit view'">
		</figure>
	</li>
</ol>

<p>Вы также можете посмотреть следующие инструкции:</p>
<ul class="marked-list">
	<li>
		<a target="_blank" href="/help/ru/drupal-7-how-to-use-views-module-and-editconfigure-it.html"> Drupal 7. Как
		использовать и настраивать модуль отображения контента <i class="icon-external-link"></i></a>
	</li>
</ul>