<?php

use App\Http\Controllers\CarrerasController;
use Illuminate\Support\Facades\Route;

//use Intervention\Image\Image;
//use Image;
use Intervention\Image\ImageManagerStatic as Image;

//use Intervention\Image\Filters\FilterInterface;


//Rutas publicas**************************************************************************
//Rutas para descarga de archivos de noticias
Route::get('/download/{id_not}/{nomImg}', 'IndexController@getDownload');

//Transparecia
Route::get('transparencia/acceso_transparencia',function(){return view('content.transparencia.acceso_transparencia');})->name('transparencia.acceso_transparencia');

//Rutas de vinculación
Route::get('vinculacion/bolsa-de-trabajo',function(){return view('content.vinculacion.bolsa-de-trabajo');})->name('vinculacion.bolsa-de-trabajo');
Route::get('vinculacion/banco_de_datos','BancoController@show')->name('vinculacion.banco_de_datos');
Route::get('vinculacion/fichas2021',function(){return view('content.vinculacion.fichas2021');})->name('vinculacion.fichas2021');
Route::get('vinculacion/convenio_colaboracion',function(){return view('content.vinculacion.convenio_colaboracion');})->name('vinculacion.convenio_colaboracion');
Route::get('vinculacion/convenios',function(){return view('content.vinculacion.convenios');})->name('vinculacion.convenios');
Route::get('vinculacion/cultura_deporte',function(){return view('content.vinculacion.cultura_deporte');})->name('vinculacion.cultura_deporte');
Route::get('vinculacion/informacion',function(){return view('content.vinculacion.informacion');})->name('vinculacion.informacion');
Route::get('vinculacion/residencias',function(){return view('content.vinculacion.residencias');})->name('vinculacion.residencias');
Route::get('vinculacion/servicio-social',function(){return view('content.vinculacion.servicio-social');})->name('vinculacion.servcio-social');


//Rutas de cle
Route::get('cle/acreditacion-de-ingles',function(){return view('content.cle.acreditacion-de-ingles');})->name('cle.acreditacion-de-ingles');
Route::get('cle/acreditacion2013',function(){return view('content.cle.acreditacion2013');})->name('cle.acreditacion2013');
Route::get('cle/acreditacion2014',function(){return view('content.cle.acreditacion2014');})->name('cle.acreditacion2014');
Route::get('cle/cursoConversacion',function(){return view('content.cle.cursoConversacion');})->name('cle.cursoConversacion');
Route::get('cle/cursoToefl',function(){return view('content.cle.cursoToefl');})->name('cle.cursoToefl');
Route::get('cle/diplomado',function(){return view('content.cle.diplomado');})->name('cle.diplomado');
Route::get('cle/informacion',function(){return view('content.cle.informacion');})->name('cle.informacion');
Route::get('cle/ingles-para-adultos',function(){return view('content.cle.ingles-para-adultos');})->name('cle.ingles-para-adultos');
Route::get('cle/ingles-para-ninos',function(){return view('content.cle.ingles-para-ninos');})->name('cle.ingles-para-ninos');
Route::get('cle/ingles-para-secundaria',function(){return view('content.cle.ingles-para-secundaria');})->name('cle.ingles-para-secundaria');
Route::get('cle/traduccionDocumentos',function(){return view('content.cle.traduccionDocumentos');})->name('cle.traduccionDocumentos');
Route::get('cle/avisos',function(){return view('content.cle.avisos');})->name('cle.avios');


//Rutas de oferta educativa
Route::get('oferta_educativa/sistemas',function(){return view('content.oferta_educativa.sistemas');})->name('oferta.sistemas');
Route::get('oferta_educativa/tics',function(){return view('content.oferta_educativa.tics');})->name('oferta.tics');
Route::get('oferta_educativa/industrial',function(){return view('content.oferta_educativa.industrial');})->name('oferta.industrial');
Route::get('oferta_educativa/bioquimica',function(){return view('content.oferta_educativa.bioquimica');})->name('oferta.bioquimica');
Route::get('oferta_educativa/nano',function(){return view('content.oferta_educativa.nano');})->name('oferta.nano');
Route::get('oferta_educativa/gestion',function(){return view('content.oferta_educativa.gestion');})->name('oferta.gestion');
Route::get('oferta_educativa/mecatronica',function(){return view('content.oferta_educativa.mecatronica');})->name('oferta.mecatronica');

