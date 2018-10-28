<?php

/**

 * Template Name: Page d'accueil

 *

 * Description: Twenty Twelve loves the no-sidebar look as much as

 * you do. Use this page template to remove the sidebar from any page.

 *

 * Tip: to remove the sidebar from all posts and pages simply remove

 * any active widgets from the Main Sidebar area, and the sidebar will

 * disappear everywhere.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>



	<div id="primary">

		<div id="content" role="main">

				<div style="text-align:left">
					<a style="display:inline-block;font-weight:bold;color:#000;font-size:140%;padding:15px;border:1px solid Red;margin:15px;" href="/visites-suspendues/">INFORMATION : visites des souterrains du Fort de Vaise et de la Champignonière de Caluire suspendues en raison de travaux</a>
				</div>

			<div id="home_cols">				

				<div id="home_col2" class="cols">

					<?php dynamic_sidebar( 'home-2' ); ?>

				</div><div id="home_col1" class="cols">

					<?php dynamic_sidebar( 'home-1' ); ?>

				</div><div id="home_col3" class="cols">

					<?php dynamic_sidebar( 'home-3' ); ?>

				</div><!--<div id="home_col4" class="cols">

					<?php dynamic_sidebar( 'home-4' ); ?>

				</div> -->

			</div>
		<!-- <h3>Nos prochaines visites et conférences</h3><br />
		<div class="width:100%; float:left">
<iframe src="https://yurplan.com/orga/OCRA-Lyon/1448/ticketing/widget" height="475" width="100%" scrolling="auto" frameborder="0"></iframe>

    <div style="font-family:Helvetica, Arial; font-size:13px; padding:5px 15px 10px; width:100%; text-align:left;" >
        <a title="Logiciel de billetterie gratuit" style="color:#ddd; text-decoration:none;" target="_blank" href="https://yurplan.com/pro/billetterie/billetterie-en-ligne">Logiciel de billetterie gratuit</a>
        <span style="color:#ddd;">par</span> <a title="Logiciel de billetterie gratuit par YurPlan" style="color:#ddd; text-decoration:none;" target="_blank" href="https://yurplan.com">YurPlan</a>
    </div>
    </div> !-->
		</div><!-- #content -->

	</div><!-- #primary -->



<?php get_footer(); ?>