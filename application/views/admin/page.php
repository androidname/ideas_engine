<style>
    .k-window{width:770px;}
    .contentColor{color:#777;}
</style>
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
                        toolbar: ["create"],
                        columns: [
                            { field: "id", title: "ID", width: 50 },
                            { field: "title", title: "Title", width: 150 },
                            { field: "url", title: "URL", width: 100 },
                            { field: "content", title: "Content", width:100 ,
                              editor: textEditor,
                              template: "<a class='contentColor' href='<?php echo URL::base() ?>'>Просмотреть</a>" },
                            {field: "image",title:"uploaded",template:"yes",editor:fileUpload,width:20},
                            { field: "meta", title: "Description", width: 100 },
                            { command: ["edit", "destroy"], title: "&nbsp;", width: "100px" }],
                        editable: "popup"
                    });
                });
                
                 function textEditor(container,options){
                    $('<textarea id="editor" rows="10" cols="30" style="width:540px;height:340px" data-bind="value:' + options.field + '"></textarea>')
                    .appendTo(container)
                    .kendoEditor();
                }
                 function fileUpload(containe){
                     $('<input name="files" id="files" type="file" />')
                     .appendTo(containe)
                     .kendoUpload({
                        async: {
                            saveUrl: "http://e-idea/admin/pageget/save",
                            removeUrl: "http://e-idea/admin/pageget/remove",
                            autoUpload: true
                        },
                        progress: onProgress
                    });
                 }
                 
                 function onProgress(e) {
                     var imageName = null;
                     console.log(e.percentComplete);
                        $.each(e.files, function(index,value) {
                        imageName = value.name;
                        console.log("Name: " + value.name);
                        console.log("Size: " + value.size + " bytes");
                        console.log("Extension: " + value.extension);
                    });
                    $('<img src="<?php echo URL::base(); ?>styles/upload/'+imageName+'" alt="'+imageName+'" />').appendTo("#editor");
                    
                }
            </script>