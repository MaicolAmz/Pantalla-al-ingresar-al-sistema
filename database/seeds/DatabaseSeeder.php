<?php

use Illuminate\Database\Seeder;
use App\Models\Attendance\Attendance;
use App\Models\Attendance\Catalogue as AttendanceCatalogue;
use App\Models\Attendance\Task;
use App\Models\Attendance\Workday;
use App\User;
use App\Role;
use App\Models\Ignug\Career;
use App\Models\Ignug\Catalogue as IgnugCatalogue;
use App\Models\Ignug\File;
use App\Models\Ignug\Image;
use App\Models\Ignug\Institution;
use App\Models\Ignug\State;
use App\Models\Ignug\Teacher;
use App\Models\JobBoard\Catalogue as JobBoardCatalogue;
use App\Models\JobBoard\Category;
use App\Models\JobBoard\Company;
use App\Models\JobBoard\Course;
use App\Models\JobBoard\Language;
use App\Models\JobBoard\Offer;
use App\Models\JobBoard\Professional;
use App\Models\JobBoard\ProfessionalExperience;
use App\Models\JobBoard\ProfessionalReference;
use App\Models\JobBoard\Ability;
use App\Models\JobBoard\AcademicFormation;
use App\Models\JobBoard\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // States
        factory(State::class)->create([
            'code' => '1',
            'name' => 'ACTIVE',
            'state' => 1,
        ]);
        factory(State::class)->create([
            'code' => '2',
            'name' => 'INACTIVE',
            'state' => 1,
        ]);
        factory(State::class)->create([
            'code' => '3',
            'name' => 'DELETED',
            'state' => 1,
        ]);

        // Catalogues
        // Workday Principal
        factory(AttendanceCatalogue::class)->create([
            'code' => 'work',
            'name' => 'Jornada',
            'type' => 'workdays.principal',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);

        // Workday Secundary
        factory(AttendanceCatalogue::class)->create([
            'code' => 'lunch',
            'name' => 'Almuerzo',
            'type' => 'workdays.secondary',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Processes
        factory(AttendanceCatalogue::class)->create([
            'code' => 'academic',
            'name' => 'ACADEMICO',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'administrative',
            'name' => 'ADMINISTRATIVO',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'entailment',
            'name' => 'VINCULACION',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'investigation',
            'name' => 'INVESTIGACION',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);

        // Task Subprocesses academic
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '1',
            'name' => 'IMPARTIR CLASES PRESENCIALES, VIRTUALES O EN LINEA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '2',
            'name' => 'PREPARACION Y ACTUALIZACION DE CLASES, SEMINARIOS, TALLERES Y OTROS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '3',
            'name' => 'DISEÑO Y ELABORACION DE GUIAS, MATERIAL DIDACTICO Y SYLLABUS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '4',
            'name' => 'ORIENTACION Y ACOMPAÑAMIENTO A TRAVES DE TUTORIAS PRESENCIALES O VIRTUALES, INDIVIDUALES O GRUPALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '5',
            'name' => 'ELABORACION DE REPORTES DE NIVEL ACADEMICO REFERENTE A EVALUACIONES, TRABAJOS Y RENDIMIENTO DEL ESTUDIANTE',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '6',
            'name' => 'VISITAS DE CAMPO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '7',
            'name' => 'PREPARACION, ELABORACION, APLICACION Y CALIFICACION DE EXAMENES Y  PRACTICAS ',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses administrative
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '1',
            'name' => 'PARTICIPACION EN PROCESOS DEL SISTEMA NACIONAL DE EVALUACION PARA INGRESO A UNIVERSIDADES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '2',
            'name' => 'ACTIVIDADES DE DIRECCION O GESTION EN SUS DISTINTOS NIVELES DE ORGANIZACION ACADEMICA E INSTITUCIONAL',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '3',
            'name' => 'REUNIONES DE ORGANO COLEGIADO SUPERIOR',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '4',
            'name' => 'DISEÑO DE PROYECTOS DE CARRERAS Y PROGRAMAS DE ESTUDIOS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '5',
            'name' => 'ACTIVIDADES RELACIONADAS CON LA EVALUACION INSTITUCIONAL EXTERNA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses entailment
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '1',
            'name' => 'DIRECCION SEGUIMIENTO Y EVALUACION DE PRACTICAS PRE PROFESIONALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '2',
            'name' => 'DISEÑO E IMPARTICION DE CURSOS DE EDUCACION CONTINUA O DE CAPACITACION Y ACTUALIZACION',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '3',
            'name' => 'PARTICIPACION EN ACTIVIDADES DE PROYECTOS SOCIALES, ARTISTICOS, PRODUCTIVOS Y EMPRESARIALES DE VINCULACION CON LA SOCIEDAD',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '4',
            'name' => 'ELABORACION DE INFORMES DE SEGUIMIENTO DE PROYECTOS DE VINCULACION',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses investigation
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '1',
            'name' => 'GESTIONAR PROYECTOS DE INVESTIGACION, COMUNITARIOS Y/O DE EMPRENDIMIENTO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '2',
            'name' => 'DIRECCION Y TUTORIAS PARA LA ELABORACION DE TRABAJOS PARA LA OBTENCION DE TITULO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '3',
            'name' => 'DIRECCION Y PARTICIPACION DE PROYECTOS DE INVESTIGACION E INNOVACION BASICA, APLICADA, TECNOLOGICA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '4',
            'name' => 'REALIZACION DE INVESTIGACION PARA LA RECUPERACION, FORTALECIMIENTO Y POTENCIAC ION DE LOS SABERES ANCESTRALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '5',
            'name' => 'PARTICIPACION EN CONGRESOS, SEMINARIOS Y CONFERENCIAS PARA LA PRESENTACION DE AVANCES Y RESULTADOS DE SUS INVESTIGACIONES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '6',
            'name' => 'DISEÑO, GESTION Y PARTICIPACION EN REDES Y PROGRAMAS DE INVESTIGACION LOCAL NACIONAL E INTERNACIONAL',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '7',
            'name' => 'PARTICIPACION EN COMITES O CONSEJOS ACADEMICOS Y EDITORIALES DE REVISTAS CIENTIFICAS Y ACADEMICAS INDEXADAS, Y DE ALTO IMPACTO CIENTIFICO O ACADEMICO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '8',
            'name' => 'DIFUSION DE RESULTADOS Y BENEFICIOS SOCIALES DE LA INVESTIGACION, A TRAVES DE PUBLICACIONES, PRODUCCIONES ARTISTICAS, ACTUACIONES, CONCIERTOS, CREACION U ORGANIZACION DE INSTALACIONES Y DE EXPOSICIONES, ENTRE OTROS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Ethnic origin
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'INDIGENA',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'AFROECUATORIANO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'NEGRO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'MULATO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '5',
            'name' => 'MONTUBIO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '6',
            'name' => 'MESTIZO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '7',
            'name' => 'BLANCO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '8',
            'name' => 'OTRO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '9',
            'name' => 'NO REGISTRA',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);

        // Sex
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'HOMBRE',
            'type' => 'sex',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'MUJER',
            'type' => 'sex',
            'state_id' => 1,
        ]);
        // Gender
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'MASCULINO',
            'type' => 'gender',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'FEMENINO',
            'type' => 'gender',
            'state_id' => 1,
        ]);

        // Indetification Type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'CEDULA',
            'type' => 'identification_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'PASAPORTE',
            'type' => 'identification_type',
            'state_id' => 1,
        ]);

        // Blood Type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'A+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'A-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'B+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'B-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '5',
            'name' => 'AB+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '6',
            'name' => 'AB-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '7',
            'name' => 'O+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '8',
            'name' => 'O-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);

        // career modality
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'PRESENCIAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'SEMI-PRESENCIAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'DISTANCIA',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'DUAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);

        // career type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'TECNICATURA',
            'type' => 'career_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'TECNOLOGIA',
            'type' => 'career_type',
            'state_id' => 1,
        ]);

        // location
        factory(IgnugCatalogue::class)->create([
            'code' => 'ec',
            'name' => 'ECUADOR',
            'type' => 'country',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'parent_code_id' => 30,
            'code' => '17',
            'name' => 'PICHINCHA',
            'type' => 'province',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'parent_code_id' => 30,
            'code' => '1',
            'name' => 'QUITO',
            'type' => 'canton',
            'state_id' => 1,
        ]);

        // roles system
        factory(IgnugCatalogue::class)->create([
            'code' => 'attendance',
            'name' => 'Attendance',
            'type' => 'system',
            'state_id' => 1,
        ]);

        factory(Role::class)->create([
            'code' => '1',
            'name' => 'DOCENTE',
            'system_id' => 1,
            'state_id' => 1,
        ]);
        factory(Role::class)->create([
            'code' => '2',
            'name' => 'ADMINISTRATIVO',
            'system_id' => 1,
            'state_id' => 1,
        ]);

        //Category
        //Items
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'A',
            'name' => 'EDUCACION',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'B',
            'name' => 'CIENCIAS SOCIALES, PERIODISMO E INFORMACION',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'C',
            'name' => 'ADMINISTRACION',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'D',
            'name' => 'CIENCIAS NATURALES, MATEMATICAS Y ESTADISTICA',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'E',
            'name' => 'TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION (TIC)',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'F',
            'name' => 'INGENIERIA, INDUSTRIA Y CONSTRUCCION',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'G',
            'name' => 'AGRICULTURA, SILVICULTURA, PESCA Y VETERINARIA',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'H',
            'name' => 'SALUD Y BIENESTAR',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => null,
            'code' => 'I',
            'name' => 'SERVICIOS',
            'type' => 'father',
            'icon' => 'pi-angle-down',
            'state_id' => 1
        ]);

        //Childrens

        factory(Category::class)->create([
            'parent_code_id' => 1,
            'code' => 'A',
            'name' => 'ASISTENTE PEDAGOGICO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 1,
            'code' => 'A',
            'name' => 'ASISTENTE EN EDUCACION INCLUSIVA CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR Y CONDUCTOR DE RADIO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR Y CONDUCTOR DE TELEVISION CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR RADIOFONICO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR RADIAL COMUNITARIO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR EN COMUNICACION AUDIOVISUAL CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR EN TELEVISION COMUNITARIA CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR EN MULTIMEDIA CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR DE SONIDO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'LOCUTOR CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'PRODUCTOR DE MEDIOS IMPRESOS CON NIVEL EQUIVALENTE A TECNOLOGOSUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'COMUNICADOR DIGITAL CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'GRAFOLOGO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'TECNOLOGO SUPERIOR EN CRIMINALISTICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 2,
            'code' => 'B',
            'name' => 'TECNOLOGO SUPERIOR EN CRIMINOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN TRIBUTACION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN AUDITORIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN CONTABILIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN SEGUROS Y RIESGOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN ADMINISTRACION FINANCIERA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN ADMINISTRACION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN ADMINISTRACION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION DEL PATRIMONIO HISTORICO CULTURAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION DE OPERACIONES TURISTICAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION PUBLICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN MARKETING',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN PUBLICIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN OPERACION DE CENTRALES TELEFONICAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN PROMOCION CULTURAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR SUPERIOR EN ASISTENCIA ADMINISTRATIVA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN ASISTENCIA ADMINISTRATIVA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN SECRETARIADO EJECUTIVO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN SECRETARIADO EJECUTIVO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN VENTAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN VENTAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN COMERCIO EXTERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN BIENES RAICES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN BIENES RAICES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNICO SUPERIOR EN GESTION DE PRODUCCION Y SERVICIOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION DE PRODUCCION Y SERVICIOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION DEL TALENTO HUMANO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 3,
            'code' => 'C',
            'name' => 'TECNOLOGO SUPERIOR EN FORMACION OCUPACIONAL POR COMPETENCIAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNOLOGO SUPERIOR EN BIOTECNOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNICO SUPERIOR EN PROTECCION DEL MEDIO AMBIENTE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNOLOGO SUPERIOR EN PROTECCION DEL MEDIO AMBIENTE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNICO SUPERIOR EN DESARROLLO AMBIENTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO AMBIENTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNOLOGO SUPERIOR EN PROMOCION DE ENERGIAS RENOVABLES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TECNOLOGO SUPERIOR FORESTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'GUARDAPARQUES CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'TOPOGRAFO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 4,
            'code' => 'D',
            'name' => 'ANALISTA DE SUELOS CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNICO SUPERIOR EN ENSAMBLAJE Y MANTENIMIENTO DE EQUIPOS DE COMPUTO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN ENSAMBLAJE Y MANTENIMIENTO DE EQUIPOS DE COMPUTO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNICO SUPERIOR EN GESTION DE BASES DE DATOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN DISEÑO Y GESTION DE BASE DE DATOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNICO SUPERIOR EN INSTALACION Y MANTENIMIENTO DE REDES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN DISEÑO Y MANTENIMIENTO DE REDES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNICO SUPERIOR EN REDES Y TELECOMUNICACIONES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN REDES Y TELECOMUNICACIONES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO DE SOFTWARE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'AUDITOR DE SISTEMAS CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'AUDITOR DE SISTEMAS CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO DE APLICACIONES MOVILES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO DE APLICACIONES WEB',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 5,
            'code' => 'E',
            'name' => 'TECNICO SUPERIOR EN MANTENIMIENTO DE SOFTWARE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN POLIMEROS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN QUIMICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MEDICION Y MONITOREO AMBIENTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN TRATAMIENTO DE DESECHOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTRICIDAD Y POTENCIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTRICIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ENERGIAS ALTERNATIVAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MANTENIMIENTO ELECTRICO Y CONTROL INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MANTENIMIENTO ELECTRICO Y CONTROL INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTRONICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTROMECANICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTROMECANICA AUTOMOTRIZ',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN AUTOMATIZACION E INSTRUMENTACION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN AUTOMATIZACION E INSTRUMENTACION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN ELECTRONICA EN INSTRUMENTACION AVIONICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ELECTRONICA EN INSTRUMENTACION AVIONICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN TELEMATICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN TELEMATICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN SOLDADURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN ENDEREZADA Y PINTURA AUTOMOTRIZ',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN METALMECANICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN METALMECANICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECANICA AERONAUTICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MECANICA NAVAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECANICA NAVAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MECANICA AUTOMOTRIZ',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECANICA AUTOMOTRIZ',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MECANICA INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECANICA INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN REFRIGERACION Y AIRE ACONDICIONADO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MANTENIMIENTO MECANICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MANTENIMIENTO MECANICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN SISTEMAS DE INYECCION A GASOLINA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN SISTEMAS DE INYECCION A DIESEL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MANTENIMIENTO Y REPARACION DE MOTORES A DIESEL Y GASOLINA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECATRONICA AUTOMOTRIZ',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PROCESAMIENTO DE ALIMENTOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN ENOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PROCESAMIENTO INDUSTRIAL DE LA MADERA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'CARPINTERO CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'CARPINTERO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PROCESAMIENTO INDUSTRIAL DEL VIDRIO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PROCESAMIENTO INDUSTRIAL DEL PLASTICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PROCESAMIENTO DE CUERO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION TEXTIL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN FABRICACION DE CALZADO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN CONFECCION TEXTIL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PETROLEOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MINERIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN MECANICA Y OPERACION DE MAQUINAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MECANICA Y OPERACION DE MAQUINAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN IMPRESION OFFSET Y ACABADOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION DE LA CALIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN MANTENIMIENTO Y SEGURIDAD INDUSTRIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN CATASTROS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNICO SUPERIOR EN OBRAS CIVILES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 6,
            'code' => 'F',
            'name' => 'TECNOLOGO SUPERIOR EN CONSTRUCCION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN PERMACULTURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNICO SUPERIOR EN AGROECOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN AGROECOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNICO SUPERIOR EN PRODUCCION AGRICOLA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION AGRICOLA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION ANIMAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION MADERERA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN PRODUCCION PECUARIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN FLORICULTURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN FRUTICULTURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN FLORI- FRUTICULTURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN CUNICULTURA Y ESPECIES MENORES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNICO SUPERIOR EN MECANIZACION AGRICOLA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN MECANIZACION AGRICOLA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR FORESTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN ACUICULTURA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN NUTRICION ANIMAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 7,
            'code' => 'G',
            'name' => 'TECNOLOGO SUPERIOR EN CUIDADO CANINO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN ODONTOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN MECANICA DENTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN LABORATORIO CLINICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN LABORATORIO CLINICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN EMERGENCIAS MEDICAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN IMAGENOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN IMAGENOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN REHABILITACION FISICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN REHABILITACION FISICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN ENFERMERIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN FARMACIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN PODOLOGIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN NATUROPATIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNICO SUPERIOR EN ATENCION PRIMARIA DE SALUD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN ATENCION INTEGRAL A ADULTOS MAYORES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 8,
            'code' => 'H',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO INFANTIL INTEGRAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);

        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN TRICOLOGIA Y COSMIATRIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'ASESOR DE IMAGEN CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN ESTETICA INTEGRAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN ESTETICA INTEGRAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'MAQUILLISTA PROFESIONAL CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN TANATOESTETICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN HOTELERIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN GASTRONOMIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN ARTE CULINARIO ECUATORIANO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN DIETETICA Y COCINA LIGHT',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN PANADERIA Y REPOSTERIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'GESTOR DE EVENTOS, FERIAS Y CONVENCIONES CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'ENTRENADOR DEPORTIVO CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'ENTRENADOR DEPORTIVO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'DIRECTOR TECNICO EN DEPORTES CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'DIRECTOR TECNICO EN DEPORTES CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN TURISMO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'GUIA NACIONAL DE TURISMO CON NIVEL EQUIVALENTE A TECNICO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'GUIA NACIONAL DE TURISMO CON NIVEL EQUIVALENTE A TECNOLOGO SUPERIOR',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN PLANIFICACION Y DESARROLLO DE PROYECTOS TURISTICOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SERVICIOS AEREOS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SALUBRIDAD Y MANEJO AMBIENTAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD INTEGRAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD INTEGRAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD Y PREVENCION DE RIESGOS LABORALES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD Y PREVENCION DE RIESGOS LABORALES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD E HIGIENE DEL TRABAJO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD E HIGIENE DEL TRABAJO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN INTERPRETACION DE LENGUA DE SEÑAS',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN OPERACIONES DE RESCATE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN OPERACIONES DE RESCATE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN CIENCIAS MILITARES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN CIENCIAS MILITARES',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD CIUDADANA Y ORDEN PUBLICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD CIUDADANA Y ORDEN PUBLICO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN INVESTIGACION DE ACCIDENTES DE TRANSITO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN INVESTIGACION DE ACCIDENTES DE TRANSITO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD PENITENCIARIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD PENITENCIARIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN CIENCIAS DE LA SEGURIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN CIENCIAS DE LA SEGURIDAD',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN SEGURIDAD ELECTRONICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN SEGURIDAD ELECTRONICA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN PLANIFICACION Y GESTION DEL TRANSITO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN PLANIFICACION Y GESTION DEL TRANSITO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN VIGILANCIA Y SEGURIDAD CIUDADANA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN VIGILANCIA Y SEGURIDAD CIUDADANA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN INVESTIGACIONES DE POLICIA JUDICIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN INVESTIGACIONES DE POLICIA JUDICIAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN LOGISTICA Y TRANSPORTE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN LOGISTICA Y TRANSPORTE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN LOGISTICA MULTIMODAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN LOGISTICA MULTIMODAL',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN LOGISTICA PORTUARIA',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN TRAFICO AEREO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN TRAFICO AEREO',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN PLANIFICACION Y GESTION DEL TRANSPORTE TERRESTRE',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNICO SUPERIOR EN LOGISTICA DE ALMACENAMIENTO Y DISTRIBUCION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        factory(Category::class)->create([
            'parent_code_id' => 9,
            'code' => 'I',
            'name' => 'TECNOLOGO SUPERIOR EN LOGISTICA DE ALMACENAMIENTO Y DISTRIBUCION',
            'type' => 'children',
            'icon' => '',
            'state_id' => 1
        ]);
        
        // Catalogue of career
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '5',
            'name' => 'TECNOLOGIA SUPERIOR EN DESARROLLO DE SOFTWARE',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '5',
            'name' => 'TECNOLOGIA SUPERIOR EN GESTION PUBLICA',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '5',
            'name' => 'TECNOLOGIA SUPERIOR EN MARKETING',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);

        //Catalogue of Institution
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '6',
            'name' => 'INSTITUTO SUPERIOR TECNOLOGICO COTOPAXI',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '6',
            'name' => 'INSTITUTO TECNOLOGICO SUPERIOR BENITO JUAREZ',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '6',
            'name' => 'INSTITUTO TECNOLOGICO SUPERIOR CENTRAL TECNICO',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);

        //Catalogue of Professional Degree
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '7',
            'name' => 'TECNOLOGO SUPERIOR EN DESARROLLO DE SOFTWARE',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '7',
            'name' => 'TECNOLOGO SUPERIOR EN GESTION PUBLICA',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '7',
            'name' => 'TECNOLOGO SUPERIOR EN MARKETING',
            'type' => 'career',
            'icon' => '',
            'state_id' => 1,
        ]);

        //Catalogue Company
        factory(JobBoardCatalogue::class)->create([
            'parent_code_id' => null,
            'code' => '8',
            'name' => 'ESPE',
            'type' => 'company',
            'icon' => '',
            'state_id' => 1,
        ]);


        //factory(Catalogue::class, 10)->create();
        factory(Institution::class, 10)->create();
        //factory(Role::class, 10)->create();
        factory(User::class, 10)->create()->each(function ($user) {
            $user->teacher()->save(factory(Teacher::class)->make());
            $user->roles()->attach(1);
        });
        factory(Career::class, 10)->create(); 
        //factory(Teacher::class, 10)->create();
        //factory(Attendance::class, 10)->create();
        //factory(File::class, 10)->create();
        //factory(Image::class, 10)->create();
        factory(Company::class, 10)->create();
        //factory(Location::class, 10)->create();
        //factory(Offer::class, 10)->create();
        factory(Professional::class, 10)->create();
        //factory(Ability::class, 10)->create();
        factory(AcademicFormation::class, 10)->create();
        //factory(Course::class, 10)->create();
        //factory(ProfessionalExperience::class, 10)->create();
        //factory(ProfessionalReference::class, 10)->create();

        /*
            drop schema if exists attendance cascade;
            drop schema if exists ignug cascade;
            drop schema if exists job_board cascade;
            drop schema if exists web cascade;

            create schema attendance;
            create schema ignug;
            create schema job_board;
            create schema web;
        */
    }
}
