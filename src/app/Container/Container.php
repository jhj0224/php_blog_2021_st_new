<?php
namespace App\Container;

use App\Application;
use App\Repository\ArticleRepository;
use App\Repository\MemberRepository;
use App\Repository\HomeRepository;
use App\Service\ArticleService;
use App\Service\MemberService;
use App\Service\HomeService;


trait Container {
    public static function application(): Application {
        static $instance;

        if ( $instance == null ) {
            $instance = new Application();
        }

        return $instance;
    }

    public static function articleService(): ArticleService {
        static $instance;

        if ( $instance == null ) {
            $instance = new ArticleService();
        }

        return $instance;
    }

    public static function articleRepository(): ArticleRepository {
        static $instance;

        if ( $instance == null ) {
            $instance = new ArticleRepository();
        }

        return $instance;
    }

    public static function memberService(): MemberService {
        static $instance;

        if ( $instance == null ) {
            $instance = new MemberService();
        }

        return $instance;
    }

    public static function memberRepository(): MemberRepository {
        static $instance;

        if ( $instance == null ) {
            $instance = new MemberRepository();
        }

        return $instance;
    }
    public static function homeService(): HomeService {
        static $instance;

        if ( $instance == null ) {
            $instance = new HomeService();
        }

        return $instance;
    }
    public static function homeRepository(): HomeRepository {
        static $instance;

        if ( $instance == null ) {
            $instance = new HomeRepository();
        }

        return $instance;
    }
}