//Rutas de instituto
Route::get('instituto/nuestro_tec',function(){return view('content.instituto.nuestro_tec');})->name('instituto.nuestro_tec');
Route::get('instituto/directorio',function(){return view('content.instituto.directorio');})->name('instituto.directorio');
Route::get('instituto/ubicacion',function(){return view('content.instituto.ubicacion');})->name('instituto.ubicacion');

//Rutas departamentos
Route::get('departamentos/caja',function(){return view('content.departamentos.caja');})->name('departamentos.caja');

//Rutas de instituto
Route::get('investigacion/investigacion',function(){return view('content.investigacion.investigacion');})->name('investigacion.investigacion');
Route::get('calidad/proceso_seleccion',function(){return view('content.calidad.proceso_seleccion');})->name('calidad.proceso_seleccion');
Route::get('calidad/reglamento',function(){return view('content.calidad.reglamento');})->name('calidad.reglamento');
Route::get('calidad/reglamento_int',function(){return view('content.calidad.reglamento_int');})->name('calidad.reglamento_int');
Route::get('calidad/resultados_evaluacion',function(){return view('content.calidad.resultados_evaluacion');})->name('calidad.resultados_evaluacion');
Route::get('calidad/organizacional',function(){return view('content.calidad.organizacional');})->name('calidad.organizacional');
Route::get('calidad/procedimientos',function(){return view('content.calidad.procedimientos');})->name('calidad.procedimientos');
Route::get('calidad/procedimientos',function(){return view('content.calidad.procedimientos');})->name('calidad.procedimientos');
Route::get('calidad/reglamento',function(){return view('content.calidad.reglamento');})->name('calidad.reglamento');
Route::get('calidad/reglamento_int',function(){return view('content.calidad.reglamento_int');})->name('calidad.reglamento_int');
Route::get('calidad/rippa',function(){return view('content.calidad.rippa');})->name('calidad.rippa');

//Servicos escolares
Route::get('servicios_escolares/titulos_cedulas',function(){return view('content.servicios_escolares.titulos_cedulas');})->name('servicios_escolares.titulos_cedulas');
Route::get('servicios_escolares/alumnos-traslados',function(){return view('content.servicios_escolares.alumnos-traslados');})->name('servicios_escolares.alumnos-traslados');
Route::get('servicios_escolares/servicios',function(){return view('content.servicios_escolares.servicios');})->name('servicios_escolares.servicios');
Route::get('servicios_escolares/constancia',function(){return view('content.servicios_escolares.constancias');})->name('servicios_escolares.constancias');


//Alumnos
Route::get('alumnos/eventos',function(){return view('content.alumnos.eventos');})->name('alumnos.eventos');
Route::get('alumnos/empleadores',function(){return view('content.alumnos.empleadores');})->name('alumnos.empleadores');
Route::get('alumnos/encuestasservicio',function(){return view('content.alumnos.encuestasservicio');})->name('alumnos.encuestasservicio');
Route::get('alumnos/evaluatutor',function(){return view('content.alumnos.evaluatutor');})->name('alumnos.evaluatutor');
Route::get('alumnos/evaluacion_docente',function(){return view('content.alumnos.evaluacion_docente');})->name('alumnos.evaluacion_docente');

