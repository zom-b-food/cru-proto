var test = window.location.href;

if (test.split('/dcs/').length > 1) {
	document.getElementById('bc-list').style.display = 'none';
	document.getElementById('bc-link').style.display = 'none';
	document.getElementById('dcs-list').style.display = 'block';
	document.getElementById('dcs-link').style.display = 'block';
	document.getElementById('sch-list').style.display = 'none';
	document.getElementById('sch-link').style.display = 'none';
	
} else if (test.split('/bc/').length > 1) {
	document.getElementById('bc-list').style.display = 'block';
	document.getElementById('bc-link').style.display = 'block';
	document.getElementById('dcs-list').style.display = 'none';
	document.getElementById('dcs-link').style.display = 'none';
	document.getElementById('sch-list').style.display = 'none';
	document.getElementById('sch-link').style.display = 'none';

} else if (test.split('/sch/').length > 1 ) {
	document.getElementById('bc-list').style.display = 'none';
	document.getElementById('bc-link').style.display = 'none';
	document.getElementById('dcs-list').style.display = 'none';
	document.getElementById('dcs-link').style.display = 'none';
	document.getElementById('sch-list').style.display = 'block';
	document.getElementById('sch-link').style.display = 'block';

}