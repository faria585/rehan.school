<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos - Rehan School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin-left: 20px;
            position: relative;
        }
        
        .nav-menu a {
            color: #333;
            font-weight: 500;
            padding: 10px 0;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #00a8e8;
        }
        
        .mobile-menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Page Banner */
        .page-banner {
            height: 40vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?video,education') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            margin-top: 80px;
        }
        
        .page-banner h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .page-banner p {
            font-size: 1.2rem;
            max-width: 700px;
        }
        
        /* Videos Section */
        .videos-section {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #00a8e8;
        }
        
        .section-title p {
            color: #666;
            font-size: 1.2rem;
        }
        
        .video-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .category-btn {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .category-btn:hover, .category-btn.active {
            background-color: #00a8e8;
            color: #fff;
        }
        
        .videos-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        
        .video-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
        }
        
        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .video-thumbnail {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .video-card:hover .video-thumbnail img {
            transform: scale(1.1);
        }
        
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 168, 232, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
        }
        
        .play-btn:hover {
            background-color: #00a8e8;
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        .video-info {
            padding: 20px;
        }
        
        .video-info h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #333;
        }
        
        .video-info p {
            color: #666;
            margin-bottom: 15px;
        }
        
        .video-meta {
            display: flex;
            justify-content: space-between;
            color: #999;
            font-size: 0.9rem;
        }
        
        /* Watch Now Button */
        .watch-now-btn {
            display: inline-block;
            background-color: #00a8e8;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            margin-top: 10px;
            transition: all 0.3s;
        }
        
        .watch-now-btn:hover {
            background-color: #0077b6;
            transform: translateY(-3px);
        }
        
        /* Video Modal */
        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            width: 80%;
            max-width: 900px;
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
        }
        
        .video-iframe {
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            position: relative;
        }
        
        .video-iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        /* Video Player */
        .video-player-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 3000;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .video-player {
            width: 90%;
            max-width: 1000px;
            position: relative;
        }
        
        .video-player-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .video-player-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .close-player {
            font-size: 24px;
            cursor: pointer;
            color: #fff;
            transition: color 0.3s;
        }
        
        .close-player:hover {
            color: #00a8e8;
        }
        
        .video-player-content {
            width: 100%;
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            background-color: #000;
        }
        
        .video-player-content iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .video-player-footer {
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        
        .video-player-description {
            margin-bottom: 10px;
        }
        
        .video-player-meta {
            display: flex;
            justify-content: space-between;
            color: #bbb;
            font-size: 0.9rem;
        }
        
        /* Video Overlay */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            bac
