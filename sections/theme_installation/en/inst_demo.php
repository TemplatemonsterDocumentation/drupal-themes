<h3>Drupal theme installation with sample data</h3>
<p class="alert alert-danger">
    <span>Sample data demo profile should be uploaded to a server BEFORE you install the Drupal engine!</span>
</p>
<p>To install your theme with sample data you should perform the following steps:</p>
<ol class="index-list">
    <li><p>Copy content of <strong>sample_data/</strong> folder from the template package to the root directory of your
            Drupal installation on the server. You can overwrite the existing engine files. This folder contains theme
            files, modules, libraries, media files, demo profile, and some corrections required for the proper site
            functionality.</p>

        <p class="alert alert-info">
            <span>Replacement of these files adds a new option to the installation process so it will not effect the engine installation in any way.</span>
        </p>
        <p></p>
    </li>
    <li>Type your website URL in a browser's address bar to start Drupal installation process (check the screenshots
        that show next three steps, in the slider, after the point 5).
    </li>
    <li>On the initial setup page you will need to select the installation profile. Choose <strong>Demonstration
            site</strong> and click <strong>Save and Continue</strong> button.
    </li>
    <li>Follow the instructions on the screen to install Drupal engine. Fill in the fields with your database name,
        username, password and hostname of the previously created database.
    </li>
    <li>On the <strong>Choose snapshot</strong> step select the snapshop with the name of your theme, as it is shown on
        the screenshot below, and click the <strong>Restore</strong> button.
    </li>
</ol>
<p class="alert alert-info">
    <span>Snapshot is a copy of a database that contains sample data and info about modules used in the template. The snapshot is in the MySQL database format. </span>
</p>
<p class="alert alert-warning">
    <span>To make your site look exactly like the template demo it is important to install the snapshot.</span>
</p>
<ol class="index-list">
    <li>
        <p>Select
            <em>Demonstration site.</em>
        </p>
        <figure class="img-polaroid">
            <img src="img/inst-demo-01.png" alt="">
        </figure>
    </li>

    <li><p>Fill in database details fields: database name, database user and password and database host.</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-01-1.png" alt="">
        </figure>
    </li>

    <li><p>Select the snapshot with the name of your theme.</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-02.png" alt="">
        </figure>
    </li>

    <li><p>Open your new site.</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-02-1.png" alt="">
        </figure>
    </li>
</ol>

<ol class="index-list">
    <li><p>Click <strong>Visit your new site</strong> link or in a browser's address bar type <strong>http://www.example.com/?q=user/login</strong>,
            where <strong>www.example.com</strong> is your website URL.</p>

        <p class="alert alert-warning">
            <span>To log in as website administrator use the following details: username <strong>admin</strong> and password <strong>admin123</strong>. We recommend that you change the password immediately after installation for security reasons. </span>
        </p>
        <p></p>
    </li>
    <li>Drupal installation is almost completed. The last thing to do is to update the database tables. In a browser's
        address bar type <strong>http://www.example.com/update.php</strong>, where <strong>www.example.com</strong> is
        your website URL.
    </li>
    <li>Follow the instructions on the screen.</li>
    <li>After the update is done, click one of the links: <strong>Front page</strong> or <strong>Administration
            pages</strong>.
    </li>
</ol>
<p>Feel free to check the following instructions:</p>

<ul class="marked-list">
    <li><a href="/help/ru/how-to-install-drupal-template-using-demo-profile-possible-issues.html" target="_blank">How to
            install Drupal template using demo profile + possible issues
        </a>
    </li>
</ul>