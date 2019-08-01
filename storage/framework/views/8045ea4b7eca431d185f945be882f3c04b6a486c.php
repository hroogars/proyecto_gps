<?php $__env->startSection('content'); ?>
<article class="content responsive-tables-page">
    <div class="title-block">
        <h1 class="title"> Instituciones </h1>
        <p class="title-description"> Lista de Instituciones </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title">DataTable Responsivo simple </h3><br>
                             <button type="button" class="btn btn-primary" onclick="AñadirInstitucion()">Añadir</button> 
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table id="tableId1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre Institucion</th>
                                            <th>Nombre Corto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($institution as $key => $u): 
                                            if($u->active == 1){  ?>
                                                <tr>
                                                    <td><?php echo e($u->name); ?></td>
                                                    <td><?php echo e($u->shortName); ?></td>
                                                    <td align="center"><input type="button" value="Editar" class="btn btn-primary" onclick="Editar( '<?php echo e($u->name); ?> ', '<?php echo e($u->shortName); ?> ', '<?php echo e($u->id); ?>' )"> 
                                                        &nbsp;&nbsp; 
                                                        <input type="button" value="Eliminar" class="btn btn-danger" onclick="Eliminar( '<?php echo e($u->name); ?> ', '<?php echo e($u->shortName); ?> ','<?php echo e($u->id); ?>' )">
                                                    </td>
                                                </tr>
                                            <?php }
                                        endforeach 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>

