<div class="tm-container flx">
    <div class="tm-banner-content">
        @switch(substr(app()->getLocale(), 0, 2))
            @case('zh')
            @case('vn')
            <h1>{{ get_page_content($pageId, 'banner_left_title', 'Combining a Transparent Trading Environment with the Best Pricing') }}</h1>

            @break

            @case('en')
            @case('pt')
            <h1>{{ get_page_content($pageId, 'banner_left_title_1', 'Combining a Transparent') }}
                <span> {{ get_page_content($pageId, 'banner_left_title_2', 'Trading Environment') }}</span>
                {{ get_page_content($pageId, 'banner_left_title_3', 'with the Best Pricing') }}
            </h1>
            @break
        @endswitch

        <div class="tm-btn-wrapper">
            <a href="https://portal.tmgm.com/register?language=zh" target="_blank"
               class="btn-big white">{{ get_page_content($pageId, 'banner_left_btn_wrapper_1', 'Start Trading') }}</a>
            {{ get_page_content($pageId, 'banner_left_btn_wrapper_2', 'or') }}
            <a href="https://portal.tmgm.com/register?register_type=demo&amp;language=zh" target="_blank"
               class="text-link">{{ get_page_content($pageId, 'banner_left_btn_wrapper_3', 'Try Demo Account') }}</a>
        </div>
        <div class="banner-img">
            <img src="{{ asset('img/banner-img.png') }}" alt="">
        </div>
    </div>
    <div class="banner-right">
        <div class="tm-banner-live-quotes tm-live-quotes">
            <ul class="flx tm-tab-nav">
                <li data-id="Forex" class="active-li">
                    外汇
                </li>
                <li data-id="Indices">
                    股指
                </li>
                <li data-id="Metals">
                    贵金属
                </li>
                <li data-id="Commodities">
                    能源
                </li>
            </ul>
            <div id="homeFeed" class="tm-pricing-table-content-wrap">
                <div class="accordion-head active-header">


                    Forex
                </div>
                <div id="Forex" class="tm-tab-content" style="display: block">
                    <div id="InstruForexHome">
                        <div class="tm-price-row flx" name="EURUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									EURUSD</span><span class="inst-full-name">


									Fiber</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">1.18779</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">1.18782</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.3</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="USDJPY" data-bid-prev="down">
                            <div><h4><span class="name">


									USDJPY</span><span class="inst-full-name">


									Ninja</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">108.862</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">108.865</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.3</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="GBPUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									GBPUSD</span><span class="inst-full-name">


									Cable</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">1.38649</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">1.38657</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.8</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="AUDUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									AUDUSD</span><span class="inst-full-name">


									Aussie</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">0.76846</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">0.76847</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.1</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="USDCAD" data-bid-prev="down">
                            <div><h4><span class="name">


									USDCAD</span><span class="inst-full-name">


									Loonie</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">1.26663</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">1.26672</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.9</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-head">


                    Indices
                </div>
                <div id="Indices" class="tm-tab-content">
                    <div id="InstruIndicHome">
                        <div class="tm-price-row flx" name="US500" data-bid-prev="up">
                            <div><h4><span class="name">


									US500</span><span class="inst-full-name">


									S&amp;P 500</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">3868.8</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">3871.2</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">2.4</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="US30" data-bid-prev="up">
                            <div><h4><span class="name">


									US30</span><span class="inst-full-name">


									Dow Jones 30</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">31821</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">31825</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">4</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="GER30" data-bid-prev="up">
                            <div><h4><span class="name">


									GER30</span><span class="inst-full-name">


									DAX</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">14451</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">14455</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">4.0</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="UK100" data-bid-prev="up">
                            <div><h4><span class="name">


									UK100</span><span class="inst-full-name">


									FTSE 100</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">6726</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">6729</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">3.0</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="JPN225" data-bid-prev="down">
                            <div><h4><span class="name">


									JPN225</span><span class="inst-full-name">


									Nikkei</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">29060</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">29088</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">28</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="VIX" data-bid-prev="up">
                            <div><h4><span class="name">


									VIX</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">22.74</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">22.91</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.2</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="US2000" data-bid-prev="down">
                            <div><h4><span class="name">


									US2000</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">2245.69</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">2246.17</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.5</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="TW88" data-bid-prev="up">
                            <div><h4><span class="name">


									TW88</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">1389.16</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">1389.49</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.3</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="IND50" data-bid-prev="down">
                            <div><h4><span class="name">


									IND50</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">15178.08</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">15184.68</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">6.6</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="SWI20" data-bid-prev="up">
                            <div><h4><span class="name">


									SWI20</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="up" name="data-bid">10860.61</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="up" name="data-ask">10865.86</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">5.3</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="NETH25" data-bid-prev="down">
                            <div><h4><span class="name">


									NETH25</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">674.01</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">678.21</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">4.2</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-head">


                    Metals
                </div>
                <div id="Metals" class="tm-tab-content">
                    <div id="InstruHome">
                        <div class="tm-price-row flx" name="XAUUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									XAUUSD</span><span class="inst-full-name">


									Gold</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">1713.46</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">1713.59</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">1.3</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="XAGUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									XAGUSD</span><span class="inst-full-name">


									Silver</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">25.807</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">25.82</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0.1</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="XPTUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									XPTUSD</span><span class="inst-full-name">


									Platinum</span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">1160.64</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">1164.25</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">36.1</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-head">


                    能源
                </div>
                <div id="Commodities" class="tm-tab-content">
                    <div id="InstruHome">
                        <div class="tm-price-row flx" name="XBRUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									XBRUSD</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">67.39</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">67.44</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                        <div class="tm-price-row flx" name="XTIUSD" data-bid-prev="down">
                            <div><h4><span class="name">


									XTIUSD</span><span class="inst-full-name"></span></h4></div>
                            <div><span class="sub-label">


								卖出价</span><label class="down" name="data-bid">63.62</label></div>
                            <div><span class="sub-label">


								买入价</span><label class="down" name="data-ask">63.66</label></div>
                            <div><span class="sub-label">


								点差</span><label class="big-txt" name="data-spread">0</label></div>
                            <div><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                    class="btn-buy">
                                    买</a><a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                                            class="btn-sell">
                                    卖</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
