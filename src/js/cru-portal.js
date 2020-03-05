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


/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 300) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/