<script>
    
    function AñadirInstitucion(){
        swal({
                title: 'Añadir Institucion',
                html:
                '<label>Nombre Institucion</label><br>'+
                '<input type="text" class="swal2-input" id="modalAgregarInputNombreInstitucion"><br>'+
                '<label>Abreviación</label><br>'+
                '<input class="swal2-input" type="text" id="modalAgregarInputNombreCortoInstitucion"><br>',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Confirmar',
                reverseButtons: true,
                preConfirm: function () {
                    return new Promise(function (resolve, reject) {
                        if($('#modalAgregarInputNombreInstitucion').val() =="" || $('#modalAgregarInputNombreCortoInstitucion').val() == ""){
                            reject("Debe completar todos los campos")
                        }
                        setTimeout(function() {
                            resolve([
                                $('#modalAgregarInputNombreInstitucion').val(),
                                $('#modalAgregarInputNombreCortoInstitucion').val()
                                ])
                        }, 2000)

                    })
                }
            }).then(function (result){



            console.log(result);

            $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                    url: '<?php echo e(route('institution.add')); ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        name:result[0], 
                        shortName:result[1],
                        active:1
                    },
                    beforeSend: function () {

                        swal({
                            title: 'Espere...',
                            text: 'Registrando Protocolo',
                            onOpen: () => {
                                swal.showLoading()
                            }
                        }).then((result) => {
                            if (result.dismiss === 'timer') {
                            }
                        })
                    },
                }).done(function( data ) {
                    swal(
                        '¡Enviado!',
                        'El registro ha sido ingresado con exito',
                        'success'
                        ).then(function () {
                            location.reload();
                        })
                    }).fail(function(data) {
                        swal(
                            '¡Error!',
                            'El registro no pudo ser ingresado, favor intente mas tarde',
                            'error'
                            )
                    });




        }).catch(swal.noop)
    }

    function Editar(name, shortName, id){
        this.name = name;
        this.shortName = shortName;
        this.id = id;
        swal({
            title: 'Editar Institucion',
            html:
            '<input id="ID" class="swal2-input" hidden disabled value="'+id+'">'+
            '<b>Nombre Institucion</b>  <input id="NombreInstitucion" class="swal2-input" value="'+name+'">'+
            '<b>Nombre Corto</b>  <input id="NombreCorto" class="swal2-input" value="'+shortName+'">',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Confirmar',
            reverseButtons: true,
            preConfirm: function () {
                return new Promise(function (resolve, reject) {
                    if($('#NombreInstitucion').val() =="" || $('#NombreCorto').val() == ""){
                            reject("No deben quedar campos vacios")
                        }
                    setTimeout(function() {
                        resolve([
                            $('#ID').val(),
                            $('#NombreInstitucion').val(),
                            $('#NombreCorto').val()
                            ])
                    }, 2000)

                })
            }
        }).then(function (result){



            console.log(result);

            $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                    url: '<?php echo e(route('institution.edit')); ?>',
                    type: 'PUT',
                    dataType: 'JSON',
                    data: {
                        id:result[0], 
                        name:result[1], 
                        shortName:result[2],
                        active:1
                    },
                    beforeSend: function () {

                        swal({
                            title: 'Espere...',
                            text: 'Registrando Protocolo',
                            onOpen: () => {
                                swal.showLoading()
                            }
                        }).then((result) => {
                            if (result.dismiss === 'timer') {
                            }
                        })
                    },
                }).done(function( data ) {
                    swal(
                        '¡Enviado!',
                        'El registro ha sido actualizado con exito',
                        'success'
                        ).then(function () {
                            location.reload();
                        })
                    }).fail(function(data) {
                        swal(
                            '¡Error!',
                            'El registro no pudo ser actualizado, favor intente mas tarde',
                            'error'
                            )
                    });




        }).catch(swal.noop)
    }

    function Eliminar(name, shortName, id){
        this.name = name;
        this.shortName = shortName;
        this.id = id;
        swal({
            title: 'Eliminar Institucion',
            html:
            '<p>Seguro que desea Eliminar la Institucion '+name+' '+shortName+' </p>',                
            showCancelButton: true,
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Confirmar',
            reverseButtons: true,
            preConfirm: function () {
                return new Promise(function (resolve, reject) {
                    setTimeout(function() {
                        resolve([
                            id,
                            name,
                            shortName
                            ])
                    }, 2000)

                })
            }
        }).then(function (result){



            console.log(result);

            $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                    url: '<?php echo e(route('institution.edit')); ?>',
                    type: 'PUT',
                    dataType: 'JSON',
                    data: {
                        id:result[0], 
                        name:result[1], 
                        shortName:result[2],
                        active:0
                    },
                    beforeSend: function () {

                        swal({
                            title: 'Espere...',
                            text: 'Registrando Protocolo',
                            onOpen: () => {
                                swal.showLoading()
                            }
                        }).then((result) => {
                            if (result.dismiss === 'timer') {
                            }
                        })
                    },
                }).done(function( data ) {
                    swal(
                        '¡Enviado!',
                        'El registro ha sido eliminado con exito',
                        'success'
                        ).then(function () {
                            location.reload();
                        })
                    }).fail(function(data) {
                        swal(
                            '¡Error!',
                            'El registro no pudo ser eliminado, favor intente mas tarde',
                            'error'
                            )
                    });




        }).catch(swal.noop)
    }

</script>

<script>
    $(document).ready(function() {

        //PARA LA PRIMERA TABLA
        $('#tableId1').DataTable( {
            language: {
                sProcessing:     "Cargando datos...&nbsp;&nbsp;<img height='32' width='32' src='<?php echo e(url('dist/img/loader.gif')); ?>'>",
                sLengthMenu:     "Mostrar _MENU_ registros",
                sZeroRecords:    "No se encontraron resultados",
                sEmptyTable:     "No existe ningún registro en este momento",
                sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered:   "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix:    "",
                sSearch:         "Buscar:",
                sUrl:            "",
                sInfoThousands:  ",",
                sLoadingRecords: "&nbsp;",
                oPaginate: {
                    sFirst:    "Primero",
                    sLast:     "Último",
                    sNext:     "Siguiente",
                    sPrevious: "Anterior"
                },
                oAria: {
                    sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending: ": Activar para ordenar la columna de manera descendente"
                }
            },
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: true,
            processing: true,
            //order: [[ 12, "desc" ]],
           
        }); 
    });   
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>