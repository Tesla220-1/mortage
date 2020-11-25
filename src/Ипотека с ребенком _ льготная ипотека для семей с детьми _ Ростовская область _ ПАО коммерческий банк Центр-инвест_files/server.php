
var lz_poll_server = "https://lz.centrinvest.ru/livezilla/";
var lz_poll_url = "https://lz.centrinvest.ru/livezilla/server.php";
var lz_poll_website = "";
var lz_poll_frequency = 31536000;
var lz_poll_file_chat = "chat.php";
var lz_window_width = "590";
var lz_window_height = "760";
var lz_area_code = "";
var lz_user_name = "";
var lz_user_email = "";
var lz_user_company = "";
var lz_user_question = "";
var lz_user_phone = "";
var lz_user_customs = new Array('','','','','','','','','','');
var lz_user_language = "";
var lz_user_header = "";
var lz_user_website = "";

var lz_getp_track = "fbpos=MTI_&fbml=MA__&fbmt=MA__&fbmr=MA__&fbmb=MA__&fbw=NDg_&fbh=MjM2&fboo=MQ__";

var lz_alert_html = 'PGRpdiBpZD0ibHpfY2hhdF9hbGVydF9ib3giIHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOnVybCgnaHR0cHM6Ly9sei5jZW50cmludmVzdC5ydS9saXZlemlsbGEvaW1hZ2VzL2NoYXRfYmdfZm9vdGVyLmdpZicpOyI+DQoNCiAgICA8dGFibGUgY2VsbHNwYWNpbmc9IjAiIGNlbGxwYWRkaW5nPSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI5NSUiPg0KCQk8dHI+DQoJCQk8dGQgaGVpZ2h0PSIyMCIgc3R5bGU9ImZvbnQtZmFtaWx5OmhlbHZldGljYSxhcmlhbCx2ZXJkYW5hO2ZvbnQtc2l6ZToxMHB4O2NvbG9yOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDt2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7IiBjb2xzcGFuPSIyIj4mbmJzcDvQmNC90YTQvtGA0LzQsNGG0LjQvtC90L3QsNGPINGB0LvRg9C20LHQsCAi0KbQtdC90YLRgC3QuNC90LLQtdGB0YIiPC90ZD4NCgkJPC90cj4NCgkJPHRyPg0KCQkJPHRkIGlkPSJsel9jaGF0X2FsZXJ0X2ljb24iIHdpZHRoPSIzMiIgYWxpZ249ImNlbnRlciIgdmFsaWduPSJ0b3AiPjxpbWcgc3JjPSJodHRwczovL2x6LmNlbnRyaW52ZXN0LnJ1L2xpdmV6aWxsYS9pbWFnZXMvaWNvbl9pbmZvLmdpZiIgYWx0PSIiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgYm9yZGVyPSIwIiBzdHlsZT0ibWFyZ2luOjE1cHg7Ij48L3RkPg0KCQkJPHRkIGlkPSJsel9jaGF0X2FsZXJ0X2JveF90ZXh0Ij48L3RkPg0KCQk8L3RyPg0KCQk8dHI+DQoJCQk8dGQgaGVpZ2h0PSI0MCIgdmFsaWduPSJ0b3AiIGFsaWduPSJjZW50ZXIiIGNvbHNwYW49IjIiPjxpbnB1dCB0eXBlPSJidXR0b24iIGNsYXNzPSJsel9mb3JtX2J1dHRvbiIgaWQ9Imx6X2NoYXRfYWxlcnRfYnV0dG9uIiB2YWx1ZT0iT0siPjwvdGQ+DQoJCTwvdHI+DQoJPC90YWJsZT4NCjwvZGl2Pg0KPGRpdiBpZD0ibHpfY2hhdF9hbGVydF9iZyI+PC9kaXY+DQoNCg0K';
var lz_is_ie = false;

var lz_overlay_chat_available = false;
var lz_overlays_possible = true;
var lz_direct_login = false;
var lz_geo_error_span = 30;
var lz_geo_data_count = 6;
var lz_geo_resolution = null;
var lz_geo_resolution;
var lz_geo_resolution_needed = false;
var lz_user_id = "475a44fe1b";
var lz_browser_id = "4cd878579f";
var lz_server_id = "a2f26";
var lz_geo_url = "https://ssl.livezilla.net/geo/resolute/?aid=&sid=ZmI4MTFmNjA=&dbp=1";
var lz_mip = "31.23.118.xxx";
var lz_oak = '';
var lz_is_tablet = false;

var chars = new Array('b','a','a','4','b','c','9','8','7','d','f','f','4','b','1','4','4','a','7','a','f','9','9','1','7','b','1','7','e','5','1','d','a','9','8','9','a','7','7','0',0);
var order = new Array(8,38,2,24,13,17,39,26,3,32,11,35,30,14,7,12,4,29,0,27,37,18,31,10,34,1,19,25,15,20,9,22,36,28,21,6,16,5,23,33,0);
while(lz_oak.length < (chars.length-1))for(var f in order)if(order[f] == lz_oak.length)lz_oak += chars[f];


