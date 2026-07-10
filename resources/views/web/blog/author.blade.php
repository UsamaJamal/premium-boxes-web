@include('web/header')

<style>
:root {
    --au-max        : 1400px;
    --au-px         : 48px;
    --au-gold       : #c9a84c;
    --au-gold-hov   : #e0bc60;
    --au-bg         : #111111;
    --au-bg-hero    : #1a1a1a;
    --au-text       : #ffffff;
    --au-text-gray  : #aaaaaa;
    --au-text-muted : #666666;
    --au-border     : #2a2a2a;
}


*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: var(--au-bg);
    color: var(--au-text);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}


.au-container {
    width: 100%;
    max-width: var(--au-max);
    margin-inline: auto;
    padding-inline: var(--au-px);
}


.au-hero {
    width: 100%;
    background-color: var(--au-bg-hero);
    border-top: 2px solid var(--au-gold);
    padding-top: 100px;
    padding-bottom: 60px;
    min-height: 340px;
}

.au-hero .au-container {
    display: flex;
    flex-direction: column;
    min-height: 340px;
}



/* AUTHOR CARD */
.au-card {
    display: flex;
    align-items: center;
    gap: 52px;
    justify-content: center;
    max-width: 860px;
    margin-inline: auto;
    margin-top: auto;
    margin-bottom: auto;
}

.au-avatar {
    width: 180px;
    height: 180px;
    min-width: 180px;
    border-radius: 50%;
    overflow: hidden;
    flex-shrink: 0;
    border: 3px solid var(--au-gold);
}
.au-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.au-info {
    display: flex;
    flex-direction: column;
    gap: 8px;
    justify-content: center;
    padding-top: 8px;
}

.au-name {
    font-size: 28px;
    font-weight: 700;
    color: var(--au-text);
    line-height: 1.2;
}

.au-role {
    font-size: 15px;
    font-weight: 500;
    color: var(--au-gold);
    margin-bottom: 6px;
}

.au-bio {
    font-size: 15px;
    font-weight: 400;
    color: var(--au-text-gray);
    line-height: 1.8;
    text-align: left;
    hyphens: none;
    -webkit-hyphens: none;
    max-width: 600px;
}

.au-linkedin {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 600;
    color: var(--au-text);
    text-decoration: none;
    margin-top: 6px;
    transition: color 0.2s;
}
.au-linkedin:hover { color: var(--au-gold); }
.au-linkedin i {
    font-size: 13px;
    color: #000;
    background: var(--au-gold);
    border-radius: 4px;
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}


.au-posts {
    padding: 48px 0 80px;
    background-color: var(--au-bg);
}

.au-posts-heading {
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 32px;
    padding-bottom: 12px;
    border-bottom: 2px solid var(--au-gold);
    display: inline-block;
}

.au-posts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    align-items: start;
}

.au-post-card {
    display: flex;
    flex-direction: column;
    gap: 12px;
    cursor: pointer;
    transition: transform 0.2s;
    text-decoration: none;
}
.au-post-card:hover { transform: translateY(-3px); }

.au-post-thumb {
    width: 100%;
    height: 220px;
    border-radius: 8px;
    background-size: cover;
    background-position: center;
    background-color: #1e1e1e;
    flex-shrink: 0;
}

.au-post-body { display: flex; flex-direction: column; gap: 7px; }

.au-post-meta { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
.au-post-author { font-size: 11px; color: var(--au-gold); font-weight: 600; }
.au-post-date   { font-size: 11px; color: #555555; }

.au-post-title {
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.au-post-desc {
    font-size: 13px;
    color: #555555;
    line-height: 1.65;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}


@media (max-width: 900px) {
    :root { --au-px: 32px; }
    .au-avatar { width: 96px; height: 96px; min-width: 96px; }
    .au-name   { font-size: 20px; }
    .au-posts-grid { grid-template-columns: repeat(2, 1fr); gap: 5vw; }
}


@media (max-width: 600px) {
    :root { --au-px: 5vw; }

    .au-hero        { padding-top: 18vw; padding-bottom: 9vw; background-color: #1f1f1f; }
    /* Removed au-breadcrumb display: none; */

    .au-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 0;
        max-width: 100%;
        justify-content: flex-start;
        margin-inline: 0;
    }

    .au-avatar {
        width: 30vw;
        height: 30vw;
        min-width: 30vw;
        border: 3px solid #ffffff;
        align-self: center;
        margin-bottom: 5vw;
    }

    .au-info { align-items: flex-start; gap: 0; padding-top: 0; width: 100%; }

    .au-name  { font-size: 7.5vw; font-weight: 700; text-align: left; margin-bottom: 2vw; }
    .au-role  { font-size: 3.3vw; font-weight: 500; color: #D4AF37; text-align: left; margin-bottom: 4vw; }
    .au-bio   { font-size: 4vw; line-height: 2.0; color: #cfcfcf; text-align: left; max-width: 100%; margin-bottom: 5vw; }

    .au-linkedin { font-size: 3.3vw; font-weight: 500; color: #cccccc; gap: 1.8vw; margin-top: 0; }
    .au-linkedin i { font-size: 3.5vw; width: 5.5vw; height: 5.5vw; }

    .au-posts-grid  { grid-template-columns: 1fr; gap: 6vw; }
    .au-post-thumb  { height: 50vw; }
    .au-post-title  { font-size: 4vw; }
    .au-post-desc   { font-size: 3.5vw; }
    .au-post-card:nth-child(n+7) { display: none; }
}
</style>

    <!-- AUTHOR HERO SECTION -->
    <section class="au-hero">
        <div class="au-container">

            <!-- Breadcrumb -->
            @include('web.components.breadcrumb', [
                'class' => 'au-breadcrumb',
                'items' => [
                    ['label' => 'Author']
                ]
            ])

            <!-- Author card -->
            <div class="au-card">

                <div class="au-avatar" style="display:flex; justify-content:center; align-items:center; background:#333;">
                    <i class="fas fa-user" style="font-size: 60px; color: #fff;"></i>
                </div>

                <div class="au-info">
                    <h1 class="au-name">{{ $author_name }}</h1>
                    <p class="au-role">Content Writer</p>
                    <p class="au-bio">
                        {{ $author_description ?? '' }}
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- AUTHOR POSTS GRID -->
    <main class="au-posts">
        <div class="au-container">

            <div class="au-posts-grid">

                @foreach($blogs as $blog_item)
                <article class="au-post-card" onclick="window.location.href='{{ url('blog/'.$blog_item->blog_url) }}'">
                    <div class="au-post-thumb" style="background-image:url('{{ asset('images/'.$blog_item->image) }}')"></div>
                    <div class="au-post-body">
                        <div class="au-post-meta">
                            <span class="au-post-author">{{ $blog_item->author_name }}</span>
                            <span class="au-post-date">{{ date('M d, Y', strtotime($blog_item->date)) }}</span>
                        </div>
                        <h3 class="au-post-title">{{ $blog_item->blog_title }}</h3>
                        <p class="au-post-desc">{!! strip_tags(Str::limit($blog_item->long_description, 150)) !!}</p>
                    </div>
                </article>
                @endforeach

            </div>

        </div>
    </main>

@include('web/footer')