//Normativos y lineamientos
Route::get('normativos/etica',function(){return view('content.normativos.etica');})->name('normativos.etica');
Route::get('normativos/calidad',function(){return view('content.normativos.calidad');})->name('normativos.calidad');
Route::get('normativos/igualdad',function(){return view('content.normativos.igualdad');})->name('normativos.igualdad');
Route::get('normativos/ambiental',function(){return view('content.normativos.ambiental');})->name('normativos.ambiental');
Route::get('normativos/rippa',function(){return view('content.normativos.rippa');})->name('normativos.rippa');
Route::get('normativos/plan2004',function(){return view('content.normativos.plan2004');})->name('normativos.plan2004');
Route::get('normativos/plan2010',function(){return view('content.normativos.plan2010');})->name('normativos.plan2010');
Route::get('programa_capacitacion/programacapacitacion2020.pdf',function(){return view('content.programa_capacitacion.programacapacitacion2020.pdf');})->name('programa_capacitacion.programacapacitacion2020.pdf');
Route::get('normativos/plan2015',function(){return view('content.normativos.plan2015');})->name('normativos.plan2015');
Route::get('normativos/piid',function(){return view('content.normativos.piid');})->name('normativos.piid');
Route::get('instituto/ubicacion',function(){return view('content.instituto.ubicacion');})->name('instituto.ubicacion');
Route::get('tutorias/tutorias',function(){return view('content.tutorias.tutorias');})->name('tutorias.tutorias');
Route::get('servicio/medico.medico',function(){return view('content.servicio_medico.medico');})->name('servicio_medico.medico');

//evaluacion docente
Route::get('calidad/resultados_evaluacion',function(){return view('content.calidad.resultados_evaluacion');})->name('calidad.resultados_evaluacion');

//Ruta para visualizar las noticias
Route::get('/','IndexController@index')->name('inicio');
Route::get('Noticias/Ver/{id}','IndexController@ver')->name('ver');

//Rutas de loguin
Auth::routes();

//Ruta para imagenes del carousel
Route::get('/carousel/{image_name}', function($image_name)
{
	//Obtenemos imagen
	$img = Image::make(storage_path('app/public/noticias/imagenes/'.$image_name));
	// resize the image to a height of 200 and constrain aspect ratio (auto width)
	$img->resize(null,400 , function ($constraint) {
    $constraint->aspectRatio();
	});
	return $img->response('jpg');

})->name('carousel');

//Ruta para imagenes de las noticias
Route::get('/noticia/{image_name}', function($image_name)
{
	//Obtenemos la anchura de la pantalla
	Image::configure(array('driver' => 'gd'));
    $img = Image::make(storage_path('app/public/noticias/imagenes/'.$image_name));

	// resize the image to a height of 200 and constrain aspect ratio (auto width)
	//$img->resize(300,100);

    return $img->response('jpg');

})->name('noticia');




//Fin Rutas publicas***********************************************************************




