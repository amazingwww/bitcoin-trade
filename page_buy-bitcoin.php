<?php
/**
 * Template Name: Buy Bitcoin
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

?>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="buy-bitcoin-wrap">
                    <div class="buy-bitcoin-widget">
                        <div class="buy-bitcoin-time">
                            <span class="time"><i class="fa fa-clock"></i> <?php echo date("h:i a"); ?></span>
                            <span class="date"><?php echo date("F d, Y"); ?></span>
                        </div>
                        <div class="buy-bitcoin-value">
                            <span class="currency">LKR</span>
                            <span class="value">1,386,345</span>
                        </div>
                        <div class="buy-bitcoin-footer">
                            <p>BITCOIN current sell rate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="buy-bitcoin-wrap">
                    <div class="buy-bitcoin-form">
                        <div class="buy-bitcoin-header">
                            <p>The quantity you wish to buy</p>
                        </div>
                        <div class="buy-bitcoin-btc">
                            <span class="value">1,386,345</span>
                            <span class="currency">BTC</span>
                        </div>
                        <div class="buy-bitcoin-lkr">
                            <span class="value"><input type="text" placeholder="000,000" name="lkr-value" value="122,222" id="lkrValue" maxlength="15"></span>
                            <span class="currency">LKR</span>
                        </div>
                        <div class="buy-bitcoin-footer">
                            <button class="btn btn-block">send trade request</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
        //
    } // end while
} // end if
?>

<?php get_footer(); ?>