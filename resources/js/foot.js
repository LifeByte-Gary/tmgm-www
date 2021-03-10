require('./lazyload.min');
require('owl.carousel/dist/owl.carousel.min')
require('./range-slider');
require('./custom');

window.AOS = require('aos/dist/aos');

AOS.init({
    duration: 800
});
window.addEventListener("load", function (event) {
    lazyload();
});

function _html(_this, value) {
    try {
        if (value.data.indexOf("symbol") > 0) {
            var webdata = JSON.parse(value.data);
            var $this = $('[name=' + webdata.symbol + ']');
            var bidtext = $this.find('[name=data-bid]').text(),
                asktext = $this.find('[name=data-ask]').text();
            if ($.trim(webdata.bid) != '') {
                if (webdata.symbol === 'USDJPY') {
                    $this.find("[name=data-bid]").removeClass('up down').text(Number(webdata.bid).toFixed(3));
                    $this.find("[name=data-ask]").removeClass('up down').text(Number(webdata.ask).toFixed(3));
                } else if (webdata.symbol === 'EURUSD' || webdata.symbol === 'GBPUSD' || webdata.symbol === 'AUDUSD' || webdata.symbol === 'USDCAD') {
                    $this.find("[name=data-bid]").removeClass('up down').text(Number(webdata.bid).toFixed(5));
                    $this.find("[name=data-ask]").removeClass('up down').text(Number(webdata.ask).toFixed(5));
                } else {
                    $this.find("[name=data-bid]").removeClass('up down').text(webdata.bid);
                    $this.find("[name=data-ask]").removeClass('up down').text(webdata.ask);
                }
                var colorClass = 'up';
                if (webdata.bid_direction === 0) colorClass = $this.attr('data-bid-prev');
                if (webdata.bid_direction === 1) colorClass = 'up';
                if (webdata.bid_direction === 2) colorClass = 'down';
                $this.find("[name=data-bid]").addClass(colorClass);
                $this.find("[name=data-ask]").addClass(colorClass);
                if (!$this.parents("#Forex").length && !$this.parents("#fx-table-btm").length && !$this.parents("#forexCard").length && !$this.parents("#Metals").length && !$('.page-10').length) {
                    var $spread = Math.abs(webdata.ask - webdata.bid).toFixed(1);
                } else if ($this.parents("#Metals").length || $('.page-10').length) {
                    var $spread = (Math.abs((webdata.ask - webdata.bid)) * 10).toFixed(1);
                } else {
                    var $spread = Math.abs((webdata.ask - webdata.bid) * Math.pow(10, webdata.digits - 1)).toFixed(1);
                }
                $this.find("[name=data-spread]").text(Number($spread));
                if ($this.parent().hasClass('data-inside-socket') || _this.parents().hasClass('data-table-socket')) {
                    $this.removeClass('up down').addClass(colorClass);
                }
                $this.attr('data-bid-prev', colorClass);
            }
        }
    } catch (error) {
        console.log(error);
    }
}