//Rutas privadas****************************************************************************
Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');

	//Rutas de usuarios
	Route::get('users/index','UserController@index')->name('admin.usuarios.inicio');
	Route::get('users/crear','UserController@create')->name('admin.usuarios.crear');
	Route::get('users/editar/{id}','UserController@edit')->name('admin.usuarios.editar');
	Route::post('users/mod/{id}','UserController@update')->name('admin.usuarios.modificar');
	Route::get('users/eliminar','UserController@destroy')->name('admin.usuarios.eliminar');
	Route::post('usuarios/guardar','UserController@save')->name('admin.usuarios.guardar');

	//Rutas de noticias
	Route::get('noticias/index','NoticiasController@index')->name('admin.noticias.inicio');
	Route::get('noticias/crear','NoticiasController@create')->name('admin.noticias.crear');
	Route::post('noticias/guardar','NoticiasController@save')->name('admin.noticias.guardar');
	Route::get('noticias/editar/{id}','NoticiasController@edit')->name('admin.noticias.editar');
	Route::post('noticias/modificar/{id}','NoticiasController@update')->name('admin.noticias.modificar');
	Route::get('noticias/eliminar','NoticiasController@destroy')->name('admin.noticias.eliminar');
	Route::get('noticias/vista_previa/{id}','NoticiasController@view')->name('admin.noticias.ver');

	//Rutas de perfil
	Route::get('usuarios/perfil','PerfilController@index')->name('admin.usuarios.mi_perfil');
    Route::get('usuarios/perfil/editar','PerfilController@miPerfilEditar')->name('admin.usuarios.mi_perfil_editar');
    Route::post('usuarios/perfil/modificar','PerfilController@miPerfilModificar')->name('admin.usuarios.mi_perfil_modificar');
    Route::get('usuarios/perfil/editar_password','PerfilController@miPerfilEditarPassword')->name('admin.usuarios.mi_perfil_editar_password');
    Route::post('usuarios/perfil/modificar_password','PerfilController@miPerfilModificarPassword')->name('admin.usuarios.mi_perfil_modificar_password');

	//Rutas de contenido de pagina
	Route::get('contenido/banco_pro','BancoController@index')->name('admin.contenido.banco.index');
	Route::get('contenido/banco_pro/crear','BancoController@create')->name('admin.contenido.banco.crear');
	Route::get('contenido/banco_pro/guardar','BancoController@store')->name('admin.contenido.banco.guardar');
	Route::get('contenido/banco_pro/mostrar','BancoController@show')->name('admin.contenido.banco.mostrar');
	Route::get('contenido/banco_pro/eliminar/{id}','BancoController@destroy')->name('admin.contenido.banco.eliminar');
	Route::get('contenido/banco_pro/editar/{id}','BancoController@edit')->name('admin.contenido.banco.editar');
	Route::get('contenido/banco_pro/modificar/{id}','BancoController@update')->name('admin.contenido.banco.modificar');

	//Carreras
	Route::get('contenido/carreras', [CarrerasController::class, 'index'])->name('carreras.index');
    Route::get('contenido/carreras/Inicializar', [CarrerasController::class, 'inicializar'])->name('carreras.inicializar');
	Route::get('contenido/carreras/editcarrera', [CarrerasController::class, 'editCarrera'])->name('carreras.editCarrera');
	Route::get('contenido/carreras/storeCarrera', [CarrerasController::class, 'storeCarrera'])->name('carreras.storeCarrera');
	Route::get('contenido/carreras/updateCarrera/{id}', [CarrerasController::class, 'updateCarrera'])->name('carreras.updateCarrera');
	Route::get('contenido/carreras/destroyCarrera/{id}', [CarrerasController::class, 'destroyCarrera'])->name('carreras.destroyCarrera');
	Route::get('contenido/carreras/showCarrera/{id}', [CarrerasController::class, 'show'])->name('carreras.showCarrera');
	Route::post('contenido/carreras/updateCarreraCom/{id}', [CarrerasController::class, 'updatecarreracom'])->name('carreras.updateCarreraCom');
    Route::get('contenido/carreras/editEspecialidad/{id}', [CarrerasController::class, 'editEspecialidad'])->name('carreras.editEspecialidad');
	Route::post('contenido/carreras/storeEspecialidad', [CarrerasController::class, 'storeEspecialidad'])->name('carreras.storeEspecialidad');
	Route::post('contenido/carreras/updateEspecialidad/{id}', [CarrerasController::class, 'updateEspecialidad'])->name('carreras.updateEspecialidad');
	Route::get('contenido/carreras/destroyEspecialidad/{id}', [CarrerasController::class, 'destroyEspecialidad'])->name('carreras.destroyEspecialidad');
	Route::get('contenido/carreras/editObjetivos/{id}', [CarrerasController::class, 'editObjetivos'])->name('carreras.editObjetivos');
	Route::get('contenido/carreras/storeObjetivos', [CarrerasController::class, 'storeObjetivos'])->name('carreras.storeObjetivos');
	Route::get('contenido/carreras/updateObjetivos/{id}', [CarrerasController::class, 'updateObjetivos'])->name('carreras.updateObjetivos');
	Route::get('contenido/carreras/destroyObjetivos/{id}', [CarrerasController::class, 'destroyObjetivos'])->name('carreras.destroyObjetivos');
	Route::get('contenido/carreras/editAtributos/{id_pro}', [CarrerasController::class, 'editAtributos'])->name('carreras.editAtributos');
	Route::get('contenido/carreras/storeAtributos', [CarrerasController::class, 'storeAtributos'])->name('carreras.storeAtributos');
	Route::get('contenido/carreras/updateAtributos/{id}', [CarrerasController::class, 'updateAtributos'])->name('carreras.updateAtributos');
	Route::get('contenido/carreras/destroyAtributos/{id}', [CarrerasController::class, 'destroyAtributos'])->name('carreras.destroyAtributos');
	Route::get('contenido/carreras/storeCriterios', [CarrerasController::class, 'storeCriterios'])->name('carreras.storeCriterios');
	Route::get('contenido/carreras/updateCriterios/{id}', [CarrerasController::class, 'updateCriterios'])->name('carreras.updateCriterios');
	Route::get('contenido/carreras/destroyCriterios/{id}', [CarrerasController::class, 'destroyCriterios'])->name('carreras.destroyCriterios');
	Route::get('contenido/carreras/editEstructura/{id_pro}', [CarrerasController::class, 'editEstructura'])->name('carreras.editEstructura');
	Route::get('contenido/carreras/storeEstructura', [CarrerasController::class, 'storeEstructura'])->name('carreras.storeEstructura');
	Route::get('contenido/carreras/updateEstructura/{id}', [CarrerasController::class, 'updateEstructura'])->name('carreras.updateEstructura');
	Route::get('contenido/carreras/destroyEstructura/{id}', [CarrerasController::class, 'destroyEstructura'])->name('carreras.destroyEstructura');
	Route::get('contenido/carreras/editDetalles/{id_pro}/{id_per}', [CarrerasController::class, 'editDetalles'])->name('carreras.editDetalles');
	Route::get('contenido/carreras/storeDetallesFormacion', [CarrerasController::class, 'storeDetallesFor'])->name('carreras.storeDetallesFor');
	Route::get('contenido/carreras/storeDetallesProduccion', [CarrerasController::class, 'storeDetallesPro'])->name('carreras.storeDetallesPro');
	Route::get('contenido/carreras/updateDetallesFormacion/{id}', [CarrerasController::class, 'updateDetallesFormacion'])->name('carreras.updateDetallesForm');
	Route::get('contenido/carreras/destroyDetallesFormacion/{id}', [CarrerasController::class, 'destroyDetallesFormacion'])->name('carreras.destroyDetallesForm');
	Route::get('contenido/carreras/updateDetallesProduccion/{id}', [CarrerasController::class, 'updateDetallesProduccion'])->name('carreras.updateDetallesProd');
	Route::get('contenido/carreras/destroyDetallesProduccion/{id}', [CarrerasController::class, 'destroyDetallesProduccion'])->name('carreras.destroyDetallesProd');
	Route::get('contenido/carreras/storeContacto/{id_pro}', [CarrerasController::class, 'storeContacto'])->name('carreras.storeContacto');
	Route::get('contenido/carreras/showContacto/{id_pro}', [CarrerasController::class, 'showContacto'])->name('carreras.showContacto');
	Route::get('contenido/carreras/showContactoLeido/{id}', [CarrerasController::class, 'showContactoLeido'])->name('carreras.showContactoLeido');
	Route::get('contenido/carreras/readContacto/{id_pro}', [CarrerasController::class, 'readContacto'])->name('carreras.readContacto');
	Route::get('contenido/carreras/updateContacto/{id_pro}', [CarrerasController::class, 'updateContacto'])->name('carreras.updateContacto');
	Route::get('contenido/carreras/destroyContacto/{id_pro}', [CarrerasController::class, 'destroyContacto'])->name('carreras.destroyContacto');	
	Route::get('contenido/carreras/editPlanEstudios/{id_pro}', [CarrerasController::class, 'editPlanEstudios'])->name('carreras.editPlanEstudios');
	Route::post('contenido/carreras/storePlanEstudios/{id_pro}', [CarrerasController::class, 'storePlanEstudios'])->name('carreras.storePlanEstudios');
	Route::post('contenido/carreras/updatePlanEstudios/{id_pro}', [CarrerasController::class, 'updatePlanEstudios'])->name('carreras.updatePlanEstudios');
	Route::get('contenido/carreras/destroyPlanEstudios/{id_asig}', [CarrerasController::class, 'destroyPlanEstudios'])->name('carreras.destroyPlanEstudios');
	Route::post('contenido/carreras/storeMatEsp/{id_pro}', [CarrerasController::class, 'storeMatEsp'])->name('carreras.storeMatEsp');
	Route::get('contenido/carreras/showMateriasEspecialidad/{id_pro}', [CarrerasController::class, 'showMateriasEspecialidad'])->name('carreras.showMateriasEspecialidad');
	Route::get('contenido/carreras/showMateriasEspecialidad2/{id_pro}', [CarrerasController::class, 'showMateriasEspecialidad2'])->name('carreras.showMateriasEspecialidad2');
});
