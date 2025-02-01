<?php

namespace app\modules\admin\service;


use app\models\Content;
use app\models\ContentInfo;

class  ContentService
{
    const CONTENT_TYPE_BLOG = 'slider';
    const CONTENT_TYPE_NEWS = 'yangiliklar';
    const CONTENT_TYPE_CONTACT = 'kontakt';
    const CONTENT_TYPE_ABOUTMUSEUM = 'muzey haqida';
    const CONTENT_TYPE_EVENTS = 'tadbirlar';
    const CONTENT_TYPE_EKSPONAT = 'eksponatlar';
    const CONTENT_TYPE_FLIAL = 'fliallar';


    public static function contentTypes(): array
    {
        return [
            self::CONTENT_TYPE_BLOG,
            self::CONTENT_TYPE_NEWS,
            self::CONTENT_TYPE_CONTACT,
            self::CONTENT_TYPE_ABOUTMUSEUM,
            self::CONTENT_TYPE_EVENTS,
            self::CONTENT_TYPE_EKSPONAT,
            self::CONTENT_TYPE_FLIAL,
        ];
    }

    public static function getContentType($type, $is_plural, $language = null, $limit = null)
    {
        $query = Content::find()
            ->joinWith('contentInfos')
            ->where(['content.type' => $type])
            ->orderBy('id desc');

        if ($language) {
            $query->andWhere(['content_info.language' => $language]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $is_plural ? $query->all() : $query->one();
    }

    public static function getContentInfoByContentId($content_id, $language, $id = null)
    {
        $query = ContentInfo::find()
            ->where(['content_id' => $content_id])
            ->andWhere(['language' => $language]);

        if ($id !== null) {
            $query->andWhere(['id' => $id]);
        }

        return $query->one();
    }



    private static $translations = [
        'hello' => [
            'en' => 'Hello',
            'uz' => 'Salom',
            'ru' => 'Привет',
        ],
        'goodbye' => [
            'en' => 'Goodbye',
            'uz' => 'Xayr',
            'ru' => 'До свидания',
        ],
    ];

    public static function getTranslation($word, $language)
    {
        return self::$translations[$word][$language] ?? null;
    }

}
