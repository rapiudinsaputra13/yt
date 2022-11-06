<script type="text/javascript">
    (function($) {
        "use strict";
        var TableDatatablesManaged = function() {

            var initTable1 = function() {
                var base_url = 'https://titimangsa.or.id/admin/Setdata/data';
                var table = $('#manage_tbl');
                var controller = "<?php echo $controller ?>";
                // begin first table
                var tablex = table.DataTable({
                    //"responsive": true,
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        url: base_url + '?tb=' + controller, // json datasource
                        type: "get", // method  , by default get                   
                        error: function() { // error handling
                            $("#manage_tbl").html("");
                            $("#manage_tbl").append('<tbody class=""><tr><th colspan="14">No data found in the server</th></tr></tbody>');
                            $("#manage_tbl").css("display", "none");
                        }
                    },
                    // "column": [{
                    //     "targets": [-1, 0, 12],
                    //     "orderable": false
                    // }],

                    "lengthMenu": [

                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],


                    dom: 'Blfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    order: [],

                });
                tablex.buttons().container().appendTo('#filterx');
                //table.buttons().container().appendTo($('#filterx', table.table().container()));
            }

            return {
                //main function to initiate the module
                init: function() {
                    if (!jQuery().dataTable) {
                        return;
                    }

                    initTable1();
                }

            };
        }();
        TableDatatablesManaged.init();
    })(jQuery);
</script>