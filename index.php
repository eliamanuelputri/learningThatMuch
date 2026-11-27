<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#176b45">
	<title>Learning That Much</title>
	<style>
		:root{--green:#176b45;--deep:#104b33;--ink:#193329;--mint:#e8f4ec}*{box-sizing:border-box}body{margin:0;background:#f7faf7;color:var(--ink);font-family:system-ui,-apple-system,"Segoe UI",sans-serif}a{color:inherit;text-decoration:none}
		.hero{position:relative;overflow:hidden;min-height:640px;background:var(--green);color:white}.hero:after{content:"";position:absolute;width:460px;height:460px;right:-120px;bottom:-270px;border:1px solid #ffffff35;border-radius:50%;box-shadow:0 0 0 55px #ffffff09,0 0 0 110px #ffffff09}.wrap{width:min(1080px,calc(100% - 48px));margin:auto}
		nav{height:82px;display:flex;align-items:center;justify-content:space-between}.brand{display:flex;align-items:center;gap:10px;font-weight:750}.mark{width:34px;height:34px;display:grid;place-items:center;border-radius:10px;background:#d2f0d7;color:var(--deep);font-size:19px}.links{display:flex;align-items:center;gap:28px;color:#ffffffdc;font-size:14px}.outline{padding:10px 15px;border:1px solid #ffffff80;border-radius:8px;color:white}
		.hero-copy{position:relative;z-index:1;max-width:720px;padding:105px 0 120px}.eyebrow{display:inline-flex;align-items:center;gap:8px;padding:7px 11px;border:1px solid #ffffff40;border-radius:99px;color:#dcf4e3;font-size:12px}.dot{width:7px;height:7px;border-radius:50%;background:#a7e8b6}h1{max-width:700px;margin:24px 0 18px;font-size:clamp(44px,7vw,76px);line-height:1.04;letter-spacing:-3.5px}h1 em{color:#b5edbf;font-style:normal}.intro{max-width:570px;margin:0;color:#ffffffc9;font-size:18px;line-height:1.7}.actions{display:flex;align-items:center;gap:24px;margin-top:30px}.button{display:inline-flex;align-items:center;gap:12px;padding:14px 19px;border-radius:8px;background:white;color:var(--deep);font-size:14px;font-weight:700}.sub-link{color:#ffffffed;font-size:14px}
		.section{padding:65px 0 78px}.section h2{margin:0 0 8px;font-size:28px;letter-spacing:-1px}.lead{margin:0 0 27px;color:#738078;font-size:14px}.cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}.card{padding:23px;border:1px solid #e4ebe5;border-radius:13px;background:white}.icon{width:43px;height:43px;display:grid;place-items:center;border-radius:12px;background:var(--mint);color:var(--green);font-size:20px}.card h3{margin:18px 0 8px;font-size:17px}.card p{margin:0;color:#748078;font-size:14px;line-height:1.65}footer{padding:22px 0;border-top:1px solid #e5ebe6;color:#78837b;font-size:13px}
		@media(max-width:680px){.wrap{width:calc(100% - 36px)}.links{gap:14px}.links a:not(.outline){display:none}.hero-copy{padding:95px 0 105px}h1{letter-spacing:-2px}.intro{font-size:16px}.cards{grid-template-columns:1fr}}
	</style>
</head>
<body>
	<header class="hero" id="home"><div class="wrap">
		<nav aria-label="Main navigation"><a class="brand" href="#home"><span class="mark" aria-hidden="true">L</span>Learning That Much</a><div class="links"><a href="#about">About</a><a href="#topics">What you'll learn</a><a class="outline" href="#topics">Explore lessons</a></div></nav>
		<main class="hero-copy"><div class="eyebrow"><span class="dot"></span>Small steps. Real progress.</div><h1>Make room for <em>what's next.</em></h1><p class="intro">Curious minds grow one idea at a time. Find practical lessons, fresh perspectives, and the confidence to keep learning.</p><div class="actions"><a class="button" href="#topics">Start exploring <span aria-hidden="true">→</span></a><a class="sub-link" href="#about">A little about us ↓</a></div></main>
	</div></header>
	<section class="section" id="topics"><div class="wrap" id="about"><h2>Learning, made approachable.</h2><p class="lead">Useful ideas for wherever you are in your journey.</p><div class="cards">
		<article class="card"><div class="icon" aria-hidden="true">✦</div><h3>Explore new ideas</h3><p>Discover clear, engaging introductions to topics worth knowing.</p></article>
		<article class="card"><div class="icon" aria-hidden="true">↗</div><h3>Build useful skills</h3><p>Turn what you learn into practical steps you can use every day.</p></article>
		<article class="card"><div class="icon" aria-hidden="true">◎</div><h3>Grow at your pace</h3><p>Follow your curiosity and make progress in a way that works for you.</p></article>
	</div></div></section>
	<footer><div class="wrap">&copy; <?= date('Y') ?> Learning That Much. Keep growing.</div></footer>
</body>
</html>
