<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Button Component
// ==========================================================================

function renderButton($text, $href = null, $variant = 'primary', $size = 'md', $icon = null, $iconPosition = 'right', $extraClasses = '', $attributes = '') {
    // Variants: primary, secondary, accent, ghost, white, outline
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-btn transition-all duration-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $sizeClasses = [
        'sm' => 'px-3.5 py-1.5 text-xs gap-1.5',
        'md' => 'px-5 py-2.5 text-sm gap-2',
        'lg' => 'px-7 py-3.5 text-base gap-2.5',
    ][$size] ?? 'px-5 py-2.5 text-sm gap-2';

    $variantClasses = [
        'primary' => 'bg-electric-600 text-white hover:bg-electric-700 shadow-sm hover:shadow-electric-glow focus:ring-electric-600 active:translate-y-0.5',
        'secondary' => 'bg-white text-navy-800 border border-navy-200 hover:bg-navy-50 hover:border-navy-300 shadow-subtle focus:ring-navy-300',
        'accent' => 'bg-brandOrange-600 text-white hover:bg-brandOrange-700 shadow-sm hover:shadow-orange-glow focus:ring-brandOrange-500 active:translate-y-0.5',
        'ghost' => 'bg-transparent text-navy-700 hover:bg-navy-50 hover:text-electric-600 focus:ring-navy-200',
        'white' => 'bg-white text-navy-900 hover:bg-slate-50 shadow-md focus:ring-white',
        'outline' => 'bg-transparent text-electric-600 border border-electric-600 hover:bg-electric-50 focus:ring-electric-600',
    ][$variant] ?? 'bg-electric-600 text-white hover:bg-electric-700 shadow-sm';

    $classes = "$baseClasses $sizeClasses $variantClasses $extraClasses";

    $iconHtml = '';
    if ($icon) {
        $iconSize = ($size === 'sm') ? 'w-3.5 h-3.5' : (($size === 'lg') ? 'w-5 h-5' : 'w-4 h-4');
        $iconHtml = getIconSvg($icon, $iconSize);
    }

    $content = '';
    if ($icon && $iconPosition === 'left') {
        $content = $iconHtml . '<span>' . htmlspecialchars($text) . '</span>';
    } elseif ($icon && $iconPosition === 'right') {
        $content = '<span>' . htmlspecialchars($text) . '</span>' . $iconHtml;
    } else {
        $content = '<span>' . htmlspecialchars($text) . '</span>';
    }

    if ($href) {
        return "<a href=\"$href\" class=\"$classes\" $attributes>$content</a>";
    }

    return "<button type=\"button\" class=\"$classes\" $attributes>$content</button>";
}
