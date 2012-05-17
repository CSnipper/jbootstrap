<?php
/* ------------------------------------------------------------------------
  # Jootstrap - Twitter's Bootstrap for Joomla (with RocketTheme's Gantry administration)
  # ------------------------------------------------------------------------
  # author    Prieco S.A.
  # copyright Copyright (C) 2012 Prieco.com. All Rights Reserved.
  # @license - http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
  # Websites: http://www.prieco.com
  # Technical Support:  Forum - http://www.prieco.com/en/forum/index.html
  ------------------------------------------------------------------------- */


// no direct access
defined('_JEXEC') or die('Restricted index access');

// load and inititialize gantry class
require_once('lib/gantry/gantry.php');

$jspath = $this->baseurl . '/templates/' . $this->template . '/js';
$imgpath = $this->baseurl . '/templates/' . $this->template . '/images';

$gridsystem = $gantry->get('gridsystem');
$gridrows = ($gridsystem == '' ? 9 : 12);

$docscss = $gantry->get('docscss');

$minified = $gantry->get('minified');

$jquery = $gantry->get('jquery');

//JHTML::_('behavior.framework', false);
//JHTML::_('behavior.mootools', false);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language; ?>" >
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php
        $gantry->displayHead();

        $cssfiles = ($minified ? array('bootstrap.min.css') : array('bootstrap.css'));
        if ($gridrows == 12)
            $cssfiles[] = ($minified ? 'bootstrap-responsive.min.css' : 'bootstrap-responsive.css');

        if ($docscss)
            $cssfiles[] = ($minified ? 'docs.min.css' : 'docs.css');

        $gantry->addStyles($cssfiles);
        ?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->            

        <link rel="apple-touch-icon" href="<?php echo $imgpath; ?>/apple-touch-icon-iphone.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $imgpath; ?>/apple-touch-icon-ipad.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $imgpath; ?>/apple-touch-icon-114x114.png"/>
    </head>
    <body id="jb-body" <?php echo $gantry->displayBodyTag(); ?>>
        <?php /** Begin Drawer * */ if ($gantry->countModules('drawer')) : ?>
            <div id="jb-drawer" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('drawer', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Drawer * */ endif; ?>
        <?php /** Begin Top * */ if ($gantry->countModules('top')) : ?>
            <div id="jb-top" class="container<?php echo $gridsystem ?>"> //moved fixed navbar into menu's default.php
                <?php echo $gantry->displayModules('top', 'basic', 'basic'); ?>
            </div>
        <?php /** End Top * */ endif; ?>
        <?php /** Begin Header * */ if ($gantry->countModules('header')) : ?>
            <div id="jb-header" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('header', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Header * */ endif; ?>
        <?php /** Begin Menu * */ if ($gantry->countModules('navigation')) : ?>
            <div id="jb-menu" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('navigation', 'basic', 'basic'); ?>
                </div>
            </div>
        <?php /** End Menu * */ endif; ?>
        <?php /** Begin Showcase * */ if ($gantry->countModules('showcase')) : ?>
            <div id="jb-showcase" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('showcase', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Showcase * */ endif; ?>
        <?php /** Begin Feature * */ if ($gantry->countModules('feature')) : ?>
            <div id="jb-feature" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('feature', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Feature * */ endif; ?>
        <?php /** Begin Utility * */ if ($gantry->countModules('utility')) : ?>
            <div id="jb-utility" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('utility', 'standard', 'basic'); ?>
                </div>
            </div>
        <?php /** End Utility * */ endif; ?>
        <?php /** Begin Breadcrumbs * */ if ($gantry->countModules('breadcrumb')) : ?>
            <div id="jb-breadcrumbs" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('breadcrumb', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Breadcrumbs * */ endif; ?>
        <?php /** Begin Main Top * */ if ($gantry->countModules('maintop')) : ?>
            <div id="jb-maintop" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('maintop', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Main Top * */ endif; ?>
        <?php /** Begin Main Body * */ ?>
        <?php echo $gantry->displayMainbody('mainbody', 'sidebar', 'standard', 'standard', 'standard', 'standard', 'standard'); ?>
        <?php /** End Main Body * */ ?>
        <?php /** Begin Main Bottom * */ if ($gantry->countModules('mainbottom')) : ?>
            <div id="jb-mainbottom" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('mainbottom', 'standard', 'standard'); ?>
                </div></div>
        <?php /** End Main Bottom * */ endif; ?>
        <?php /** Begin Bottom * */ if ($gantry->countModules('bottom')) : ?>
            <div id="jb-bottom" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('bottom', 'standard', 'standard'); ?>
                </div></div>
            </div>
        <?php /** End Bottom * */ endif; ?>
        <?php /** Begin Footer * */ if ($gantry->countModules('footer')) : ?>
            <div id="jb-footer" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('footer', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Footer * */ endif; ?>
        <?php /** Begin Copyright * */ if ($gantry->countModules('copyright')) : ?>
            <div id="jb-copyright" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('copyright', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Copyright * */ endif; ?>
        <?php /** Begin Debug * */ if ($gantry->countModules('debug')) : ?>
            <div id="jb-debug" class="container<?php echo $gridsystem ?>">
                <div class="row<?php echo $gridsystem ?>">
                    <?php echo $gantry->displayModules('debug', 'standard', 'standard'); ?>
                </div>
            </div>
        <?php /** End Debug * */ endif; ?>
        <?php /** Begin Analytics * */ if ($gantry->countModules('analytics')) : ?>
            <?php echo $gantry->displayModules('analytics', 'basic', 'basic'); ?>
        <?php /** End Analytics * */ endif; ?>

<?php if ($jquery) :?>
        <script src="<?php echo $jspath; ?>/jquery.js" type="text/javascript"></script>
<?php endif; ?>
        <script src="<?php echo $jspath; ?>/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
<?php
$gantry->finalize();
?>
