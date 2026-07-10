@include('web/header')

<style>
:root {
    --bp-max         : 1440px;
    --bp-px          : 40px;
    --bp-sp-bc       : 28px;
    --bp-sp-td       : 22px;
    --bp-sp-di       : 44px;
    --bp-bg          : #1a1a1a;
    --bp-surface     : #1a1a1a;
    --bp-card        : #1a1a1a;
    --bp-gold        : #c9a84c;
    --bp-gold-hov    : #e0bc60;
    --bp-text-head   : #ffffff;
    --bp-text-body   : #cccccc;
    --bp-text-meta   : #888888;
    --bp-border      : #2a2a2a;
    --bp-radius      : 12px;
}

*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: #1a1a1a;
    color: var(--bp-text-head);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

body { padding-top: 115px !important; }

.bp-container {
   
   
    width: 100%;
    max-width: var(--bp-max);
    margin-inline: auto;
    padding-inline: var(--bp-px);

    
  
}
body{
    background:#1a1a1a;
    font-family:Arial, Helvetica, sans-serif;
 
}



.bp-hero {
    width: 100%;
    background-color: #1a1a1a;
    padding-top: 52px;
    padding-bottom: 10px;
}

/* BREADCRUMB */
.bp-breadcrumb {
    margin-bottom: var(--bp-sp-bc);
}

/* TWO-COLUMN HERO GRID */
.bp-hero-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    align-items: stretch;
}

/* LEFT COLUMN */
.bp-hero-left { display: flex; flex-direction: column; }

.bp-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    margin-bottom: var(--bp-sp-td);
    position: relative;
}

.bp-title {
    font-size: 32px;
    font-weight: 700;
    line-height: 48px;
    color: #FFFFFF;
    letter-spacing: 0%;
    margin-bottom: 0;
    flex: 1;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
}

.bp-share-container {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
    position: absolute;
    right: calc(-50% - 40px);
    top: 50%;
    transform: translateY(-50%);
}

.bp-share-label {
    font-size: 12px;
    color: var(--bp-text-meta);
    margin-right: 4px;
    font-weight: 600;
}

.bp-share-icons {
    display: flex;
    align-items: center;
    gap: 8px;
}

.bp-share-btn {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: transparent;
    border: 1px solid var(--bp-border);
    color: var(--bp-text-meta);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    text-decoration: none;
    transition: background-color 0.2s, border-color 0.2s, color 0.2s, transform 0.2s;
}/* removed hover: .bp-share-btn:hover { ... } */

.bp-desc {
    font-size: 18px;
    font-weight: 400;
    line-height: 30px;
    color: #C5C5C5;
    letter-spacing: 0%;
    margin-bottom: var(--bp-sp-di);
    max-width: 766px;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    text-align: justify;
}

.bp-image {
    width: 100%;
    /* border-radius: var(--bp-radius); */
    overflow: hidden;
    background-color: transparent;
    border: 1px solid var(--bp-border);
    box-shadow: 0 12px 40px rgba(0,0,0,0.5);
}
.bp-image img {
    display: block;
    width: 100%;
    height: 420px;
    object-fit: cover;
    object-position: center;
}

/* RIGHT COLUMN */
.bp-hero-right {
    margin-top: 12px;
    display: flex;
    flex-direction: column;
    height: 100%;
    align-items: flex-start;
}

.bp-spacer { flex: 1; }

