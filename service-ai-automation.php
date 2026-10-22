<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['ai-automation'];

$pageTitle = 'AI Automation Services & AI Chatbot Development | YUKT IT SOLUTIONS';
$pageDesc = 'Intelligent AI automation: custom AI chatbots, WhatsApp Business API automation, autonomous workflow agents, OCR document processing, and RAG systems.';

$capabilities = [
    [
        'title' => 'Intelligent AI Chatbots',
        'desc' => 'Multi-turn conversational bots trained on your product guidelines, handling high-volume customer inquiries with natural language comprehension.',
        'icon' => 'sparkles'
    ],
    [
        'title' => 'WhatsApp Business Automation',
        'desc' => 'Official WhatsApp Business API bots handling 24/7 lead capture, instant order lookups, catalog browsing, and live agent escalation.',
        'icon' => 'phone'
    ],
    [
        'title' => 'Autonomous Task & Workflow Agents',
        'desc' => 'Multi-step autonomous agents capable of performing sequential web lookups, drafting reports, and executing verified actions across software systems.',
        'icon' => 'bot'
    ],
    [
        'title' => 'Optical Document & Invoice Processing',
        'desc' => 'AI-driven OCR and vision models that extract key-value fields from invoices, receipts, contracts, and IDs directly into your ERP/CRM.',
        'icon' => 'file-text'
    ],
    [
        'title' => 'Custom LLM Integrations',
        'desc' => 'Integration of leading foundation models (OpenAI, Anthropic Claude, open-source Llama 3) via secure APIs with custom guardrails.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'RAG Knowledge Assistants',
        'desc' => 'Retrieval-Augmented Generation systems indexing your proprietary documentation in vector databases to answer staff and client queries accurately without hallucinations.',
        'icon' => 'database'
    ],
    [
        'title' => 'Conversational Voice Assistants',
        'desc' => 'Low-latency speech-to-text and text-to-speech voice pipelines powering outbound lead verification and customer support call workflows.',
        'icon' => 'zap'
    ],
    [
        'title' => 'Predictive Business Analytics',
        'desc' => 'Machine learning models analyzing historical transaction and interaction data to forecast inventory demands, churn risk, and seasonal trends.',
        'icon' => 'trending-up'
    ],
    [
        'title' => 'Bespoke AI API Integrations',
        'desc' => 'Custom middleware connecting AI intelligence directly into legacy databases, Slack, Google Workspace, and internal operational tooling.',
        'icon' => 'code'
    ]
];

$faqs = [
    [
        'q' => 'How do you prevent AI models from hallucinating false information?',
        'a' => 'We implement strict Retrieval-Augmented Generation (RAG) with similarity thresholds and citation enforcement. The model is constrained to respond only using your verified company documents.'
    ],
    [
        'q' => 'Is our company data used to train public AI models?',
        'a' => 'No. We utilize enterprise API agreements with providers like OpenAI and Anthropic, where data privacy clauses explicitly prohibit using API payloads for model training.'
    ],
    [
        'q' => 'Can your WhatsApp bots handle human agent handover?',
        'a' => 'Yes. When an inquiry requires human intervention or sensitive escalation, the bot smoothly routes the conversation directly to your support team dashboard.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
