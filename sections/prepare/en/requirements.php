<h3>Minimal requirements</h3>
<p>To install and run Drupal your hosting server should meet the engine requirements. Most of the hosting companies meet
	the standards. However, there can be exceptions, that is why you should check the following properties.</p>

<h4>Disk space</h4>
<p>A minimum Drupal installation requires 15 Megabytes. 60 MB is needed for a website with many contributed modules and
	themes installed. Keep in mind you need much more space for the database, files uploaded by the users, media,
	backups and other files.</p>

<h4>Web-server</h4>
<p>
	Apache, Nginx или Microsoft IIS.<br>
	<a href="https://drupal.org/requirements/webserver" target="_blank">More details about web server requirements.</a>
</p>
<p class="alert alert-info">
	<span>Apache is the most commonly used web server for Drupal. The majority of Drupal development and testing is done on this server. That's why it's recommended to use Apache.</span>
</p>

<h4>Database</h4>
<p>MySQL 5.0.15 or higher with PDO, PostgreSQL 8.3 or higher with PDO, SQLite 3.3.7 or higher.</p>
<p class="alert alert-info">
	<span>When installing Drupal, please note that some of the modules may not support PostgreSQL and SQLite databases, moreover template configuration and sample data are stored in MySQL format. That is why it is recommended to use MySQL database only.</span></p>

<h4>PHP</h4>
<p>PHP 5.2.5 or higher (5.3 recommended).<br>
<a href="https://drupal.org/requirements/php" target="_blank">More details about PHP requirements.</a></p>

<h4>Validation</h4>
<p class="alert alert-info">Both HTML markup and CSS styles used in our templates are semantically correct and valid.
	However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website
	technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality
	templates and sometimes we have to break some rules.</p>