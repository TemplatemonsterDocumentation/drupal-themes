<h3>Menu management</h3>
<p>The following menu types can be used in Druapl template:</p>
<ul class="marked-list">
	<li>
		<strong>Main menu</strong> contains the links to the main website pages;
	</li>
	<li>
		<strong>User menu</strong> contains the links related to the user's account, such as "Register", "Login", etc.;
	</li>
	<li>
		<strong>Footer menu</strong> duplicates the main menu.
	</li>
</ul>
<p>Let's overview each of them in details.</p>

<h4>Main menu</h4>
<p><strong>To edit main menu items, follow the steps below:</strong></p>
<p>In the admin panel navigate to <strong>Structure > Menus</strong> menu or in a browser's address bar type
	<strong>http://www.example.com/?q=admin/structure/menu</strong>, where <strong>www.example.com</strong> is your
	website URL.</p>
<p>Click <strong>List links</strong> next to this menu.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-01.png" alt="Click 'List links'">
</figure>

<p>To add a link, click <strong>Add link</strong> at the top left corner of the page.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-02.png" alt="Click 'Add link'">
</figure>

<p>To edit a link, click <strong>Edit</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-03.png" alt="Click 'Edit'">
</figure>

<p>To remove a link, click <strong>Delete</strong>.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-04.png" alt="Click 'delete'">
</figure>

<p>To change the items order, use the drag-and-drop method to place the item, then click <strong>Save
	configuration</strong> button.</p>

<figure class="img-polaroid">
	<img src="img/menu-manage-05.png" alt="Drag&amp;Drop link">
</figure>

<p><strong>To set up a drop-down menu, follow the steps below:</strong></p>
<ol class="index-list">
	<li>
		In the admin panel navigate to <strong>Structure > Blocks</strong> menu or in a browser's address bar type
		<strong>http://www.example.com/?q=admin/structure/block</strong>, where <strong>www.example.com</strong> is your
		website URL.
	</li>
	<li>
		Find the block with this menu title.
	</li>
	<li>
		Click <strong>Configure</strong> link next to the block.
	</li>
	<li>
		<p>Make changes in the <strong>Superfish settings </strong> section.</p>

		<figure class="img-polaroid">
			<img src="img/menu-manage-06.png" alt="Fill Superfish settings">
		</figure>
	</li>
	<li>
		Press <strong>Save block</strong> button.
	</li>
</ol>

<p><strong>To change the menu location, follow the steps below:</strong></p>
<ol class="index-list">
	<li>
		In the admin panel navigate to <strong>Structure > Blocks</strong> menu or in a browser's address bar type
		<strong>http://www.example.com/?q=admin/structure/block</strong>, where <strong>www.example.com</strong> is your
		website URL.
	</li>
	<li>
		Find the block with this menu title.
	</li>
	<li>
		Move the block to the needed region, the same way as a regular block.
	</li>
	<li>
		Press <strong>Save blocks</strong> button.
	</li>
</ol>

<h4>User menu</h4>
<p>Users menu is a standard Drupal menu. It does not include any drop-down menus. To edit this menu or change its
	location, you can use the same instructions provided for the main menu.</p>

<h4>Footer menu</h4>
<p>Footer menu duplicates the main menu. To set up this menu, follow the steps below:</p>
<ol class="index-list">
	<li>
		In the admin panel navigate to <strong>Structure > Blocks</strong> menu or in a browser's address bar type
		<strong>http://www.example.com/?q=admin/structure/block</strong>, where <strong>www.example.com</strong> is your
		website URL.
	</li>
	<li>
		Find the block with this menu title.
	</li>
	<li>
		Click <strong>Configure</strong> link next to the block.
	</li>
	<li>
		<p>On the appeared page besides the standard fields fill in the following ones:</p>

		<ul class="marked-list">
			<li>
				<strong>Menu</strong> - the name of the menu that needs to be duplicated;
			</li>
			<li>
				<strong>Starting level</strong> - block visibility on a page. Blocks that start from the first level
				will always be visible. Blocks that start from the second level or deeper will be visible only on the
				pages, where these menu items are active.
			</li>
			<li>
				<strong>Maximum depth</strong> - the number of the visible menu levels. Set 1 value to disable all
				sub-menus.
			</li>
		</ul>
	</li>
	<li>
		<p>Press <strong>Save block</strong> button.</p>

		<figure class="img-polaroid">
			<img src="img/menu-manage-07.png" alt="Fill block options">
		</figure>
	</li>
</ol>

<p>Feel free to check the following instructions:</p>
<ul class="marked-list">
	<li>
		<a target="_blank" href="/help/ru/drupal-7-how-to-install-drop-down-menu-module.html"> Drupal 7. How to install
		drop-down menu module (Superfish) <i class="icon-external-link"></i></a>
	</li>
	<li>
		<a href="/help/ru/drupal-7-how-to-add-a-new-page-and-a-new-menu-button.html" target="_blank"> Drupal 7. How to
		add a new page and a new menu item <i class="icon-external-link"></i></a>
	</li>
	<li>
		<a href="https://drupal.org/node/754652" target="_blank">Superfish module documentation
		<i class="icon-external-link"></i></a>
	</li>
</ul>