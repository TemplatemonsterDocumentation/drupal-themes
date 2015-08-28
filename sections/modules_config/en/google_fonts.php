<h3>Google Web Fonts</h3>
<p>In case when Google Web Fonts do not work on your site (for example, if Google servers are banned in your country), perform the following steps:</p>
<ol class="index-list">
    <li>Extract files from the downloaded template package to your computer.</li>
    <li>Via any text editor (f.e., <strong><em>notepad</em></strong>, <strong><em>notepad++</em></strong>, etc.) open <strong>sites\all\themes\theme###\less\style.less</strong> file, where <strong>theme###</strong> is the number of the downloaded theme.</li>
    <li>
        <p>Change the address <strong>fonts.googleapis.com</strong> to <strong>fonts.useso.com</strong>. For example, change:</p>
        <pre><code>@import url(//fonts.googleapis.com/css?family=Open+Sans);</code></pre>
        <p>to</p>
        <pre><code>@import url(//fonts.useso.com/css?family=Open+Sans);</code></pre>
    </li>
    <li>Save the changes.</li>
    <li>Re-upload the edited file to your server.</li>
</ol>