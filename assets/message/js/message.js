inked.Message = {
    init : function() 
    {
        $('#sendMessage').on('show.bs.modal', function (event) {
             
              var button = $(event.relatedTarget); 
              var recipient = button.data('whatever');
              var modal = $(this);

              modal.find('.modal-title').text('Nuevo mensaje para ' + recipient);
        })
    }
};


{
    $(document).ready(function() {
        inked.Message.init();
    });
}