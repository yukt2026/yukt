<?php
require_once __DIR__ . '/includes/config.php';

$project = $CASE_STUDIES[2]; // Autonomous RAG Operations & Knowledge Agent

$pageTitle = 'Autonomous RAG Operations & Knowledge Agent — Case Study — Yukt IT Solutions';
$pageDesc = 'Architecture case study: Vector-indexed RAG assistant with Claude API and pgvector resolving over 70% of tier-1 inquiries with zero hallucinations.';

require_once __DIR__ . '/includes/templates/project-detail.php';