var lz_resources = new Array(false,false,false,false,false,false);
createCSSCheck("csschktr");

LazyLoad=function(x,h){function r(b,a){var c=h.createElement(b),d;for(d in a)a.hasOwnProperty(d)&&c.setAttribute(d,a[d]);return c}function k(b){var a=i[b],c,d;if(a){c=a.callback;d=a.urls;d.shift();l=0;if(!d.length){c&&c.call(a.context,a.obj);i[b]=null;j[b].length&&m(b)}}}function w(){if(!e){var b=navigator.userAgent;e={async:h.createElement("script").async===true};(e.webkit=/AppleWebKit\//.test(b))||(e.ie=/MSIE/.test(b))||(e.opera=/Opera/.test(b))||(e.gecko=/Gecko\//.test(b))||(e.unknown=true)}}function m(b,
a,c,d,s){var n=function(){k(b)},o=b==="css",f,g,p;w();if(a){a=typeof a==="string"?[a]:a.concat();if(o||e.async||e.gecko||e.opera)j[b].push({urls:a,callback:c,obj:d,context:s});else{f=0;for(g=a.length;f<g;++f)j[b].push({urls:[a[f]],callback:f===g-1?c:null,obj:d,context:s})}}if(!(i[b]||!(p=i[b]=j[b].shift()))){q||(q=h.head||h.getElementsByTagName("head")[0]);a=p.urls;f=0;for(g=a.length;f<g;++f){c=a[f];if(o)c=r("link",{charset:"utf-8","class":"lazyload",href:c,rel:"stylesheet",type:"text/css"});else{c=
r("script",{charset:"utf-8","class":"lazyload",src:c});c.async=false}if(e.ie)c.onreadystatechange=function(){var t=this.readyState;if(t==="loaded"||t==="complete"){this.onreadystatechange=null;n()}};else if(o&&(e.gecko||e.webkit))if(e.webkit){p.urls[f]=c.href;u()}else setTimeout(n,50*g);else c.onload=c.onerror=n;q.appendChild(c)}}}function u(){var b=i.css,a;if(b){for(a=v.length;a&&--a;)if(v[a].href===b.urls[0]){k("css");break}l+=1;if(b)l<200?setTimeout(u,50):k("css")}}var e,q,i={},l=0,j={css:[],js:[]},
v=h.styleSheets;return{css:function(b,a,c,d){m("css",b,a,c,d)},js:function(b,a,c,d){m("js",b,a,c,d)}}}(this,this.document);

LazyLoad.js([lz_poll_server + "templates/jscript/jsbox.js",lz_poll_server + "templates/jscript/jsglobal.js",lz_poll_server + "templates/jscript/jstrack.js"], function () {lz_resources[0]=true;lz_resources[1]=true;lz_resources[2]=true;});

if(lz_overlay_chat_available)
{
	createCSSCheck("csschkoc");
	LazyLoad.css(lz_poll_server + "templates/overlays/chat/style.css", function (arg) {}, '');
	LazyLoad.js(lz_poll_server + "templates/overlays/chat/jscript/jsextern.js", function () {lz_resources[4]=true;});
}

LazyLoad.css(lz_poll_server + "templates/style.css", function (arg) {}, '');

lz_tracking_start_system();
function lz_tracking_start_system()
{
	if(!lz_resources[5] && getStyle(document.getElementById("csschktr"),"display") === "none")
		lz_resources[5]=true;
		
	if(lz_overlay_chat_available && !lz_resources[3] && getStyle(document.getElementById("csschkoc"),"display") === "none")
		lz_resources[3]=true;

	if(!lz_resources[0] || !lz_resources[1] || !lz_resources[2] || !lz_resources[5] || (lz_overlay_chat_available && (!lz_resources[3] || !lz_resources[4])))
	{	
		setTimeout(lz_tracking_start_system, 50);
		return;
	}
	lz_geo_resolution = new lz_geo_resolver();
	window.onerror=lz_global_handle_exception;
	
	if(location.search.indexOf("lzcobrowse") != -1)
		return;
		
	lz_session = new lz_jssess();
	lz_session.Load();
	
	try
	{
		if(window.opener != null && typeof(window.opener.lz_get_session) != 'undefined')
		{
			lz_session.UserId = window.opener.lz_get_session().UserId;
			lz_session.GeoResolved = window.opener.lz_get_session().GeoResolved;
		}
	}
	catch(ex)
	{
		// ACCESS DENIED
	}
	
	lz_session.Save();
	if(!lz_tracking_geo_resolute())
		lz_tracking_poll_server();
}

function getStyle(_elem,_prop)
{
	if(lz_is_ie)
		return _elem.currentStyle[_prop];
	else if(document.defaultView != null)
	{
		var cs=document.defaultView.getComputedStyle(_elem,null);
		return cs.getPropertyValue(_prop);
	}
}

function createCSSCheck(_id)
{
	var lz_css_check = document.createElement('div');
	lz_css_check.id = _id;
	lz_css_check.style.visibility = 'hidden';
	document.body.appendChild(lz_css_check);
}
