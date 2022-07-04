-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2022 a las 22:11:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reino_animal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id_animales` int(180) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `alimentacion` varchar(50) NOT NULL,
  `habitat` varchar(100) NOT NULL,
  `extinto` tinyint(1) NOT NULL,
  `id_especie` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id_animales`, `nombre`, `descripcion`, `alimentacion`, `habitat`, `extinto`, `id_especie`) VALUES
(1, 'Tigre', 'Mamífero felino de unos 250 a 400 cm de longitud (cola incluida), de pelaje amarillo leonado con rayas transversales oscuras o negras en el lomo, la cabeza y la cola, blancuzco en el vientre; tiene cuerpo robusto, cola larga y uñas fuertes que usa para cazar; es muy fiero, ágil y veloz', 'se alimenta de mamiferos de gran tamaño y otros co', 'Zonas de Asia y la India', 0, 1),
(2, 'Pulpo', 'Molusco de gran variedad de colores y tamaños, pero vive en los oceanos y se caracteriza por su particular anatomia. o sea tiene la cabeza compuesta de una bolsa que contiene su estomago y cerebro mas 8 tentaculos con ventosas que cumplen la misma funcion que brazos', 'peces, otros moluscos de menor tamaño, tortugas en', 'oceano Pacifico e Indico', 0, 2),
(3, 'Cocodrilo', 'Reptil de gran tamaño', 'peces y animales que se acerquen al pantano o lago', 'Africa y en Centroamerica', 0, 4),
(5, 'Arañas', 'Las arañas son del orden de artropodos pero no insectos, tienen el cuerpo dividido en dos partes denominadas tagmas, y cuentan con cuatro pares de patas. en la boca tienen un par de uñas venenosas y otro de apéndices o palpos que en los machos sirven para la cópula. En el extremo del abdomen tiene el ano y las hileras u órganos productores de la seda con la que tapiza su vivienda, caza sus presas y se traslada de un lugar a otro', 'otras arañas, insectos de menor tamaño como moscas', 'En todo el mundo', 1, 7),
(20, 'Mosca', 'Insecto de cuerpo negro de unos 6 mm de largo, con dos alas transparentes cruzadas de nervios, seis patas muy finas con uñas y ventosas, ojos grandes y salientes, y un aparato bucal para chupar las sustancias de que se alimenta.', 'heces, basura y animales en descomposición ', 'En todo el mundo Exepto en el polo sur y norte', 1, 8),
(21, 'Vacas', 'Mamífero rumiante bóvido, hembra, de unos 150 cm de altura y 250 cm de longitud, cuerpo muy robusto, pelo corto, cabeza gruesa provista de dos cuernos curvos y puntiagudos, hocico ancho, papada en el pecho, y cola larga con un mechón en el extremo; de él se aprovechan la leche, la carne y la piel.', 'pasto, plantas no venenosas, y cereales ', 'todas partes del mundo que el ser humano las crie', 0, 1),
(22, 'Sapo', 'animal semi-acuatico de cuerpo más grueso que la rana y con la piel sembrada de verrugas.\r\nel sapo es un animal nocturno, que se caracteriza por sus patas cortas, sus ojos saltones y su piel con verrugas', 'y se alimenta de insectos y pequeños vertebrados', 'en las zonas tropicales', 1, 3),
(24, 'Perro', 'Animal', 'balanceado', 'todo el mundo', 1, 1),
(44, 'pez globo', 'El pez globo es uno de los peces más curiosos del mundo acuático, famoso por ser capaz de hincharse hasta convertir su cuerpo alargado en una auténtica bola esférica. Sin embargo, detrás de su aspecto divertido se esconde uno de los animales más venenosos del mundo.', 'es insectivoro y en ciertas ocasiones carnivoros', 'Los oceanos atlantico y pacifico', 1, 5),
(51, 'Jabalí', 'El jabalí es el primo salvaje del cerdo doméstico. Es un animal vigoroso, de cuerpo grueso y redondo, cabeza grande y alargada terminada en largo y estrecho hocico, la jeta. Tiene las orejas grandes, enhiestas y de forma triangular. El cuerpo del jabalí está cubierto de pelo. Esta pelambre, compuesta por las cerdas -pelos largos y gruesos- y la borra -pelusa compacta y apelmazada-, presenta bastantes variaciones de color, aunque con predominio del pardo oscuro.. Es característico en el jabalí un', 'Omnivoro', 'abarca Europa, Asia y el norte de África y ha sido introducida en el continente americano, Australia', 1, 1),
(78, 'Cachalote', 'Mamífero marino de 15 a 20 m de largo, cuya cabeza alcanza casi la tercera parte de la longitud total del cuerpo y guarda gran cantidad de grasa; tiene boca provista de dientes, y un solo orificio nasal; es agresivo, se alimenta de calamares y vive en aguas profundas', 'es carnivoro, su alimento mas comun son los calama', 'los mares', 1, 1),
(80, 'Camaleon ', 'Reptil de tamano no mayor a un metro, con la habilidad de cambiar de colores y camuflarse', 'es insectivoroo', 'Madagascar', 1, 4),
(81, 'Lombris', 'gusano, ser invertebrado, de cuerpo cilindrico a generalmente anillado, que no supera los 10 cm, y es totalmente inofensivo.', 'nutrientes y desechos que hay en la tierra.', 'en la capa de la tierra llamado humus, todo el mundo excepto el polo sur y norte.', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `puntaje` int(1) NOT NULL,
  `id_animales` int(150) NOT NULL,
  `id_usuario` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `puntaje`, `id_animales`, `id_usuario`) VALUES
(1, 'esta tabla de animal esta incompleta faltan muchos animales conocidos', 3, 0, 0),
(2, 'faltan muchas especies, pero estan las principales', 4, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `id_especie` int(50) NOT NULL,
  `especies` varchar(231) NOT NULL,
  `vertebrados` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especies`
--

INSERT INTO `especies` (`id_especie`, `especies`, `vertebrados`) VALUES
(1, 'Mamiferos', 1),
(2, 'Moluscos', 0),
(3, 'Anfibios', 1),
(4, 'Reptiles', 1),
(5, 'Peces', 1),
(6, 'Gusanos', 0),
(7, 'Aracnidos', 0),
(8, 'Insectos', 0),
(9, 'Aves', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(200) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `mail`, `contrasenia`, `rol`) VALUES
(1, 'Andres', 'moranandres729@gmail.com', '$2a$10$aroIJEsrDzjH1rIrov/k/e.19YiZZGnZDjAHnSNyfCAvdy7zVbDBu', 'administrador'),
(2, 'Solange', 'solange34@gmail.com', '$2a$10$InB5xEdSE2XsfCKsHG1r6eZ.cBu75JHPccmiKJ4xgsR.eL7ep3sjq', 'administrador'),
(3, 'Lautaro', 'lautaro123@gmail.com', '$2a$10$fCNpWtHMeMqnAphBgqyJq.xt7VFxrJEaVZXXLOWsJKCOQjgyO/SkO', 'usuario'),
(5, 'facundo', 'facundoTutor@gmail.com', '$2a$10$uvbbaXYy3fhV0Y/mfGX2S.R6Pdk6E0BN00ZtfEracIj23Bz.3sfuq', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id_animales`),
  ADD KEY `id_especie` (`id_especie`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_animales` (`id_animales`);

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id_animales` int(180) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `id_especie` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animales`
--
ALTER TABLE `animales`
  ADD CONSTRAINT `animales_ibfk_1` FOREIGN KEY (`id_especie`) REFERENCES `especies` (`id_especie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
