<div id="grid"></div>
            <script>
                $(document).ready(function () {
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: "http://e-idea/admin/pageget",
                                    dataType: "json"
                                },
                                update: {
                                    url: "http://e-idea/admin/pageget/update",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: "http://e-idea/admin/pageget/delete",
                                    dataType: "json"
                                },
                                create: {
                                    url: "http://e-idea/admin/pageget/update",
                                    dataType: "json"
                                },
                                back:{
                                    
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 30,
                            schema: {
                                model: {
                                    id:"id",
                                    fields: {
                                        id: { editable: false, nullable: true },
                                        title: {validation: { required: true }},
                                        url: {validation: { required: true }},
                                        content: {},
                                        meta: {validation: { required: true }}
                                    }
                                }
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
                        navigatable: true,
                        pageable: true,
                        height: 400,
                        toolbar: ["back","create"],
                        columns: [
                            { field: "id", title: "ID", width: 50 },
                            { field: "title", title: "Title", width: 150 },
                            { field: "url", title: "URL", width: 100 },
                            { field: "content", title: "Content", width: 100 },
                            { field: "meta", title: "Description", width: 100 },
                            { command: ["edit", "destroy"], title: "&nbsp;", width: "100px" }],
                        editable: "popup"
                    });
                });
            </script>