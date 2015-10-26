<h3>Fullpackage theme installation</h3>
<p class="alert alert-danger">
	<span>In this installation method you don't need to download and install the latest version of Drupal engine!</span>
</p>
<p>To install your theme with Fullpackage you should perform the following steps:</p>
<ol class="index-list">
	<li>
		Copy content of <strong>fullpackage/fullpackage.zip</strong> archive to the root directory of your
		Drupal installation on the server. This archive contains Drupal engine, theme files, modules, libraries, media files,
		demo profile, and some corrections required for the proper site functionality.
	</li>
	<li>
		Type your website URL in a browser's address bar to start Drupal installation process.
	</li>
	<li>
		<p>On the initial setup page you will need to select the installation profile. Choose <strong>Demonstration
		site</strong> and click <strong>Save and Continue</strong> button.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01.png" alt="">
		</figure>
	</li>
	<li>
		<p>Follow the instructions on the screen to install Drupal engine. Fill in the fields with your database name,
		username, password and hostname of the previously created database.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-01-1.png" alt="">
		</figure>
	</li>
	<li>
		<p>On the <strong>Choose snapshot</strong> step select the snapshop with the name of your theme, as it is shown on
		the screenshot below, and click the <strong>Restore</strong> button.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-02.png" alt="">
		</figure>
		
		<p class="alert alert-info">
			<span>Snapshot is a copy of a database that contains sample data and info about modules used in the template. The snapshot is in the MySQL database format. </span>
		</p>
		<p class="alert alert-warning">
			<span>To make your site look exactly like the template demo it is important to install the snapshot.</span>
		</p>
	</li>
	<li>
		<p>Click <strong>Visit your new site</strong> link or in a browser's address bar type <strong>http://www.example.com/?q=user/login</strong>,
			where <strong>www.example.com</strong> is your website URL.</p>
		
		<figure class="img-polaroid">
			<img src="img/inst-demo-02-1.png" alt="">
		</figure>

		<p class="alert alert-warning">
			<span>To log in as website administrator use the following details: username <strong>admin</strong> and password <strong>admin123</strong>. We recommend that you change the password immediately after installation for security reasons. </span>
		</p>
	</li>
	<li>
		Drupal installation is almost completed. The last thing to do is to update the database tables. In a browser's
		address bar type <strong>http://www.example.com/update.php</strong>, where <strong>www.example.com</strong> is
		your website URL.
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
		<a href="/help/ru/how-to-install-drupal-template-using-demo-profile-possible-issues.html" target="_blank">How to
		install Drupal template using demo profile + possible issues </a>
	</li>
</ul>