//Datepicker
$('.date').datepicker({
    format: "yyyy/mm/dd",
    startDate: "2012-01-01",
    endDate: "2015-01-01",
    todayBtn: "linked",
    autoclose: true,
    todayHighlight: true
    });

//Portal Radio Value Populate
$('input[name=portal]:radio').click(function() {
        var portalName = $('input[name=portal]:checked').val(); 
        $('span.portValue').text(portalName);
    });

//Display Field box if 'other' radio button is selected

$('form').click(function() {

	if ($('#other-radio').prop('checked')) {
		$('#other-field').show().css('display', 'block');
	}
	else {
		$('#other-field').hide();
	}

});


//Navbar Active class


var url = window.location;
// Will only work if string in href matches with location
$('.side-nav li a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('.side-nav li a').filter(function() {
    return this.href == url;
}).parent().addClass('active');

//Display Submit Message Alert

$('.show-message').click(function() {

$('.submit-message').show();



});