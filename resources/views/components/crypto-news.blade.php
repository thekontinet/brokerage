<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
    {
    "feedMode": "market",
    "market": "crypto",
    "colorTheme": "dark",
    "isTransparent": true,
    "displayMode": "regular",
    "largeChartUrl": {!! '"' . env('APP_URL') . '"' !!},
    "width": "100%",
    "height": "100%",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
