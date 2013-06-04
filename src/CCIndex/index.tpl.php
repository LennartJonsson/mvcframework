<h1>Index Controller</h1>
<p>Welcome to MvcFrameWork index controller.</p>

<h2>Download</h2>
<p>You can download MvcFrameWork from github.</p>
<blockquote>
<code>git clone git://github.com/LennartJonsson/mvcframework.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/LennartJonsson/mvcframework'>https://github.com/LennartJonsson/mvcframework</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where MvcFrameWork needs
to be able to write and create files.</p>
<blockquote>
<code>cd mvcframework; chmod 777 site/data</code>
</blockquote>

<p>Second, you have to change the value for RewriteBase in the .htaccess file in the root directory mvcframework with an text editor that handles unix line endings and UTF8 character encoding, e.g. jEdit.
See <a href='http://dbwebb.se/forum/viewtopic.php?f=14&amp;t=45'>Lydia: Skicka alla requester till index.php</a></p>

<p>Third, MvcFrameWork has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
