$(document).ready(function(){

	$('#form-guru').validate({
		rules: {
        nip: {
            remote: {
                    url: SITE_URL + '/identitas/guru/validate',
                    type: 'post',
                    data: {
                            nip: function() { return $('input[name="nip"]').val()},
                            id: function() { return $('input[name="id"]').val() != undefined ? $('input[name="id"]').val() : '' },
                            _token : function() { return $('meta[name="csrf-token"]').attr('content')}
                          }
                      }
                  },
      	},
    messages: {
        nip: {
            remote: 'Code with {0} has been used'
        }
    },
    onkeyup: function(element){$(element).valid()},
	});

});