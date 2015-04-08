inked.Message = {
    init : function() 
    {
        $('#sendMessage').on('show.bs.modal', function (event) {
             
              var button = $(event.relatedTarget); 
              var recipient = button.data('whatever');
              var modal = $(this);

              modal.find('.modal-title').text('Nuevo mensaje para ' + recipient);
        });

      
        jQuery.fn.preventDoubleSubmission = function() {

              $(this).on('submit', function(e){
                 
                  var $form = $(this);

                  if ($form.data('submitted') === true) {

                    e.preventDefault();

                  } else {

                    $form.data('submitted', true);
                  }
              });

              return this;
        };

        $('form').preventDoubleSubmission();

    }
};


{
    $(document).ready(function() {
        inked.Message.init();
    });
}