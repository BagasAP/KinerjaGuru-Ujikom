$(function(){

    $('body').on('click', '.pagination a', function(event){
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
        get_guru(page);     
    });

    $('[name="keyword"]').keyup(function(event){
        if(event.keyCode == 13){
           get_guru(1);
        }
    });

    $('#btn-confirm').click(function(){
        $.ajax({
            url: SITE_URL + '/identitas/guru/' + $(this).data('value'),
            type: 'delete',
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function(){
                $('#btn-confirm').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Loading ...');
                $('#btn-confirm').attr('disabled', 'disabled');
            },
            success: function(data){
                show_notification(data.title, data.type, data.message);
                $('#modal-delete-confirm').modal('hide');
                get_guru(1);
            },
            error: function(error, sts, xhr){
                show_notification('Error', 'error', xhr);
            },
            complete:function () { 
                $('#btn-confirm').html('Ya');
                $('#btn-confirm').removeAttr('disabled');
            }

        });
    });

    function get_guru(page) {
        $.ajax({
            url: SITE_URL + '/identitas/guru',
            type: 'get',
            data: {
                page: page,
                keyword: $('[name="keyword"]').val()
            },
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(data) {
                $('.guru').html(data);
                $('.loading').hide();
            }
        });
    }

});

function on_delete(val) {
    $('#modal-delete-confirm').modal('show');
    $('#btn-confirm').data('value', val);
}