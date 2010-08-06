<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Project :: XHTML Calendar Generation with PHP</title>
<link rel="stylesheet" type="text/css" href="data/css/main.css" />
</head>
<body>
<?php
	if (!@include("source/activecalendar.php")) die("The structure of the Active Calendar Project package has been modified. Unable to proceed...\n</body>\n</html>");
$cal=new activeCalendar();
$version=$cal->version;
$releaseDate=$cal->releaseDate;
?>
<h1>Active Calendar Project</h1>
<p><span class="phead">About: </span>Active Calendar is a set of PHP classes that generate calendars (year, month or week view) as HTML tables (XHTML-Valid). It can produce static calendars without any links or calendars with a week number column, navigation controls, a date picker control, event days and content with event URLs, and linkable days (optionally URL or Javascript). The layout can be configured using CSS, and JavaScript is not required. The supported dates (on systems using a 32-bit signed integer Unix time_t) are: 1902-2037 (Unix) and 1971-2037 (Windows), when using the default PHP native date functions, and 100-3000 and later, when using the ADOdb Date Library.
<br /><span class="small">Note: The Active Calendar Project is not related to the ADOdb Date Library, it optionally supports it. More information about the ADOdb Date Library and its source code can be found at: <a href="http://phplens.com/phpeverywhere/adodb_date_library" target="_blank">http://phplens.com/phpeverywhere/adodb_date_library</a> (opens a new browser window).</span>
</p>
<div class="box">
<p><span class="phead">Structure of the Active Calendar Project package</span></p>
<p><span class="phead">Project version in this package: </span><?php print $version;?> <span class="phead">Release date: </span><?php print $releaseDate;?></p>
<p><span class="phead">Examples: </span>An index of the examples scripts located under <a href="data/" target="_blank"><img src="data/img/folder.png" alt="" border="0" /> /data</a> <span class="small">(opens a new browser window)</span> can be found at <a href="examples.php"><img src="data/img/sourcephp.png" alt="" border="0" /> examples.php</a>. Use the examples first to get an idea of the usage of the Active Calendar Project by viewing the source code and using various CSS files.</p>
<p><span class="phead">Documentation: </span>The documentation of the Active Calendar Project can be found at <a href="doc/" target="_blank"><img src="data/img/folder.png" alt="" border="0" /> /doc</a> <span class="small">(opens a new browser window)</span>. The documentation has been translated to some idioms. As the translation takes some time, not every file is up to date and may refer to a previous release of the project. The newest project versions are fully compatible with each older version though, so the documentation may be incomplete but it is still valid. Here are the documentation files included:
</p>
<ul>
<li> <a href="doc/doc_en.html" target="_blank"><img src="data/img/en.gif" alt="" class="img" /> <img src="data/img/document.png" alt="" border="0" /> doc_en.html</a> <span class="small">(opens a new browser window)</span> English Documentation - mostly updated</li>
<li> <a href="doc/doc_de.html" target="_blank"><img src="data/img/de.gif" alt="" class="img" /> <img src="data/img/document.png" alt="" border="0" /> doc_de.html</a> <span class="small">(opens a new browser window)</span> German Documentation</li>
<li> <a href="doc/doc_el.html" target="_blank"><img src="data/img/el.gif" alt="" class="img" /> <img src="data/img/document.png" alt="" border="0" /> doc_el.html</a> <span class="small">(opens a new browser window)</span> Greek Documentation</li>
<li> <a href="doc/doc_jp.html" target="_blank"><img src="data/img/jp.gif" alt="" class="img" /> <img src="data/img/document.png" alt="" border="0" /> doc_jp.html</a> <span class="small">(opens a new browser window)</span> Japanese Documentation</li>
</ul>
<p><span class="phead">Source code: </span>The source code of the PHP class and its subclass(es) can be found at <a href="source/" target="_blank"><img src="data/img/folder.png" alt="" border="0" /> /source</a> <span class="small">(opens a new browser window)</span>.</p>
<p><span class="phead">Changes: </span>A chronological list of the project releases and the most important changes can be found at <a href="changelog.html" target="_blank"><img src="data/img/document.png" alt="" border="0" /> changelog.html</a> <span class="small">(opens a new browser window)</span>.</p>
<p><span class="phead">License: </span>The source code of the Active Calendar Project included in this package is free. You can modify or pass it on under the conditions of the GNU Lesser General Public License (LGPL), published by the Free Software Foundation. A copy of the LGPL can be viewed at <a href="license.html" target="_blank"><img src="data/img/document.png" alt="" border="0" /> license.html</a> <span class="small">(opens a new browser window)</span>.</p>
</div>
<p><span class="phead">Project Administrator and Website: </span>Giorgos Tsiledakis, Crete Greece &lt;gt (at) corissia (dot) com&gt;. The Active Calendar Project is currently located at <a href="http://freshmeat.net/redir/activecalendar/53267/url_homepage/" target="_blank">http://www.micronetwork.de/activecalendar/</a> <span class="small">(opens a new browser window)</span>.</p>
<div class="box">
<p><span class="phead">Development: </span>With the help of the Open Source Community the Active Calendar Project is constantly being improved. Your contribution will be really appreciated:</p>
<ul>
<li>Active Calendar class and subclass development: suggestions, bugs, future requests or code improvements</li>
<li>Active Calendar package improvement: new examples, new CSS layouts</li>
<li>Active Calendar documentation: new idioms, updating the existing ones</li>
<li>Active Calendar announcements: forums, script directories, link on your website(s)</li>
</ul>
</div>
</body>
</html>