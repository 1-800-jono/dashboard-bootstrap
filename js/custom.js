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



  function stripTrailingSlash(str) {
    if(str.substr(-1) == '/') {
      return str.substr(0, str.length - 1);
    }
    return str;
  }

  var url = window.location.pathname;  
  var activePage = stripTrailingSlash(url);

  $('li a').each(function(){  
    var currentPage = stripTrailingSlash($(this).attr('href'));

    if (activePage == currentPage) {
      $(this).parent().addClass('active'); 
    } 
  });
