-- 20/01/2016
-- Carga Inicial de Tablas de BD
-- sg_sst

--Crear el campo de empresas_persona_id en la tabla de organigramas
ALTER TABLE  `organigramas` ADD  `empresas_persona_id` INT( 11 ) UNSIGNED NOT NULL AFTER  `id` ,
ADD INDEX (  `empresas_persona_id` ) ;

--Insertar una persona en la tabla de empresas_personas
INSERT INTO  `sg_sst`.`empresas_personas` (
`id` ,
`tipos_documento_id` ,
`nit_cedula` ,
`nombre` ,
`direccion` ,
`divisiones_geopolitica_id` ,
`fecha_nacimiento` ,
`tipos_sexo_id` ,
`tipos_cliente_id` ,
`created` ,
`modified`
)
VALUES (
NULL ,  '1',  '70561417',  'JUAN CARLOS TRUJILLO ACEVEDO',  'CALLE 8 84 B 65',  '1',  '1964-06-22',  '1',  '2', NULL ,  '2016-01-20 00:00:00'
);

--Insertar una empresa en la tabla de empresas_personas
INSERT INTO  `sg_sst`.`empresas_personas` (
`id` ,
`tipos_documento_id` ,
`nit_cedula` ,
`nombre` ,
`direccion` ,
`divisiones_geopolitica_id` ,
`fecha_nacimiento` ,
`tipos_sexo_id` ,
`tipos_cliente_id` ,
`created` ,
`modified`
)
VALUES (
NULL ,  '2',  '900057347',  'PANELITAS COPELIA',  'CR 76 65 89',  '1',  '2016-01-04',  '1',  '2', NOW( ) , NOW( )
);

--Modificar el campo de empresas_persona_id con un 2 en todos los registros de la tabla de organigramas
UPDATE  `sg_sst`.`organigramas` SET  `empresas_persona_id` =  '2';

--Crear la relacion del campo empresas_persona_id de organigramas con el campo de id de la tabla de empresas_personas
ALTER TABLE  `organigramas` ADD FOREIGN KEY (  `empresas_persona_id` ) REFERENCES  `sg_sst`.`empresas_personas` (
`id`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;

--Eliminación del fk de planes_acciones_evaluaciones llamado planes_acciones_evaluaciones_ibfk_1
ALTER TABLE  `planes_acciones_evaluaciones` DROP FOREIGN KEY  `planes_acciones_evaluaciones_ibfk_1` ;

--Modificar el nombre del campo evaluacione_id de la tabla planes_acciones_evaluaciones por evaluaciones_empresa_id
ALTER TABLE  `planes_acciones_evaluaciones` CHANGE  `evaluacione_id`  `evaluaciones_empresa_id` INT( 11 ) UNSIGNED NOT NULL ;

--Crear fk
ALTER TABLE  `planes_acciones_evaluaciones` ADD FOREIGN KEY (  `evaluaciones_empresa_id` ) REFERENCES `sg_sst`.`evaluaciones_empresas` (
`id`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;