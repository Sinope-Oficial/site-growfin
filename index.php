<?php
/**
 * Ponto de entrada alternativo quando o DocumentRoot não aponta para public_html/
 * 
 * ATENÇÃO: Este arquivo é uma solução alternativa. O ideal é configurar
 * o DocumentRoot para apontar para a pasta public_html/ ou usar o .htaccess.
 * 
 * Se o .htaccess não funcionar, este arquivo pode ajudar, mas pode ter
 * limitações com rotas e assets.
 */

// Redirecionar para public_html/index.php
chdir(__DIR__ . '/public_html');
require __DIR__ . '/public_html/index.php';

