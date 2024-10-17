<?php
	require_once (__DIR__ . "/../../Model/inbox.php");
	require_once (__DIR__ . "/../../Connection/database.php");

    function tiempo_transcurrido($fecha) {
        // Crear objetos DateTime para la fecha actual y la fecha registrada
        $fecha_actual = new DateTime();
        $fecha_registrada = new DateTime($fecha);
    
        // Calcular la diferencia entre la fecha actual y la fecha registrada
        $diferencia = $fecha_actual->diff($fecha_registrada);
    
        // Inicializar un array para almacenar partes del resultado
        $partes = [];
    
        // Si hay años, meses, días, horas, minutos o segundos, agregarlos al array
        if ($diferencia->y > 0) {
            $partes[] = $diferencia->y . ' ' . ($diferencia->y == 1 ? 'año' : 'años');
        }
        if ($diferencia->m > 0) {
            $partes[] = $diferencia->m . ' ' . ($diferencia->m == 1 ? 'mes' : 'meses');
        }
        if ($diferencia->d > 0) {
            $partes[] = $diferencia->d . ' ' . ($diferencia->d == 1 ? 'día' : 'días');
        }
        if ($diferencia->h > 0) {
            $partes[] = $diferencia->h . ' ' . ($diferencia->h == 1 ? 'hora' : 'horas');
        }
        if ($diferencia->i > 0) {
            $partes[] = $diferencia->i . ' ' . ($diferencia->i == 1 ? 'minuto' : 'minutos');
        }
        if ($diferencia->s > 0 && empty($partes)) {
            // Solo mostrar los segundos si no hay otras unidades de tiempo (ej: "hace unos segundos")
            $partes[] = $diferencia->s . ' ' . ($diferencia->s == 1 ? 'segundo' : 'segundos');
        }
    
        // Juntar las partes con "y" si hay más de una unidad de tiempo
        return 'hace ' . implode(' y ', $partes);
    }
    

?>
