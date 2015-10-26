<h3>Google Web Fonts</h3>
<p>В случае, если Google Web Fonts не работают (например, в случае запрета сервисов Google), выполните следующие действия:</p>
<ol class="index-list">
	<li>
		Распакуйте архив со скачанной темой на свой компьютер.
	</li>
	<li>
		Откройте в текстовом редакторе (например, <strong><em>notepad</em></strong>, <strong><em>notepad++</em></strong> и т.п.) файл 
		<strong>sites\all\themes\theme###\less\style.less</strong>, где <strong>theme###</strong> - номер скачанной вами темы.
	</li>
	<li>
		<p>Замените адрес <strong>fonts.googleapis.com</strong> на <strong>fonts.useso.com</strong>. Например, необходимо заменить:</p>
		<pre><code>@import url(//fonts.googleapis.com/css?family=Open+Sans);</code></pre>
		<p>на</p>
		<pre><code>@import url(//fonts.useso.com/css?family=Open+Sans);</code></pre>
	</li>
	<li>
		Сохраните внесенные изменения.
	</li>
	<li>
		Перезалейте измененный файл на свой хостинг.
	</li>
</ol>