.bp-author {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-left: 0;
    border-radius: 10px;
    padding: 0;
}
.bp-author-avatar {
    margin-bottom: 30px;
    margin-top: -31px;
    width: 48px;
    height: 48px;
    min-width: 48px;
    border-radius: 0px;
    overflow: hidden;
    flex-shrink: 0;
    background: #2a2a2a;
}
.bp-author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.bp-author-info { margin-top: -27px; display: flex; flex-direction: column; gap: 5px; justify-content: center; }
.bp-author-name { font-size: 14px; font-weight: 700; color: var(--bp-text-head); }
.bp-author-meta-row { display: flex; align-items: center; gap: 8px; flex-wrap: nowrap; }
.bp-author-date { font-size: 12px; color: var(--bp-text-meta); white-space: nowrap; }
.bp-author-sep  { color: #444; font-size: 11px; }
.bp-author-read { font-size: 12px; color: var(--bp-text-meta); display: flex; align-items: center; gap: 4px; white-space: nowrap; }
.bp-author-read i { font-size: 11px; }

.bp-body { padding-bottom: 30px; }
.bp-body-grid { align-items: start; grid-template-columns: 1fr; }
.bp-body-spacer { display: none; }

/* ARTICLE CONTENT */
.bp-article {
    padding-top: 6px;
    border-top: 1px solid var(--bp-border);
    width: 100%;
}
.bp-article p {
    width: 790px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.8;
    color: #999999;
    margin-bottom: 28px;
    text-align: justify;
    hyphens: auto;
    -webkit-hyphens: auto;
}
.bp-article p:last-child { margin-bottom: 0; }
.bp-article h1,.bp-article h2,.bp-article h3,.bp-article h4,.bp-article h5 {
    color: #fff;
    margin-bottom: 16px;
    margin-top: 28px;
    line-height: 1.3;
}
.bp-article ul, .bp-article ol {
    color: #999999;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 28px;
    padding-left: 24px;
}

/* AUTHOR PROFILE */
.bp-author-profile {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 20px;
    margin-top: 4px;
    padding: 8px 0;
    background-color: transparent;
    border: none;
    border-radius: 0;
}
.bp-author-profile-header {
    display: flex;
    align-items: center;
    gap: 20px;
    width: 100%;
}
.bp-author-profile-image {
    width: 130px;
    height: 130px;
    min-width: 130px;
    flex-shrink: 0;
    border-radius: 50%;
    overflow: hidden;
    background: #2a2a2a;
}
.bp-author-profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.bp-author-profile-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.bp-author-profile-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.bp-author-profile-heading {
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 4px 0;
    line-height: 1.3;
}
.bp-author-profile-description {
    font-size: 13px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 0 0 8px 0;
    text-align: left;
    width: 100%;
}
.bp-author-profile-social {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 0;
    background-color: transparent;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    border-radius: 0;
    transition: color 0.2s;
    width: fit-content;
    margin-top: 0;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    line-height: 1.5;
    letter-spacing: 0%;
}
.bp-author-profile-social:hover {
    color: var(--bp-gold);
}
.bp-author-profile-social i {
    font-size: 16px;
    width: 30px;
    height: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #F5C542;
    color: #000000;
    border-radius: 2px;
}

/* RELATED POSTS */
.bp-related-posts {
    margin-bottom: -135px;
    margin-top: 0;
    width: 100%;
    max-width: 100%;
}
.bp-related-title {
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 40px;
}
.bp-related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    width: 100%;
}
.bp-related-card {
    width: 100%;
    background-color: #1a1a1a;
    border: 1px solid #2a2a2a;
    border-radius: 0;
    overflow: hidden;
    transition: transform 0.3s, border-color 0.3s;
}
.bp-related-card:hover {
    transform: translateY(-4px);
    border-color: var(--bp-gold);
}
.bp-related-link {
    text-decoration: none;
    color: inherit;
    display: block;
}
.bp-related-link:hover {
    text-decoration: none;
}
.bp-related-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    background-color: #0f0f0f;
}
.bp-related-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}
.bp-related-card:hover .bp-related-image img {
    transform: scale(1.05);
}
.bp-related-content {
    width: 100%;
    padding: 24px;
}
.bp-related-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
    font-size: 12px;
    color: #888888;
}
.bp-related-author {
    color: #ffffff;
    font-weight: 600;
}
.bp-related-date::before {
    content: '•';
    margin-right: 8px;
    color: #444;
}
.bp-related-card-title {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 12px;
    line-height: 1.4;
}
.bp-related-excerpt {
    font-size: 14px;
    line-height: 1.6;
    color: #999999;
    margin: 0;
}

/* STICKY SIDEBAR */
.bp-sidebar { 
    padding-top: 80px; 
    margin-left: 100px; 
    width: 100%;
    position: relative;
}
.bp-sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 120px;
    display: flex;
    flex-direction: column;
    gap: 24px;
    width: 100%;
    z-index: 100;
}

