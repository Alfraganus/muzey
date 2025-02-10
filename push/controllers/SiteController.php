<?php

namespace app\controllers;

use app\models\Brokers;
use app\models\Content;
use app\models\ContentInfo;
use app\modules\admin\service\ContentService;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    private $language;
    public function __construct($id, $module, $config = [])
    {
        $this->language = Yii::$app->language;
        parent::__construct($id, $module, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }



    public function actionIndex()
    {
        $language =  $this->language;
        $slides =  ContentService::getContentType(ContentService::CONTENT_TYPE_BLOG,true,$language);
        $aboutMuseum =  ContentService::getContentType(ContentService::CONTENT_TYPE_ABOUTMUSEUM,false,$language);
        $aboutMuseumFacts =  ContentService::getContentType(ContentService::CONTENT_TYPE_FACTS,true,$language,'ASC');
        $events  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EVENTS,true,$language,3);
        $exponats  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EKSPONAT,true,$language,9);
        $bannerFacts  =  ContentService::getContentType(ContentService::CONTENT_TYPE_BANNER_FACTS,true,$language,9);
        $workTimes  =  ContentService::getContentType(ContentService::CONTENT_TYPE_WORK_TIME,true,$language,7,'asc');
        $adresses  =  ContentService::getContentType(ContentService::CONTENT_TYPE_ADRESSES,true,$language,7,'asc');
        return $this->render('index',[
            'slides'=>$slides,
            'aboutMuseumFacts'=>$aboutMuseumFacts,
            'aboutMuseum'=>$aboutMuseum,
            'events'=>$events,
            'exponats'=>$exponats,
            'bannerFacts'=>$bannerFacts,
            'workTimes'=>$workTimes,
            'adresses'=>$adresses,
        ]);
    }


    public function actionSinglePage($id)
    {
        $model =  ContentInfo::find()->where(['content_id'=>$id])->one();

        return $this->render('single_page', [
            'model' => $model,
        ]);
    }

    public function actionAboutMuseum()
    {
        $aboutMuseum =  ContentService::getContentType(ContentService::CONTENT_TYPE_ABOUTMUSEUM,false,$this->language);
        return $this->render('single_page', [
            'model' => $aboutMuseum?->contentInfos[0],
        ]);

    }

    public function actionChangeLanguage($lang)
    {
        Yii::$app->language = $lang;
        Yii::$app->session->set('language', $lang);

        return $this->redirect(Yii::$app->request->referrer);
    }
    public function actionEksponatlar()
    {
        $exponats  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EKSPONAT,true,$this->language );

        return $this->render('exponats', [
            'exponats' => $exponats,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {

        return $this->render('about');
    }
}
