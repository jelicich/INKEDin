/**
 * header module
 */

inked.Modal = {
    init : function() 
    {
        $('.modal').on('show.bs.modal', inked.Modal.centerModal);
        $(window).on("resize", function () {
            $('.modal:visible').each(inked.Modal.centerModal);
        });

        $('.photo-anchor').click(function()
        {
            //console.log($(this).children());
            var src = $(this).children().attr('src');
            var lg_src = src.replace('/sm/','/reg/');
            $('#photo-target').attr('src', lg_src);        
        });
    },

    
    centerModal : function() 
    {
        $(this).css('display', 'block');
        var $dialog = $(this).find(".modal-dialog");
        var offset = ($(window).height() - $dialog.height()) / 2;
        // Center modal vertically in window
        if(offset < 0) offset = 10;
        $dialog.css("margin-top", offset);
    },
};


{
    $(document).ready(function() {
        inked.Modal.init();
    });
}
