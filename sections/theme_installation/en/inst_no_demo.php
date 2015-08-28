<h3>Drupal theme installation without sample data</h3>
<p>Follow the instructions listed below to install the template without sample data:</p>
<ol class="index-list">
    <li><p>Copy all content of <strong>sample_data/sites/all/themes/</strong> folder from the template package to
            <strong>sites/all/themes/</strong>
            directory of the Drupal installation on your server.</p>

        <p class="alert alert-warning">
            <span>Note that some of the theme elements are made using modules. On the current installation step the front-end layout and theme functionality may differ from the one you've seen on the live demo, because the modules are not enabled.</span>
        </p>
        <p></p>
    </li>
    <li>To install modules copy the content of <strong>sample_data/sites/all/modules/</strong> and <strong>sample_data/sites/all/libraries/</strong>
        folders from the template package to <strong>sites/all/</strong> directory of the Drupal installation on your
        server. You can skip this step if you do not want to use the default template modules.
    </li>
    <li>Type your website URL in a browser's address bar to start Drupal installation process (check the screenshots
        that show next three steps, in the slider, after the point 6).
    </li>
    <li>On the initial setup page you will need to select the installation profile. Choose <strong>Standard</strong> and
        click <strong>Save and Continue</strong> button:
    </li>
    <li>On the next step fill in the fields with your database name, username, password and hostname of the previously
        created database.
    </li>
    <li>Register site administrator</li>
</ol>

<ol class="index-list">
    <li>
        <p>Select
            <em>Standard.</em>
        </p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-01-0.png" alt="Select Standard">
        </figure>
    </li>
    <li>
        <p>Fill in database details fields: database name, database user and password and database host.</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-01-1.png" alt="Fill DB data">
        </figure>
    </li>
    <li>
        <p>Register site administrator</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-01-2.png" alt="Register site administrator">
        </figure>
    </li>
    <li>
        <p>Open your new site.</p>

        <figure class="img-polaroid">
            <img src="img/inst-demo-02-1.png" alt="Click 'Visit your new site'">
        </figure>
    </li>
</ol>

<ol class="index-list">
    <li>Click <strong>Visit your new site</strong> link or in a browser's address bar type <strong>http://www.example.com/?q=user/login</strong>,
        where <strong>www.example.com</strong> is your website URL. To log in to Drupal admin panel use username and
        password specified on the previous step.
    </li>
    <li>In the admin panel navigate to <strong>Appearance</strong> menu or in a browser's address bar type <strong>http://www.example.com/?q=admin/appearance</strong>,
        where <strong>www.example.com</strong> is your website URL.
    </li>
    <li>Find your installed theme and click <strong>Enable and set default</strong>.

        <figure class="img-polaroid">
            <img src="img/inst-no-demo-01.png" alt="Enable theme">
        </figure>
    </li>
    <li>In case you've uploaded the modules folder on the second installation step, navigate to <strong>Modules</strong>
        menu in the admin panel or type <strong>http://www.example.com/?q=admin/modules</strong> in a browser's address
        bar, where <strong>www.example.com</strong> is your website URL. Activate the uploaded modules. More detailed
        information you can check in the <a href="#modules_settings">"Configuring modules"</a> section.
    </li>
</ol>
<p>Feel free to check the following instructions: </p>
<ul class="marked-list">
    <li><a href="/help/ru/how-upload-and-install-drupal-server.html" target="_blank">Drupal 7.x. How to install the
            engine

        </a>
    <li><a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. How to install Drupal theme

        </a></li>
</ul>