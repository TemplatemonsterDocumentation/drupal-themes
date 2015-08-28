<h3>Drupal theme installation without sample data over the existing site</h3>
<p>To install Drupal theme without sample data over the existing site you should perform the following steps:</p>
<ol class="index-list">
    <li><p>Copy content of <strong>sample_data/sites/all/themes/</strong> folder from the template package to <strong>sites/all/themes/</strong>
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
    <li>Log in to Drupal website as administrator.</li>
    <li>In the admin panel navigate to <strong>Appearance</strong> menu or in a browser's address bar type <strong>http://www.example.com/?q=admin/appearance</strong>,
        where <strong>www.example.com</strong> is your website URL.
    </li>
    <li><p>Find your installed theme and click <strong>Enable and set default</strong>.</p>

        <figure class="img-polaroid">
            <img src="img/inst-no-demo-01.png" alt="Enable theme">
        </figure>
    </li>
    <li>In case you've uploaded the modules folder on the second installation step, navigate to <strong>Modules</strong>
        menu in the admin panel or type <strong>http://www.example.com/?q=admin/modules</strong> in a browser's address
        bar, where <strong>www.example.com</strong> is your website URL. Activate the uploaded modules. More detailed
        information you can check in <a href="#modules_settings">"Configuring modules"</a> section.
    </li>
</ol>
<p>Feel free to check the following instructions: </p>
<ul class="marked-list">
    <li><a href="/help/ru/how-to-install-drupal-7-theme.html" target="_blank">Drupal 7.x. How to install Drupal theme

        </a></li>
</ul>