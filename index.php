<?php
/**
 * Ponto de entrada alternativo quando o DocumentRoot não aponta para public/
 * 
 * ATENÇÃO: Este arquivo é uma solução alternativa. O ideal é configurar
 * o DocumentRoot para apontar para a pasta public/ ou usar o .htaccess.
 * 
 * Se o .htaccess não funcionar, este arquivo pode ajudar, mas pode ter
 * limitações com rotas e assets.
 */

// Redirecionar para public/index.php
chdir(__DIR__ . '/public');
require __DIR__ . '/public/index.php';

