<?php
require_once __DIR__ . '/includes/config.php';

$project = $CASE_STUDIES[0]; // Enterprise Multi-Tenant SaaS Platform

$pageTitle = 'Enterprise Multi-Tenant SaaS Platform — Case Study — Yukt IT Solutions';
$pageDesc = 'Architecture case study: Multi-tenant cloud software with PostgreSQL tenant isolation, Vue.js reactive interface, and automated subscription billing.';

require_once __DIR__ . '/includes/templates/project-detail.php';
