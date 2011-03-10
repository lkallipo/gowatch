<?php
/**
 * @package   Mynxx Template - RocketTheme
 * @version   1.5.7 August 19, 2010
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Mynxx Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
require( YOURBASEPATH.DS."styles.php");
require( YOURBASEPATH.DS."rt_styleswitcher.php");
JHTML::_( 'behavior.mootools' );
global $template_real_width, $leftcolumn_width, $rightcolumn_width, $tstyle, $body_style;
global $js_compatibility, $menu_rows_per_column, $menu_columns, $menu_multicollevel;

$live_site        		= $mainframe->getCfg('live_site');
$template_path 			= $this->baseurl . '/templates/' .  $this->template;
$preset_style 			= $this->params->get("presetStyle", "dark-red");
$frontpage_component    = $this->params->get("enableFrontpage", "show");
$enable_ie6warn         = ($this->params->get("enableIe6warn", 0)  == 0)?"false":"true";
$font_family            = $this->params->get("fontFamily", "mynxx");
$template_width 		= $this->params->get("templateWidth", "959");
$leftcolumn_width		= $this->params->get("leftcolumnWidth", "210");
$rightcolumn_width		= $this->params->get("rightcolumnWidth", "210");
$leftinset_width		= $this->params->get("leftinsetWidth", "180");
$rightinset_width		= $this->params->get("rightinsetWidth", "180");
$splitmenu_col			= $this->params->get("splitmenuCol", "rightcol");
$menu_name 				= $this->params->get("menuName", "mainmenu");
$menu_type 				= $this->params->get("menuType", "moomenu");
$menu_rows_per_column   = $this->params->get("menuRowsPerColumn");
$menu_columns           = $this->params->get("menuColumns");
$menu_multicollevel     = $this->params->get("menuMultiColLevel", 1);
$default_font 			= $this->params->get("defaultFont", "default");
$show_logo		 		= ($this->params->get("showLogo", 1)  == 0)?"false":"true";
$show_logo_slogan		= ($this->params->get("showLogoslogan", 1)  == 0)?"false":"true";
$logo_slogan 			= $this->params->get("logoSlogan", "Apr 09 Design");
$show_bottomlogo		= ($this->params->get("showBottomlogo", 1)  == 0)?"false":"true";
$show_homebutton		= ($this->params->get("showHomebutton", 1)  == 0)?"false":"true";
$show_textsizer		 	= ($this->params->get("showTextsizer", 1)  == 0)?"false":"true";
$show_cart		 		= ($this->params->get("showCart", 1)  == 0)?"false":"true";
$show_fontchanger		= ($this->params->get("showFontchanger", 1)  == 0)?"false":"true";
$show_copyright 		= ($this->params->get("showCopyright", 1)  == 0)?"false":"true";
$js_compatibility	 	= ($this->params->get("jsCompatibility", 0)  == 0)?"false":"true";

// moomenu options
$moo_bgiframe     		= ($this->params->get("moo_bgiframe'","0") == 0)?"false":"true";
$moo_delay       		= $this->params->get("moo_delay", "500");
$moo_duration    		= $this->params->get("moo_duration", "600");
$moo_fps          		= $this->params->get("moo_fps", "200");
$moo_transition   		= $this->params->get("moo_transition", "Sine.easeOut");

$moo_bg_enabled			= ($this->params->get("moo_bg_enabled","1") == 0)?"false":"true";
$moo_bg_over_duration		= $this->params->get("moo_bg_over_duration", "500");
$moo_bg_over_transition		= $this->params->get("moo_bg_over_transition", "Expo.easeOut");
$moo_bg_out_duration		= $this->params->get("moo_bg_out_duration", "600");
$moo_bg_out_transition		= $this->params->get("moo_bg_out_transition", "Sine.easeOut");

$moo_sub_enabled		= ($this->params->get("moo_sub_enabled","1") == 0)?"false":"true";
$moo_sub_opacity		= $this->params->get("moo_sub_opacity","0.95");
$moo_sub_over_duration		= $this->params->get("moo_sub_over_duration", "50");
$moo_sub_over_transition	= $this->params->get("moo_sub_over_transition", "Expo.easeOut");
$moo_sub_out_duration		= $this->params->get("moo_sub_out_duration", "600");
$moo_sub_out_transition		= $this->params->get("moo_sub_out_transition", "Sine.easeIn");
$moo_sub_offsets_top		= $this->params->get("moo_sub_offsets_top", "0");
$moo_sub_offsets_right		= $this->params->get("moo_sub_offsets_right", "1");
$moo_sub_offsets_bottom		= $this->params->get("moo_sub_offsets_bottom", "0");
$moo_sub_offsets_left		= $this->params->get("moo_sub_offsets_left", "1");

require(YOURBASEPATH . "/rt_styleloader.php");

// these must come below because the styles can be overloaded
$body_style       = $this->params->get("bodyStyle", "dark");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<?php
		require(YOURBASEPATH . DS . "rt_utils.php");
		require(YOURBASEPATH . DS . "rt_head_includes.php");
	?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11646482-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body id="ff-<?php echo $fontfamily; ?>" class="<?php echo $fontstyle; ?> <?php echo $tstyle; ?> <?php echo $body_style; ?> iehandle">
		<div id="page-bg">
			<!--Begin Header-->
			<div id="header">
				<div class="wrapper">
					<?php if ($this->countModules('advertisement')) : ?>
					<div class="ad-module-top">
						<jdoc:include type="modules" name="advertisement" style="xhtml" />
					</div>
					<?php endif; ?>
					<?php if ($this->countModules('logo')) : ?>
					<div class="logo-module">
						<jdoc:include type="modules" name="logo" style="xhtml" />
					</div>
					<?php elseif ($show_logo == "true") : ?>
					<a href="<?php echo $this->baseurl; ?>" id="logo">
						<?php if ($show_logo_slogan == "true") : ?>
						<span class="logo-text"><?php echo $logo_slogan; ?></span>
						<?php endif; ?>
					</a>
					<?php endif; ?>
					<?php if($mtype != "none") : ?>
					<div id="horiz-menu" class="<?php echo $mtype; ?>">
					<?php if($mtype != "module") : ?>
						<?php echo $topnav; ?>
					<?php else: ?>
						<jdoc:include type="modules" name="toolbar" style="none" />
					<?php endif; ?>
					</div>
					<?php endif; ?>
					<div class="clr"></div>
				</div>
			</div>
			<!--End Header-->
			<div class="wrapper">
				<div id="main-body">
					<div id="topbar">
						<div id="topbar2">
							<div id="topbar3">
							<div class="spinner"></div>
							<?php if ($show_homebutton=="true") : ?>
							<div id="home-button"><a href="<?php echo $this->baseurl; ?>" class="home-button-desc"><?php echo JText::_('HOME'); ?></a></div>
							<?php else : ?>
							<div id="newsflash-mod"><jdoc:include type="modules" name="newsflash" style="none" /></div>
							<?php endif; ?>
							<?php if ($show_textsizer=="true") : ?>
							<div id="accessibility">
								<div id="buttons">
									<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-larger"); ?>" title="<?php echo JText::_('INC_FONT_SIZE'); ?>" class="large"><span class="button">&nbsp;</span></a>
									<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-smaller"); ?>" title="<?php echo JText::_('DEC_FONT_SIZE'); ?>" class="small"><span class="button">&nbsp;</span></a>
								</div>
								<div class="textsizer-desc"><?php echo JText::_('TEXT_SIZE'); ?></div>
							</div>
							<?php endif; ?>
							<?php if ($show_fontchanger=="true") : ?>
							<div id="font-style-button">
								<a href="#" title="<?php echo JText::_('FONT_STYLE'); ?>" class="font-style"><?php echo JText::_('FONT_STYLE'); ?></a>
							</div>
							<?php endif; ?>
							<?php if ($this->countModules('login')) : ?>
								<?php if ($user->guest) : ?>
								<div id="login-button"><a href="#" class="login-button-desc"><span><?php echo JText::_('LOGIN'); ?></span></a></div>
								<?php else : ?>
								<div id="login-button"><a href="#" class="login-button-desc2"><span><?php echo JText::_('LOGOUT'); ?></span></a></div>
								<?php endif; ?>
							<?php endif; ?>
							<?php if ($show_cart=="true") : ?>
							<!-- cleverweb: fixed translations -->
							<?php
								if (isset($_SESSION['cart'])) $cart = $_SESSION['cart'];
								$total = 0;
								if (isset($cart)) {
									foreach($cart as $key => $item) {
										$total += $item['quantity'];
									}
								};
								if($total == 1) $totalString = '(<strong>1</strong> '.JText::_('PRODUCT').')';
								elseif ($total > 0) $totalString = '(<strong>'.$total.'</strong> '.JText::_('PRODUCTS').')';
								else $totalString = "(<strong>0</strong> ".JText::_('PRODUCTS').")";
								if ($total > 0) $cart = "-full";
								else $cart = "";
							?>
							<div id="cart-button"><a href="#" class="cart-button-desc<?php echo $cart;?>"><?php echo JText::_('CART').' '.$totalString; ?></a></div>
							<?php endif; ?>	
							</div>
						</div>
					</div>
					<div id="main-body-surround">
						<div id="cart-panel-surround" class="png">
							<div id="cart-panel" class="png"></div>
							<div class="closeCartLink" id="closeCartLink">Κλείσιμο</div>
						</div>
						<div id="font-panel-surround" class="png">
							<div id="font-panel" class="png">
								<div class="left">
									<a href="#" class="mynxx" title="ff-mynxx"><span>Mynxx</span></a>
									<a href="#" class="optima" title="ff-optima"><span>Optima</span></a>
									<a href="#" class="geneva" title="ff-geneva"><span>Geneva</span></a>
									<a href="#" class="helvetica" title="ff-helvetica"><span>Helvetica</span></a>
								</div>
								<div class="right">
									<a href="#" class="lucida" title="ff-lucida"><span>Lucida</span></a>
									<a href="#" class="georgia" title="ff-georgia"><span>Georgia</span></a>
									<a href="#" class="trebuchet" title="ff-trebuchet"><span>Trebuchet</span></a>
									<a href="#" class="palatino" title="ff-palatino"><span>Palatino</span></a>
								</div>
								<div class="clr"></div>
							</div>
						</div>
						<?php if ($this->countModules('login')) : ?>
							<div id="login-panel-surround" class="png">
								<div id="login-panel" class="png">
									<div id="login-module">
										<jdoc:include type="modules" name="login" style="xhtml" />
										<div class="closeLoginLink" id="closeLoginLink">Κλείσιμο</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<!--Begin Showcase-->
						<?php $mClasses = modulesClasses('case5'); if ($this->countModules('showcase') or $this->countModules('showcase2') or $this->countModules('showcase3') or $this->countModules('scroller')) : ?>
						<div class="showcase-surround">
							<div class="show-br"></div>
							<div id="showcase">
								<div id="showcase2">
									<div id="showmodules" class="spacer<?php echo $showmod_width; ?>">
										<?php if ($this->countModules('showcase')) : ?>
										<div class="block <?php echo $mClasses['showcase'][0]; ?>">
											<jdoc:include type="modules" name="showcase" style="main" />
										</div>
										<?php endif; ?>
										<?php if ($this->countModules('showcase2')) : ?>
										<div class="block <?php echo $mClasses['showcase2'][0]; ?>">
											<jdoc:include type="modules" name="showcase2" style="main" />
										</div>
										<?php endif; ?>
										<?php if ($this->countModules('showcase3')) : ?>
										<div class="block <?php echo $mClasses['showcase3'][0]; ?>">
											<jdoc:include type="modules" name="showcase3" style="main" />
										</div>
										<?php endif; ?>
									</div>
									
									<div id="showmodules1" class="spacer<?php echo $showmod_width; ?>">																		
										<div class="block2 left">
											<jdoc:include type="modules" name="showcase4" style="main" />
										</div>										
										<div class="block2 right">
											<jdoc:include type="modules" name="showcase5" style="main" />
										</div>																		
									</div>								
									
									<jdoc:include type="modules" name="scroller" style="scroller" />
								</div>
							</div>
							<div class="show-bl"></div>
						</div>
						<?php endif; ?>
						<!--End Showcase-->
						<div class="sec-div"></div>
						<!--Begin Main Content Block-->
						<div id="main-content-surround">
						<div id="main-content" class="<?php echo $col_mode; ?>">
						    <div class="colmask leftmenu">
						        <div class="colmid">
    					    	    <div class="colright">
        						        <!--Begin col1wrap -->
            						    <div class="col1wrap">
            						        <div class="col1pad">
            						            <div class="col1">
                    						        <div id="maincol2">
                    									<div class="maincol2-padding">
                    									<?php $mClasses = modulesClasses('case1'); if ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
                    									<div id="mainmodules" class="spacer<?php echo $mainmod_width; ?>">
                    										<?php if ($this->countModules('user1')) : ?>
                    										<div class="block <?php echo $mClasses['user1'][0]; ?>">
                    											<jdoc:include type="modules" name="user1" style="main" />
                    										</div>
                    										<?php endif; ?>
                    										<?php if ($this->countModules('user2')) : ?>
                    										<div class="block <?php echo $mClasses['user2'][0]; ?>">
                    											<jdoc:include type="modules" name="user2" style="main" />
                    										</div>
                    										<?php endif; ?>
                    										<?php if ($this->countModules('user3')) : ?>
                    										<div class="block <?php echo $mClasses['user3'][0]; ?>">
                    											<jdoc:include type="modules" name="user3" style="main" />
                    										</div>
                    										<?php endif; ?>
                    									</div>
                    									<?php endif; ?>
                    									<?php if ($this->countModules('breadcrumb')) : ?>
                    									<div id="breadcrumbs">
                    										<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
                    										<div class="spinner"></div>
                    									</div>
                    									<?php endif; ?>
                    									<div>
                    										<?php if ($this->countModules('inset2') and !$editmode) : ?>
                    										<div id="inset-block-right"><div class="right-padding">
                    											<jdoc:include type="modules" name="inset2" style="inset" />
                    										</div></div>
                    										<?php endif; ?>
                    										<?php if ($this->countModules('inset') and !$editmode) : ?>
                    										<div id="inset-block-left"><div class="left-padding">
                    											<jdoc:include type="modules" name="inset" style="inset" />
                    										</div></div>
                    										<?php endif; ?>
                    										<?php if (!($frontpage_component == 'hide' and JRequest::getVar('view') == 'frontpage') or JRequest::getCmd( 'option' )=='com_virtuemart'): ?>
                    										<div id="maincontent-block">
                												<jdoc:include type="message" />
                												<jdoc:include type="component" />
                    										</div>
                    										<?php endif; ?>
                    										</div>
                    										<div class="clr"></div>
                        									<?php $mClasses = modulesClasses('case2'); if ($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
                        									<div id="mainmodules2" class="spacer<?php echo $mainmod2_width; ?>">
                        										<?php if ($this->countModules('user4')) : ?>
                        										<div class="block <?php echo $mClasses['user4'][0]; ?>">
                        											<jdoc:include type="modules" name="user4" style="main" />
                        										</div>
                        										<?php endif; ?>
                        										<?php if ($this->countModules('user5')) : ?>
                        										<div class="block <?php echo $mClasses['user5'][0]; ?>">
                        											<jdoc:include type="modules" name="user5" style="main" />
                        										</div>
                        										<?php endif; ?>
                        										<?php if ($this->countModules('user6')) : ?>
                        										<div class="block <?php echo $mClasses['user6'][0]; ?>">
                        											<jdoc:include type="modules" name="user6" style="main" />
                        										</div>
                        										<?php endif; ?>
                        									</div>
                        									<?php endif; ?>
                    									</div>
                    								</div>
                    							</div>
            						        </div>
            						    </div>
            						    <!--End col1wrap -->
           						        <!--Begin col2 -->
           						        <?php if ($leftcolumn_width != 0) : ?>
            						    <div class="col2">
                							<div id="leftcol">
                                                <div id="leftcol-bg">
                  									<?php if ($this->countModules('search-left')) : ?>
                									<jdoc:include type="modules" name="search-left" style="search" />
                									<?php endif; ?>
                									<?php if ($subnav and $splitmenu_col=="leftcol") : ?>
                									<div class="sidenav-block">
                										<?php echo $subnav; ?>
                									</div>
                									<?php endif; ?>
                									<jdoc:include type="modules" name="left" style="sidebar" />
                									<?php if (!isset($active)) :?>
        											<jdoc:include type="modules" name="inactive" style="sidebar" />
        											<?php endif; ?>
                                                </div>
                							</div>
            						    </div>
            						    <?php endif; ?>
            						    <!---End col2 -->
            						    <!--Begin col3 -->
            						    <?php if ($rightcolumn_width != 0) : ?>
            						    <div class="col3">
                							<div id="rightcol">
												<?php if ($this->countModules('search-right')) : ?>
            									<jdoc:include type="modules" name="search-right" style="search" />
            									<?php endif; ?>
           										<?php if ($subnav and $splitmenu_col=="rightcol") : ?>
            									<div class="sidenav-block">
            										<?php echo $subnav; ?>
            									</div>
            									<?php endif; ?>
            									<jdoc:include type="modules" name="right" style="sidebar" />
                							</div>
            						    </div>
            						    <?php endif; ?>
            						    <!--End col3-->
        							</div>
    							</div>
							</div>
						</div>
						<div class="corner" id="bl"></div>
						<div class="corner" id="br"></div>
						<div class="corner" id="tl"></div>
						<div class="corner" id="tr"></div>
						</div>
						<!--End Main Content Block-->
					</div>
					<!--Begin Bottom Main Modules-->
					<?php $mClasses = modulesClasses('case3'); if ($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
					<div class="sec-div"></div>
					<div id="bottom-main">
							<div id="bottom-main2">
							<div id="mainmodules3" class="spacer<?php echo $mainmod3_width; ?>">
								<?php if ($this->countModules('user7')) : ?>
								<div class="block <?php echo $mClasses['user7'][0]; ?>">
									<jdoc:include type="modules" name="user7" style="main" />
								</div>
								<?php endif; ?>
								<?php if ($this->countModules('user8')) : ?>
								<div class="block <?php echo $mClasses['user8'][0]; ?>">
									<jdoc:include type="modules" name="user8" style="main" />
								</div>
								<?php endif; ?>
								<?php if ($this->countModules('user9')) : ?>
								<div class="block <?php echo $mClasses['user9'][0]; ?>">
									<jdoc:include type="modules" name="user9" style="main" />
								</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="bottom-bl"></div>
						<div class="bottom-br"></div>
						<div class="bottom-tl"></div>
						<div class="bottom-tr"></div>
					</div>
					<?php endif; ?>
					<!--End Bottom Main Modules-->
					<div class="sec-div"></div>
					<!--Begin Bottom Bar-->
					<div id="botbar"><div id="botbar2"><div id="botbar3">
						<?php if ($this->countModules('popup')) : ?>
							<div id="ql-button"><a href="#" class="ql-button-desc" rel="rokbox[800 500][module=popup]"><?php echo JText::_('MORE_INFO'); ?></a></div>
						<?php endif; ?>
						<div id="top-button"><a href="#" id="top-scroll" class="top-button-desc"><?php echo JText::_('TOP'); ?></a></div>
					</div></div></div>
					<!--End Bottom Bar-->
					<!--Begin Bottom Section-->
					<?php $mClasses = modulesClasses('case4'); if ($this->countModules('bottom') or $this->countModules('bottom2') or $this->countModules('bottom3')) : ?>
					<div id="bottom">
						<div id="mainmodules4" class="spacer<?php echo $mainmod4_width; ?>">
							<?php if ($this->countModules('bottom')) : ?>
							<div class="block <?php echo $mClasses['bottom'][0]; ?>">
								<jdoc:include type="modules" name="bottom" style="main" />
							</div>
							<?php endif; ?>
							<?php if ($this->countModules('bottom2')) : ?>
							<div class="block <?php echo $mClasses['bottom2'][0]; ?>">
								<jdoc:include type="modules" name="bottom2" style="main" />
							</div>
							<?php endif; ?>
							<?php if ($this->countModules('bottom3')) : ?>
							<div class="block <?php echo $mClasses['bottom3'][0]; ?>">
								<jdoc:include type="modules" name="bottom3" style="main" />
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php if ($this->countModules('bottom-menu') or $show_bottomlogo == "true") : ?>
					<div id="footer">
						<div id="footer2">
							<div id="footer3">
								<?php if ($show_bottomlogo == "true") : ?>
								<a href="<?php echo $this->baseurl; ?>" id="bottom-logo"></a>
								<?php endif; ?>
								<?php if ($this->countModules('bottom-menu')) : ?>
								<div id="bottom-menu">
									<jdoc:include type="modules" name="bottom-menu" style="xhtml" />
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<!-- cleverweb: deleted footer
					<div id="footerbar">
						<div id="footerbar2">
							<div id="footerbar3">
								<?php if ($show_copyright == "true") : ?>
								<div class="copyright-block">
									<a href="http://www.in.gr/" title="<?php echo JText::_('ROCKETTHEME_JTC'); ?>" id="rocket"></a>
									<div id="copyright">
										<a href="http://www.google.com">Click me!!!</a>
										
									</div>
								</div>
								<?php else: ?>
								<div class="footer-mod">
									<jdoc:include type="modules" name="footer" style="xhtml" />
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div> -->
					<!--End Bottom Section-->
				</div>
			</div>
		</div>
		<?php if ($this->countModules('popup')) : ?>
		<div id="popup">
			<jdoc:include type="modules" name="popup" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if ($this->countModules('debug')) : ?>
		<div id="debug-mod">
			<jdoc:include type="modules" name="debug" style="none" />
		</div>
		<?php endif; ?>
	</body>
</html>