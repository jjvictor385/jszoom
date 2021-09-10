# jszoom
Simple JQuery zoom plugin.

Usage:

For CSS, use this styles:
```css
.t, .mn {
	position: relative;
}
.t {
	display: inline-block;
}
.mn {
	cursor: crosshair;
}
#target {
	width: calc(var(--t) / 2);
}
.t .view {
	position: absolute;
	top: 0;
	left: 100%;
	width: 100%;
	height: 100%;
	overflow: hidden;
}
.t .view img {
	position: absolute;
}
.cs {
	position: absolute;
	background: #000;
	opacity: 0.7;
	top: 0;
	left: 0;
}
.cs, .view {
	display: none;
}
.mn:hover ~ div {
	display: block;
}
.mn::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 1;
}
```

For the HTML:
```html
<div class="t">
	<div class="mn"> 
		<img src="yourimagesource">
	</div>
	<div class="view">
		<img src="yourimagesource">
	</div>
	<div class="cs"></div>
</div>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/zoom.js"></script>
```

And with one line of JQuery:
```javascript
$('#target').zoom();

// You can also set the zoom level:
$('#target').zoom(5);

// Or if you want to set zoom level dinamically:
var zoom = $('#target').zoom(5);

zoom.setZoom(10);
```