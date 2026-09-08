@extends('layouts.app')

@section('title', 'Ebdaa IFC — The Front Door to Global Islamic Finance Mandates')

@push('styles')
    <style>
        /* =========================================================
         HERO
         ========================================================= */
        .hero {
            height: 100vh;
            max-height: 660px;
            min-height: 560px;
            position: relative;
            overflow: hidden;
            background: var(--ink-deep);
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 1.1s ease;
        }

        .slide.active {
            opacity: 1;
            visibility: visible;
            z-index: 2;
        }

        .slide-bg {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .slide-bg .layer {
            position: absolute;
            inset: -6%;
            transition: transform 8s ease-out;
            background-size: cover;
            background-position: center;
        }

        .slide.active .slide-bg .layer {
            transform: scale(1.0);
        }

        .slide-bg .layer {
            transform: scale(1.08);
        }

        .hero-video-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* deep navy scrim so brand-blue mood reads instantly, plus lattice texture */
        .slide-overlay {
            position: absolute;
            inset: 0;
            z-index: 2;
            background: linear-gradient(100deg, rgba(6, 27, 44, .86) 0%, rgba(6, 27, 44, .62) 42%, rgba(6, 27, 44, .30) 68%, rgba(6, 27, 44, .55) 100%);
        }

        .hero-lattice {
            position: absolute;
            inset: 0;
            z-index: 2;
            opacity: .5;
            mix-blend-mode: screen;
            pointer-events: none;
        }

        .slide-content {
            position: relative;
            z-index: 3;
            height: 100%;
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            align-items: center;
            gap: 40px;
        }

        .slide-content .inner {
            max-width: 600px;
        }

        .slide-content .eyebrow {
            margin-bottom: 20px;
        }

        .slide-content h1 {
            font-size: clamp(2.4rem, 4.2vw, 3.6rem);
            line-height: 1.08;
            color: #fff;
            font-weight: 600;
            margin-bottom: 22px;
            letter-spacing: -0.02em;
        }

        .slide-content p.lede {
            font-size: 16.5px;
            color: rgba(255, 255, 255, .82);
            max-width: 480px;
            margin-bottom: 32px;
            font-weight: 400;
        }

        .slide-actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        /* floating live-signal card — the one bold "AI" moment in the hero */
        .hero-live {
            background: var(--glass-fill);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(18px);
            border-radius: var(--radius);
            padding: 26px 26px 22px;
            color: #fff;
            max-width: 340px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, .35);
        }

        .hero-live .live-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .hero-live .live-tag {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-mono);
            font-size: 11.5px;
            color: var(--sky);
        }

        .hero-live .live-tag .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #5FE39B;
            box-shadow: 0 0 0 3px rgba(95, 227, 155, .25);
            animation: pulse 1.8s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .4;
            }
        }

        .hero-live h5 {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .hero-live .sub {
            font-size: 12px;
            color: rgba(255, 255, 255, .55);
            margin-bottom: 16px;
        }

        .hero-live .spark {
            width: 100%;
            height: 46px;
            margin-bottom: 16px;
        }

        .hero-live .spark path {
            fill: none;
            stroke: var(--sky);
            stroke-width: 1.6;
        }

        .hero-live .row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            padding: 10px 0;
            border-top: 1px solid var(--line-on-dark);
        }

        .hero-live .row .k {
            font-size: 12.5px;
            color: rgba(255, 255, 255, .6);
        }

        .hero-live .row .v {
            font-family: var(--font-mono);
            font-size: 14px;
            color: #fff;
        }

        .hero-chrome {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 34px;
            z-index: 6;
        }

        .hero-chrome .wrap {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 16px;
        }

        .hero-dots {
            display: flex;
            gap: 9px;
        }

        .hero-dot {
            width: 30px;
            height: 3px;
            background: rgba(255, 255, 255, .3);
            position: relative;
            overflow: hidden;
            border-radius: 2px;
            cursor: pointer;
        }

        .hero-dot i {
            position: absolute;
            inset: 0;
            background: #fff;
            transform: scaleX(0);
            transform-origin: left;
            display: block;
        }

        .hero-dot.active i {
            animation: fillDot 6s linear forwards;
        }

        @keyframes fillDot {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        .hero-playpause {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .hero-playpause svg {
            width: 11px;
            height: 11px;
        }

        .scroll-cue {
            position: absolute;
            left: 40px;
            bottom: 38px;
            z-index: 6;
            color: rgba(255, 255, 255, .7);
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 11.5px;
            font-family: var(--font-mono);
            letter-spacing: .06em;
        }

        .scroll-cue svg {
            width: 13px;
            height: 13px;
            animation: bob 1.8s ease-in-out infinite;
        }

        @keyframes bob {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(5px);
            }
        }

        /* =========================================================
         METRICS — glass bento bar overlapping hero
         ========================================================= */
        .metrics-highlight {
            position: relative;
            z-index: 10;
            margin-top: -56px;
            padding: 0 40px;
        }

        .metrics-card {
            max-width: var(--container);
            margin: 0 auto;
            background: rgba(6, 27, 44, .92);
            backdrop-filter: blur(18px);
            border: 1px solid var(--line-on-dark);
            border-radius: var(--radius-lg);
            box-shadow: 0 30px 70px rgba(6, 27, 44, .35);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .metric-box {
            padding: 28px 26px;
            border-right: 1px solid var(--line-on-dark);
        }

        .metric-box:last-child {
            border-right: none;
        }

        .metric-val {
            font-family: var(--font-mono);
            font-size: 26px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 6px;
            letter-spacing: -0.01em;
        }

        .metric-lbl {
            font-size: 12.5px;
            color: rgba(255, 255, 255, .62);
        }

        /* =========================================================
         TRENDING TOPICS
         ========================================================= */
        .topics-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .topic-card {
            aspect-ratio: 3/3.6;
            border-radius: var(--radius);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 22px;
            transition: transform .35s ease;
            background-size: cover;
            background-position: center;
            border: 1px solid var(--line);
        }

        .topic-card:hover {
            transform: translateY(-6px);
        }

        .topic-card span {
            position: relative;
            z-index: 2;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.28;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .topic-card .arrow {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .25s ease;
        }

        .topic-card:hover .arrow {
            background: #fff;
            color: var(--blue-deep);
        }

        .topic-card .shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4, 20, 34, .72) 0%, rgba(4, 20, 34, .18) 55%, rgba(4, 20, 34, 0) 100%);
        }

        /* =========================================================
         WHO WE SERVE
         ========================================================= */
        .impact-bar {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 44px;
            gap: 24px;
            flex-wrap: wrap;
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .impact-card {
            position: relative;
            border-radius: var(--radius);
            overflow: hidden;
            aspect-ratio: 4/3.1;
            background: var(--blue-deep);
            display: block;
            background-size: cover;
            background-position: center;
            border: 1px solid var(--line);
        }

        .impact-card .shade-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4, 18, 30, .72) 12%, rgba(4, 18, 30, .2) 58%, rgba(4, 18, 30, 0) 100%);
        }

        .impact-card .icon-chip {
            position: absolute;
            top: 16px;
            left: 16px;
            z-index: 3;
            width: 36px;
            height: 36px;
            border-radius: var(--radius-sm);
            background: var(--glass-fill);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
        }

        .impact-card .cap {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 22px 22px 20px;
            color: #fff;
            z-index: 2;
        }

        .impact-card .cap .tag {
            font-family: var(--font-mono);
            font-size: 11px;
            color: #9AD6FF;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        .impact-card .cap h4 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .impact-card .cap p {
            font-size: 13.5px;
            color: rgba(255, 255, 255, .85);
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height .4s ease, opacity .35s ease .05s;
        }

        .impact-card:hover .cap p {
            max-height: 100px;
            opacity: 1;
        }

        .impact-card .cap .more {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12.5px;
            font-weight: 500;
            color: #fff;
            margin-top: 12px;
            opacity: 0;
            transform: translateY(6px);
            transition: all .35s ease .08s;
        }

        .impact-card:hover .cap .more {
            opacity: 1;
            transform: translateY(0);
        }

        .impact-card .more svg {
            width: 11px;
            height: 11px;
        }

        /* =========================================================
         WHAT WE DO / TABS
         ========================================================= */
        .whatwedo {
            background: var(--pale);
        }

        .tabs {
            display: flex;
            gap: 6px;
            border-bottom: 1px solid var(--line);
            margin-bottom: 44px;
            flex-wrap: wrap;
            position: relative;
        }

        .tab-btn {
            padding: 14px 18px;
            font-size: 14px;
            font-weight: 500;
            color: var(--ink-soft);
            position: relative;
            border-radius: var(--radius-sm) var(--radius-sm) 0 0;
        }

        .tab-btn.active {
            color: var(--blue-deep);
            font-weight: 600;
            background: var(--white);
        }

        .tab-btn.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            height: 2px;
            background: var(--blue);
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
            animation: fadeIn .4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wwd-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 14px;
            min-height: 500px;
        }

        .wwd-main {
            grid-row: 1/3;
            border-radius: var(--radius);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 28px;
            background-size: cover;
            background-position: center;
            transition: transform .3s ease;
            border: 1px solid var(--line);
        }

        .wwd-main:hover,
        .wwd-tile:hover {
            transform: translateY(-3px);
        }

        .wwd-main span,
        .wwd-tile span {
            position: relative;
            z-index: 2;
            color: #fff;
            font-weight: 600;
        }

        .wwd-main span {
            font-size: 22px;
        }

        .wwd-main .shade,
        .wwd-tile .shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4, 18, 30, .68) 8%, rgba(4, 18, 30, .15) 55%, rgba(4, 18, 30, 0) 100%);
        }

        .wwd-tile {
            border-radius: var(--radius);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            background-size: cover;
            background-position: center;
            transition: transform .3s ease;
            border: 1px solid var(--line);
        }

        .wwd-tile span {
            font-size: 16px;
        }

        /* =========================================================
         TECH SHOWCASE — connected node timeline
         ========================================================= */
        .tech-showcase {
            background: var(--grad-deep);
            color: #fff;
            padding: 110px 0;
            position: relative;
            overflow: hidden;
        }

        .tech-showcase .lattice-bg {
            position: absolute;
            inset: 0;
            opacity: .35;
            pointer-events: none;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .tech-showcase h2 {
            color: #fff;
            font-size: clamp(1.7rem, 2.6vw, 2.1rem);
            margin-bottom: 16px;
        }

        .tech-showcase>.wrap>.tech-grid>div:first-child>p {
            color: rgba(255, 255, 255, .72);
            font-size: 15px;
            margin-bottom: 30px;
            max-width: 460px;
        }

        .tech-timeline {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .tech-node {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            padding-bottom: 28px;
            position: relative;
        }

        .tech-node:last-child {
            padding-bottom: 0;
        }

        .tech-node .node-col {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: none;
        }

        .tech-node .node-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--sky);
            box-shadow: 0 0 0 4px rgba(191, 227, 248, .18);
            flex: none;
            margin-top: 4px;
        }

        .tech-node .node-line {
            width: 1px;
            flex: 1;
            background: var(--line-on-dark);
            margin-top: 4px;
        }

        .tech-node h4 {
            color: #fff;
            font-size: 16px;
            margin-bottom: 6px;
        }

        .tech-node p {
            color: rgba(255, 255, 255, .68);
            font-size: 13.5px;
            margin: 0;
            max-width: 400px;
        }

        .tech-visual {
            position: relative;
            aspect-ratio: 1/1;
            border-radius: var(--radius-lg);
            overflow: hidden;
            background-size: cover;
            background-position: center;
            border: 1px solid var(--line-on-dark);
        }

        .tech-visual .shade-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(150deg, rgba(6, 27, 44, .55), rgba(15, 87, 148, .35));
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .play-ring {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .play-ring::before {
            content: "";
            position: absolute;
            inset: -10px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .25);
            animation: ring 2.4s ease-out infinite;
        }

        @keyframes ring {
            0% {
                transform: scale(.9);
                opacity: .8;
            }

            100% {
                transform: scale(1.25);
                opacity: 0;
            }
        }

        .play-ring a {
            color: #fff;
            font-size: 22px;
            display: flex;
        }

        /* =========================================================
         INSIGHTS
         ========================================================= */
        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
        }

        .insight-card .thumb {
            aspect-ratio: 16/10.5;
            border-radius: var(--radius);
            position: relative;
            overflow: hidden;
            margin-bottom: 18px;
            background-size: cover;
            background-position: center;
            border: 1px solid var(--line);
        }

        .insight-card .thumb .shade-thumb {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4, 18, 30, .28) 0%, rgba(4, 18, 30, 0) 100%);
        }

        .insight-card .meta {
            font-family: var(--font-mono);
            font-size: 11.5px;
            color: var(--blue);
            font-weight: 500;
            margin-bottom: 10px;
        }

        .insight-card h4 {
            font-size: 17.5px;
            line-height: 1.38;
            margin-bottom: 12px;
            color: var(--blue-deep);
        }

        .insight-card .read {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            font-weight: 500;
            color: var(--ink-soft);
            transition: gap .2s ease, color .2s ease;
        }

        .insight-card:hover .read {
            gap: 11px;
            color: var(--blue);
        }

        /* =========================================================
         ALLIANCES
         ========================================================= */
        .alliances {
            padding: 76px 0;
        }

        .alliances-head {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 36px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .alliances-head h3 {
            font-family: var(--font-mono);
            font-size: 12.5px;
            letter-spacing: .04em;
            color: var(--ink-soft);
            font-weight: 500;
        }

        .wordmarks {
            display: flex;
            flex-wrap: wrap;
            gap: 0;
            align-items: center;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .wordmarks span {
            font-size: 18px;
            font-weight: 600;
            color: var(--blue-deep);
            opacity: .5;
            letter-spacing: -0.01em;
            transition: opacity .2s ease;
            padding: 22px 34px;
            border-right: 1px solid var(--line);
        }

        .wordmarks span:last-child {
            border-right: none;
        }

        .wordmarks span:hover {
            opacity: 1;
        }

        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 26px;
        }

        .chip {
            font-size: 12.5px;
            padding: 8px 16px;
            border: 1px solid var(--line);
            border-radius: 100px;
            color: var(--ink-soft);
            font-family: var(--font-mono);
        }

        /* =========================================================
         CTA BANNER — lattice + network fusion motif
         ========================================================= */
        .cta-banner {
            padding: 120px 0;
            position: relative;
            overflow: hidden;
            background: var(--grad-deep);
        }

        .cta-banner svg.pattern {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: .5;
        }

        .cta-banner .wrap {
            position: relative;
            z-index: 2;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cta-banner h2 {
            color: #fff;
            font-size: clamp(1.7rem, 2.8vw, 2.2rem);
            max-width: 760px;
            line-height: 1.32;
            font-weight: 500;
            margin-bottom: 38px;
        }

        /* =========================================================
         LOCATIONS
         ========================================================= */
        .loc-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .loc-card {
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
        }

        .loc-photo {
            aspect-ratio: 16/9.5;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
        }

        .loc-photo .shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(6, 27, 44, .35) 0%, rgba(6, 27, 44, 0) 100%);
        }

        .loc-photo .pin {
            position: absolute;
            top: 16px;
            left: 16px;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 100px;
            background: var(--glass-fill);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(8px);
            color: #fff;
            font-size: 12.5px;
            font-family: var(--font-mono);
        }

        .loc-info {
            padding: 24px 26px 28px;
        }

        .loc-info h4 {
            font-size: 18px;
            margin-bottom: 16px;
        }

        .loc-info .row {
            display: flex;
            gap: 12px;
            font-size: 13.5px;
            color: var(--ink-soft);
            margin-bottom: 10px;
            align-items: flex-start;
        }

        .loc-info .row i {
            color: var(--blue);
            font-size: 12px;
            margin-top: 3px;
            width: 14px;
        }

        .loc-info .row b {
            color: var(--ink);
            font-weight: 600;
            min-width: 56px;
        }

        @media(max-width:980px) {
            .slide-content {
                grid-template-columns: 1fr;
            }

            .hero-live {
                display: none;
            }

            .metrics-card {
                grid-template-columns: repeat(2, 1fr);
            }

            .metric-box:nth-child(2) {
                border-right: none;
            }

            .topics-grid,
            .impact-grid,
            .wwd-grid,
            .insights-grid,
            .loc-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .wwd-grid {
                grid-template-rows: auto;
            }

            .wwd-main {
                grid-row: auto;
                aspect-ratio: 16/10;
            }

            .wwd-tile {
                aspect-ratio: 16/10;
            }

            .tech-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:640px) {

            .topics-grid,
            .impact-grid,
            .insights-grid,
            .loc-grid,
            .metrics-card {
                grid-template-columns: 1fr;
            }

            .metric-box {
                border-right: none !important;
                border-bottom: 1px solid var(--line-on-dark);
            }

            .slide-content h1 {
                font-size: 30px;
            }

            .cta-banner h2 {
                font-size: 24px;
            }

            .wordmarks span {
                padding: 16px 20px;
                font-size: 15px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- reusable geometric lattice + AI-node motif, fuses Islamic geometric pattern with a data-network overlay -->
    <svg width="0" height="0" style="position:absolute">
        <defs>
            <pattern id="latticePattern" width="64" height="64" patternUnits="userSpaceOnUse" patternTransform="rotate(0)">
                <path d="M0 32L32 0L64 32L32 64Z" fill="none" stroke="#8FC6EC" stroke-width="0.6" opacity="0.55" />
                <path d="M32 0L32 64M0 32L64 32" stroke="#8FC6EC" stroke-width="0.4" opacity="0.35" />
                <circle cx="32" cy="0" r="1.4" fill="#C9A15A" opacity="0.7" />
                <circle cx="32" cy="64" r="1.4" fill="#C9A15A" opacity="0.7" />
                <circle cx="0" cy="32" r="1.4" fill="#8FC6EC" opacity="0.7" />
                <circle cx="64" cy="32" r="1.4" fill="#8FC6EC" opacity="0.7" />
                <circle cx="32" cy="32" r="1.8" fill="#8FC6EC" opacity="0.9" />
            </pattern>
        </defs>
    </svg>

    <!-- ===== HERO SLIDER ===== -->
    <section class="hero" id="hero">

        <div class="slide active" data-slide="0">
            <div class="slide-bg">
                <video class="hero-video-bg" autoplay loop muted playsinline
                    poster="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80">
                    <source
                        src="https://assets.mixkit.co/videos/preview/mixkit-financial-district-skyscrapers-in-london-42795-large.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="slide-overlay"></div>
            <svg class="hero-lattice">
                <rect width="100%" height="100%" fill="url(#latticePattern)" />
            </svg>
            <div class="slide-content">
                <div class="inner">
                    <span class="eyebrow on-dark">Credibility-first, AI-accelerated</span>
                    <h1>The front door to global Islamic finance mandates</h1>
                    <p class="lede">Scholar-led Sharia advisory, structuring, and governance — built for the institutions
                        who evaluate a firm before they ever pick up the phone.</p>
                    <div class="slide-actions">
                        <a href="{{ url('/speak-with-us') }}" class="btn solid">Speak With an Advisor</a>
                        <a href="{{ url('/proficiencies') }}" class="btn ghost-light">Our Proficiencies</a>
                    </div>
                </div>

                <div class="hero-live">
                    <div class="live-head">
                        <div class="live-tag"><span class="dot"></span> IQMS™ LIVE</div>
                        <i class="fa-solid fa-shield-halved" style="color:#8FC6EC; font-size:13px;"></i>
                    </div>
                    <h5>Sharia compliance monitoring</h5>
                    <div class="sub">Across active client mandates</div>
                    <svg class="spark" viewBox="0 0 280 46" preserveAspectRatio="none">
                        <path d="M0 34 L28 30 L56 36 L84 20 L112 24 L140 12 L168 18 L196 8 L224 14 L252 6 L280 10" />
                    </svg>
                    <div class="row"><span class="k">Compliance rate</span><span class="v">100%</span></div>
                    <div class="row"><span class="k">Active jurisdictions</span><span class="v">20+</span></div>
                    <div class="row"><span class="k">Mandates advised</span><span class="v">$45B+</span></div>
                </div>
            </div>
        </div>

        <div class="slide" data-slide="1">
            <div class="slide-bg">
                <div class="layer"
                    style="background-image:url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80');">
                </div>
            </div>
            <div class="slide-overlay"></div>
            <svg class="hero-lattice">
                <rect width="100%" height="100%" fill="url(#latticePattern)" />
            </svg>
            <div class="slide-content">
                <div class="inner">
                    <span class="eyebrow on-dark">Sharia governance, presented properly</span>
                    <h1>Scholarship your institution can verify in seconds</h1>
                    <p class="lede">Named Sharia Supervisory Board members, credentials, and track record — presented with
                        the weight a Big Four firm gives its partners.</p>
                    <div class="slide-actions">
                        <a href="{{ url('/our-firm') }}" class="btn solid">Meet Our Sharia Board</a>
                        <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Request a Governance Review</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" data-slide="2">
            <div class="slide-bg">
                <div class="layer"
                    style="background-image:url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80');">
                </div>
            </div>
            <div class="slide-overlay"></div>
            <svg class="hero-lattice">
                <rect width="100%" height="100%" fill="url(#latticePattern)" />
            </svg>
            <div class="slide-content">
                <div class="inner">
                    <span class="eyebrow on-dark">IQMS™ &amp; ILMS™</span>
                    <h1>The only boutique Sharia advisory with a live AI compliance engine</h1>
                    <p class="lede">Proprietary technology, demo-ready — proof that Ebdaa IFC is a technology-enabled
                        advisory, not just a Sharia opinion desk.</p>
                    <div class="slide-actions">
                        <a href="{{ url('/technology') }}" class="btn solid">See IQMS in Action</a>
                        <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Request a Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" data-slide="3">
            <div class="slide-bg">
                <div class="layer"
                    style="background-image:url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80');">
                </div>
            </div>
            <div class="slide-overlay"></div>
            <svg class="hero-lattice">
                <rect width="100%" height="100%" fill="url(#latticePattern)" />
            </svg>
            <div class="slide-content">
                <div class="inner">
                    <span class="eyebrow on-dark">London · Toronto · global reach</span>
                    <h1>Structuring capital across the GCC, London, and Toronto</h1>
                    <p class="lede">Sukuk, Sharia-compliant family foundations, and wealth strategies for institutions and
                        family offices worldwide.</p>
                    <div class="slide-actions">
                        <a href="{{ url('/our-firm#locations') }}" class="btn solid">Our Locations</a>
                        <a href="{{ url('/industries') }}" class="btn ghost-light">Explore Industries We Serve</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-chrome">
            <div class="wrap">
                <div class="hero-dots" id="heroDots"></div>
                <button class="hero-playpause" id="playPause" aria-label="Pause Slider">
                    <svg id="pauseIcon" viewBox="0 0 12 12" fill="currentColor">
                        <rect x="1" y="1" width="3" height="10" />
                        <rect x="8" y="1" width="3" height="10" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="scroll-cue">
            <svg viewBox="0 0 14 14" fill="none">
                <path d="M2 4l5 6 5-6" stroke="currentColor" stroke-width="1.4" />
            </svg>
            SCROLL
        </div>
    </section>

    <!-- ===== METRICS — glass bento bar ===== -->
    <div class="metrics-highlight">
        <div class="metrics-card">
            <div class="metric-box">
                <div class="metric-val">$45B+</div>
                <div class="metric-lbl">Sukuk &amp; transactions advised</div>
            </div>
            <div class="metric-box">
                <div class="metric-val">100%</div>
                <div class="metric-lbl">Sharia compliance rate</div>
            </div>
            <div class="metric-box">
                <div class="metric-val">20+</div>
                <div class="metric-lbl">Global regulatory jurisdictions</div>
            </div>
            <div class="metric-box">
                <div class="metric-val">LDN · YYZ</div>
                <div class="metric-lbl">Global operational footprint</div>
            </div>
        </div>
    </div>

    <!-- ===== TRENDING TOPICS ===== -->
    <section class="section-pad" id="topics">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Trending topics</span>
                <h2>Transforming Sharia complexity into institutional advantage</h2>
            </div>
            <div class="topics-grid">
                <a href="{{ url('/proficiencies/sharia-governance') }}" class="topic-card"
                    style="background-image:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade"></div>
                    <span>Sharia Governance &amp; Audit <span class="arrow"><i class="fa-solid fa-arrow-right"
                                style="font-size:11px;"></i></span></span>
                </a>
                <a href="{{ url('/proficiencies/sukuk-structuring') }}" class="topic-card"
                    style="background-image:url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade"></div>
                    <span>Sukuk &amp; Asset Tokenization <span class="arrow"><i class="fa-solid fa-arrow-right"
                                style="font-size:11px;"></i></span></span>
                </a>
                <a href="{{ url('/proficiencies/ai-compliance') }}" class="topic-card"
                    style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade"></div>
                    <span>AI in Sharia Compliance <span class="arrow"><i class="fa-solid fa-arrow-right"
                                style="font-size:11px;"></i></span></span>
                </a>
                <a href="{{ url('/proficiencies/green-sukuk') }}" class="topic-card"
                    style="background-image:url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade"></div>
                    <span>Green &amp; ESG-Aligned Sukuk <span class="arrow"><i class="fa-solid fa-arrow-right"
                                style="font-size:11px;"></i></span></span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== WHO WE SERVE ===== -->
    <section class="section-pad" id="impact" style="background:var(--pale);">
        <div class="wrap">
            <div class="impact-bar">
                <div class="section-head" style="margin-bottom:0;">
                    <span class="eyebrow">Who we serve</span>
                    <h2>Every institution sees its own journey reflected</h2>
                </div>
                <a href="{{ url('/speak-with-us') }}" class="btn">Speak With Us</a>
            </div>

            <div class="impact-grid">
                <a href="{{ url('/industries/islamic-banks') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-building-columns"></i></div>
                    <div class="cap">
                        <span class="tag">ISLAMIC BANKS</span>
                        <h4>Retail &amp; wholesale Islamic banking</h4>
                        <p>Product structuring, governance frameworks, and Sharia audit for banks scaling compliant
                            offerings.</p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
                <a href="{{ url('/industries/takaful') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-hand-holding-heart"></i></div>
                    <div class="cap">
                        <span class="tag">TAKAFUL OPERATORS</span>
                        <h4>Mutual &amp; cooperative insurance</h4>
                        <p>Sharia-compliant product design and surplus-distribution governance built for takaful operators.
                        </p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
                <a href="{{ url('/industries/sukuk-issuers') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-chart-line"></i></div>
                    <div class="cap">
                        <span class="tag">SUKUK &amp; CAPITAL MARKETS</span>
                        <h4>Sukuk issuers &amp; structuring desks</h4>
                        <p>End-to-end Sukuk advisory using ADGM SPVs and DIFC-prescribed structures for cross-border
                            issuance.</p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
                <a href="{{ url('/industries/regulators') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-scale-balanced"></i></div>
                    <div class="cap">
                        <span class="tag">REGULATORS &amp; CENTRAL BANKS</span>
                        <h4>Policy &amp; regulatory advisory</h4>
                        <p>Independent Sharia governance frameworks supporting national and cross-border regulatory bodies.
                        </p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
                <a href="{{ url('/industries/fintech') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-microchip"></i></div>
                    <div class="cap">
                        <span class="tag">FINTECH &amp; DIGITAL BANKS</span>
                        <h4>Sharia-native digital finance</h4>
                        <p>Digital transformation and compliant product architecture for the next generation of Islamic
                            fintech.</p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
                <a href="{{ url('/industries/family-offices') }}" class="impact-card"
                    style="background-image:url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-bg"></div>
                    <div class="icon-chip"><i class="fa-solid fa-user-tie"></i></div>
                    <div class="cap">
                        <span class="tag">FAMILY OFFICES &amp; HNWIs</span>
                        <h4>Wealth &amp; foundation structuring</h4>
                        <p>Sharia-compliant family foundations and tailored wealth management for high-net-worth clients.
                        </p>
                        <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none">
                                <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4" />
                            </svg></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== WHAT WE DO / TABS ===== -->
    <section class="section-pad whatwedo" id="whatwedo">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">What we do</span>
                <h2>Every proficiency, built as a buyer journey</h2>
            </div>

            <div class="tabs" id="tabs">
                <button class="tab-btn active" data-tab="0">Sharia Governance</button>
                <button class="tab-btn" data-tab="1">Product &amp; Structuring</button>
                <button class="tab-btn" data-tab="2">Digital Transformation</button>
                <button class="tab-btn" data-tab="3">Capacity Building</button>
            </div>

            <div class="tab-panel active" data-panel="0">
                <div class="wwd-grid">
                    <a href="{{ url('/proficiencies/sharia-governance') }}" class="wwd-main"
                        style="background-image:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Sharia Governance &amp; Audit</span>
                    </a>
                    <a href="{{ url('/technology') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>IQMS™ Compliance Engine</span>
                    </a>
                    <a href="{{ url('/our-firm') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Scholar Advisory Network</span>
                    </a>
                    <a href="{{ url('/technology#ilms') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>ILMS™ Learning Platform</span>
                    </a>
                    <a href="{{ url('/proficiencies/sharia-audit') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Sharia Audit Framework</span>
                    </a>
                </div>
            </div>

            <div class="tab-panel" data-panel="1">
                <div class="wwd-grid">
                    <a href="{{ url('/proficiencies/product-structuring') }}" class="wwd-main"
                        style="background-image:url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Product &amp; Process Development</span>
                    </a>
                    <a href="{{ url('/proficiencies/sukuk-structuring') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Sukuk Structuring</span>
                    </a>
                    <a href="{{ url('/proficiencies/transaction-structuring') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Transaction Structuring</span>
                    </a>
                    <a href="{{ url('/proficiencies/family-foundations') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Family Foundation Structuring</span>
                    </a>
                    <a href="{{ url('/proficiencies/sharia-fund-advisory') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Sharia Fund Advisory</span>
                    </a>
                </div>
            </div>

            <div class="tab-panel" data-panel="2">
                <div class="wwd-grid">
                    <a href="{{ url('/proficiencies/digital-transformation') }}" class="wwd-main"
                        style="background-image:url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Digital Transformation</span>
                    </a>
                    <a href="{{ url('/technology') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>AI-Enabled Compliance</span>
                    </a>
                    <a href="{{ url('/client-portal') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Client Portal Modernization</span>
                    </a>
                    <a href="{{ url('/proficiencies/data-reporting') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Data &amp; Reporting Systems</span>
                    </a>
                    <a href="{{ url('/proficiencies/legacy-integration') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Legacy System Integration</span>
                    </a>
                </div>
            </div>

            <div class="tab-panel" data-panel="3">
                <div class="wwd-grid">
                    <a href="{{ url('/proficiencies/capacity-building') }}" class="wwd-main"
                        style="background-image:url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Capacity Building</span>
                    </a>
                    <a href="{{ url('/technology#ilms') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>ILMS™ Training Modules</span>
                    </a>
                    <a href="{{ url('/proficiencies/executive-workshops') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Board &amp; Executive Workshops</span>
                    </a>
                    <a href="{{ url('/proficiencies/regulatory-readiness') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Regulatory Readiness Programs</span>
                    </a>
                    <a href="{{ url('/proficiencies/certification') }}" class="wwd-tile"
                        style="background-image:url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div><span>Certification Pathways</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TECH SHOWCASE ===== -->
    <section class="tech-showcase" id="tech">
        <svg class="lattice-bg">
            <rect width="100%" height="100%" fill="url(#latticePattern)" />
        </svg>
        <div class="wrap">
            <div class="tech-grid">
                <div>
                    <span class="eyebrow on-dark">The AI differentiator</span>
                    <h2>IQMS™ and ILMS™ — technology every boutique advisory claims, few can show</h2>
                    <p>Almost every Sharia advisory says it understands technology. Ebdaa IFC is one of the few that can put
                        a live, proprietary AI advisory engine and a structured learning platform in front of a client — not
                        a slide, a working system.</p>

                    <div class="tech-timeline">
                        <div class="tech-node">
                            <div class="node-col">
                                <div class="node-dot"></div>
                                <div class="node-line"></div>
                            </div>
                            <div>
                                <h4>IQMS™ — Intelligent Query Management System</h4>
                                <p>Real-time, AI-assisted Sharia compliance queries, routed and answered against your
                                    governance framework.</p>
                            </div>
                        </div>
                        <div class="tech-node">
                            <div class="node-col">
                                <div class="node-dot"></div>
                                <div class="node-line"></div>
                            </div>
                            <div>
                                <h4>ILMS™ — Islamic Learning Management System</h4>
                                <p>A structured platform for scholar and staff capacity building, certification, and ongoing
                                    training.</p>
                            </div>
                        </div>
                        <div class="tech-node">
                            <div class="node-col">
                                <div class="node-dot"></div>
                            </div>
                            <div>
                                <h4>Built to be AI-legible</h4>
                                <p>Clean, structured content so AI research tools accurately surface Ebdaa IFC in vendor
                                    shortlists.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top:32px; display:flex; gap:16px; flex-wrap:wrap;">
                        <a href="{{ url('/technology') }}" class="btn ghost-light">Request an IQMS Demo</a>
                    </div>
                </div>

                <div class="tech-visual"
                    style="background-image:url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80');">
                    <div class="shade-overlay">
                        <div class="play-ring"><a href="{{ url('/technology') }}"
                                aria-label="Explore Interactive AI Tools"><i class="fa-solid fa-play"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="section-pad" id="insights">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Latest insights</span>
                <h2>Thought leadership that earns the second meeting</h2>
            </div>
            <div class="insights-grid">
                <a href="{{ url('/insights/ai-in-sharia-governance') }}" class="insight-card">
                    <div class="thumb"
                        style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade-thumb"></div>
                    </div>
                    <div class="meta">AI &amp; SHARIA COMPLIANCE</div>
                    <h4>How AI is reshaping real-time Sharia governance</h4>
                    <span class="read">Read article <i class="fa-solid fa-arrow-right" style="font-size:11px;"></i></span>
                </a>
                <a href="{{ url('/insights/green-sukuk-tokenization') }}" class="insight-card">
                    <div class="thumb"
                        style="background-image:url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade-thumb"></div>
                    </div>
                    <div class="meta">SUKUK &amp; TOKENIZATION</div>
                    <h4>Green Sukuk and the tokenization of Islamic capital markets</h4>
                    <span class="read">Read article <i class="fa-solid fa-arrow-right" style="font-size:11px;"></i></span>
                </a>
                <a href="{{ url('/insights/digital-banking-sharia-framework') }}" class="insight-card">
                    <div class="thumb"
                        style="background-image:url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade-thumb"></div>
                    </div>
                    <div class="meta">GOVERNANCE</div>
                    <h4>Sharia governance frameworks for digital-native banks</h4>
                    <span class="read">Read article <i class="fa-solid fa-arrow-right" style="font-size:11px;"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== STRATEGIC ALLIANCES ===== -->
    <section class="alliances" style="background:var(--pale);">
        <div class="wrap">
            <div class="alliances-head">
                <h3>STRATEGIC ALLIANCES &amp; REGULATORY STANDARDS</h3>
            </div>
            <div class="wordmarks">
                <span>Ocorian</span><span>IICRA</span><span>AAOIFI</span><span>ADGM</span><span>DIFC</span><span>IFSB</span>
            </div>
            <div class="chip-row">
                <span class="chip">Sharia governance</span>
                <span class="chip">Sukuk &amp; capital markets</span>
                <span class="chip">Family foundations</span>
                <span class="chip">Regulatory advisory</span>
                <span class="chip">Digital transformation</span>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="cta-banner" id="cta">
        <svg class="pattern">
            <rect width="100%" height="100%" fill="url(#latticePattern)" />
        </svg>
        <div class="wrap">
            <span class="eyebrow on-dark">We are</span>
            <h2>A boutique Sharia advisory built for institutional mandates — scholars, technologists, and strategists
                across London and Toronto</h2>
            <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Speak With Us / Submit RFP</a>
        </div>
    </section>

    <!-- ===== LOCATIONS ===== -->
    <section class="section-pad" id="locations">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Locations</span>
                <h2>Headquartered in London, present in Toronto</h2>
            </div>
            <div class="loc-grid">
                <div class="loc-card">
                    <div class="loc-photo"
                        style="background-image:url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div>
                        <div class="pin"><i class="fa-solid fa-location-dot"></i> London</div>
                    </div>
                    <div class="loc-info">
                        <h4>London — Headquarters</h4>
                        <div class="row"><i class="fa-solid fa-globe"></i><b>Region</b> United Kingdom (NEXTECK Limited)
                        </div>
                        <div class="row"><i class="fa-solid fa-calendar"></i><b>Founded</b> 2024</div>
                        <div class="row"><i class="fa-solid fa-phone"></i><b>Phone</b> +44 37 7573 136</div>
                    </div>
                </div>
                <div class="loc-card">
                    <div class="loc-photo"
                        style="background-image:url('https://images.unsplash.com/photo-1507992744068-d421da646840?auto=format&fit=crop&w=800&q=80');">
                        <div class="shade"></div>
                        <div class="pin"><i class="fa-solid fa-location-dot"></i> Toronto</div>
                    </div>
                    <div class="loc-info">
                        <h4>Toronto Office</h4>
                        <div class="row"><i class="fa-solid fa-map-pin"></i><b>Address</b> 3080 Yonge Street, Suite 6060,
                            Toronto, ON M4N 3N1</div>
                        <div class="row"><i class="fa-solid fa-phone"></i><b>Phone</b> +1 437 601 2101</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Hero Slider Logic
        const slides = document.querySelectorAll('.slide');
        const dotsWrap = document.getElementById('heroDots');
        let current = 0, timer, playing = true;
        const DURATION = 6000;

        slides.forEach((_, i) => {
            const d = document.createElement('div');
            d.className = 'hero-dot' + (i === 0 ? ' active' : '');
            d.innerHTML = '<i></i>';
            d.addEventListener('click', () => goTo(i));
            dotsWrap.appendChild(d);
        });
        const dots = dotsWrap.querySelectorAll('.hero-dot');

        function goTo(i) {
            slides[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = i;
            slides[current].classList.add('active');
            dots[current].classList.add('active');
            restart();
        }
        function next() { goTo((current + 1) % slides.length); }
        function restart() {
            clearInterval(timer);
            if (playing) timer = setInterval(next, DURATION);
            dots.forEach(d => d.classList.remove('active'));
            dots[current].classList.add('active');
        }
        restart();

        const playPause = document.getElementById('playPause');
        const pauseIcon = document.getElementById('pauseIcon');
        playPause.addEventListener('click', () => {
            playing = !playing;
            if (playing) {
                restart();
                pauseIcon.innerHTML = '<rect x="1" y="1" width="3" height="10"/><rect x="8" y="1" width="3" height="10"/>';
            } else {
                clearInterval(timer);
                pauseIcon.innerHTML = '<path d="M2 1l9 5-9 5V1z"/>';
            }
        });

        // Tabs logic
        const tabBtns = document.querySelectorAll('.tab-btn');
        const panels = document.querySelectorAll('.tab-panel');
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                tabBtns.forEach(b => b.classList.remove('active'));
                panels.forEach(p => p.classList.remove('active'));
                btn.classList.add('active');
                document.querySelector('.tab-panel[data-panel="' + btn.dataset.tab + '"]').classList.add('active');
            });
        });
    </script>
@endpush