@props(['project'])

<div class="project-card">
    <img class="project-card__image" src="{{ $project['image'] }}" alt="Imagem do projeto {{ $project['title'] }}">
    <div class="project-card__content">
        <h3 class="project-card__title">{{ $project['title'] }}</h3>
        <p class="project-card__description">{{ $project['description'] }}</p>
        <div class="project-card__tags">
            @foreach($project['tags'] as $tag)
                <span class="tag tag-sm tag-{{ strtolower($tag) }}">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>