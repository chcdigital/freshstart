<?php
/**
 * Template Name: news_page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div class="row" style="margin-top: 20px;">	<div class="col s12">
	

	<div class="row"> <div class="input-field col s12 m3">
    <select>
      <option value="" disabled selected>Country</option>
      <option value="1">UK</option>
      <option value="2">Hong Kong</option>
      <option value="3">Australia</option>
		 <option value="3">Global</option>
    </select>
    
  </div>
	
	 <div class="input-field col s12 m3">
    <select>
      <option value="" disabled selected>Industry</option>
      <option value="1">Finance</option>
      <option value="2">Hospitality</option>
      <option value="3">Shipping</option>
    </select>
   
  </div>
	
		 <div class="input-field col s12 m3">
    <select>
      <option value="" disabled selected>Order by</option>
      <option value="1">Newest</option>
      <option value="2">Most viewed</option>
     
    </select>
    
  </div>
	
	 <div class="input-field col s12 m3">
      <input value="Search for..." id="first_name2" type="text" class="validate">
   
    </div>
	</div>

	<div class="col s12 m6 l4">
	
		<h3>Latest News</h3>
		      <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/id/400/2500/1600">
            </div>
            <div class="card-content news">
				<p>BBC.COM</p>
				<p>Jeffrey Epstein Is Denied Bail in Child Sex-Trafficking Case</p>
            </div>
           
          </div>
		   <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/id/400/2500/1600">
            </div>
            <div class="card-content news">
				<p>BBC.COM</p>
				<p>Jeffrey Epstein Is Denied Bail in Child Sex-Trafficking Case</p>
            </div>
           
          </div>
		
		   <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/id/400/2500/1600">
            </div>
            <div class="card-content news">
				<p>BBC.COM</p>
				<p>Jeffrey Epstein Is Denied Bail in Child Sex-Trafficking Case</p>
            </div>
           
          </div>
		
		   <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/id/400/2500/1600">
            </div>
            <div class="card-content news">
				<p>BBC.COM</p>
				<p>Jeffrey Epstein Is Denied Bail in Child Sex-Trafficking Case</p>
            </div>
           
          </div>
		
		
		   <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/id/400/2500/1600">
            </div>
            <div class="card-content news">
				<p>BBC.COM</p>
				<p>Jeffrey Epstein Is Denied Bail in Child Sex-Trafficking Case</p>
            </div>
           
          </div>
		
 
	
</div>	<div class="col s12 m6 l8">
	
	
	
	<div class="col s12 m6">
		<h3>Markets</h3>
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_d367d"></div>
  <div class="tradingview-widget-copyright"><a href="https://uk.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": '100%',
  "height": 610,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "uk",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_d367d"
}
  );
  </script>
	</div></a>
<!-- TradingView Widget END -->
	
</div>
	
	
	<div class="col s12 m6">
		<h3>Your stocks</h3>
		<div class="row">
		<div class="col s6">
		<h5>Apple Inc.</h5>
		<p>NASDAQ: AAPL</p>
		</div>
		
			<div class="col s3">
				<h5 class="green-text">204.04</h5> <p>USD +0.69 (0.34%)</p>
			</div>
		<div class="col s3">
			 <p>Position</p>
				<h5 class="green-text">£5,888.34</h5>
			</div></div>

		<div class="row">
		<div class="col s6">
		<h5>Netflix, Inc.
</h5>
		<p>NASDAQ: NFLX</p>
		</div>
		
			<div class="col s3">
				<h5 class="green-text">204.04</h5> <p>USD +0.69 (0.34%)</p>
			</div>
		<div class="col s3">
			 <p>Position</p>
				<h5 class="green-text">£5,888.34</h5>
			</div></div>
			

		
		
		<div class="row">
		<div class="col s6">
		<h5>Amazon.com, Inc.</h5>
		<p>NASDAQ: AMZN</p>
		</div>
		
			<div class="col s3">
				<h5 class="red-text">204.04</h5> <p>USD -0.69 (0.34%)</p>
			</div>
		<div class="col s3">
			 <p>Position</p>
				<h5 class="red-text">£5,888.34</h5>
			</div>	</div>
		
		
		
		<div class="row">
		<div class="col s6">
		<h5>Microsoft Corporation
</h5>
		<p>NASDAQ: MSFT</p>
		</div>
		
			<div class="col s3">
				<h5 class="green-text">204.04</h5> <p>USD +0.69 (0.34%)</p>
			</div>
		<div class="col s3">
			 <p>Position</p>
				<h5 class="green-text">£5,888.34</h5>
			</div>	</div>
		
		
		<div class="row">
		<div class="col s6">
		<h5>Uber Technologies Inc
</h5>
		<p>NYSE: UBER</p>
		</div>
		
			<div class="col s3">
				<h5 class="red-text">204.04</h5> <p>USD -0.69 (0.34%)</p>
			</div>
		<div class="col s3">
			 <p>Position</p>
				<h5 class="red-text">£5,888.34</h5>
			</div>	</div>
	
		
		
		
		
		</div></div>
</div>
	



<?php
get_footer();
