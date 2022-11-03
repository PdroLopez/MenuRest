@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h5 class="card-label">Contáctanos</h5>
            </div>
        </div>
        {!! Form::open(['name' => 'formulario1']) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control form-control-solid form-control-lg" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="form-group">
                            <label>Region</label>
                            <select class="seleccion form-control form-control-solid form-control-lg" name="cosa" onchange="cambia()">
                                <option value="0">Seleccione
                                <option value="Tarapacá">Tarapacá
                                <option value="Antofagasta">Antofagasta
                                <option value="Atacama">Atacama
                                <option value="Coquimbo">Coquimbo
                                <option value="Valparaiso">Valparaiso
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Comuna</label>
                            <select class="seleccion form-control form-control-solid form-control-lg" name="opt">
                                <option value="-">-
                            </select>
                        </div>
                        <script type="text/javascript">
                            //1) Definir Las Variables Correspondintes

                            var opt_Tarapacá = new Array ("-",
                            "Alto Hospicio",
                            "Camiña",
                            "Colchane",
                            "Huara",
                            "Iquique",
                            "Pica",
                            "Pozo Almonte");

                            var opt_Antofagasta = new Array ("-",
                            "Antofagasta",
                            "Calama",
                            "María Elena",
                            "Mejíllones",
                            "Ollague",
                            "San Pedro de Atacama",
                            "Sierra Gorda",
                            "Taltal",
                            "Tocopilla");

                            var opt_Atacama = new Array ("-",
                            "Alto del Carmen",
                            "Caldera",
                            "Chañaral",
                            "Copiapó",
                            "Diego de Almagro",
                            "Freirina",
                            "Huasco",
                            "Tierra Amarilla",
                            "Vallenar");


                            var opt_Coquimbo = new Array ("-",
                             "Andacollo",
                             "Canela",
                             "Combarbalá",
                             "Coquimbo",
                             "Illapel",
                             "La Higuera",
                             "La Serena",
                             "Los Vilos",
                             "Monte Patria",
                             "Ovalle",
                             "Paiguano",
                             "Punitaqui",
                             "Rio Hurtado",
                             "Salamanca",
                             "Vicuña");

                             var opt_Valparaiso = new Array ("-",
                             "Algarrobo",
                             "Cabildo",
                             "La Calera",
                             "Calle Larga",
                             "Cartagena",
                             "Casablanca",
                             "Catemu",
                             "Concón",
                             "El Quisco",
                             "El Tabo",
                             "Hijuelas",
                             "Isla de Pascua",
                             "Juan Fernandez",
                             "La Cruz",
                             "La Ligua",
                             "Limache",
                             "Llaillay",
                             "Los Andes",
                             "Nogales",
                             "Olmué",
                             "Panquehue",
                             "Papudo",
                             "Petorca",
                             "Punchancaví",
                             "Putaendo",
                             "Quillota",
                             "Quilpué",
                             "Quintero",
                             "Rinconada",
                             "San Antonio",
                             "San Esteban",
                             "Santa María",
                             "Santo Domingo",
                             "Valparaiso",
                             "Villa Alemana",
                             "Viña del Mar",
                             "Zapallar"
                             );

                            // 2) crear una funcion que permita ejecutar el cambio dinamico

                            function cambia(){
                                var cosa;
                                //Se toma el vamor de la "cosa seleccionada"
                                cosa = document.formulario1.cosa[document.formulario1.cosa.selectedIndex].value;
                                //se chequea si la "cosa" esta definida
                                if(cosa!=0){
                                    //selecionamos las cosas Correctas
                                    mis_opts=eval("opt_" + cosa);
                                    //se calcula el numero de cosas
                                    num_opts=mis_opts.length;
                                    //marco el numero de opt en el select
                                    document.formulario1.opt.length = num_opts;
                                    //para cada opt del array, la pongo en el select
                                    for(i=0; i<num_opts; i++){
                                        document.formulario1.opt.options[i].value=mis_opts[i];
                                        document.formulario1.opt.options[i].text=mis_opts[i];
                                    }
                                    }else{
                                        //si no habia ninguna opt seleccionada, elimino las cosas del select
                                        document.formulario1.opt.length = 1;
                                        //ponemos un guion en la unica opt que he dejado
                                        document.formulario1.opt.options[0].value="-";
                                        document.formulario1.opt.options[0].text="-";
                                    }
                                    //hacer un reset de las opts
                                    document.formulario1.opt.options[0].selected = true;

                                }



                        </script>









                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control form-control-solid form-control-lg" placeholder="Ingresa tu Dirección">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control form-control-solid form-control-lg" placeholder="Ingresa tu número">
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="email" class="form-control form-control-solid form-control-lg" placeholder="Ingresa tu correo">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Ingresa tu Mensaje</label>
                            <textarea class="form-control form-control-solid form-control-lg" id="exampleTextarea" rows="3"></textarea>
                            <p class="m-4" style="color:gray;">Nunca compartiremos tus datos con otra persona</p>
                        </div>
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <button type="reset" class="btn btn-primary font-weight-bold mr-2">Enviar</button>
                        {{-- <button type="reset" class="btn btn-clean font-weight-bold">Cancelar</button> --}}
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="d-flex flex-column mr-5">
                            <a class="h4 text-dark text-hover-primary mb-5">Crea tus propios bingos</a>
                            <p class="text-dark-50">Puedes crear tus propios bingos y Compartirlos con tus amigos.</p>
                        </div>
                        <div class="ml-6 flex-shrink-0">
                            <a href="{{asset('bingos/crear')}}"class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Crear</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-success">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="d-flex flex-column mr-5">
                            <a  class="h4 text-dark text-hover-primary mb-5">Juega con nosotros</a>
                            <p class="text-dark-50">Únete a un bingo, revisa las fechas disponibles.</p>
                        </div>
                        <div class="ml-6 flex-shrink-0">
                            <a href="{{asset('bingos')}}"class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-6">Unirse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
