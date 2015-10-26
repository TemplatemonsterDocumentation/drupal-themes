<h3>Шоткоды</h3>
<p><strong>Шоткод</strong> (<strong>Shortcode</strong> в пер. с анг. - короткий код) создан для того, чтобы не писать
	весь программный код для выполнения определенной функции, состоящего из несколько десятков строк, а заменить его
	маленьким коротким кодом, состоящим в основном из 1-2 слов.</p>
<p class="alert alert-warning">
	<span>Чтобы задействовать шоткоды, необходимо включить модули <strong>Shortcode, TM Shortcodes</strong>.</span>
</p>
<p>Список доступных шоткодов вы можете просмотреть в блоке <strong>Text format (Текстовые форматы)</strong> при создании
	материала.</p>

<figure class="img-polaroid">
	<img src="img/shortcode-tips.png" alt="Shortcode tips">
</figure>

<p>Вы можете воспользоваться следующими шоткодами:</p>

<p><strong>[clear][/clear]</strong> - шоткод для очистки плавающих блоков. Имеет следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>id</dt>
			<dd>идентификатор (id) элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>type</dt>
			<dd>тип элемента: блочный (div, d) или строчный (span, s).</dd>
		</dl>
	</li>
</ul>

<p><strong>[col][/col]</strong> - шоткод для вывода содержимого в колонках. Имеет следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>align</dt>
			<dd>выравнивание колонки: <em>right</em> - колонка будет отображаться с правой стороны внещнего блока, <em>center</em> - колонка будет выровнена по центру внешнего блока;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>clear</dt>
			<dd>очистка плавающих элементов: <em>clear-both</em> - слева и справа, <em>clear-left</em> - только слева, <em>clear-right</em> - только справа;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>last</dt>
			<dd>должен иметь значение "1" для последней колонки.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>width</dt>
			<dd>ширина колонки: <em>1-2</em> - половина, <em>1-3</em> - треть, <em>2-3</em> - две третьих, <em>1-4</em> - четверть, <em>3-4</em> - три четверти, <em>1-5</em> - одна пятая, <em>2-5</em> - две пятые, <em>3-5</em> - три пятые, <em>4-5</em> - четыре пятых, <em>1-6</em> - одна шестая или <em>5-6</em> - пять шестых ширины внешнего блока.</dd>
		</dl>
	</li>
</ul>
<p>Данный шоткод рекомендуется использовать внутри шоткода <strong> <em>[clear][/clear]</em></strong>.</p>
<p>Пример использования шоткода:</p>
<pre><code>[clear type="div"]
[col width="1-3"]Содержимое колонки[/col]
[col width="1-3"]Содержимое колонки[/col]
[col width="1-3" last="1"]Содержимое колонки[/col]
[/clear]</code></pre>
<p>Возможные варианты использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-01.png" alt="Sortcode 'Column'">
</figure>

<p><strong>[counter][/counter]</strong> - шоткод для отображения анимированных счетчиков. Имеет следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>number</dt>
			<dd>любое целое число;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>timer</dt>
			<dd>скорость в миллисекундах, с которой будет происходить отсчет от 0 до указанного числа.</dd>
		</dl>
	</li>
</ul>
<p>Содержимое шоткода служит заголовком.</p>
<p>Пример использования шоткода:</p>
<pre><code>[counter number="300" timer="30" class="custom-class"]Заголовок[/counter]</code></pre>
<p>Возможные варианты использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-02.png" alt="Sortcode 'Counter'">
</figure>

<p><strong>[icon][/icon]</strong> - шоткод для отображения шрифтовых иконок. Во фреймворке использована версия
Font 4.1.0. Шоткод имеет следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>класс шрифтовой иконки;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>link</dt>
			<dd>URL-адрес при необходимости сделать иконку ссылкой.</dd>
		</dl>
	</li>
</ul>
<p>Пример использования шоткода:</p>
<pre><code>[icon class="fa-star"]Текст[/icon]</code></pre>
<p>Возможные варианты использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-03.png" alt="Sortcode 'Font icon'">
</figure>

<p><strong>[gmap][/gmap]</strong> - шоткод для вставки Google-карт. Шоткод имеет следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>lat_coord</dt>
			<dd>координата широты;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>lng_coord</dt>
			<dd>координата долготы;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>zoom_value</dt>
			<dd>начальный уровень масштабирования карты. Доступны значения от 1 до 20;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>zoom_wheel</dt>
			<dd>установка прокрутки карты колесиком мышки. Доступны значения "yes" и "no".</dd>
		</dl>
	</li>
</ul>
<p>Пример использования шоткода:</p>
<pre><code>[gmap lat_coord="41.850033" lng_coord="-87.6500523" zoom_value="15" zoom_wheel="no" class="custom-class"][/gmap]</code></pre>
<p>Возможные варианты использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-06.png" alt="Sortcode 'Piegraph'">
</figure>

<p><strong>[piegraph][/piegraph]</strong> - шоткод для отображения кругового индикатора процессов. Шоткод имеет
	следующие атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>barcolor</dt>
			<dd>цвет фоновой полосы;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>linewidth</dt>
			<dd>ширина полосы, любое целое число;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>percent</dt>
			<dd>прогресс в процентах (0-100);</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>trackcolor</dt>
			<dd>цвет трека (полосы прогресса);</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>width</dt>
			<dd>диаметр прогрессбара, любое целое число.</dd>
		</dl>
	</li>
</ul>
<p>Содержимое шоткода служит заголовком.</p>
<p>Пример использования шоткода:</p>
<pre><code>[piegraph percent="60" width="200" barcolor="#21c2f8" trackcolor="#cccccc" linewidth="3"]Заголовок[/piegraph]</code></pre>
<p>Вариант использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-04.png" alt="Sortcode 'Piegraph'">
</figure>

<p><strong>[progressbar][/progressbar]</strong> - шоткод для отображения прогрессбаров. Шоткод имеет следующие
атрибуты:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>дополнительный класс элемента;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>percent</dt>
			<dd>прогресс в процентах (0-100);</dd>
		</dl>
	</li>
</ul>
<p>Содержимое шоткода служит заголовком.</p>
<p>Пример использования шоткода:</p>
<pre><code>[progressbar percent="30"]Заголовок[/progressbar]</code></pre>
<p>Возможные варианты использования:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-05.png" alt="Sortcode 'Progressbar'">
</figure>