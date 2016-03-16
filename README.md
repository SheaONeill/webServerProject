# webServerProject

changed the .html files to end in .php

created folder /public to contain public files (css,images etc.)

and a single 'front controller' index.php file, which bases its action on the GET parameter 'action'

individual page content has been moved into directory templates,

use of require_once is used to build the appropriate HTML text content for the GET action

First attempt to move HTML code that is repeated on every page into separate .php files:

//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//inserted the title of the page between includes
print '<title>St. Joseph\'s Parish, East Wall</title><!-- title of webpage -->';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';

//include the footer from footer.php
require_once __DIR__ . '/../templates/footer.php';

16/03/16 12:55

changed bible verse to variables and injected php

$bibleVerseMainHeading
$bibleVerseSubHeading1
$bibleVerseSubHeading2
$bibleVerseParagraph

fixed issues with front controller

updated all site links on header-nav, footer-nav and site map with ?action=
