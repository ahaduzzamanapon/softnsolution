<?php

/**
 * Laravel - Shared Hosting Entry Point
 *
 * This file redirects all requests to public/index.php
 * so you don't need to set document root to /public.
 *
 * Upload the entire project to public_html/ (or your root),
 * this file handles the routing automatically.
 */

require __DIR__.'/public/index.php';
