<?php

/**
 * @defgroup pages_article Article Pages
 */
 
/**
 * @file pages/article/index.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_article
 * @brief Handle requests for article functions. 
 *
 */

switch ($op) {
	case 'viewFile': // Old URLs; see https://github.com/pkp/pkp-lib/issues/1541
	case 'view':
	case 'download':
		define('HANDLER_CLASS', 'ArticleHandler');
		import('pages.article.ArticleHandler');
		break;
}

?>