/* INSTANT QUOTE FORM */
.bp-quote-widget {
    /* position: sticky;
    align-self: flex-start;
    overflow-y: scroll; */
    margin-left: 0px;
    background-color: rgba(26, 26, 26, 0.98);
    border: 0.3px solid #F5C542;
    border-radius: 16px;
    padding: 28px 24px;
    width: 100%;
    max-width: none;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.bp-quote-title {
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
    text-align: center;
}
.bp-quote-form { display: flex; flex-direction: column; gap: 14px; width: 100%; }
.bp-quote-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; width: 100%; }
.bp-quote-row > * {
    min-width: 0;
    width: 100%;
}
.bp-quote-input, .bp-quote-textarea, .bp-quote-select {
    width: 100%;
    height: 44px;
    background-color: transparent;
    border: 1px solid #4a4a4a;
    border-radius: 8px;
    padding: 12px 14px;
    font-size: 14px;
    color: #666666;
    font-family: inherit;
    transition: border-color 0.2s;
    min-width: 0;
    overflow: visible;
}
.bp-quote-input::placeholder,
.bp-quote-textarea::placeholder {
    color: #666666;
}
.bp-quote-input:focus, .bp-quote-textarea:focus, .bp-quote-select:focus {
    outline: none;
    border-color: #C9A84C;
}
.bp-quote-textarea {
    min-height: 100px;
    resize: vertical;
}
.bp-quote-upload-wrapper {
    position: relative;
    display: flex;
    align-items: stretch;
    gap: 0;
    flex: 1;
    height: 44px;
}
.bp-quote-upload-input {
    font-weight: 400;
    flex: 1;
    background-color: transparent;
    border: 1px solid #4a4a4a;
    border-right: none;
    border-radius: 8px 0 0 8px;
    padding: 1px 1px;
    font-size: 12px;
    color: #666666;
    pointer-events: none;
    min-width: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 44px;
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.bp-quote-upload-btn {
    background-color: #F5C542;
    color: #000000;
    border: none;
    border-radius: 0 8px 8px 0;
    padding: 0 10px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s;
    white-space: nowrap;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 44px;
    width: 39%;
    flex-shrink: 0;
}/* removed hover: .bp-quote-upload-btn:hover { ... } */
.bp-quote-buttons { display: flex; gap: 14px; margin-top: 8px; }
.bp-quote-btn {
    flex: 1;
    padding: 12px 20px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    font-family: inherit;
}
.bp-quote-submit {
    background-color: #F5C542;
    color: #000000;
    border: none;
}
.bp-quote-submit:hover {
    background-color: #E0BC60;
}
.bp-quote-call {
    background-color: transparent;
    color: #C9A84C;
    border: 2px solid #C9A84C;
}
.bp-quote-call:hover {
    background-color: #C9A84C;
    color: #000000;
}

.bp-mobile { display: none; }

@media (max-width: 960px) {
    :root { --bp-px: 32px; }
    .bp-hero-grid { grid-template-columns: 2fr 1fr; gap: 28px; }
    .bp-title { font-size: clamp(22px, 3.2vw, 34px); }
    .bp-image img { height: 340px; }
    .bp-sidebar { margin-left: 20px; }
    
    .bp-related-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 680px) {
    * { 
        box-sizing: border-box;
    }
    
    :root { --bp-px: 4vw; --bp-sp-bc: 0; }
    
    html, body { 
        padding: 0 !important;
        margin: 0 !important;
        width: 100% !important;
        overflow-x: hidden !important;
    }
    
    body { padding-top: 80px !important; }
    
    .bp-container {
        padding: 0 4vw !important;
        margin: 0 !important;
        width: 100% !important;
        max-width: 100% !important;
    }
    
    .bp-hero { 
        padding: 4vw 0 6vw 0 !important;
        margin: 0 !important;
        width: 100% !important;
    }
    
    .bp-breadcrumb {
        font-size: 3vw;
        gap: 2vw;
        margin-bottom: 4vw;
        padding-inline: 0;
    }
    .bp-bc-home { font-size: 4vw; }
    .bp-bc-sep { font-size: 3vw; }
    .bp-bc-link, .bp-bc-current { font-size: 3vw; }
    
    .bp-desktop-grid { display: none; }
    .bp-mobile {
        margin: 82px 0 0 0 !important;
        padding: 0 4vw !important;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100% !important;
        max-width: 100% !important;
    }
    .bp-mob-title {
        font-size: 5.5vw;
        font-weight: 700;
        line-height: 1.35;
        color: #ffffff;
        letter-spacing: -0.2px;
        margin-bottom: 3vw;
        width: 100% !important;
        word-wrap: break-word;
        padding: 0 !important;
    }
    .bp-mob-desc {
        font-size: 3.5vw;
        line-height: 1.6;
        color: #C5C5C5;
        margin-bottom: 4vw;
        width: 100% !important;
        padding: 0 !important;
    }
    .bp-mob-meta-row {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 2vw;
        width: 100% !important;
        margin-bottom: 4vw;
        padding: 0 !important;
    }
    .bp-mob-author { 
        display: flex; 
        align-items: center; 
        gap: 2.5vw;
    }
    .bp-mob-author-avatar {
        width: 10vw;
        height: 10vw;
        min-width: 10vw;
        border-radius: 1.5vw;
        overflow: hidden;
        flex-shrink: 0;
        background: #2a2a2a;
    }
    .bp-mob-author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .bp-mob-author-text { 
        display: flex; 
        align-items: center; 
        flex-wrap: wrap; 
        gap: 2vw; 
        font-size: 3vw; 
        color: #888888; 
        line-height: 1;
    }
    .bp-mob-author-name { color: #ffffff; font-weight: 600; font-size: 3vw; }
    .bp-mob-sep  { color: #666; font-size: 3vw; margin: 0 1vw; }
    .bp-mob-date, .bp-mob-read { color: #888888; font-size: 3vw; }
    .bp-mob-read i { font-size: 2.8vw; margin-right: 1vw; }
    
    .bp-mob-share {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 3vw;
        width: 100%;
        margin-bottom: 5vw;
        padding: 0;
    }
    .bp-mob-share-label {
        font-size: 3.2vw;
        color: #888888;
        font-weight: 600;
    }
    .bp-mob-share-icons {
        display: flex;
        align-items: center;
        gap: 3vw;
    }
    .bp-mob-share-btn {
        width: 9vw;
        height: 9vw;
        border-radius: 50%;
        background-color: transparent;
        border: 0.3vw solid #2a2a2a;
        color: #888888;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4vw;
        text-decoration: none;
        transition: all 0.2s;
    }/* removed hover: .bp-mob-share-btn:hover { ... } */
    
    .bp-mob-image { 
        width: 100vw !important;
        margin-left: -4vw !important;
        border-radius: 0; 
        overflow: hidden; 
        margin-bottom: 5vw !important;
        margin-top: 0 !important;
        padding: 0 !important;
        border: none;
    }
    .bp-mob-image img { 
        display: block; 
        width: 100% !important;
        height: auto; 
        object-fit: cover; 
        object-position: center; 
    }
    
    .bp-image-caption {
        margin-top: 4vw;
        padding-inline: 0;
    }
    .bp-image-caption p {
        font-size: 3.2vw;
        line-height: 1.6;
    }
    
    .bp-body-grid { grid-template-columns: 1fr; }
    .bp-sidebar   { display: block !important; }
    .bp-spacer    { display: none; }
    
    /* Reduce bottom padding on mobile */
    .bp-body {
        padding-bottom: 2vw !important;
    }
    
    /* Blog Article Content Mobile - Specific targeting */
    .bp-article {
        width: 100% !important;
        max-width: 92vw !important;
        padding: 0 !important;
        margin: 0 auto !important;
        box-sizing: border-box !important;
    }
    .bp-article p {
        font-size: 4vw !important;
        line-height: 1.75 !important;
        color: #C5C5C5 !important;
        margin-bottom: 4vw !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        text-align: justify !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: none !important;
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 !important;
        box-sizing: border-box !important;
    }
    
    .bp-article {
        padding-top: 5vw;
        padding-inline: 0;
        width: 100%;
        overflow: visible;
    }
    .bp-article p { 
        font-size: 3.5vw;
        line-height: 1.7;
        margin-bottom: 4vw;
        width: 100% !important;
        max-width: 100% !important;
        word-wrap: break-word;
        overflow-wrap: break-word;
        white-space: normal;
        text-align: justify;
        box-sizing: border-box;
    }
    .bp-article h1,.bp-article h2,.bp-article h3,.bp-article h4,.bp-article h5 {
        font-size: 4.5vw;
        margin-top: 5vw;
        margin-bottom: 3vw;
    }
    
    .bp-title-row { flex-direction: column; align-items: flex-start; gap: 3vw; }
    .bp-title { font-size: 5.5vw; line-height: 1.35; }
    .bp-desc { font-size: 3.5vw; line-height: 1.6; }
    .bp-share-container { margin-left: 0; margin-right: 0; }
    
    /* Mobile Author Profile */
    .bp-author-profile {
        width: 100%;
        display: flex;
        flex-direction: row;
        padding: 6vw;
        margin-top: 8vw;
        margin-left: 0;
        gap: 4vw;
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 3vw;
        align-items: flex-start;
    }
    .bp-author-profile-header {
        display: flex;
        align-items: center;
        gap: 3vw;
        width: 100%;
    }
    .bp-author-profile-image {
        display: block !important;
        width: 20vw !important;
        height: 20vw !important;
        min-width: 20vw !important;
        margin: 0 !important;
        border-radius: 50% !important;
        flex-shrink: 0;
        overflow: hidden !important;
        background: #2a2a2a !important;
    }
    .bp-author-profile-image img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block !important;
    }
    .bp-author-profile-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 3vw;
        min-width: 0;
    }
    .bp-author-profile-info {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        order: 2;
    }
    .bp-author-profile-heading {
        font-size: 5.5vw;
        margin: 0;
        text-align: left;
        line-height: 1.3;
        font-weight: 700;
        flex: 1;
    }
    .bp-author-profile-description {
        width: 100%;
        font-size: 4vw;
        line-height: 1.75;
        margin: 0;
        text-align: justify;
    }
    .bp-author-profile-social {
        font-size: 4vw;
        gap: 2.5vw;
        margin: 0;
        display: inline-flex;
        align-items: center;
        color: var(--bp-text-meta);
        text-decoration: none;
    }
    .bp-author-profile-social i {
        width: 8vw;
        height: 6.5vw;
        font-size: 5vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Mobile Related Posts */
    .bp-related-posts {
        margin-top: 8vw;
        padding-inline: 0;
        width: 100%;
        max-width: 100%;
        overflow: visible;
        position: relative;
    }
    .bp-related-title {
        font-size: 5vw;
        margin-bottom: 4vw;
        padding-inline: 0;
    }
    .bp-related-grid {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: scroll;
        overflow-y: hidden;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        gap: 4vw;
        padding-bottom: 4vw;
        width: 100%;
        max-width: 100vw;
        scroll-behavior: smooth;
        scrollbar-width: thin;
        scrollbar-color: #F5C542 #2a2a2a;
    }
    .bp-related-grid::-webkit-scrollbar {
        height: 8px;
        display: block !important;
    }
    .bp-related-grid::-webkit-scrollbar-track {
        background: #2a2a2a;
        border-radius: 4px;
    }
    .bp-related-grid::-webkit-scrollbar-thumb {
        background: #F5C542;
        border-radius: 4px;
    }
    .bp-related-grid::-webkit-scrollbar-thumb:hover {
        background: #E0BC60;
    }
    .bp-related-card {
        flex: 0 0 92vw;
        min-width: 92vw;
        max-width: 92vw;
        width: 92vw;
        scroll-snap-align: start;
        margin-top: 0;
    }
    .bp-related-card:nth-child(3) {
        margin-top: 0;
    }
    .bp-related-image {
        height: 50vw;
    }
    .bp-related-content {
        padding: 4vw;
        width: 100%;
    }
    .bp-related-meta {
        font-size: 2.8vw;
        gap: 2vw;
        margin-bottom: 2vw;
    }
    .bp-related-card-title {
        font-size: 4vw;
        margin-bottom: 2vw;
    }
    .bp-related-excerpt {
        font-size: 3.2vw;
        line-height: 1.5;
    }
    
    /* Slider Navigation Dots */
    .bp-slider-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2vw;
        margin-top: 4vw;
        padding: 2vw 0;
    }
    .bp-slider-dot {
        width: 2vw;
        height: 2vw;
        border-radius: 50%;
        background-color: #4a4a4a;
        border: none;
        padding: 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .bp-slider-dot.active {
        background-color: #F5C542;
        width: 6vw;
        border-radius: 1vw;
    }
    
    /* Mobile Quote Widget */
    .bp-quote-widget {
        display: block !important;
        padding: 5vw 4vw;
        border-radius: 2.5vw;
        border-width: 0.5px;
        width: 100% !important;
        margin: 8vw 0;
        box-sizing: border-box;
    }
    .bp-quote-title {
        font-size: 5.5vw;
        margin-bottom: 4vw;
    }
    .bp-quote-form {
        gap: 3.5vw;
    }
    .bp-quote-row {
        flex-direction: column;
        gap: 3.5vw;
    }
    .bp-quote-input, .bp-quote-textarea, .bp-quote-select {
        font-size: 3.5vw;
        padding: 3.5vw 4vw;
        height: 12vw;
        border-radius: 2vw;
    }
    .bp-quote-textarea {
        min-height: 28vw;
        height: auto;
    }
    .bp-quote-upload-wrapper {
        height: 12vw;
    }
    .bp-quote-upload-input {
        font-size: 3.2vw;
        padding: 3.5vw 4vw;
        height: 12vw;
        border-radius: 2vw 0 0 2vw;
    }
    .bp-quote-upload-btn {
        font-size: 3.5vw;
        padding: 0 4vw;
        height: 12vw;
        width: auto;
        border-radius: 0 2vw 2vw 0;
    }
    .bp-quote-buttons {
        flex-direction: column;
        gap: 3vw;
        margin-top: 1vw;
    }
    .bp-quote-btn {
        font-size: 3.8vw;
        padding: 3.5vw;
        border-radius: 10vw;
    }
    .bp-quote-call {
        border-width: 0.5px;
    }
}
}
</style>

@php
    $post = $meta[0];
    $blog_title = $post->blog_title;
    $blog_image = asset('images/'.$post->image);
    $author_name = $post->author_name;
    $author_description = $post->author_description;
    $blog_date = date('F d, Y', strtotime($post->date));
    $blog_date_short = date('M d, Y', strtotime($post->date));
    $blog_desc = strip_tags(Str::limit($post->long_description, 200));
    $blog_url = url($post->blog_url);
    $long_desc = $post->long_description;
    $current_url = url()->current();
    $fb_share = 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($current_url);
    $tw_share = 'https://twitter.com/intent/tweet?url='.urlencode($current_url).'&text='.urlencode($blog_title);
    $li_share = 'https://www.linkedin.com/sharing/share-offsite/?url='.urlencode($current_url);
@endphp

    <!-- POST HERO -->
     <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <article class="bp-hero">
        <div class="bp-container">

            <!-- DESKTOP HERO GRID -->
            <div class="bp-hero-grid bp-desktop-grid">

                <!-- LEFT COLUMN -->
                <div class="bp-hero-left">

@include('web.components.breadcrumb', [
    'class' => 'bp-breadcrumb',
    'items' => [
        ['label' => 'Blogs', 'url' => url('our-blog')],
        ['label' => 'Rigid Packaging Gluing ...']
    ]
])

                    <div class="bp-title-row">
                        <h1 class="bp-title">Rigid Packaging Gluing: Adhesive Types, Methods & <br>Curing</h1>

                        <div class="bp-share-container">
                            <span class="bp-share-label">Share:</span>
                            <div class="bp-share-icons">
                                <a href="{{ $fb_share }}" target="_blank" class="bp-share-btn" aria-label="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ $tw_share }}" target="_blank" class="bp-share-btn" aria-label="Share on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ $li_share }}" target="_blank" class="bp-share-btn" aria-label="Share on LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <p class="bp-desc">The right box doesn't just hold your baked goods. It shows off your brand, sparks joy, and turns every treat into an experience. Get inspired by these designs that are as sweet the treats inside.</p>

                    <div class="bp-author">
                        <div class="bp-author-avatar">
                            <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                        </div>
                        <div class="bp-author-info">
                            <span class="bp-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <div class="bp-author-meta-row">
                                <span class="bp-author-date">{{ $blog_date }}</span>
                                <span class="bp-author-sep">|</span>
                                <span class="bp-author-read"><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                        </div>
                    </div>

                    <figure class="bp-image">
                        <img src="{{ $blog_image }}" alt="{{ strtolower(str_replace('-', ' ', $post->alt_tag)) }}" loading="eager" title="{{ ucwords(strtolower(str_replace('-', ' ', $post->alt_tag))) }}">
                    </figure>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="bp-hero-right">
                    <div class="bp-spacer"></div>
                    
                    <!-- INSTANT QUOTE FORM -->
                    <div class="bp-quote-widget">
                        <h3 class="bp-quote-title">Instant Quote</h3>
                        @if(Session::has('success'))
                            <div class="alert alert-success" style="background: #28a745; color: white; padding: 10px 14px; border-radius: 8px; margin-bottom: 12px; font-weight: 600; font-size: 13px; text-align: center;">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form class="bp-quote-form" action="{{ url('submit-quote') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="source" value="Blog details quote form">
                            <input type="hidden" name="page_url" value="{{ url()->current() }}">
                            <div class="bp-quote-row">
                                <input type="text" name="name" class="bp-quote-input" placeholder="Enter your name" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                <input type="email" name="email" class="bp-quote-input" placeholder="Enter your email" required>
                            </div>
                            <div class="bp-quote-row">
                                <input type="text" name="company" class="bp-quote-input" placeholder="Company (optional)">
                                <div class="bp-quote-upload-wrapper">
                                    <input type="text" class="bp-quote-upload-input" value="No file chosen" readonly>
                                    <label class="bp-quote-upload-btn">
                                        Upload
                                        <input type="file" name="artwork" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <textarea name="message" class="bp-quote-textarea" placeholder="Project description" required></textarea>
                            <div class="bp-quote-buttons">
                                <button type="submit" class="bp-quote-btn bp-quote-submit">Get Quote</button>
                                <button type="button" class="bp-quote-btn bp-quote-call" onclick="window.location.href='tel:18005189441'">Call Us</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="bp-spacer"></div>
                </div>

            </div>

            <!-- MOBILE HERO -->
            <div class="bp-mobile">

                <h1 class="bp-mob-title">{{ $blog_title }}</h1>

                <p class="bp-mob-desc">{{ $blog_desc }}</p>

                <div class="bp-mob-meta-row">
                    <div class="bp-mob-author">
                        <div class="bp-mob-author-avatar">
                            <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                        </div>
                        <div class="bp-mob-author-text">
                            <span class="bp-mob-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-date">{{ $blog_date_short }}</span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-read"><i class="far fa-clock"></i> 5 min read</span>
                        </div>
                    </div>
                </div>

                <div class="bp-mob-share">
                    <span class="bp-mob-share-label">Share:</span>
                    <div class="bp-mob-share-icons">
                        <a href="{{ $fb_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ $tw_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ $li_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <figure class="bp-mob-image">
                    <img src="{{ $blog_image }}" alt="{{ strtolower(str_replace('-', ' ', $post->alt_tag)) }}" loading="eager" title="{{ ucwords(strtolower(str_replace('-', ' ', $post->alt_tag))) }}">
                </figure>

            </div>

        </div>
    </article>

    <!-- POST BODY -->
    <main class="bp-body">
        <div class="bp-container">
            <div class="bp-hero-grid bp-body-grid">

                <div class="bp-hero-left">
                    <div class="bp-article">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet sem ut dolor vulputate dignissim sit amet id dolor. Etiam viverra sem ac erat rutrum, id feugiat nisi porttitor. Phasellus volutpat, tortor nec cursus rhoncus, metus nulla lobortis urna, quis condimentum sapien magna sed erat. Suspendisse imperdiet orci sem, ut accumsan augue volutpat quis. Pellentesque feugiat rutrum venenatis. Cras sollicitudin vestibulum enim, vitae scelerisque orci placerat at. In hac habitasse platea dictumst. Sed ac tempor felis. Pellentesque dictum turpis a leo suscipit, nec ullamcorper magna tincidunt. Maecenas vel tellus non orci suscipit bibendum. Aenean porta purus turpis, a luctus nulla ultrices vitae. Nulla eleifend mollis libero, a pellentesque eros eleifend ut. Proin sodales felis sed tortor placerat, sed facilisis nisi vehicula.</p>

                        <p>Duis erat libero, elementum ac maximus a, pretium ac nibh. In vehicula posuere fermentum. Nullam condimentum sit amet ex eu eleifend. Pellentesque blandit scelerisque imperdiet. Nunc viverra nulla eu lectus feugiat, quis accumsan mauris vulputate. Aliquam porttitor ex id fermentum scelerisque. Quisque ac commodo turpis. Donec cursus, nisi vel rutrum lobortis, dolor mauris dapibus nunc, eget pellentesque sem enim a massa. Integer fringilla nulla elit, ut rhoncus metus rhoncus nec.</p>

                        <p>Nulla consectetur iaculis elementum. Praesent porttitor mattis turpis sed interdum. Vestibulum rhoncus lobortis erat, nec rhoncus orci euismod elementum. Mauris viverra ligula eget ex auctor, ut fringilla purus porttitor. Pellentesque egestas lectus id neque gravida porttitor. Suspendisse maximus erat in sapien laoreet ultricies. Etiam aliquam neque a purus sollicitudin varius. Praesent ac ante magna. Duis et consequat odio. Suspendisse nec purus libero. Cras non ante semper, vestibulum nulla non, condimentum erat. Sed faucibus, lorem in volutpat pharetra, urna sapien tincidunt orci, a aliquam risus nunc in ex. Integer vehicula, quam bibendum aliquam tristique, sapien ante tincidunt ipsum, volutpat rhoncus ligula odio in urna. Vivamus ac arcu non orci tempus tristique eu eget magna. Quisque quam elit, posuere id augue id, pretium varius enim. Donec neque arcu, maximus quis eros ac, suscipit luctus libero.</p>

                        <p>Cras consectetur suscipit tellus, et mollis nisi consectetur quis. Ut suscipit nisl mi, at pretium dui feugiat vitae. Fusce facilisis sem vel massa pretium tempor. Maecenas nec eros nibh. Nulla id orci laoreet, mollis erat in, posuere leo. Quisque sollicitudin, elit eget pharetra pretium, velit massa eleifend magna, ut iaculis tellus lorem ac tortor. Suspendisse tristique, dui non malesuada dignissim, sem erat vehicula nisi, nec dictum justo tortor et nulla. Suspendisse eu leo lacus. Sed elementum volutpat ipsum non efficitur. Aliquam a lobortis augue. Nullam turpis mi, imperdiet sit amet tincidunt vel, ultricies quis metus. Curabitur malesuada aliquet dui gravida placerat. Nam vel ultricies libero.</p>

                        <p>Sed neque est, interdum id convallis eleifend, dignissim sed lorem. Fusce vel malesuada enim. Aliquam erat volutpat. Nulla efficitur maximus sagittis. Integer non nisl vestibulum, posuere purus tristique, volutpat augue. Suspendisse eget felis suscipit purus laoreet egestas eget eget purus. Donec ac elementum risus. Sed semper massa risus, sed luctus risus fringilla commodo. Nulla sed sem nec massa tincidunt dictum. Duis ligula risus, pulvinar in consectetur quis, sagittis ac diam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet sem ut dolor vulputate dignissim sit amet id dolor. Etiam viverra sem ac erat rutrum, id feugiat nisi porttitor. Phasellus volutpat, tortor nec cursus rhoncus, metus nulla lobortis urna, quis condimentum sapien magna sed erat. Suspendisse imperdiet orci sem, ut accumsan augue volutpat quis. Pellentesque feugiat rutrum venenatis. Cras sollicitudin vestibulum enim, vitae scelerisque orci placerat at. In hac habitasse platea dictumst. Sed ac tempor felis. Pellentesque dictum turpis a leo suscipit, nec ullamcorper magna tincidunt. Maecenas vel tellus non orci suscipit bibendum. Aenean porta purus turpis, a luctus nulla ultrices vitae. Nulla eleifend mollis libero, a pellentesque eros eleifend ut. Proin sodales felis sed tortor placerat, sed facilisis nisi vehicula.</p>
                        
                        {!! $long_desc !!}

                        <!-- Author Profile Section -->
                        <div class="bp-author-profile">
                            <div class="bp-author-profile-image">
                                <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                            </div>
                            <div class="bp-author-profile-content">
                                <h3 class="bp-author-profile-heading">{{ $author_name }}</h3>
                                <p class="bp-author-profile-description">Written by the Rigid Box Pro Team, specialists in custom rigid boxes and luxury packaging solutions.<br>We share industry insights, design inspiration, and expert guidance to help brands create<br>packaging that leaves a lasting impression.</p>
                                <a href="#" class="bp-author-profile-social">
                                    <i class="fab fa-linkedin"></i> LinkedIn
                                </a>
                            </div>
                        </div>

                        <!-- Related Posts Section -->
                        <div class="bp-related-posts">
                            <h2 class="bp-related-title">Related Posts</h2>
                            
                            <div class="bp-related-grid" id="bp-related-slider">
                                
                                <!-- Post Card 1 -->
                                <article class="bp-related-card">
                                    <a href="#" class="bp-related-link">
                                        <div class="bp-related-image">
                                            <img src="{{ $blog_image }}" alt="sustainable packaging trends for 2026" title="Sustainable Packaging Trends For 2026">
                                        </div>
                                        <div class="bp-related-content">
                                            <div class="bp-related-meta">
                                                <span class="bp-related-author">Joe Clarety</span>
                                                <span class="bp-related-date">Nov 15, 2024</span>
                                            </div>
                                            <h3 class="bp-related-card-title">Sustainable Packaging Trends for 2026</h3>
                                            <p class="bp-related-excerpt">Discover the latest eco-friendly innovations transforming luxury packaging with sustainable materials and practices.</p>
                                        </div>
                                    </a>
                                </article>

                                <!-- Post Card 2 -->
                                <article class="bp-related-card">
                                    <a href="#" class="bp-related-link">
                                        <div class="bp-related-image">
                                            <img src="{{ $blog_image }}" alt="sustainable packaging trends for 2026" title="Sustainable Packaging Trends For 2026">
                                        </div>
                                        <div class="bp-related-content">
                                            <div class="bp-related-meta">
                                                <span class="bp-related-author">Joe Clarety</span>
                                                <span class="bp-related-date">Mar 21, 2024</span>
                                            </div>
                                            <h3 class="bp-related-card-title">Sustainable Packaging Trends for 2026</h3>
                                            <p class="bp-related-excerpt">Discover the latest eco-friendly innovations transforming luxury packaging with sustainable materials and practices.</p>
                                        </div>
                                    </a>
                                </article>

                                <!-- Post Card 3 -->
                                <article class="bp-related-card">
                                    <a href="#" class="bp-related-link">
                                        <div class="bp-related-image">
                                            <img src="{{ $blog_image }}" alt="sustainable packaging trends for 2026" title="Sustainable Packaging Trends For 2026">
                                        </div>
                                        <div class="bp-related-content">
                                            <div class="bp-related-meta">
                                                <span class="bp-related-author">Joe Clarety</span>
                                                <span class="bp-related-date">Nov 21, 2024</span>
                                            </div>
                                            <h3 class="bp-related-card-title">Sustainable Packaging Trends for 2026</h3>
                                            <p class="bp-related-excerpt">Discover the latest eco-friendly innovations transforming luxury packaging with sustainable materials and practices.</p>
                                        </div>
                                    </a>
                                </article>

                            </div>
                            
                            <!-- Slider Dots (Mobile Only) -->
                            <div class="bp-slider-dots" id="bp-slider-dots" style="display: none;">
                                <button class="bp-slider-dot active" data-slide="0"></button>
                                <button class="bp-slider-dot" data-slide="1"></button>
                                <button class="bp-slider-dot" data-slide="2"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="bp-sidebar">
                    <div class="bp-sidebar-sticky">
                        <!-- Sidebar is now empty, form moved to right column -->
                    </div>
                </aside>

            </div>
        </div>
    </main>

<script>
(function () {
    const tocLinks = document.querySelectorAll('.bp-toc-item');
    if (!tocLinks.length) return;

    const sections = Array.from(tocLinks)
        .map(link => {
            const id = link.getAttribute('href').replace('#', '');
            return document.getElementById(id);
        })
        .filter(Boolean);

    if (!sections.length) return;

    function onScroll() {
        const scrollY = window.scrollY + 160;

        let current = sections[0];
        sections.forEach(sec => {
            if (sec.offsetTop <= scrollY) current = sec;
        });

        tocLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current.id) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();

// Related Posts Slider (Mobile Only - Manual Scroll)
(function() {
    // No automatic functionality - user scrolls manually
    // Pure CSS handles the horizontal scrolling
})();

// File input handler for visual feedback
(function() {
    const fileInput = document.querySelector('.bp-quote-form input[type="file"]');
    const uploadLabel = document.querySelector('.bp-quote-upload-input');
    if (fileInput && uploadLabel) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                uploadLabel.value = this.files[0].name;
            } else {
                uploadLabel.value = 'No file chosen';
            }
        });
    }
})();
</script>

@include('web/footer')
