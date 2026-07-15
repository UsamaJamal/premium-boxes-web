@include('web/header')
<title>404 - Page Not Found | Premium Boxes</title>

<style>
    .error-section {
        background-color: #1a1a1a;
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 150px 20px 80px 20px;
        color: #ffffff;
    }

    .error-code {
        font-family: 'Inter', sans-serif;
        font-size: 180px;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 20px;
        color: transparent;
        -webkit-text-stroke: 2px #d4af37;
        background: linear-gradient(135deg, #f5c542, #c9a84c);
        -webkit-background-clip: text;
        position: relative;
    }

    .error-code::after {
        content: '404';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        color: #d4af37;
        opacity: 0.15;
        filter: blur(15px);
        z-index: -1;
    }

    .error-title {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .error-text {
        font-size: 18px;
        color: #cccccc;
        max-width: 500px;
        margin: 0 auto 40px auto;
        line-height: 1.6;
    }

    .error-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #d4af37;
        color: #1a1a1a;
        font-weight: 600;
        font-size: 16px;
        padding: 15px 40px;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #d4af37;
        gap: 10px;
    }

    .error-btn:hover {
        background-color: transparent;
        color: #d4af37;
    }

    .error-btn i {
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .error-btn:hover i {
        transform: translateX(-5px);
    }

    @media (max-width: 768px) {
        .error-section {
            padding-top: 120px;
        }
        .error-code {
            font-size: 120px;
        }
        .error-title {
            font-size: 26px;
        }
        .error-text {
            font-size: 16px;
            padding: 0 15px;
        }
    }
</style>

<section class="error-section">
    <h1 class="error-code">404</h1>
    <h2 class="error-title">Oops! Page Not Found</h2>
    <p class="error-text">
        It looks like the page you are trying to visit doesn't exist, has been moved, or is temporarily unavailable. Let's get you back on track!
    </p>
    <a href="{{ url('/') }}/" class="error-btn">
        <i class="fas fa-arrow-left"></i> Back to Home
    </a>
</section>

@include('web/footer')
