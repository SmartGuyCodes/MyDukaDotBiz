<!-- jquery latest version -->
<script src="{$cdn}js/vendor/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="{$cdn}admin/assets/lib/jQuery-chained/jquery.chained.min.js"></script>
{*<script src="https://code.jquery.com/jquery.js"></script>*}

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{$cdn}admin/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{$cdn}assets/lib/form-master/jquery.form.js"></script>
<script type="text/javascript" src="{$cdn}assets/lib/jQuery-Validation-Engine/js/languages/jquery.validationEngine-en.js" charset="utf-8"></script>
<script type="text/javascript" src="{$cdn}assets/lib/jQuery-Validation-Engine/js/jquery.validationEngine.js" charset="utf-8"></script>

<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/blockui/jquery.blockUI.js"></script>

<script src="{$cdn}admin/assets/js/vendor/flot/jquery.flot.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/flot/jquery.flot.time.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
<script src="{$cdn}admin/assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

<script src="{$cdn}admin/assets/js/vendor/rickshaw/raphael-min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/rickshaw/d3.v2.js"></script>
<script src="{$cdn}admin/assets/js/vendor/rickshaw/rickshaw.min.js"></script>

<script src="{$cdn}admin/assets/js/vendor/morris/morris.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/summernote/summernote.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="{$cdn}admin/assets/js/minimal.min.js"></script>
<script src="https://myduka.biz/cdn/assets/lib/sweet-alert/dist/sweetalert.min.js"></script>
<script src="{$cdn}admin/assets/js/admin.two.js" type="text/javascript"></script>
<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
						
{literal}
    <!--script>tinymce.init({ selector:'textarea' });</script>
	<!-- Data tables plugin init-->
	<script type="text/javascript">
		// $('#user-products, #user-address-book, #user-orders, #user-wishlist, #user-msgs').DataTable();
	</script>
    <script>
        $(function(){
            // Add custom class to pagination div
            $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

            /****************************************************/
            /**************** ADVANCED DATATABLE ****************/
            /****************************************************/
            var oTable04 = $('#staffDataTable, #urgentOrdersDataTable, #latestOrdersDataTable, #user-products, #user-address-book, #user-orders, #user-wishlist, #user-msgs').dataTable({
                "sDom":
                "<'row'<'col-md-4'l><'col-md-4 text-center sm-left'T C><'col-md-4'f>r>"+
                "t"+
                "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
                "oLanguage": {
                    "sSearch": ""
                },
                "oTableTools": {
                    "sSwfPath": "{$cdn}admin/assets/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
                    "aButtons": [
                        "copy",
                        "print",
                        {
                            "sExtends":    "collection",
                            "sButtonText": 'Save <span class="caret" />',
                            "aButtons":    [ "csv", "xls", "pdf" ]
                        }
                    ]
                },
                "fnInitComplete": function(oSettings, json) {
                    $('.dataTables_filter input').attr("placeholder", "Search");
                },
                "oColVis": {
                    "buttonText": '<i class="fa fa-eye"></i>'
                }
            });

            $('.ColVis_MasterButton').on('click', function(){
                var newtop = $('.ColVis_collection').position().top - 45;

                $('.ColVis_collection').addClass('dropdown-menu');
                $('.ColVis_collection>li>label').addClass('btn btn-default')
                $('.ColVis_collection').css('top', newtop + 'px');
            });

            $('.DTTT_button_collection').on('click', function(){
                var newtop = $('.DTTT_dropdown').position().top - 45;
                $('.DTTT_dropdown').css('top', newtop + 'px');
            });

            //initialize chosen
            $('.dataTables_length select').chosen({disable_search_threshold: 10});
        })
    </script>
	
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/56ba5a00a3b1daa206ece438/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
{/literal}