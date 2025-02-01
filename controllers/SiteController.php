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
        $slides =  ContentService::getContentType(ContentService::CONTENT_TYPE_BLOG,true,'uz');
        $aboutMuseum =  ContentService::getContentType(ContentService::CONTENT_TYPE_ABOUTMUSEUM,false,'uz');
        $aboutMuseumFacts =  ContentService::getContentType(ContentService::CONTENT_TYPE_FACTS,true,'uz','ASC');
        $events  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EVENTS,true,'uz',3);
        $exponats  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EKSPONAT,true,'uz',9);
        $bannerFacts  =  ContentService::getContentType(ContentService::CONTENT_TYPE_BANNER_FACTS,true,'uz',9);
        $workTimes  =  ContentService::getContentType(ContentService::CONTENT_TYPE_WORK_TIME,true,'uz',7,'asc');
        $adresses  =  ContentService::getContentType(ContentService::CONTENT_TYPE_ADRESSES,true,'uz',7,'asc');
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
        $aboutMuseum =  ContentService::getContentType(ContentService::CONTENT_TYPE_ABOUTMUSEUM,false,'uz');
        return $this->render('single_page', [
            'model' => $aboutMuseum->contentInfos[0],
        ]);

    }

    public function actionEksponatlar()
    {
        $exponats  =  ContentService::getContentType(ContentService::CONTENT_TYPE_EKSPONAT,true,'uz');

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
