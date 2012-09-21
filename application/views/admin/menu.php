<div id="grid"></div>
            <script>
                $(document).ready(function () {
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: "http://e-idea/admin/menuget",
                                    dataType: "json"
                                },
                                update: {
                                    url: "http://e-idea/admin/menuget/update",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: "http://e-idea/admin/menuget/delete",
                                    dataType: "json"
                                },
                                create: {
                                    url: "http://e-idea/admin/menuget/update",
                                    dataType: "json"
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
                                        name: { validation: { required: true } },
                                        title: {validation: { required: true }},
                                        link: { },//
                                        parentId: {type:"number"},
                                        position: {type:"number"}
                                    }
                                }
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
                        navigatable: true,
                        pageable: true,
                        height: 400,
                        toolbar: ["create"],
                        columns: [
                            { field: "id", title: "ID", width: 50 },
                            { field: "name", title: "Name", width: 150 },
                            { field: "title", title: "Title", width: 150 },
                            { field: "link", title: "Link", width: 100, editor: linkDropDownEditor},
                            { field: "parentId", title: "Parent ID", width: 100 },
                            { field: "position", title: "Position", width: 100,  },
                            { command: ["edit", "destroy"], title: "&nbsp;", width: "100px" }],
                        editable: "popup"
                    });
                });
                
                function linkDropDownEditor(container, options) {
                    $('<input data-text-field="title" data-value-field="title" data-bind="value:' + options.field +'"/>')
                        .appendTo(container)
                        .kendoDropDownList({
                            autoBind: true,
                            dataSource: {
                                type: "json",
                                transport: {
                                    read: "http://e-idea/admin/pageget/link"
                                }
                            }
                        });
                }
            </script>