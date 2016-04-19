<h3>Drupal theme installation with sample data over the existing site</h3>
<p class="alert alert-danger">
	<span>Theme installation with sample data will erase all your website content and setting and replace it with the sample one!</span>
</p>
<p class="alert alert-warning">
	<span>We highly recommend that you <a href="/help/ru/phpmyadmin-how-to-backup-a-database.html" target="_blank">backup
	your database</a> before installing the theme using snapshot.</span>
</p>
<p>If you have a running Drupal website and still want to install the theme with sample data please follow the
	instructions below:</p>
<ol class="index-list">
	<li>
		Copy content of <strong>sample_data/sites/all/</strong> folder from the template package to
		<strong>sites/all/</strong> directory of the Drupal installation on your server.
	</li>
	<li>
		<p>Copy content of <strong>sample_data/sites/default/</strong> folder from the template package to <strong>sites/default/</strong>
		directory of the Drupal installation on your server.</p>
		
		<p class="alert alert-danger">
			<span>Be careful replacing the files! DO NOT replace "settings.php" and "default.settings.php" files, otherwise you will have to re-install the Drupal engine!</span>
		</p>
	</li>
	<li>
		Log in to Drupal website as administrator.
	</li>
	<li>
		In the admin panel navigate to <strong>Configuration > File system</strong> menu or follow the link
		<strong>http://www.example.com/?q=admin/config/media/file-system</strong>, where
		<strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		In the <strong>Private file system path</strong> field set <strong>sites/default/private/files</strong> value.
	</li>
	<li>
		Then in the admin panel open <strong>Modules</strong> menu or follow the link <strong>http://www.example.com/?q=admin/modules</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		Make sure that <strong>Demonstration site</strong> module is enabled.</li>
	<li>
		In the admin panel navigate to <strong>Structure > Snapshots</strong> menu, open <strong>Reset </strong>
		tab or follow the link <strong>http://www.example.com/?q=admin/structure/demo/reset</strong>, where <strong>www.example.com</strong>
		is your website URL.
	</li>
	<li>
		<p>Select the <strong>theme###</strong> snapshot, where ### is the number of your theme.</p>

		<figure class="img-polaroid">
			<img src="img/inst-demo-exs-site-01.png" alt="Select snapshot">
		</figure>
	</li>
	<li>
		Click <strong>Reset</strong> button. Confirm the action.
	</li>
	<li>
		<p>Log in to Drupal website as administrator.</p>
		<p class="alert alert-warning">
			<span>To log in to your website as administrator after the sample data is installed, use username <strong>admin</strong> and password <strong>admin123</strong>. We recommend that you change the password immediately after installation for security reasons.</span>
		</p>
	</li>
	<li>
		The last thing to do is to update the database tables. In a browser's address bar type <strong>http://www.example.com/update.php</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		Follow the instructions on the screen.
	</li>
	<li>
		After the update is done, click one of the links: <strong>Front page</strong> or <strong>Administration
		pages</strong>.
	</li>
</ol>
<p>Feel free to check the following instructions:</p>
<ul class="marked-list">
	<li>
		<a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. How to install a theme</a>
	</li>
	<li>
		<a href="/help/ru/how-to-install-drupal-7-theme-sample-data.html" target="_blank">Drupal 7.x. How to install
		sample data</a>
	</li>
</ul>