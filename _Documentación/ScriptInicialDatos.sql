-- 18/01/2016
-- Carga Inicial de Tablas de BD
-- sg_sst


-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2016 a las 00:35:52
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sg_sst`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_economicas`
--

CREATE TABLE IF NOT EXISTS `actividades_economicas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `actividad_economica` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene las diferentes actividades económicas' AUTO_INCREMENT=852 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_economicas_empresas`
--

CREATE TABLE IF NOT EXISTS `actividades_economicas_empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `actividades_economica_id` int(11) unsigned NOT NULL,
  `es_principal` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividades_economica_id` (`actividades_economica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las diferentes actividades económicas de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_economicas_sedes`
--

CREATE TABLE IF NOT EXISTS `actividades_economicas_sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `actividades_economica_id` int(11) unsigned NOT NULL,
  `sede_id` int(11) unsigned NOT NULL,
  `es_principal` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividades_economica_id` (`actividades_economica_id`),
  KEY `sede_id` (`sede_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las diferentes actividades económicas de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradoras_fondos_pensiones`
--

CREATE TABLE IF NOT EXISTS `administradoras_fondos_pensiones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `nombre_abreviado` varchar(80) NOT NULL,
  `codigo_afp` varchar(7) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las administradoras de fondos de pensiones' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradoras_riesgos_laborales`
--

CREATE TABLE IF NOT EXISTS `administradoras_riesgos_laborales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `nombre_abreviado` varchar(80) NOT NULL,
  `codigo_arl` varchar(7) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las administradoras de riesgos laborales' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_divisiones_geopoliticas`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_divisiones_geopoliticas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `divisiones_geopolitica_id` int(11) unsigned NOT NULL,
  `tipos_caracteristicas_divisiones_geopolitica_id` int(11) unsigned NOT NULL,
  `dato_caracteristica` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_caracteristicas_divisiones_geopolitica_id` (`tipos_caracteristicas_divisiones_geopolitica_id`),
  KEY `divisiones_geopolitica_id` (`divisiones_geopolitica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las diferentes actividades económicas de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_sedes`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) unsigned NOT NULL,
  `tipos_caracteristicas_sede_id` int(11) unsigned NOT NULL,
  `dato_caracteristica` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_caracteristicas_sede_id` (`tipos_caracteristicas_sede_id`),
  KEY `sede_id` (`sede_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las diferentes actividades económicas de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases_riesgos`
--

CREATE TABLE IF NOT EXISTS `clases_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `clase_riesgo` varchar(3) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `porcentaje_minimo` decimal(4,3) NOT NULL,
  `porcentaje_inicial` decimal(4,3) NOT NULL,
  `porcentaje_maximo` decimal(4,3) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_empresas`
--

CREATE TABLE IF NOT EXISTS `contactos_empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipos_contacto_id` int(11) unsigned NOT NULL,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_contacto_id` (`tipos_contacto_id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE IF NOT EXISTS `controles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rght` int(11) unsigned NOT NULL,
  `control` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles_riesgos`
--

CREATE TABLE IF NOT EXISTS `controles_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `riesgo_id` int(11) unsigned NOT NULL,
  `controle_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`),
  KEY `controle_id` (`controle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE IF NOT EXISTS `correos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `tipos_correo_id` int(11) unsigned NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_correo_id` (`tipos_correo_id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los correos electrónicos de una empresa o persona' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos_sedes`
--

CREATE TABLE IF NOT EXISTS `correos_sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) unsigned NOT NULL,
  `tipos_correo_id` int(11) unsigned NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_correo_id` (`tipos_correo_id`),
  KEY `sede_id` (`sede_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los correos electrónicos de una empresa o persona' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empresas`
--

CREATE TABLE IF NOT EXISTS `datos_empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `codigo_ciiu` int(11) NOT NULL,
  `actividades_economica_id` int(11) unsigned NOT NULL,
  `clases_riesgo_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`),
  KEY `actividades_economica_id` (`actividades_economica_id`),
  KEY `clases_riesgo_id` (`clases_riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiones_geopoliticas`
--

CREATE TABLE IF NOT EXISTS `divisiones_geopoliticas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rght` int(11) unsigned NOT NULL,
  `division_geopolitica` varchar(80) NOT NULL,
  `divipola` varchar(9) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1159 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos_protecciones_personales_riesgos`
--

CREATE TABLE IF NOT EXISTS `elementos_protecciones_personales_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `riesgo_id` int(11) unsigned NOT NULL,
  `elemento_proteccion_personal` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene el resumen de los factores de riesgos.' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_personas`
--

CREATE TABLE IF NOT EXISTS `empresas_personas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipos_documento_id` int(11) unsigned NOT NULL,
  `nit_cedula` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `divisiones_geopolitica_id` int(11) unsigned NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipos_sexo_id` int(11) unsigned DEFAULT NULL,
  `tipos_cliente_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_sexo_id` (`tipos_sexo_id`),
  KEY `tipos_cliente_id` (`tipos_cliente_id`),
  KEY `tipos_documento_id` (`tipos_documento_id`),
  KEY `divisiones_geopolitica_id` (`divisiones_geopolitica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene las empresas o personas del sistema	' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_personas_organigramas`
--

CREATE TABLE IF NOT EXISTS `empresas_personas_organigramas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `organigrama_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organigrama_id` (`organigrama_id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_salud_promotoras`
--

CREATE TABLE IF NOT EXISTS `empresas_salud_promotoras` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `nombre_abreviado` varchar(80) NOT NULL,
  `codigo_regimen_subsidiado` varchar(7) NOT NULL,
  `codigo_regimen_contributivo` varchar(7) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE IF NOT EXISTS `evaluaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rght` int(11) unsigned NOT NULL,
  `evaluacion` text NOT NULL,
  `porcentaje_peso` decimal(3,1) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones_empresas`
--

CREATE TABLE IF NOT EXISTS `evaluaciones_empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_personas_organigrama_id` int(11) unsigned NOT NULL,
  `evaluacione_id` int(11) unsigned NOT NULL,
  `tipos_convenciones_gestione_id` int(11) unsigned NOT NULL,
  `porcentaje_validacion` decimal(4,1) unsigned NOT NULL,
  `observaciones` text NOT NULL,
  `fecha_validacion` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_convenciones_gestione_id` (`tipos_convenciones_gestione_id`),
  KEY `evaluacione_id` (`evaluacione_id`),
  KEY `cargos_persona_id` (`empresas_personas_organigrama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factores_riesgos_empresas`
--

CREATE TABLE IF NOT EXISTS `factores_riesgos_empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `proceso_id` int(11) unsigned NOT NULL,
  `riesgo_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proceso_id` (`proceso_id`),
  KEY `riesgo_id` (`riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los factores de riesgos de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuentes_planes_acciones`
--

CREATE TABLE IF NOT EXISTS `fuentes_planes_acciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fuente_plan_accion` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_grupos_apoyos`
--

CREATE TABLE IF NOT EXISTS `funciones_grupos_apoyos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `organigrama_id` int(11) unsigned NOT NULL,
  `funcion_grupo_apoyo` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organigrama_id` (`organigrama_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_grupos_apoyos_globales`
--

CREATE TABLE IF NOT EXISTS `funciones_grupos_apoyos_globales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `organigrama_id` int(11) unsigned NOT NULL,
  `funcion_grupo_apoyo_global` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organigrama_id` (`organigrama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes_grupos_apoyos`
--

CREATE TABLE IF NOT EXISTS `integrantes_grupos_apoyos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipos_representacione_id` int(11) unsigned NOT NULL,
  `empresas_personas_organigrama_id` int(11) unsigned NOT NULL,
  `turno_id` int(11) unsigned NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_representacione_id` (`tipos_representacione_id`),
  KEY `turno_id` (`turno_id`),
  KEY `cargos_persona_id` (`empresas_personas_organigrama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leyes_riesgos`
--

CREATE TABLE IF NOT EXISTS `leyes_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `riesgo_id` int(11) unsigned NOT NULL,
  `ley_riesgo` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene el resumen de los factores de riesgos.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrices_riesgos`
--

CREATE TABLE IF NOT EXISTS `matrices_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `factores_riesgos_empresa_id` int(11) unsigned NOT NULL,
  `rutinaria` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `niveles_deficiencia_id` int(11) unsigned NOT NULL,
  `niveles_exposicione_id` int(11) unsigned NOT NULL,
  `niveles_probabilidade_id` int(11) unsigned NOT NULL,
  `niveles_consecuencia_id` int(11) unsigned NOT NULL,
  `niveles_riesgo_id` int(11) unsigned NOT NULL,
  `expuestos_contrato` int(5) DEFAULT NULL,
  `expuestos_temporales` int(5) DEFAULT NULL,
  `expuestos_outsourcing` int(5) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `niveles_deficiencia_id` (`niveles_deficiencia_id`),
  KEY `niveles_exposicione_id` (`niveles_exposicione_id`),
  KEY `niveles_probabilidade_id` (`niveles_probabilidade_id`),
  KEY `niveles_consecuencia_id` (`niveles_consecuencia_id`),
  KEY `niveles_riesgo_id` (`niveles_riesgo_id`),
  KEY `factores_riesgos_empresa_id` (`factores_riesgos_empresa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene la matriz de riesgos de una empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_consecuencias`
--

CREATE TABLE IF NOT EXISTS `niveles_consecuencias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  `significado` varchar(500) NOT NULL,
  `significado_abreviado` varchar(500) NOT NULL,
  `valor` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de consecuencia establecidos por el gobierno' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_deficiencias`
--

CREATE TABLE IF NOT EXISTS `niveles_deficiencias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  `significado` varchar(500) NOT NULL,
  `significado_abreviado` varchar(500) NOT NULL,
  `valor` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de deficiencia establecidos por el gobierno' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_deficiencias_riesgos`
--

CREATE TABLE IF NOT EXISTS `niveles_deficiencias_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `riesgo_id` int(10) unsigned NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `significado` text NOT NULL,
  `significado_abreviado` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de deficiencia por riesgo establecidos por el gobierno' AUTO_INCREMENT=221 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_exposiciones`
--

CREATE TABLE IF NOT EXISTS `niveles_exposiciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  `significado` varchar(500) NOT NULL,
  `significado_abreviado` varchar(500) NOT NULL,
  `valor` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de exposición establecidos por el gobierno' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_probabilidades`
--

CREATE TABLE IF NOT EXISTS `niveles_probabilidades` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  `significado` varchar(500) NOT NULL,
  `significado_abreviado` varchar(500) NOT NULL,
  `valor` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de probabilidad establecidos por el gobierno' AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_riesgos`
--

CREATE TABLE IF NOT EXISTS `niveles_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  `significado` varchar(500) NOT NULL,
  `color` varchar(50) NOT NULL,
  `valor` int(5) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los niveles de riesgo establecidos por el gobierno' AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `objetivo` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos_globales`
--

CREATE TABLE IF NOT EXISTS `objetivos_globales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `objetivo_global` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigramas`
--

CREATE TABLE IF NOT EXISTS `organigramas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rght` int(11) unsigned NOT NULL,
  `cargo` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigramas_procesos`
--

CREATE TABLE IF NOT EXISTS `organigramas_procesos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `proceso_id` int(11) unsigned NOT NULL,
  `organigrama_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proceso_id` (`proceso_id`),
  KEY `organigrama_id` (`organigrama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los factores de riesgos de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_acciones_controles`
--

CREATE TABLE IF NOT EXISTS `planes_acciones_controles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `controles_riesgo_id` int(11) unsigned NOT NULL,
  `plan_accion_control` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `controles_riesgo_id` (`controles_riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_acciones_criterios`
--

CREATE TABLE IF NOT EXISTS `planes_acciones_criterios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `evaluacione_id` int(11) unsigned NOT NULL,
  `plan_accion_criterio` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evaluacione_id` (`evaluacione_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_acciones_definitivos`
--

CREATE TABLE IF NOT EXISTS `planes_acciones_definitivos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fuentes_planes_accione_id` int(11) unsigned NOT NULL,
  `plan_accion_sugerido` text NOT NULL,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `fecha_sugerida_ejecución` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`),
  KEY `fuentes_planes_accione_id` (`fuentes_planes_accione_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_acciones_evaluaciones`
--

CREATE TABLE IF NOT EXISTS `planes_acciones_evaluaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `evaluacione_id` int(11) unsigned NOT NULL,
  `plan_accion_evaluacion` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evaluacione_id` (`evaluacione_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_acciones_matrices`
--

CREATE TABLE IF NOT EXISTS `planes_acciones_matrices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `controles_riesgo_id` int(11) unsigned NOT NULL,
  `plan_accion_matriz` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `controles_riesgo_id` (`controles_riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE IF NOT EXISTS `politicas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `politica` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas_globales`
--

CREATE TABLE IF NOT EXISTS `politicas_globales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `politica_global` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE IF NOT EXISTS `procesos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `proceso` text NOT NULL,
  `descripcion` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene las actividades de un proceso' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumenes_riesgos`
--

CREATE TABLE IF NOT EXISTS `resumenes_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `riesgo_id` int(11) unsigned NOT NULL,
  `breve_descripcion_peligro` varchar(500) NOT NULL,
  `efecto_posible_salud` varchar(500) NOT NULL,
  `descripcion_peor_consecuencia` varchar(500) NOT NULL,
  `requisito_legal` varchar(500) NOT NULL,
  `verificacion_seguimiento` varchar(500) NOT NULL,
  `recomendacion_general` varchar(500) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene el resumen de los factores de riesgos.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgos`
--

CREATE TABLE IF NOT EXISTS `riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `riesgo` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=150 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE IF NOT EXISTS `sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `sede` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clases_riesgo_id` int(11) unsigned NOT NULL,
  `divisiones_geopolitica_id` int(11) unsigned NOT NULL,
  `zonas_geopolitica_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clases_riesgo_id` (`clases_riesgo_id`),
  KEY `divisiones_geopolitica_id` (`divisiones_geopolitica_id`),
  KEY `zonas_geopolitica_id` (`zonas_geopolitica_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene las empresas o personas del sistema	' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes_divisiones_geopoliticas`
--

CREATE TABLE IF NOT EXISTS `sedes_divisiones_geopoliticas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) unsigned NOT NULL,
  `divisiones_geopolitica_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sede_id` (`sede_id`),
  KEY `divisiones_geopolitica_id` (`divisiones_geopolitica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los factores de riesgos de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes_riesgos`
--

CREATE TABLE IF NOT EXISTS `sedes_riesgos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) unsigned NOT NULL,
  `riesgo_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riesgo_id` (`riesgo_id`),
  KEY `sede_id` (`sede_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los factores de riesgos de la empresa' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE IF NOT EXISTS `telefonos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `tipos_telefono_id` int(11) unsigned NOT NULL,
  `numero_telefonico` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_persona_id` (`empresas_persona_id`),
  KEY `tipos_telefono_id` (`tipos_telefono_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los telefonos de una empresa o persona' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos_sedes`
--

CREATE TABLE IF NOT EXISTS `telefonos_sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sedes_id` int(11) unsigned NOT NULL,
  `tipos_telefono_id` int(11) unsigned NOT NULL,
  `numero_telefonico` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipos_telefono_id` (`tipos_telefono_id`),
  KEY `sede_id` (`sedes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene los telefonos de una empresa o persona' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_caracteristicas_divisiones_geopoliticas`
--

CREATE TABLE IF NOT EXISTS `tipos_caracteristicas_divisiones_geopoliticas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_caracteristica_division_geopolitica` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de clientes' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_caracteristicas_sedes`
--

CREATE TABLE IF NOT EXISTS `tipos_caracteristicas_sedes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_caracteristica_sede` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de clientes' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_clientes`
--

CREATE TABLE IF NOT EXISTS `tipos_clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_cliente` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de clientes' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_contactos`
--

CREATE TABLE IF NOT EXISTS `tipos_contactos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_contacto` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de clientes' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_convenciones_gestiones`
--

CREATE TABLE IF NOT EXISTS `tipos_convenciones_gestiones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_convencion_gestion` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de criterios de las gestiones' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_correos`
--

CREATE TABLE IF NOT EXISTS `tipos_correos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_correo` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de correos' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documentos`
--

CREATE TABLE IF NOT EXISTS `tipos_documentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de documento que tiene una empresa o persona' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_representaciones`
--

CREATE TABLE IF NOT EXISTS `tipos_representaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_representacion` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_sexos`
--

CREATE TABLE IF NOT EXISTS `tipos_sexos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_sexo` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de clientes' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_telefonos`
--

CREATE TABLE IF NOT EXISTS `tipos_telefonos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_telefono` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de teléfonos.' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `turno` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contiene los tipos de turnos en la empresa.' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `empresas_persona_id` int(11) unsigned NOT NULL,
  `usuario` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `clave` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`empresas_persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene los diferentes usuarios que tienen acceso al sistema';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_geopoliticas`
--

CREATE TABLE IF NOT EXISTS `zonas_geopoliticas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rght` int(11) unsigned NOT NULL,
  `zona_geopolitica` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades_economicas_empresas`
--
ALTER TABLE `actividades_economicas_empresas`
  ADD CONSTRAINT `actividades_economicas_empresas_ibfk_1` FOREIGN KEY (`actividades_economica_id`) REFERENCES `actividades_economicas` (`id`);

--
-- Filtros para la tabla `actividades_economicas_sedes`
--
ALTER TABLE `actividades_economicas_sedes`
  ADD CONSTRAINT `actividades_economicas_sedes_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `actividades_economicas_sedes_ibfk_2` FOREIGN KEY (`actividades_economica_id`) REFERENCES `actividades_economicas` (`id`);

--
-- Filtros para la tabla `administradoras_fondos_pensiones`
--
ALTER TABLE `administradoras_fondos_pensiones`
  ADD CONSTRAINT `administradoras_fondos_pensiones_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

--
-- Filtros para la tabla `administradoras_riesgos_laborales`
--
ALTER TABLE `administradoras_riesgos_laborales`
  ADD CONSTRAINT `administradoras_riesgos_laborales_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

--
-- Filtros para la tabla `caracteristicas_divisiones_geopoliticas`
--
ALTER TABLE `caracteristicas_divisiones_geopoliticas`
  ADD CONSTRAINT `caracteristicas_divisiones_geopoliticas_ibfk_1` FOREIGN KEY (`divisiones_geopolitica_id`) REFERENCES `divisiones_geopoliticas` (`id`),
  ADD CONSTRAINT `caracteristicas_divisiones_geopoliticas_ibfk_2` FOREIGN KEY (`tipos_caracteristicas_divisiones_geopolitica_id`) REFERENCES `tipos_caracteristicas_divisiones_geopoliticas` (`id`);

--
-- Filtros para la tabla `caracteristicas_sedes`
--
ALTER TABLE `caracteristicas_sedes`
  ADD CONSTRAINT `caracteristicas_sedes_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `caracteristicas_sedes_ibfk_2` FOREIGN KEY (`tipos_caracteristicas_sede_id`) REFERENCES `tipos_caracteristicas_sedes` (`id`);

--
-- Filtros para la tabla `contactos_empresas`
--
ALTER TABLE `contactos_empresas`
  ADD CONSTRAINT `contactos_empresas_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`),
  ADD CONSTRAINT `contactos_empresas_ibfk_2` FOREIGN KEY (`tipos_contacto_id`) REFERENCES `tipos_contactos` (`id`);

--
-- Filtros para la tabla `controles_riesgos`
--
ALTER TABLE `controles_riesgos`
  ADD CONSTRAINT `controles_riesgos_ibfk_1` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`),
  ADD CONSTRAINT `controles_riesgos_ibfk_2` FOREIGN KEY (`controle_id`) REFERENCES `controles` (`id`);

--
-- Filtros para la tabla `correos`
--
ALTER TABLE `correos`
  ADD CONSTRAINT `correos_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`),
  ADD CONSTRAINT `correos_ibfk_2` FOREIGN KEY (`tipos_correo_id`) REFERENCES `tipos_correos` (`id`);

--
-- Filtros para la tabla `correos_sedes`
--
ALTER TABLE `correos_sedes`
  ADD CONSTRAINT `correos_sedes_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `correos_sedes_ibfk_2` FOREIGN KEY (`tipos_correo_id`) REFERENCES `tipos_correos` (`id`);

--
-- Filtros para la tabla `datos_empresas`
--
ALTER TABLE `datos_empresas`
  ADD CONSTRAINT `datos_empresas_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`),
  ADD CONSTRAINT `datos_empresas_ibfk_2` FOREIGN KEY (`actividades_economica_id`) REFERENCES `actividades_economicas` (`id`),
  ADD CONSTRAINT `datos_empresas_ibfk_3` FOREIGN KEY (`clases_riesgo_id`) REFERENCES `clases_riesgos` (`id`);

--
-- Filtros para la tabla `elementos_protecciones_personales_riesgos`
--
ALTER TABLE `elementos_protecciones_personales_riesgos`
  ADD CONSTRAINT `elementos_protecciones_personales_riesgos_ibfk_1` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `empresas_personas`
--
ALTER TABLE `empresas_personas`
  ADD CONSTRAINT `empresas_personas_ibfk_1` FOREIGN KEY (`tipos_documento_id`) REFERENCES `tipos_documentos` (`id`),
  ADD CONSTRAINT `empresas_personas_ibfk_3` FOREIGN KEY (`tipos_cliente_id`) REFERENCES `tipos_clientes` (`id`),
  ADD CONSTRAINT `empresas_personas_ibfk_6` FOREIGN KEY (`tipos_sexo_id`) REFERENCES `tipos_sexos` (`id`),
  ADD CONSTRAINT `empresas_personas_ibfk_7` FOREIGN KEY (`divisiones_geopolitica_id`) REFERENCES `divisiones_geopoliticas` (`id`);

--
-- Filtros para la tabla `empresas_personas_organigramas`
--
ALTER TABLE `empresas_personas_organigramas`
  ADD CONSTRAINT `empresas_personas_organigramas_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`),
  ADD CONSTRAINT `empresas_personas_organigramas_ibfk_2` FOREIGN KEY (`organigrama_id`) REFERENCES `organigramas` (`id`);

--
-- Filtros para la tabla `empresas_salud_promotoras`
--
ALTER TABLE `empresas_salud_promotoras`
  ADD CONSTRAINT `empresas_salud_promotoras_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

--
-- Filtros para la tabla `evaluaciones_empresas`
--
ALTER TABLE `evaluaciones_empresas`
  ADD CONSTRAINT `evaluaciones_empresas_ibfk_4` FOREIGN KEY (`tipos_convenciones_gestione_id`) REFERENCES `tipos_convenciones_gestiones` (`id`),
  ADD CONSTRAINT `evaluaciones_empresas_ibfk_7` FOREIGN KEY (`evaluacione_id`) REFERENCES `evaluaciones` (`id`),
  ADD CONSTRAINT `evaluaciones_empresas_ibfk_8` FOREIGN KEY (`empresas_personas_organigrama_id`) REFERENCES `empresas_personas_organigramas` (`id`);

--
-- Filtros para la tabla `factores_riesgos_empresas`
--
ALTER TABLE `factores_riesgos_empresas`
  ADD CONSTRAINT `factores_riesgos_empresas_ibfk_2` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`),
  ADD CONSTRAINT `factores_riesgos_empresas_ibfk_3` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `funciones_grupos_apoyos`
--
ALTER TABLE `funciones_grupos_apoyos`
  ADD CONSTRAINT `funciones_grupos_apoyos_ibfk_1` FOREIGN KEY (`organigrama_id`) REFERENCES `organigramas` (`id`);

--
-- Filtros para la tabla `funciones_grupos_apoyos_globales`
--
ALTER TABLE `funciones_grupos_apoyos_globales`
  ADD CONSTRAINT `funciones_grupos_apoyos_globales_ibfk_1` FOREIGN KEY (`organigrama_id`) REFERENCES `organigramas` (`id`);

--
-- Filtros para la tabla `integrantes_grupos_apoyos`
--
ALTER TABLE `integrantes_grupos_apoyos`
  ADD CONSTRAINT `integrantes_grupos_apoyos_ibfk_3` FOREIGN KEY (`tipos_representacione_id`) REFERENCES `tipos_representaciones` (`id`),
  ADD CONSTRAINT `integrantes_grupos_apoyos_ibfk_7` FOREIGN KEY (`turno_id`) REFERENCES `turnos` (`id`),
  ADD CONSTRAINT `integrantes_grupos_apoyos_ibfk_8` FOREIGN KEY (`empresas_personas_organigrama_id`) REFERENCES `empresas_personas_organigramas` (`id`);

--
-- Filtros para la tabla `leyes_riesgos`
--
ALTER TABLE `leyes_riesgos`
  ADD CONSTRAINT `leyes_riesgos_ibfk_1` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `matrices_riesgos`
--
ALTER TABLE `matrices_riesgos`
  ADD CONSTRAINT `matrices_riesgos_ibfk_10` FOREIGN KEY (`factores_riesgos_empresa_id`) REFERENCES `factores_riesgos_empresas` (`id`),
  ADD CONSTRAINT `matrices_riesgos_ibfk_5` FOREIGN KEY (`niveles_exposicione_id`) REFERENCES `niveles_exposiciones` (`id`),
  ADD CONSTRAINT `matrices_riesgos_ibfk_6` FOREIGN KEY (`niveles_probabilidade_id`) REFERENCES `niveles_probabilidades` (`id`),
  ADD CONSTRAINT `matrices_riesgos_ibfk_7` FOREIGN KEY (`niveles_consecuencia_id`) REFERENCES `niveles_consecuencias` (`id`),
  ADD CONSTRAINT `matrices_riesgos_ibfk_8` FOREIGN KEY (`niveles_riesgo_id`) REFERENCES `niveles_riesgos` (`id`),
  ADD CONSTRAINT `matrices_riesgos_ibfk_9` FOREIGN KEY (`niveles_deficiencia_id`) REFERENCES `niveles_deficiencias` (`id`);

--
-- Filtros para la tabla `niveles_deficiencias_riesgos`
--
ALTER TABLE `niveles_deficiencias_riesgos`
  ADD CONSTRAINT `niveles_deficiencias_riesgos_ibfk_1` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `organigramas_procesos`
--
ALTER TABLE `organigramas_procesos`
  ADD CONSTRAINT `organigramas_procesos_ibfk_1` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`),
  ADD CONSTRAINT `organigramas_procesos_ibfk_2` FOREIGN KEY (`organigrama_id`) REFERENCES `organigramas` (`id`);

--
-- Filtros para la tabla `planes_acciones_controles`
--
ALTER TABLE `planes_acciones_controles`
  ADD CONSTRAINT `planes_acciones_controles_ibfk_1` FOREIGN KEY (`controles_riesgo_id`) REFERENCES `controles_riesgos` (`id`);

--
-- Filtros para la tabla `planes_acciones_criterios`
--
ALTER TABLE `planes_acciones_criterios`
  ADD CONSTRAINT `planes_acciones_criterios_ibfk_1` FOREIGN KEY (`evaluacione_id`) REFERENCES `evaluaciones` (`id`);

--
-- Filtros para la tabla `planes_acciones_definitivos`
--
ALTER TABLE `planes_acciones_definitivos`
  ADD CONSTRAINT `planes_acciones_definitivos_ibfk_1` FOREIGN KEY (`fuentes_planes_accione_id`) REFERENCES `fuentes_planes_acciones` (`id`),
  ADD CONSTRAINT `planes_acciones_definitivos_ibfk_2` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

--
-- Filtros para la tabla `planes_acciones_evaluaciones`
--
ALTER TABLE `planes_acciones_evaluaciones`
  ADD CONSTRAINT `planes_acciones_evaluaciones_ibfk_1` FOREIGN KEY (`evaluacione_id`) REFERENCES `evaluaciones` (`id`);

--
-- Filtros para la tabla `planes_acciones_matrices`
--
ALTER TABLE `planes_acciones_matrices`
  ADD CONSTRAINT `planes_acciones_matrices_ibfk_1` FOREIGN KEY (`controles_riesgo_id`) REFERENCES `controles_riesgos` (`id`);

--
-- Filtros para la tabla `resumenes_riesgos`
--
ALTER TABLE `resumenes_riesgos`
  ADD CONSTRAINT `resumenes_riesgos_ibfk_1` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_ibfk_1` FOREIGN KEY (`clases_riesgo_id`) REFERENCES `clases_riesgos` (`id`),
  ADD CONSTRAINT `sedes_ibfk_2` FOREIGN KEY (`zonas_geopolitica_id`) REFERENCES `zonas_geopoliticas` (`id`),
  ADD CONSTRAINT `sedes_ibfk_3` FOREIGN KEY (`divisiones_geopolitica_id`) REFERENCES `divisiones_geopoliticas` (`id`);

--
-- Filtros para la tabla `sedes_divisiones_geopoliticas`
--
ALTER TABLE `sedes_divisiones_geopoliticas`
  ADD CONSTRAINT `sedes_divisiones_geopoliticas_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `sedes_divisiones_geopoliticas_ibfk_2` FOREIGN KEY (`divisiones_geopolitica_id`) REFERENCES `divisiones_geopoliticas` (`id`);

--
-- Filtros para la tabla `sedes_riesgos`
--
ALTER TABLE `sedes_riesgos`
  ADD CONSTRAINT `sedes_riesgos_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `sedes_riesgos_ibfk_2` FOREIGN KEY (`riesgo_id`) REFERENCES `riesgos` (`id`);

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_ibfk_3` FOREIGN KEY (`tipos_telefono_id`) REFERENCES `tipos_telefonos` (`id`),
  ADD CONSTRAINT `telefonos_ibfk_4` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

--
-- Filtros para la tabla `telefonos_sedes`
--
ALTER TABLE `telefonos_sedes`
  ADD CONSTRAINT `telefonos_sedes_ibfk_1` FOREIGN KEY (`sedes_id`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `telefonos_sedes_ibfk_2` FOREIGN KEY (`tipos_telefono_id`) REFERENCES `tipos_telefonos` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`empresas_persona_id`) REFERENCES `empresas_personas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
