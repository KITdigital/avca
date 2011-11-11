<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="footer">
            	<ul>
                	<li id="footer_home"><a href="/">Home</a></li>
                    <li id="footer_mission"><a href="/mission">Mission Statement</a></li>
                    <li id="footer_govcom"><a href="/governing-committee">Governing Committee</a></li>
                    <li id="footer_join"><a href="/join">To Join</a></li>
                </ul>
                <p id="copyright">&copy; Asia Video Convergence Alliance 2011</p>
            </div>

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
