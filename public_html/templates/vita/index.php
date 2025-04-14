<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.vita
 *
 * @author     alex <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplVitaHelper::loadCss();
tplVitaHelper::loadJs();
tplVitaHelper::setMetadata();

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

  <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>css/template.css" media="all"> -->

</head>
<body class="<?php echo tplVitaHelper::setBodySuffix(); ?>">
  <?php echo $templateUrl; ?>
<?php echo tplVitaHelper::setAnalytics(0, 'your-analytics-id'); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php echo Text::_('TPL_VITA_SKIP_LINK_LABEL'); ?></a>

<a href="<?php echo $this->baseurl; ?>/">
    <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
    <?php endif; ?>
</a>

<nav role="navigation" >
	<jdoc:include type="modules" name="position-0" style="none" />
</nav>

<main id="main">

	<jdoc:include type="message" />

	<div class="container">
		<jdoc:include type="component" />
	</div>
</main>

<aside>
    <?php if ($this->countModules('position-1')) : ?>
		<jdoc:include type="modules" name="position-1" style="none" />
	<?php endif; ?>
</aside>

<footer>
	<jdoc:include type="modules" name="footer" style="none" />
	<p>
		&copy; <?php echo date('Y'); ?> <?php echo tplVitaHelper::getSitename(); ?>
	</p>
</footer>
<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
