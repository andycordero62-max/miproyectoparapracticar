<?php

/**
 * Simulador de Sistema de Monitoreo
 */
function verificar_estado($voltaje) {
    if ($voltaje > 220) {
        return "⚠️ Alerta: Sobrevoltaje detectado";
    } elseif ($voltaje < 110) {
        return "⚠️ Alerta: Voltaje bajo";
    } else {
        return "✅ Sistema estable";
    }
}

echo "--- Monitor de Energía ---\n";
echo verificar_estado(230);

?>