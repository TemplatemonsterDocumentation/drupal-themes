<h3>Using Parallax effect</h3>
<p class="alert alert-info">
	<span>The <strong>TM Block Background</strong> module controls the activation/deactivation of the parallax effect for blocks.</span>
</p>
<p>There are 2 ways to create a block with parallax effect.</p>

<h4>Method #1.</h4>
<ol class="index-list">
	<li>
		Open the theme settings: in the admin panel navigate to <strong>Appearance > Settings >
		Theme### </strong> menu.
	</li>
	<li>
		Open <strong>Regions Settings</strong> tab.
	</li>
	<li>
		<p>In the needed region check <strong>Fullwidth</strong> option.</p>

		<figure class="img-polaroid">
			<img src="img/parallax-settings-01.png" alt="Make region fullwidth">
		</figure>
	</li>
	<li>
		Save the changes.
	</li>
	<li>
		Create a new block: in the admin panel navigate to <strong>Structure > Blocks > Add block </strong>
		menu or in a browser's address bar type <strong>http://www.example.com/?q=admin/structure/block/add</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		<p>Insert the block content between </p>

		<code>&lt;div class="container-12"&gt;&lt;div class="grid-12"&gt;</code>

		<p>and</p>

		<code>&lt;/div&gt;&lt;/div&gt;</code>

		<p>tags.</p>

		<figure class="img-polaroid">
			<img src="img/parallax-settings-02.png" alt="Add grids to block body">
		</figure>
	</li>
	<li>
		In the <strong>Region settings</strong> section for the installed theme select the region you've edited at the
		step 3.
	</li>
	<li>
		<p>In the <strong>TM Block background settings</strong> section specify the following parameters:</p>

		<ul class="marked-list">
			<li>in the <strong>Background type</strong> field choose <strong><em>image</em> value</strong>;</li>
			<li>in the <strong>Background image</strong> field upload the required image or select it from the media library;</li>
			<li>check <strong>Use parallax</strong> option.</li>
		</ul>

		<figure class="img-polaroid">
			<img src="img/parallax-settings-04.png" alt="Manage block background settings">
		</figure>
	</li>
	<li>Fill in other fields and save the changes.</li>
</ol>

<h4>Method #2.</h4>
<ol class="index-list">
	<li>
		Open the theme settings: in the admin panel navigate to <strong>Appearance > Settings >
		Theme### </strong> menu.
	</li>
	<li>
		Open <strong>Regions Settings</strong> tab.
	</li>
	<li>
		<p>In the needed region specify the following parameters:</p>

		<ul class="marked-list">
			<li>in the <strong>Background type</strong> field choose <strong><em>image</em> value</strong>;</li>
			<li>in the <strong>Background image</strong> field upload the required image or select it from the media library;</li>
			<li>check <strong>Use parallax</strong> option.</li>
		</ul>
	</li>
	<li>
		<p>Save the changes.</p>

		<figure class="img-polaroid">
			<img src="img/parallax-settings-03.png" alt="Manage region settings">
		</figure>
	</li>
	<li>
		Navigate to <strong>Structure > Blocks</strong> menu or in a browser's address bar type <strong>http://www.example.com/?q=admin/structure/block</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		Put the needed block to the edited region.
	</li>
	<li>
		Save the changes.
	</li>
</ol>