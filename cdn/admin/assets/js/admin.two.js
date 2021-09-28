$(function(){
    "use strict";

    //sorting out the checking out as guest area
    $("input[name='chkGuestReg']").click(function(){
        if($('#chkReg').is(":checked")){
            $('#dvRegistration').show();
            $('#dvGuest').hide();
        }
        else{
            $('#dvRegistration').hide();
            $('#dvGuest').show();
        }
    });

    // Initialize card flip
    $('.card.hover').hover(function(){
        $(this).addClass('flip');
    },function(){
        $(this).removeClass('flip');
    });

    $('#mmenu').on(
        "opened.mm",
        function()
        {
            // redraw the graph in the correctly sized div
            plot.resize();
            plot.setupGrid();
            plot.draw();
        }
    );

    $('#mmenu').on(
        "closed.mm",
        function()
        {
            // redraw the graph in the correctly sized div
            plot.resize();
            plot.setupGrid();
            plot.draw();
        }
    );

    // tooltips showing
    $("#statistics-chart").bind("plothover", function (event, pos, item) {
        if (item) {
            var x = item.datapoint[0],
                    y = item.datapoint[1];

            $("#tooltip").html('<h1 style="color: #418bca">' + months[x - 1] + '</h1>' + '<strong>' + y + '</strong>' + ' ' + item.series.label)
                    .css({top: item.pageY-30, left: item.pageX+5})
                    .fadeIn(200);
        } else {
            $("#tooltip").hide();
        }
    });

    //tooltips options
    $("<div id='tooltip'></div>").css({
        position: "absolute",
        //display: "none",
        padding: "10px 20px",
        "background-color": "#ffffff",
        "z-index":"99999"
    }).appendTo("body");

    // sortable table
    $('.table.table-sortable th.sortable').click(function() {
        var o = $(this).hasClass('sort-asc') ? 'sort-desc' : 'sort-asc';
        $('th.sortable').removeClass('sort-asc').removeClass('sort-desc');
        $(this).addClass(o);
    });

    //todo's
    $('#todolist li label').click(function() {
        $(this).toggleClass('done');
    });

    // Initialize tabDrop
    $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});

    //load wysiwyg editor
    $('#quick-message-content').summernote({
        toolbar: [
            //['style', ['style']], // no style button
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            //['insert', ['picture', 'link']], // no insert buttons
            //['table', ['table']], // no table button
            //['help', ['help']] //no help button
        ],
        height: 143   //set editable area's height
    });

    //multiselect input
    $(".chosen-select").chosen({disable_search_threshold: 10});

    //Bidding Entry
    $('#from, #to').datetimepicker();
})(jQuery);