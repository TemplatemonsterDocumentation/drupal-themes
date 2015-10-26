<h3>Shortcodes</h3>
<p><strong>Shortcode</strong> is a little bit of code that contains 1-2 words. Shortcodes are used instead of writing a
	large program codes (dozens of lines) to perform some functions. </p>
<p class="alert alert-warning">
	<span>To use shortcodes the <strong>Shortcode, TM Shortcodes</strong> modules should be enabled.</span>
</p>
<p>The full list of all available shortcodes you can check in the <strong>Text format</strong> section while creating a
	node.</p>

<figure class="img-polaroid">
	<img src="img/shortcode-tips.png" alt="Shortcode tips">
</figure>

<p>You can use the following shortcodes:</p>

<p><strong>[clear][/clear]</strong> - clears floated blocks. The shortcode contains the following attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>an additional class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>id</dt>
			<dd>an element indicator (id);</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>type</dt>
			<dd>an element type: block (div, d) or in-line (span, s).</dd>
		</dl>
	</li>
</ul>

<p><strong>[col][/col]</strong> - displays content in columns. The shortcode contains the following attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>align</dt>
			<dd>columns alignment: <em>right</em> - a column will appear at the right side of the external block, <em>center</em> - a column will appear at the center of the external block;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>an additional element class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>clear</dt>
			<dd>clears floated blocks: <em>clear-both</em> - on both sides, <em>clear-left</em> - on the left side only, <em>clear-right</em> - on the left right only;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>last</dt>
			<dd>should has "1" value for the last column.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>width</dt>
			<dd>column width: <em>1-2</em> - a half, <em>1-3</em> - a third, <em>2-3</em> - two thirds, <em>1-4</em> - a fourth, <em>3-4</em> - three fourths, <em>1-5</em> - a fifth, <em>2-5</em> - two fifth, <em>3-5</em> - three fifth, <em>4-5</em> - four fifth, <em>1-6</em> - a sixth or <em>5-6</em> - five sixths external blocks.</dd>
		</dl>
	</li>
</ul>
<p>It is recommended to use this shortcode inside <strong><em>[clear][/clear]</em></strong> shortcode.</p>
<p>For example:</p>
<pre><code>[clear type="div"]
[col width="1-3"]column content[/col]
[col width="1-3"]column content[/col]
[col width="1-3" last="1"]column content[/col]
[/clear]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-01.png" alt="Sortcode 'Column'">
</figure>

<p><strong>[counter][/counter]</strong> - displays animated counters. The shortcode contains the following
	attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>an additional element class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>number</dt>
			<dd>any integer number;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>timer</dt>
			<dd>count speed from 0 to the specified date in milliseconds.</dd>
		</dl>
	</li>
</ul>
<p>The shortcode content serves as a title.</p>
<p>For example:</p>
<pre><code>[counter number="300" timer="30" class="custom-class"]Title[/counter]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-02.png" alt="Sortcode 'Counter'">
</figure>

<p><strong>[icon][/icon]</strong> - displays FontAwesome icons. The framework uses FontAwesome 4.1.0 version.
	The shortcode contains the following attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>FontAwesome icon class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>link</dt>
			<dd>URL-address, if you want to add a link to the icon.</dd>
		</dl>
	</li>
</ul>
<p>For example:</p>
<pre><code>[icon class="fa-star"]Текст[/icon]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-03.png" alt="Sortcode 'Font icon'">
</figure>

<p><strong>[gmap][/gmap]</strong> - inserts a Google map. The shortcode contains the following attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>additional element class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>lat_coord</dt>
			<dd>latitude coordinate;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>lng_coord</dt>
			<dd>longitude coordinate;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>zoom_value</dt>
			<dd>initial zoom level of the map. Use values from 1 to 20;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>zoom_wheel</dt>
			<dd>adds a scroll wheel to the map. Use "yes" or "no" value.</dd>
		</dl>
	</li>
</ul>
<p>For example:</p>
<pre><code>[gmap lat_coord="41.850033" lng_coord="-87.6500523" zoom_value="15" zoom_wheel="no" class="custom-class"][/gmap]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-06.png" alt="Sortcode 'Piegraph'">
</figure>

<p><strong>[piegraph][/piegraph]</strong> - displays a cycle progress indicator. The shortcode contains the
	following attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>barcolor</dt>
			<dd>a color of the bar line;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>an additional element class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>linewidth</dt>
			<dd>the line width, any integer number;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>percent</dt>
			<dd>a progress in percents (0-100);</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>trackcolor</dt>
			<dd>a color of the track line (progress line);</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>width</dt>
			<dd>diameter of the progress bar, any integer number.</dd>
		</dl>
	</li>
</ul>
<p>The shortcode content serves as a title.</p>
<p>For example:</p>
<pre><code>[piegraph percent="60" width="200" barcolor="#21c2f8" trackcolor="#cccccc" linewidth="3"]Title[/piegraph]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-04.png" alt="Sortcode 'Piegraph'">
</figure>

<p><strong>[progressbar][/progressbar]</strong> - displays a progress bar. The shortcode contains the following
	attributes:</p>
<ul class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>class</dt>
			<dd>an additional element class;</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>percent</dt>
			<dd>a progress in percents (0-100);</dd>
		</dl>
	</li>
</ul>
<p>The shortcode content serves as a title.</p>
<p>For example:</p>
<pre><code>[progressbar percent="30"]Title[/progressbar]</code></pre>
<p>Possible use cases:</p>

<figure class="img-polaroid">
	<img src="img/shortcodes-05.png" alt="Sortcode 'Progressbar'">
</figure>