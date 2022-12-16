<?php

include_once ROOT . '/models/News.php'; // Подключение модели

class NewsController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList(); // Получает данные из модели

        require_once(ROOT . '/views/news/index.php'); // Передает их во view

        return true;
    }
    public function actionView($id)
    {
        if($id)
        {
            $newsItem = News::getNewsItemById($id);
            print_r($newsItem);
        }
    }
}