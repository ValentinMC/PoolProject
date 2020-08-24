[Link a la documentacion del MarkDown Language](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)
# PoolProject
### Tareas
1. Hacer demo

   Index (juancar)

   Formulario usuario

   Formulario empresario

# Cosas pendientes
## 24/08
### JUANCARLOS
- Header 2 (Poner enlaces a las RRSS).
- Index (Información, centrar el botón, quitar enlaces a ignea).
- Hacer la presentación

### VALENTIN
- Header1 (Poner el inicio de sesión y registro).
- Formulario cliente (Ajustar los campos y añadir el header 2 después de haberlo completado Juancaros).
- Formulario registro (Aplicarle el CSS y meter el php dentro del HTML).
#BBDD

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)
