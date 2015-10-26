<h3>Configuring "Social Share" buttons</h3>
<p class="alert alert-info">
	<span>The <strong>AddThis</strong> module controls the activation/deactivation of the "Social Share" block.</span>
</p>
<p>To change global settings of the "Social Share" block, in the admin panel navigate to <strong>Configuration >
	User interface > AddThis </strong> menu or in a browser's address bar type <strong>http://www.example.com/?q=admin/config/user-interface/addthis</strong>,
	where <strong>www.example.com</strong> is your website URL.</p>
<p>These settings controls the "AddThis" module functionality, however you can manage this module the same way as a
	regular block.</p>
<p class="alert alert-warning">
	<span>Do not change that settings, if you are not sure.</span>
</p>
<p>To change the "Social Share" block settings for the <strong>Blog Entry</strong> content type, follow the instructions below:</p>
<ol class="index-list">
	<li>
		In the admin panel open <strong> Structure > Content types > Blog entry </strong> menu and navigate to
		<strong>Manage display </strong> tab or in a browser's address bar type <strong>http://www.example.com/?q=admin/structure/types/manage/blog/display</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		Check <strong>Full content</strong> option.
	</li>
	<li>
		Click the gear wheel icon next to the <strong>AddThis</strong> field.
	</li>
	<li>
		<p>Change the names of the sharing services (the full list of names is available on the site <a
		href="http://www.addthis.com/services/list">www.addthis.com</a>, separate with commas required values from
		the Code column), change buttons size, counter orientation, specify extra CSS classes, if you need them. Press
		<strong>Update</strong> button.</p>
		
		<figure class="img-polaroid">
			<img src="img/addthis-settings-01.png" alt="AddThis Settings">
		</figure>
	</li>
</ol>

<p>To remove "Social Share" buttons from the <strong>Blog Entry</strong> content type, follow the instructions below:</p>
<ol class="index-list">
	<li>
		In the admin panel open <strong> Structure > Content types > Blog entry </strong> menu and navigate to
		<strong>Manage Fields </strong> tab or in a browser's address bar type <strong>http://www.example.com/?q=admin/structure/types/manage/blog/fields</strong>,
		where <strong>www.example.com</strong> is your website URL.
	</li>
	<li>
		<p>Click <strong>delete</strong> link next to the <strong>AddThis</strong> field and confirm the action.</p>
		
		<figure class="img-polaroid">
			<img src="img/addthis-settings-02.png" alt="Delete AddThis field">
		</figure>
	</li>
</ol>

<p>To add "Social Share" buttons to any other content type, follow the instructions below:</p>
<ol class="index-list">
	<li>
		In the admin panel open <strong> Structure > Content types > Content type name</strong> menu, where
		Content type name is the name of the needed content type.
	</li>
	<li>
		Navigate to <strong>Manage fields</strong> tab.
	</li>
	<li>
		<p>On the <strong>Add new field</strong> field enter the following parameters:</p>

		<ul class="marked-list">
			<li>
				<dl class="inline-term">
					<dt>label</dt>
					<dd>a field name, enter any value;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>machine-readable name</dt>
					<dd>a system field name generated automatically, however you can edit it if you need;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>type of data to store</dt>
					<dd>type of data, select <strong><em>AddThis</em></strong> value;</dd>
				</dl>
			</li>
			<li>
				<dl class="inline-term">
					<dt>form element to edit the data</dt>
					<dd>a form element type for the field managing, select <strong><em>AddThis button</em></strong> value.</dd>
				</dl>
			</li>
		</ul>

		<figure class="img-polaroid">
			<img src="img/addthis-settings-03.png" alt="Add AddThis field">
		</figure>
	</li>
	<li>
		Press <strong>Save</strong> button.
	</li>
	<li>
		To edit the buttons design, follow the steps for configuring "Social Share" buttons for the
		<em>Blog entry</em> content type.
	</li>
</ol>