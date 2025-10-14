@props(['link' => '#', 'icon' => '', 'label' => ''])

<a href="{{ $link }}" target="_blank" class="social-button">
    <i class="{{ $icon }}"></i>
    <span>{{ $label }}</span>
    <i class="fas fa-external-link-alt"></i>
</a>