<div id="grid"></div>

            <script>
                $(document).ready(function() {
                    $("#grid").kendoGrid({
                        dataSource: {
                            transport: {
                                read:  {
                                    url: "<?php echo URL::base()."admin/pages/datapagejson" ?>",
                                    dataType: "json"
                                        }
                            },
                            schema: {
                                model: {
                                    fields: {
                                        id: { type: "number" },
                                        title: { type: "string" },
                                        url: { type: "string" },
                                        meta: { type: "string" }                                        
                                    }
                                }
                            },
                            pageSize: 10,
                            serverPaging: true,
                            serverFiltering: true,
                            serverSorting: true
                        },
                        height: 40,
                        sortable: true,
                        filterable: true,
                        columnMenu: true,
                        pageable: true,
                        columns: [
                            "id",
                            "title",
                            "url",
                            "meta"
                        ]
                    });
                });
            </script>