function socketApi(obj) {
    if ($(obj).length > 0) {
        $(obj).each(function (i) {
            var _name = $(this).find('.name').text().trim() !== '' ? $(this).find('.name').text().trim() : $(this).find('[name=data-title]').text().trim();
            if (_name === '黄金') _name = 'GOLD';
            if (_name === '白银') _name = 'SILVER';
            if (_name === '铂金') _name = 'PLATINUM';
            switch (_name) {
                case '黄金':
                    _name = "GOLD";
                    break;
                case '白银':
                    _name = "SILVER";
                    break;
                case '铂金':
                    _name = "PLATINUM";
                    break;
                case '布伦特原油':
                    _name = "XBRUSD";
                    break;
                case '现货美原油':
                    _name = "XTIUSD";
                    break;
            }
            var z = i,
                $this = $(this);
            z = $.ajax({
                url: "https://quotes.tmx-api.com/symbols/3/" + _name + "",
                method: "get",
                headers: {
                    'AUTH-TOKEN': "eyJpc3MiOiJPbmxpbmUgSldUIEJ1aWxkZXIiLCYzNDg2ODIwOSwiYXVkIjoid3d3LmxpZmVieXRlLmNvbS5hdSIsInN1Y",
                },
                dataType: 'json',
                cache: true,
                crossDomain: true,
                success: function (data) {
                    if (_name === 'USDJPY') {
                        $this.find("[name=data-bid]").text(Number(data.bid).toFixed(3));
                        $this.find("[name=data-ask]").text(Number(data.ask).toFixed(3));
                    } else if (_name === 'EURUSD' || _name === 'GBPUSD' || _name === 'AUDUSD' || _name === 'USDCAD') {
                        $this.find("[name=data-bid]").text(Number(data.bid).toFixed(5));
                        $this.find("[name=data-ask]").text(Number(data.ask).toFixed(5));
                    } else {
                        $this.find("[name=data-bid]").text(data.bid);
                        $this.find("[name=data-ask]").text(data.ask);
                    }
                    var colorClass = 'up';
                    if (data.bid_direction === 1 || data.bid_direction === 0) colorClass = 'up';
                    if (data.bid_direction === 2) colorClass = 'down';
                    $this.find("[name=data-bid]").addClass(colorClass);
                    $this.find("[name=data-ask]").addClass(colorClass);
                    if ($this.parent().hasClass('data-inside-socket') || $this.parents().hasClass('data-table-socket')) {
                        $this.addClass(colorClass);
                    }
                    if (!$this.parents("#Forex").length && !$this.parents("#fx-table-btm").length && !$this.parents("#forexCard").length && !$this.parents("#Metals").length && !$('.page-10').length) {
                        var $spread = Math.abs(data.ask - data.bid).toFixed(1);
                    } else if ($this.parents("#Metals").length || $('.page-10').length) {
                        var $spread = (Math.abs((data.ask - data.bid)) * 10).toFixed(1);
                    } else {
                        var $spread = Math.abs((data.ask - data.bid) * Math.pow(10, data.digits - 1)).toFixed(1);
                    }
                    $this.find("[name=data-spread]").text($spread);
                    $this.attr('data-bid-prev', colorClass);
                }
            })
        });


        var nameArray = [];
        $(obj).each(function (i) {
            if ($('.tm-price-row').length > 0) {
                var signName = $(this).find('.name').text().trim();
            }
            if (obj === '.data-inside-socket [name=data-class]') {
                if ($('#energyCard').length || $('#InstruMetalSingle').length || $('#InstruComSingle').length || $('#InstruCryptoSingle').length) {
                    var signName = $(this).find("h4").text();
                } else {
                    var signName = $(this).find("h3").text();
                }
            }
            if (obj === '.data-table-socket tr') {
                var signName = $(this).find("td").eq(0).text();
            }
            $(this).attr("name", signName);
            nameArray.push(signName);
        });
        var $name = nameArray.join(',');
        var socketRes = new WebSocket('wss://quotes.tmx-api.com/hubx/websocket?symbols=' + $name + '&serverId=3&token=eyJpc3MiOiJPbmxpbmUgSldUIEJ1aWxkZXIiLCYzNDg2ODIwOSwiYXVkIjoid3d3LmxpZmVieXRlLmNvbS5hdSIsInN1Y');
        socketRes.onmessage = e => {
            _html($(obj), e);
        }
    }
}

if ($('.tm-price-row').length > 0) {
    socketApi('.tm-price-row', '.name');
}
if ($('.data-inside-socket [name=data-class]').length > 0) {
    socketApi('.data-inside-socket [name=data-class]');
}
if ($('.data-table-socket tr').length > 0) {
    socketApi('.data-table-socket tr');
}
let _url = decodeURIComponent(window.location.search);
if (_url && decodeURIComponent(window.location.href).indexOf('expiry_date') !== -1) {
    let temp = _url.split('?')[1].split('&'),
        a = temp[0].split('='),
        b = temp[1].split('expiry_date'),
        c = window.atob(a[1]),
        d = window.atob(b[1].replace(/=/, '')),
        exp = new Date(),
        _split = window.location.href.split('.'),
        _length = _split.length,
        url_temp = '.' + _split[_length - 2] + '.' + _split[_length - 1].split('/')[0] + '';
    exp.setTime(exp.getTime() + d * 24 * 60 * 60 * 1000);
    document.cookie = 'campaign_code=' + c + ';expires=' + exp.toGMTString() + ';path=/;domain=' + url_temp + '';
}
