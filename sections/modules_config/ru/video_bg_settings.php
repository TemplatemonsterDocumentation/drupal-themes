<h3>Настройка видео на фоне</h3>
<p class="alert alert-info">
	<span>За включение/отключение эффекта видео на фоне для блоков отвечает модуль <strong>TM Block Background</strong>.</span>
</p>
<p>Создать блок с эффектом видео на фоне можно двумя способами.</p>
<h4>Способ №1.</h4>
<ol class="index-list">
	<li>
		Зайдите в настройки темы: в панели администрирования откройте страницу <strong>Appearance > Settings > Theme### (Внешний вид > Настройки > Theme###)</strong>.
	</li>
	<li>
		Перейдите на вкладку <strong>Regions Settings (Настройки регионов)</strong>.
	</li>
	<li>
		<p>В подходящем регионе поставьте галочку в поле <strong>Fullwidth (На всю ширину экрана)</strong>.</p>

		<figure class="img-polaroid"><img src="img/parallax-settings-01.png" alt="Make region fullwidth"></figure>
	</li>
	<li>
		Сохраните настройки.
	</li>
	<li>
		Создайте новый блок: в панели администрирования зайдите на страницу <strong>Structure > Blocks > Add block (Структура > Блоки 
		> Добавить блок)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block/add</strong>,
		где <strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		<p>Поместите содержимое блока между тегами </p>
		
		<code>&lt;div class="container-12"&gt;&lt;div
				class="grid-12"&gt;</code>

		<p>и</p>
		
		<code>&lt;/div&gt;&lt;/div&gt;</code>
		
		<figure class="img-polaroid">
			<img src="img/parallax-settings-02.png" alt="Add grids to block body">
		</figure>
	</li>
	<li>
		В блоке <strong>Region settings (Настройка региона)</strong> в поле с установленной темой укажите регион, отредактированный в п.3.
	</li>
	<li>
		<p>В блоке <strong>TM Block background settings (TM настройки фона блока)</strong> укажите следующие значения:</p>

		<ul class="marked-list">
			<li>в поле <strong>Background type (Тип фона)</strong> укажите <strong><em>video (видео)</em></strong>;</li>
			<li>в поле <strong>Background Video URL (Путь к фоновому видео)</strong> укажите ссылку на видео с <strong>YouTube</strong>;</li>
			<li>при необходимости в поле <strong>Start video at (Начать видео с)</strong> укажите с какой секунды начать проигрывать видео. Оставьте поле пустым, чтоб видео проигрывалось с начала.</li>
		</ul>

		<figure class="img-polaroid">
			<img src="img/video-settings-01.png" alt="Manage block background settings">
		</figure>
	</li>
	<li>
		Заполните прочие поля и сохраните сделанные изменения.
	</li>
</ol>

<h4>Способ №2.</h4>
<ol class="index-list">
	<li>
		Зайдите в настройки темы: в панели администрирования откройте страницу <strong>Appearance > Settings > Theme### (Внешний вид > Настройки > Theme###)</strong>.
	</li>
	<li>
		Перейдите на вкладку <strong>Regions Settings (Настройки регионов)</strong>.
	</li>
	<li>
		<p>В подходящем регионе укажите следующие значения полей:</p>
		<ul class="marked-list">
			<li>в поле <strong>Background type (Тип фона)</strong> укажите <strong><em>video (видео)</em></strong>;</li>
			<li>в поле <strong>Background Video URL (Путь к фоновому видео)</strong> укажите ссылку на видео с <strong>YouTube</strong>;</li>
			<li>при необходимости в поле <strong>Start video at (Начать видео с)</strong> укажите с какой секунды начать проигрывать видео. Оставьте поле пустым, чтоб видео проигрывалось с начала.</li>
		</ul>
		<figure class="img-polaroid">
			<img src="img/video-settings-02.png" alt="Manage region settings">
		</figure>
	</li>
	<li>
		Сохраните внесенные изменения.
	</li>
	<li>
		Перейдите на страницу <strong>Structure > Blocks (Структура > Блоки)</strong> или в адресной строке браузера наберите <strong>http://www.example.com/?q=admin/structure/block</strong>, где <strong>www.example.com</strong> - адрес вашего сайта.
	</li>
	<li>
		Поместите необходимый блок в данный регион.
	</li>
	<li>
		Сохраните сделанные изменения.
	</li>
</ol>