var test = window.location.href;

if (test.split('dcs-landing-page').length > 1 || test.split('ccd').length > 1 || test.split('claimdump').length > 1 ||
	test.split('family-cat-cap-accruals').length > 1 || test.split('post-processing-report').length > 1 ||
	test.split('waiver').length > 1) {
	document.getElementById('bc-nav').style.display = 'none';
	document.getElementById('bc-link').style.display = 'none';
	document.getElementById('dcs-nav').style.display = 'block';
	
} else if (test.split('bc-landing-page').length > 1 || test.split('px-codes').length > 1) {
	document.getElementById('bc-nav').style.display = 'block';
	document.getElementById('dcs-link').style.display = 'none';
	document.getElementById('dcs-nav').style.display = 'none';

}